<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  public function index()
  {
    $page_title = 'List Mahasiswa';

    $result = Mahasiswa::with('fakultas:id,fakultas', 'matkul:id,nama', 'dosen:id,nama')->get();

    return view('mahasiswa.index', compact('page_title', 'result'));
  }
  public function create()
  {
    $page_title = 'Create Mahasiswa';

    $fakultas = Fakultas::pluck('fakultas', 'id');
    $matkul = MataKuliah::pluck('nama', 'id');
    $dosen = Dosen::pluck('nama', 'id');

    return view('mahasiswa.create', compact('page_title', 'fakultas', 'matkul', 'dosen'));
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'nim' => 'required|digits_between:1,11|numeric',
      'nama' => 'required|max:255',
      'telp' => 'nullable|digits_between:1,15|numeric',
      'email' => 'required|email|max:255',
      'jenis_kelamin' => 'required',
      'fakultas' => 'required',
      'matkuls' => 'required',
      'dosen' => 'required',
    ]);

    // Create a new category instance
    $mahasiswa = new Mahasiswa();
    $mahasiswa->nim = $validatedData['nim'];
    $mahasiswa->nama = $validatedData['nama'];
    $mahasiswa->telp = $validatedData['telp'];
    $mahasiswa->email = $validatedData['email'];
    $mahasiswa->jenis_kelamin = $validatedData['jenis_kelamin'];
    $mahasiswa->fakultas_id = $validatedData['fakultas'];
    $mahasiswa->matkul_id = $validatedData['matkuls'];
    $mahasiswa->dosen_id = $validatedData['dosen'];


    // Save the category to the database
    $mahasiswa->save();

    // Redirect with a success message
    return redirect('mahasiswa')->with([
      'success' => 'Item has been created successfully.',
    ]);
  }
  public function edit($id)
  {
    $page_title = 'Edit Mahasiswa';

    $mahasiswa = Mahasiswa::findOrFail($id);

    $fakultas = Fakultas::pluck('fakultas', 'id');
    $selectedFakultas = $mahasiswa->fakultas_id ?? old('fakultas_id', []);

    $dosen = Dosen::pluck('nama', 'id');
    $selectedDosen = $mahasiswa->dosen_id ?? old('dosen_id', []);


    $matkul = MataKuliah::pluck('nama', 'id');
    $selectedMatkul = $mahasiswa->matkul_id ?? old('matkuls_id', []);

    return view('mahasiswa.edit', compact('page_title', 'mahasiswa', 'fakultas', 'selectedFakultas', 'dosen', 'selectedDosen', 'matkul', 'selectedMatkul'));
  }
  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'nim' => 'required|digits_between:1,11|numeric',
      'nama' => 'required|max:255',
      'telp' => 'nullable|digits_between:1,15|numeric',
      'email' => 'required|email|max:255',
      'jenis_kelamin' => 'required',
      'fakultas' => 'required',
      'matkuls' => 'required',
      'dosen' => 'required',
    ]);


    // Create a new category instance
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->nim = $validatedData['nim'];
    $mahasiswa->nama = $validatedData['nama'];
    $mahasiswa->telp = $validatedData['telp'];
    $mahasiswa->email = $validatedData['email'];
    $mahasiswa->jenis_kelamin = $validatedData['jenis_kelamin'];
    $mahasiswa->fakultas_id = $validatedData['fakultas'];
    $mahasiswa->matkul_id = $validatedData['matkuls'];
    $mahasiswa->dosen_id = $validatedData['dosen'];


    // Save the category to the database
    $mahasiswa->save();

    // Redirect with a success message
    return redirect('mahasiswa')->with([
      'success' => 'Item has been created successfully.',
    ]);
  }

  public function show($id)
  {
    $page_title = 'Detail Mahasiswa';

    $mahasiswa = Mahasiswa::with('fakultas:id,fakultas', 'matkul:id,nama', 'dosen:id,nama')->findOrFail($id);

    return view('mahasiswa.show', compact('page_title','mahasiswa'));
  }

  public function destroy($id)
  {
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->delete();

    
    return response()->json(['success' => 'Item deleted successfully.']);
  }
}
