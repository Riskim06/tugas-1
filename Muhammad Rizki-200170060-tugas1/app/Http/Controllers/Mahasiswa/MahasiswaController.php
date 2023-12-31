<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Models\datamahasiswa;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        $dataMahasiswa = [
            'NIM' => '200170060',
            'Nama' => 'Muhammad Rizki',
            'Jurusan' => 'Teknik Informatika',
            'Program Studi' => 'Teknik Informatika',
            'Mata Kuliah' => 'Pemrograman Lanjut',
        ];

        $mataKuliah = [
            'Mobile Programming',
            'Pemograman Lanjut',
            'forecasting',
            'Teori Bahasa Dan Automata',
            'Riset Teknologi Informasi',
        ];

        return view('mahasiswa.index', compact('dataMahasiswa', 'mataKuliah'));
    }
}
