<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class DosenController extends Controller
{
  public function index()
  {
    $page_title = 'List Dosen';

    $result = Dosen::with('fakultas:id,fakultas', 'matkul:id,nama')->get();

    return view('dosen.index', compact('page_title', 'result'));
  }
  public function create()
  {
    $page_title = 'Create Dosen';

    $fakultas = Fakultas::pluck('fakultas', 'id');
    $matkul = MataKuliah::pluck('nama', 'id');

    return view('dosen.create', compact('page_title', 'fakultas', 'matkul'));
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'nidn' => 'required|digits_between:1,11|numeric',
      'nama' => 'required|max:255',
      'telp' => 'nullable|digits_between:1,15|numeric',
      'email' => 'required|email|max:255',
      'jenis_kelamin' => 'required',
      'fakultas' => 'required',
      'matkuls' => 'required',
    ]);


    // Create a new category instance
    $dosen = new Dosen();
    $dosen->nidn = $validatedData['nidn'];
    $dosen->nama = $validatedData['nama'];
    $dosen->telp = $validatedData['telp'];
    $dosen->email = $validatedData['email'];
    $dosen->jenis_kelamin = $validatedData['jenis_kelamin'];
    $dosen->fakultas_id = $validatedData['fakultas'];
    $dosen->matkuls_id = $validatedData['matkuls'];


    // Save the category to the database
    $dosen->save();

    // Redirect with a success message
    return redirect('dosen')->with([
      'success' => 'Item has been created successfully.',
    ]);
    
  }
  public function edit($id)
  {
    $page_title = 'Edit Dosen';

    $dosen = Dosen::findOrFail($id);

    $fakultas = Fakultas::pluck('fakultas', 'id');
    $selectedFakultas = $dosen->fakultas_id ?? old('fakultas_id', []);

    $matkul = MataKuliah::pluck('nama', 'id');
    $selectedMatkul = $dosen->matkuls_id ?? old('matkuls_id', []);

    return view('dosen.edit', compact('page_title', 'dosen', 'fakultas', 'selectedFakultas', 'matkul', 'selectedMatkul'));
  }
  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'nidn' => 'required|digits_between:1,11|numeric',
      'nama' => 'required|max:255',
      'telp' => 'nullable|digits_between:1,15|numeric',
      'email' => 'required|email|max:255',
      'jenis_kelamin' => 'required',
      'fakultas' => 'required',
      'matkuls' => 'required',
    ]);


    // Create a new category instance
    $dosen = Dosen::findOrFail($id);
    $dosen->nidn = $validatedData['nidn'];
    $dosen->nama = $validatedData['nama'];
    $dosen->telp = $validatedData['telp'];
    $dosen->email = $validatedData['email'];
    $dosen->jenis_kelamin = $validatedData['jenis_kelamin'];
    $dosen->fakultas_id = $validatedData['fakultas'];
    $dosen->matkuls_id = $validatedData['matkuls'];


    // Save the category to the database
    $dosen->save();

    // Redirect with a success message
    return redirect('dosen')->with([
      'success' => 'Item has been created successfully.',
    ]);
  }

  public function show($id)
  {
    $page_title = 'Detail Dosen';

    $dosen = Dosen::with('fakultas:id,fakultas', 'matkul:id,nama')->findOrFail($id);

    return view('dosen.show', compact('page_title', 'dosen'));
  }

  public function destroy($id)
  {
    $dosen = Dosen::findOrFail($id);
    $dosen->delete();

    
    return response()->json(['success' => 'Item deleted successfully.']);
  }

}
