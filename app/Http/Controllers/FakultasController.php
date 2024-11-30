<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Periode;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
  public function index()
  {
    $page_title = 'List Fakultas';

    // $result = Fakultas::leftJoin('periodes', 'fakultas.periode_id', '=', 'periodes.id')->select('fakultas.*', 'periodes.tahun')->get();

    $result = Fakultas::with('periode:id,tahun')->get();

    // dd($result->Periode->status);

    return view('fakultas.index', compact('page_title', 'result'));
  }
  public function create()
  {
    $page_title = 'Create Fakultas';

    $periode = Periode::pluck('tahun', 'id');

    return view('fakultas.create', compact('page_title', 'periode'));
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'periode' => 'required|max:100',
      'fakultas' => 'required|max:100',
    ]);

    // Create a new category instance
    $fakultas = new Fakultas();
    $fakultas->periode_id = $validatedData['periode'];
    $fakultas->fakultas = $validatedData['fakultas'];

    // Save the category to the database
    $fakultas->save();

    // Redirect with a success message
    return redirect('fakultas')->with([
      'success' => 'Item has been created successfully.',
    ]);
  }
  public function edit($id)
  {
    $page_title = 'EditFakultas';

    $fakultas = Fakultas::findOrFail($id);

    $periode = Periode::where('id', $fakultas->periode_id)->pluck('tahun', 'id');

    $selectedPeriode = $fakultas->periode_id ?? old('periode_id', []);

    return view('fakultas.edit', compact('page_title', 'fakultas', 'periode', 'selectedPeriode'));
  }
  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'periode' => 'required|max:100',
      'fakultas' => 'required|max:100',
    ]);

    // Create a new category instance
    $fakultas = Fakultas::findOrFail($id);
    $fakultas->periode_id = $validatedData['periode'];
    $fakultas->fakultas = $validatedData['fakultas'];

    // Save the category to the database
    $fakultas->save();

    // Redirect with a success message
    return redirect('fakultas')->with([
      'success' => 'Item has been created successfully.',
    ]);
  }

  public function destroy($id)
  {
    $fakultas = Fakultas::findOrFail($id);
    $fakultas->delete();

    
    return response()->json(['success' => 'Item deleted successfully.']);

  }


}
