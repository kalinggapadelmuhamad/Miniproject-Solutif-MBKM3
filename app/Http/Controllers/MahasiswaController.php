<?php

namespace App\Http\Controllers;

use index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $this->authorize('admin');
        $data = DB::table('mhs')->orderByRaw('nim')->paginate(10);
        return view('Mahasiswa.index', [
            'data' => $data
        ]);
    }

    public function viewAddMhs()
    {
        // $this->authorize('admin');
        return view('Mahasiswa.create');
    }

    public function addMhs(Request $request)
    {
        // $this->authorize('admin');
        $data = $request->validate([
            'nim' => 'required|unique:mhs',
            'nama' => 'required',
            'password' => 'required',
            'prodi' => 'required',
        ]);

        Mahasiswa::create($data);
        return redirect('/mahasiswa');
    }

    public function viewEditMhs($nim)
    {
        // $this->authorize('admin');
        $data = DB::table('mhs')->where('nim', $nim)->first();
        return view('Mahasiswa.edit', [
            'data' => $data
        ]);
    }

    public function editMhs(Request $request)
    {
        // $this->authorize('admin');
        DB::table('mhs')->where('nim', $request->nim)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi
        ]);

        return redirect('/mahasiswa');
    }

    public function hapusMhs($nim)
    {
        // $this->authorize('admin');
        DB::table('mhs')->where('nim', $nim)->delete();
        return redirect('/mahasiswa');
    }
}
