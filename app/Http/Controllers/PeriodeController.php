<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
  public function index()
  {
    $page_title = 'List Periode Akademik';

    $result = Periode::all();

    return view('periode.index', compact('page_title', 'result'));
  }
  public function create()
  {
    $page_title = 'CreatePeriode Akademik';

    return view('periode.create', compact('page_title'));
  }
  public function store(Request $request)
  {

    // dd($request->all());
    // Validate the request data and get the validated data as an array
    $validatedData = $request->validate([
      'periode' => 'required|max:100',
      'status' => 'nullable',
      'semester' => 'nullable|integer',
    ]);

    // Create a new category instance
    $periode = new Periode();
    $periode->tahun = $validatedData['periode'];
    $periode->status = $validatedData['status'];
    $periode->semester = $validatedData['semester'];

    // Save the category to the database
    $periode->save();

    // Redirect with a success message
    return redirect('periode')->with([
      'success' => 'Item has been created successfully.',
    ]);
  }
  public function edit($id)
  {
    $page_title = 'Edit Periode Akademik';

    $periode = Periode::findOrFail($id);

    return view('periode.edit', compact('page_title', 'periode'));
  }
  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'periode' => 'required|max:100',
      'status' => 'nullable',
      'semester' => 'nullable|integer',
    ]);

    // Create a new category instance
    $periode = Periode::findOrFail($id);
    $periode->tahun = $validatedData['periode'];
    $periode->status = $validatedData['status'];
    $periode->semester = $validatedData['semester'];

    // Save the category to the database
    $periode->save();

    // Redirect with a success message
    return redirect('periode')->with([
      'success' => 'Item has been created successfully.',
    ]);
  }

  public function destroy($id)
  {
    $periode = Periode::findOrFail($id);
    $periode->delete();

    
    return response()->json(['success' => 'Item deleted successfully.']);

  }

}
