<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KrsController extends Controller
{
    public function index()
    {
        $data = DB::table('krs')->orderByRaw('id')->paginate(10);
        return view('krs.index', [
            'data' => $data
        ]);
    }

    public function viewAddKrs()
    {
        return view('krs.create');
    }

    public function addKrs(Request $request)
    {
        $data = $request->validate([
            'nim' => 'required',
            'kode_matkul' => 'required',
            'nilai' => 'required',
        ]);

        Krs::create($data);
        return redirect('/krs');
    }

    // public function viewEditMhs($nim)
    // {
    //     $data = DB::table('mhs')->where('nim', $nim)->first();
    //     return view('Mahasiswa.edit', [
    //         'data' => $data
    //     ]);
    // }

    // public function editMhs(Request $request)
    // {
    //     DB::table('mhs')->where('nim', $request->nim)->update([
    //         'nim' => $request->nim,
    //         'nama' => $request->nama,
    //         'prodi' => $request->prodi
    //     ]);

    //     return redirect('/mahasiswa');
    // }

    // public function hapusMhs($nim)
    // {
    //     DB::table('mhs')->where('nim', $nim)->delete();
    //     return redirect('/mahasiswa');
    // }
}
