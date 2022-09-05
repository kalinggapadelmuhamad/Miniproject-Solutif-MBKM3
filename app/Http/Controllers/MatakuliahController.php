<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = DB::table('matkul')->orderByRaw('id')->paginate(10);
        return view('matkul.index', [
            'data' => $data
        ]);
    }

    public function viewAddMatkul()
    {
        return view('matkul.create');
    }

    public function addMatkul(Request $request)
    {
        $data = $request->validate([
            'kode_matkul' => 'required|unique:matkul',
            'nama_matkul' => 'required',
            'sks' => 'required',
        ]);

        Matakuliah::create($data);
        return redirect('/matkul');
    }

    public function viewUbahMhs($kode_matkul)
    {
        $data = DB::table('matkul')->where('kode_matkul', $kode_matkul)->first();
        return view('matkul.edit', [
            'data' => $data
        ]);
    }

    public function editMatkul(Request $request)
    {
        DB::table('matkul')->where('kode_matkul', $request->kode_matkul)->update([
            'kode_matkul' => $request->kode_matkul,
            'nama_matkul' => $request->nama_matkul,
            'sks' => $request->sks
        ]);

        return redirect('/matkul');
    }


    public function hapusMatkul($kode_matkul)
    {
        DB::table('matkul')->where('kode_matkul', $kode_matkul)->delete();
        return redirect('/matkul');
    }
}
