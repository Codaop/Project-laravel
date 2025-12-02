<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendance = Attendance::latest()->paginate(5);

        return view('attendances.index', compact('attendance'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawanId = Auth::user()->employee->id;
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'status_absensi' => 'required|in:hadir,izin,sakit,alpha',
            'keterangan_izin' => 'required|string|max:500',
        ]);

        $finalWaktuMasuk = null;
        $finalWaktuKeluar = null;

        $dataToStored = array_merge($validated, [
            'karyawan_id' => $karyawanId,
            'waktu_masuk' => $finalWaktuMasuk,
            'waktu_keluar' => $finalWaktuKeluar,
        ]);

        Attendance::create($dataToStored);

        return redirect()->route('attendances.index')->with('success', 'Pengajuan izin berhasil disimpan.');
    }

    public function absenOnce()
    {
        $user = Auth::user();
        $today = Carbon::today()->toDateString();
        $karyawanId = $user->employee->id;

        $attendance = Attendance::where('karyawan_id', $karyawanId)->whereDate('tanggal', $today)->first();

        if (! $attendance) {
            Attendance::create([
                'karyawan_id' => $karyawanId,
                'tanggal' => $today,
                'waktu_masuk' => Carbon::now()->toTimeString(),
                'waktu_keluar' => null,
                'status_absensi' => 'hadir',
            ]);

            $message = 'Anda berhasil absen masuk untuk hari ini.';

        } elseif ($attendance->waktu_keluar == null) {
            if (Carbon::parse($attendance->waktu_masuk)->greaterThan(Carbon::now())) {
                return back()->with('error', 'Waktu keluar tidak valid (kurang dari waktu masuk).');
            }

            $attendance->update([
                'waktu_keluar' => Carbon::now()->toTimeString(),
            ]);

            $message = 'Anda berhasil absen keluar. Anda dapat melakukan absen lagi esok hari.';
        } else {
            $message = 'Anda sudah menyelesaikan absen masuk dan keluar hari ini.';
        }

        return redirect()->route('attendances.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $attendance = Attendance::find($id);
        $nama_emp = Employee::where('id', $attendance->karyawan_id)->value('nama_lengkap');

        return view('attendances.show', compact('attendance', 'nama_emp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $attendance = Attendance::find($id);

        return view('attendances.edit', compact('attendance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'tanggal' => 'required|date',
            'waktu_masuk' => 'required|date_format:H:i',
            'waktu_keluar' => 'required|date_format:H:i',
            'status_absensi' => 'required|in:hadir,izin,sakit,alpha',
        ]);
        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->only([
            'karyawan_id',
            'tanggal',
            'waktu_masuk',
            'waktu_keluar',
            'status_absensi',
        ]));

        return redirect()->route('attendances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attendance = Attendance::find($id);
        $attendance->delete();

        return redirect()->route('attendances.index');
    }
}
