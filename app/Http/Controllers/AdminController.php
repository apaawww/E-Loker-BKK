<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    function index()
    {
        return view('dashboard');
    }
    function login_admin()
    {
        return view('login_admin');
    }
    
    function auth_admin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
    
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
    
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    function logout_admin()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_admin');
    }


    function show(){
        $data['admin'] = Admin::all();
        return view('admin/index',$data);
    }
    function add(){
        $data = [
            'action'=> url('admin/create'),
            'tombol'=> 'SIMPAN',
            'admin'=>(object)[
                'nama' =>'',
                'email' =>'',
                'password' =>'',
                'kontak' =>'',
                'foto' =>'',
            ]
            ];
        return view('admin/form',$data);
    }
    function create(Request $request){ 
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'kontak' => $request->kontak,
        ];
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto');
        } 
        Admin::create($data);
        return redirect()->route('admin.show');
    }

    function edit($id){
        $data['admin'] = Admin::findOrFail($id);
        $data['action'] = route('admin.update', $data['admin']->id_admin);
        $data['tombol'] = "Update";
    
        return view('admin/form', $data);
    }
    
    function update(Request $request, Admin $admin){
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'kontak' => $request->kontak,
        ];
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto');
        } 
        $admin->update($data);
        return redirect()->route('admin.show');
    }
    function hapus($id){
        Admin::where('id_admin',$id)->delete();
        return redirect()->route('admin.show');
    }
}
