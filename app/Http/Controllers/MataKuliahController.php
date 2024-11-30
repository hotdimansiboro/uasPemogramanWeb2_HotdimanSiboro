<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\MataKuliah;
use App\Models\Periode;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
  public function index()
  {
    $page_title = 'List Mata Kuliah';

    $result = MataKuliah::with('periode:id,tahun,status', 'fakultas:id,fakultas')->get();

    

    return view('matkul.index', compact('page_title', 'result'));
  }
  public function create()
  {
    $page_title = 'Create Mata Kuliah';

    $periode = Periode::pluck('tahun', 'id');

    $fakultas = Fakultas::pluck('fakultas', 'id');

    return view('matkul.create', compact('page_title', 'periode', 'fakultas'));
  }
  public function store(Request $request)
  {
    
    $validatedData = $request->validate([
      'periode' => 'required|max:100',
      'fakultas' => 'required|max:100',
      'code' => 'required|max:25',
      'nama' => 'required|max:100',
      'sort_order_sks' => 'required|integer',
      'sort_order_semester' => 'required|integer',
    ]);

    

    // Create a new category instance
    $matkul = new MataKuliah();
    $matkul->periode_id = $validatedData['periode'];
    $matkul->fakultas_id = $validatedData['fakultas'];
    $matkul->kode = $validatedData['code'];
    $matkul->nama = $validatedData['nama'];
    $matkul->sks = $validatedData['sort_order_sks'];
    $matkul->semester = $validatedData['sort_order_semester'];

    // Save the category to the database
    $matkul->save();

    // Redirect with a success message
    return redirect('mata-kuliah')->with([
      'success' => 'Item has been created successfully.',
    ]);
  }
  public function edit($id)
  {
    $page_title = 'Edit Mata Kuliah';

    $matkul = MataKuliah::findOrFail($id);

    $fakultas = Fakultas::where('id', $matkul->fakultas_id)->pluck('fakultas', 'id');
    $selectedFakultas = $matkul->fakultas_id ?? old('fakultas_id', []);


    $periode = Periode::where('id', $matkul->periode_id)->pluck('tahun', 'id');
    $selectedPeriode = $matkul->periode_id ?? old('periode_id', []);
    

    return view('matkul.edit', compact('page_title', 'matkul', 'fakultas', 'selectedFakultas', 'periode', 'selectedPeriode'));
  }
  public function update(Request $request, $id) 
  {
    $validatedData = $request->validate([
      'periode' => 'required|max:100',
      'fakultas' => 'required|max:100',
      'code' => 'required|max:25',
      'nama' => 'required|max:100',
      'sort_order_sks' => 'required|integer',
      'sort_order_semester' => 'required|integer',
    ]);

    

    // Create a new category instance
    $matkul = MataKuliah::findOrFail($id);
    $matkul->periode_id = $validatedData['periode'];
    $matkul->fakultas_id = $validatedData['fakultas'];
    $matkul->kode = $validatedData['code'];
    $matkul->nama = $validatedData['nama'];
    $matkul->sks = $validatedData['sort_order_sks'];
    $matkul->semester = $validatedData['sort_order_semester'];

    // Save the category to the database
    $matkul->save();

    // Redirect with a success message
    return redirect('mata-kuliah')->with([
      'success' => 'Item has been created successfully.',
    ]);
  }

  public function destroy($id)
  {
    $matkul = MataKuliah::findOrFail($id);
    $matkul->delete();

    
    return response()->json(['success' => 'Item deleted successfully.']);
  }

}
