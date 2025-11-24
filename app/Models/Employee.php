<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_telepon',
        'tanggal_lahir',
        'alamat',
        'tanggal_masuk',
        'departemen_id',
        'jabatan_id',
        'status',
    ];

    public function position()
    {
        //Mencari data yang cocok di tabel positions dengan parameter foreign key jabatan_id
        //Yang dikembalikan adalah sebaris data yang cocok dan dibungkus dalam bentuk model objek
        return $this->belongsTo(Position::class, 'jabatan_id');
    }
    public function department()
    {
        //Mencari data yang cocok di tabel departments dengan parameter foreign key departemen_id
        //Yang dikembalikan adalah sebaris data yang cocok dan dibungkus dalam bentuk model objek
        return $this->belongsTo(Department::class, 'departemen_id');
    }
}