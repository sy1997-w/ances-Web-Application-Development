<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
	//
	public function __construct()
    {
        $this->middleware('auth');
    }
	
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
		$request->validate([
			'patient_no' => ['required', 'unique:patients','regex:/^PID\-\d{5}$/'],
			'name' => 'required|max:300',
			'nric' => ['required','regex:/^\d{6}\-\d{2}\-\d{4}$/'],
			'gender' => 'required',
			'phone' => ['required','regex:/^\d{2,3}\-\d{6,10}$/'],
			'address' => 'required|max:500',
			'postcode' => 'required|numeric',
			'city' => 'required',
			'state' => 'required',
		]);
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
		if(\Gate::allows('isSuperAdmin')){
			$patient = Patient::find($id);
			if(!$patient) throw new ModelNotFoundException;

			return view('patients.edit', [
			'patient' => $patient
			]);
		}else{
			\Session::flash('msg', 'Unable to edit. ');
			return \Redirect::back();
		}
	}
	
	public function update(Request $request, $id)
	{
		$patient = Patient::find($id);
		if(!$patient) throw new ModelNotFoundException;

		$request->validate([
			'patient_no' => ['required', 'regex:/^PID\-\d{5}$/'],
			'name' => 'required|max:300',
			'nric' => ['required','regex:/^\d{6}\-\d{2}\-\d{4}$/'],
			'gender' => 'required',
			'phone' => ['required','regex:/^\d{2,3}\-\d{6,10}$/'],
			'address' => 'required|max:500',
			'postcode' => 'required|numeric',
			'city' => 'required',
			'state' => 'required',
		]);
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
		if(\Gate::allows('isSuperAdmin')){
			$patient =Patient::where('id',$id)->first();

			if ($patient != null) {
				$patient->delete();
				return redirect()->route('patient.index')->with('success','Patient deleted successfully');
			}
			return redirect()->route('patient.index')->with(['message'=> 'Wrong ID!!']);
		}else{
			\Session::flash('msg', 'Unable to delete. ');
			return \Redirect::back();
		}
    }
}
