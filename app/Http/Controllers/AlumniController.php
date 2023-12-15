<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function index()
    {
        return view('page1'); 
    }
    
    public function profil()
    {
        return view('alumni.profil');
    }

    function login_alumni()
    {
        return view('login_alumni');
    }

    function auth_alumni(Request $request)
    {
        $credentials = $request->validate([
            'nisn' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::guard('alumni')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('page');
        }

        return back()->withErrors(['nisn' => 'Invalid credentials']);
    }

    function logout_alumni()
    {
        Auth::guard('alumni')->logout();
        return redirect()->route('page');
    }


    function show(){
        $data['alumni'] = Alumni::all();
        return view('alumni.index',$data);
    }
    
    public function detail($id){
        $alumni = Alumni::find($id);
        if (!$alumni) {
            abort(404);
        }
        return view('alumni.detail', compact('alumni'));
    }

    function add(){
        $data = [
            'action'=> url('alumni/create'),
            'tombol'=> 'SIMPAN',
            'alumni'=>(object)[
                'nisn' => '',
                'nama' =>'',
                'ttl' =>'',
                'jk' =>'',
                'thn_angkatan' =>'',
                'ktp' =>'',
                'ijazah' =>'',
                'transkip_n'=>'',
                'skck' =>'',
                'kartu_kuning' =>'',
                'sks' =>'',
                'alamat' =>'',
                'kontak' =>'',
                'foto' =>'',
                'password' =>'',
            ]
            ];
        return view('alumni.form',$data);
    }
    function create(Request $request){ 
        $data =  [
                'nisn' => $request->nisn,
                'nama' => $request->nama,
                'ttl' => $request->ttl,
                'jk' => $request->jk,
                'thn_angkatan' => $request->thn_angkatan,
                'alamat' => $request->alamat,
                'kontak' => $request->kontak,
                'password' => bcrypt($request->password),
        ];
        if ($request->hasFile('ktp')) {
            $data['ktp'] = $request->file('ktp')->store('ktp');
        } 
        if ($request->hasFile('ijazah')) {
            $data['ijazah'] = $request->file('ijazah')->store('ijazah');
        } 
        if ($request->hasFile('transkip_n')) {
            $data['transkip_n'] = $request->file('transkip_n')->store('transkip_n');
        } 
        if ($request->hasFile('skck')) {
            $data['skck'] = $request->file('skck')->store('skck');
        } 
        if ($request->hasFile('kartu_kuning')) {
            $data['kartu_kuning'] = $request->file('kartu_kuning')->store('kartu_kuning');
        } 
        if ($request->hasFile('sks')) {
            $data['sks'] = $request->file('sks')->store('sks');
        } 
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto');
        } 
        Alumni::create($data);
        return redirect()->route('alumni.show');
    }

    public function edit() {
        $alumni = Auth::guard('alumni')->user();

        return view('alumni.edit_profil', compact('alumni'));
    }
    public function update(Request $request)
    {
        $alumni = Auth::guard('alumni')->user();

        if ($request->hasFile('foto')) {

            if ($alumni->foto) {
                Storage::delete($alumni->foto);
            }
            $alumni->foto = $request->file('foto')->store('foto');
        }
        if ($request->hasFile('ktp')) {

            if ($alumni->ktp) {
                Storage::delete($alumni->ktp);
            }
            $alumni->ktp = $request->file('ktp')->store('ktp');
        }
        if ($request->hasFile('ijazah')) {

            if ($alumni->ijazah) {
                Storage::delete($alumni->ijazah);
            }
            $alumni->ijazah = $request->file('ijazah')->store('ijazah');
        }
        if ($request->hasFile('transkip_n')) {

            if ($alumni->transkip_n) {
                Storage::delete($alumni->transkip_n);
            }
            $alumni->transkip_n = $request->file('transkip_n')->store('transkip_n');
        }
        if ($request->hasFile('skck')) {

            if ($alumni->skck) {
                Storage::delete($alumni->skck);
            }
            $alumni->skck = $request->file('skck')->store('skck');
        }
        if ($request->hasFile('sks')) {

            if ($alumni->sks) {
                Storage::delete($alumni->sks);
            }
            $alumni->sks = $request->file('sks')->store('sks');
        }
        if ($request->hasFile('kartu_kuning')) {

            if ($alumni->kartu_kuning) {
                Storage::delete($alumni->kartu_kuning);
            }
            $alumni->kartu_kuning = $request->file('kartu_kuning')->store('kartu_kuning');
        }

        $alumni->save();
        return redirect()->route('alumni.profil')->with('success', 'Profil berhasil diperbarui.');
    }
    function hapus($id){
        Alumni::where('nisn', $id)->delete();
        return redirect()->route('alumni.show');
    }
    
}
