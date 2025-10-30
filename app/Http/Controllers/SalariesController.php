<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Employee;

class SalariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salary = Salary::latest()->paginate(15);
        return view('salaries.index', compact('salary'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salaries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'bulan' => 'required|string|max:10',
            'tunjangan' => 'required|decimal:0,2|gte:0',
            'potongan' => 'required|decimal:0,2|gte:0',
        ]);
        $employee = Employee::with('position')->findOrFail($validatedData['karyawan_id']);
        $gajiPokok = $employee->position->gaji_pokok;
        $totalGaji = $gajiPokok + $validatedData['tunjangan'] - $validatedData['potongan'];
        $akumulasi = array_merge($validatedData, [
            'gaji_pokok' => $gajiPokok,
            'total_gaji' => $totalGaji,
        ]);
        Salary::create($akumulasi);
        return redirect()->route('salaries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salary = Salary::find($id);
        return view('salaries.show', compact('salary'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salary = Salary::find($id);
        return view('salaries.edit', compact('salary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'bulan' => 'required|string|max:10',
            'tunjangan' => 'required|decimal:0,2|gte:0',
            'potongan' => 'required|decimal:0,2|gte:0',
        ]);
        $employee = Employee::with('position')->findOrFail($validatedData['karyawan_id']);
        $gajiPokok = $employee->position->gaji_pokok;
        $totalGaji = $gajiPokok + $validatedData['tunjangan'] - $validatedData['potongan'];
        $akumulasi = array_merge($validatedData, [
            'gaji_pokok' => $gajiPokok,
            'total_gaji' => $totalGaji,
        ]);
        $salary = Salary::findOrFail($id);
        $salary->update($akumulasi);
        return redirect()->route('salaries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salary = Salary::find($id);
        $salary->delete();
        return redirect()->route('salaries.index');
    }
}
