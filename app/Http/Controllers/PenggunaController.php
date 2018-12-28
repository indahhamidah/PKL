<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Pengguna;
use App\User;
use App\Departemen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Rule;

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
                ->orderBy('name','asc')
                ->get();
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('auth/user', compact('user', 'dept'));
    }

    public function validator(array $request)
    {
        return Validator::make($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'id_departemen' => 'required|integer|max:11',
        ]);
    }

    public function create()
    {
        return view('auth/user');
    }

    
    public function store(Request $request)
    {
        $Auth=Auth::user();
        $user=new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->id_departemen= $Auth->id_departemen;
       

        $user->save();
        //dd($user);
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
    // public function show($id)
    // {
    //     // $user = User::findOrFail($id);
    //     // dd($user->role);

    //     // return view('auth/user', ['user' => $user]);
    // }
    public function edit($id)
    {
        return view('auth/user');
    }
    
    public function update(Request $request, $member)
    {
        $user = User::find($member);
        $Auth=Auth::user();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->id_departemen= $Auth->id_departemen;
        $user->save();
        // dd($user);
        // $user->update($request->all());
        return redirect()->route('pengguna.index')
                        ->with('success','Pengguna updated successfully');
    }
}