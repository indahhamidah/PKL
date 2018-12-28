<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lulusan;
use App\User;
use App\Departemen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	$id_departemen = $request->user()->id_departemen;
        $user=DB::table('users')
        		->where('id_departemen',$id_departemen)
                ->get();
        
        return view('auth/user', compact('user'));
    }
    public function create(Request $request)
    {
        $user=new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->id_departemen= $request->user()->id_departemen;

        $user->save();
        // dd($lulusans->tahun_lulus);
        // return var_dump($lulusans);
        return redirect()->route('pengguna.index')
                        ->with('success','Lulusan created successfully');
    }
}