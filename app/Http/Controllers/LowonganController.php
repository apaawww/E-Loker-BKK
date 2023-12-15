<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{

    function show(){
        $data['lowongan'] = Lowongan::all();
        return view('lowongan.index',$data);
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
            'action'=> url('lowongan/create'),
            'tombol'=> 'SIMPAN',
            'lowongan'=>(object)[
                'nama_loker' => '',
                'syarat' => '',
                'keahlian' =>'',
                'kualifikasi' =>'',
                'jamker' =>'',
                'gaji' =>'',
                'pendidikan' =>'',
                'tipe_pekerjaan' =>'',
                'tgl_post' =>'',
                'tgl_konfir' =>'',
                'status' =>'',
            ]
            ];
        return view('lowongan.form',$data);
    }
    function create(Request $request){ 
        $data ['lowongan'] = Lowongan::create([
            'id_admin' =>Auth::guard('admin')->user()->id_admin,
            'nisn' =>Auth::guard('alumni')->user()->nisn,
            'nama_loker' => $request->nama_loker,
            'syarat' => $request->syarat,
            'keahlian' => $request->keahlian,
            'jamker' => $request->jamker,
            'gaji' => $request->gaji,
            'pendidikan' => $request->pendidikan,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'tgl_post' => $request->tgl_post,
            'tgl_konfir' => $request->tgl_konfir,
            'status' => $request->status,
        ]);

        return redirect()->route('lowongan.show');
    }

    function edit($id){
        $data['lowongan'] = Lowongan::find($id);
        $data['action'] = route('lowongan.update', $data['lowongan']->id_lowongan);
        $data['tombol'] = "UPDATE";
    
        return view('lowongan/form', $data);
    }
    
    function update(Request $request, Lowongan $lowongan){
        $data ['lowongan'] = Lowongan::create([
            'id_admin' =>Auth::guard('admin')->user()->id_admin,
            'nisn' =>Auth::guard('alumni')->user()->nisn,
            'nama_loker' => $request->nama_loker,
            'syarat' => $request->syarat,
            'keahlian' => $request->keahlian,
            'jamker' => $request->jamker,
            'gaji' => $request->gaji,
            'pendidikan' => $request->pendidikan,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'tgl_post' => $request->tgl_post,
            'tgl_konfir' => $request->tgl_konfir,
            'status' => $request->status,
        ]);

        $lowongan->update($data);
        return redirect()->route('lowongan.show');
    }

    function hapus($id){
        Lowongan::where('id_lowongan', $id)->delete();
        return redirect()->route('lowongan.show');
    }
    




    
}






