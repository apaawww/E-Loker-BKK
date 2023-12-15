<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lamaran;

class LamaranController extends Controller
{

    function show(){
        $data['lamaran'] = Lamaran::all();
        return view('lamaran.index',$data);
    }
    
    // public function detail($id){
    //     $alumni = Alumni::find($id);
    //     if (!$alumni) {
    //         abort(404);
    //     }
    //     return view('alumni.detail', compact('alumni'));
    // }

    function add(){
        $data = [
            'action'=> url('perusahaan/create'),
            'tombol'=> 'SIMPAN',
            'perusahaan'=>(object)[
                'id_admin' => '',
                'n_perusahaan' => '',
                'kontak' =>'',
                'alamat' =>'',
                'deskripsi' =>'',
                'status' =>'',
                'foto' =>'',
            ]
            ];
        return view('perusahaan.form',$data);
    }
    function create(Request $request){ 
        $data ['perusahaan'] = Perusahaan::create([
            'id_admin' =>Auth::guard('admin')->user()->id_admin,
            'n_perusahaan' => $request->n_perusahaan,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ]);
            // if (isset($request->nisn)) {
            //     $validate['nisn'] = $request->nisn;
            // }
            
            $validate['foto'] = $request->hasFile('foto') ? $request->file('foto')->store('foto') : null;


            Perusahaan::create($validate);

        return redirect()->route('perusahaan.show');
    }

    function edit($id){
        $data['perusahaan'] = Perusahaan::find($id);
        $data['action'] = route('perusahaan.update', $data['perusahaan']->id_perusahaan);
        $data['tombol'] = "UPDATE";
    
        return view('perusahaan/form', $data);
    }
    
    function update(Request $request, Perusahaan $perusahaan){
        $data = [
            'id_admin' => $request->id_admin,
            'n_perusahaan' => $request->n_perusahaan,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ];
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto');
        } 
        $perusahaan->update($data);
        return redirect()->route('perusahaan.show');
    }

    function hapus($id){
        Perusahaan::where('id_admin', $id)->delete();
        return redirect()->route('perusahaan.show');
    }
    
}



