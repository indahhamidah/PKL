<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Pengguna;
use App\User;
use App\Departemen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	$id_departemen = $request->user()->id_departemen;
        $user=DB::table('users')
                ->join('departemen','id_dept','id_departemen')
        		->where('id_departemen',$id_departemen)
                ->get();
        
        return view('auth/user', compact('user'));
    }

    public function create()
    {
        return view('auth/user');
    }

    
    public function store(Request $request)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'username' => 'required|unique:users',
        //     'email' => 'required|unique:users',
        //     'password' => 'required',
        //     'role' => 'required',
        //     'id_departemen' => 'required',
        // ]);

        $Auth=Auth::user();
        $user=new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->id_departemen= $Auth->id_departemen;

        $user->save();
        // // dd($user);
        return redirect()->route('pengguna.index')
                        ->with('success','Pengguna created successfully');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('pengguna.index')
                        ->with('success','Pengguna deleted successfully');
    }

    // public function show($id)
    // {
    //     $user = User::find($id);
    //     return view('auth/user',compact('user'));
    // }

    public function edit($id)
    {
        return view('auth/user');
    }
    
    public function update(Request $request, $member)
    {
        $user = User::find($member);
        request()->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
            'id_departemen' => 'required',
        ]);
        $Auth=Auth::user();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->id_departemen= $Auth->id_departemen;
        $user->save();

        
        // $user->update($request->all());
        return redirect()->route('pengguna.index')
                        ->with('success','Pengguna updated successfully');
    }
}