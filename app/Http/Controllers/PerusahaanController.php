<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    
    public function showPerusahaanAlumni()
    {
        $perusahaanAlumni = Perusahaan::where('id_admin', null)->get();
        return view('perusahaan.perusahaan_alumni', ['perusahaanAlumni' => $perusahaanAlumni]);
    }
    
    public function show()
    {
        $data['perusahaan'] = Perusahaan::where('status', true)->where('id_admin', '!=', null)->get();
        return view('perusahaan.index', $data);
    }
    

    public function add()
    {
        // Cek apakah pengguna adalah admin
        if (Auth::guard('admin')->check()) {
            $data = [
                'action' => url('perusahaan/create'),
                'tombol' => 'SIMPAN',
                'perusahaan' => (object)[
                    'id_admin' => null,
                    'n_perusahaan' => '',
                    'kontak' => '',
                    'alamat' => '',
                    'deskripsi' => '',
                    'status' => '',
                    'foto' => '',
                ],
            ];

            return view('perusahaan.form_admin', $data);

        // Cek apakah pengguna adalah alumni
        } elseif (Auth::guard('alumni')->check()) {
            $data = [
                'action' => url('perusahaan/create/alumni'),
                'tombol' => 'KIRIM UNTUK KONFIRMASI',
                'perusahaan' => (object)[
                    'id_admin' => null,
                    'n_perusahaan' => '',
                    'kontak' => '',
                    'alamat' => '',
                    'deskripsi' => '',
                    'status' => '',
                    'foto' => '',
                ],
            ];

            return view('perusahaan.form_alumni', $data);
        }

        // Jika tidak ada guard yang sesuai, redirect atau abort sesuai kebutuhan
        return abort(403, 'Unauthorized');
    }



    public function create(Request $request)
    {
        $data = [
            'id_admin' => null,
            'n_perusahaan' => $request->n_perusahaan,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'status' => '0',
        ];

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto');
        }
        Perusahaan::create($data);
        return redirect()->route('perusahaan.show_admin');
    }

    public function createByAlumni(Request $request)
    {
        $data = [
            'id_admin' => null,
            'n_perusahaan' => $request->n_perusahaan,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'status' => '0',
        ];

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto');
        }
        Perusahaan::create($data);
        return redirect()->route('perusahaan.show_alumni');
    }

    public function konfirmasiPerusahaan($id)
    {
        $perusahaan = Perusahaan::find($id);
        $perusahaan->update(['status' => 'Posting']);
        return redirect()->route('perusahaan.show');
    }

    public function edit($id)
    {
        $data['perusahaan'] = Perusahaan::find($id);
        $data['action'] = route('perusahaan.update', $data['perusahaan']->id_perusahaan);
        $data['tombol'] = "UPDATE";
        return view('perusahaan.form', $data);
    }

    public function update(Request $request, Perusahaan $perusahaan)
    {
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

    public function hapus($id)
    {
        Perusahaan::find($id)->delete();
        return redirect()->route('perusahaan.show');
    }
}
