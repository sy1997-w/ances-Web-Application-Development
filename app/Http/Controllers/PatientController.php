<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    //
	
	public function create()
	{
		$patient = new Patient();

		return view('patients.create', [
		'patient' => $patient,
		]);
	}
	
	public function store(Request $request)
	{
		$patient = new Patient;
		$patient->fill($request->all());
		$patient->save();
	
		return redirect()->route('patient.index');
	}
	
	public function index()
	{
		$patients = Patient::orderBy('name', 'asc')->get();

		return view('patients.index', [
		'patients' => $patients
		]);
	}
	
	public function show($id)
	{
		$patient = Patient::find($id);
		if(!$patient) throw new ModelNotFoundException;
	
		return view('patients.show', [
		'patient' => $patient
		]);
	}
	
	public function edit($id)
	{
		$patient = Patient::find($id);
		if(!$patient) throw new ModelNotFoundException;

		return view('patients.edit', [
		'patient' => $patient
		]);
	}
	
	public function update(Request $request, $id)
	{
		$patient = Patient::find($id);
		if(!$patient) throw new ModelNotFoundException;

		$patient->fill($request->all());

		$patient->save();

		return redirect()->route('patient.index');
	}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */	
	public function destroy($id)
    {
		$patient =Patient::where('id',$id)->first();

		if ($patient != null) {
			$patient->delete();
			return redirect()->route('patient.index')->with('success','Patient deleted successfully');
		}
		return redirect()->route('patient.index')->with(['message'=> 'Wrong ID!!']);
    }
}
