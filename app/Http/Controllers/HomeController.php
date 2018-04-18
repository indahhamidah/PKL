<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view('home');
    }

     public function create(){
        return view('home');
    }

    public function download() {
        
        $pathToFile = public_path("jumlahbaru.xlsx");

        $name = 'Templete Unggah Data Akademik.xlsx';

        $headers = ['Content-Type: application/xlsx'];



        return response()->download($pathToFile, $name, $headers);
}

    public function temp() {
        
        $pathToFile = public_path("lulusan.xlsx");

        $name = 'Templete Unggah Data Kelulusan Mahasiswa.xlsx';

        $headers = ['Content-Type: application/xlsx'];



        return response()->download($pathToFile, $name, $headers);
}

 public function temple() {
        
        $pathToFile = public_path("kegiatan.xlsx");

        $name = 'Templete Unggah Data Pembinaan Non-Akademik.xlsx';

        $headers = ['Content-Type: application/xlsx'];



        return response()->download($pathToFile, $name, $headers);
}

public function csv() {
        
        $pathToFile = public_path("jumlah.csv");

        $name = 'Templete Unggah Data Akademik.csv';

        $headers = ['Content-Type: application/csv'];



        return response()->download($pathToFile, $name, $headers);
}
public function csv1() {
        
        $pathToFile = public_path("lulusan.csv");

        $name = 'Templete Unggah Data Kelulusan Mahasiswa.csv';

        $headers = ['Content-Type: application/csv'];



        return response()->download($pathToFile, $name, $headers);
}
public function csv2() {
        
        $pathToFile = public_path("kegiatan.csv");

        $name = 'Templete Unggah Data Pembinaan Non-Akademik.csv';

        $headers = ['Content-Type: application/csv'];



        return response()->download($pathToFile, $name, $headers);
}
}
