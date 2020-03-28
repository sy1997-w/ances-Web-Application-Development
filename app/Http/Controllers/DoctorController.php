<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
	//
	public function __construct()
    {
		$this->middleware('auth');
    }
	
	public function create()
	{
		$doctor = new Doctor();

		return view('doctors.create', [
		'doctor' => $doctor,
		]);
	}
	
	public function store(Request $request)
	{
		$doctor = new Doctor;
		$request->validate([
			'doctor_no' => ['required', 'unique:doctors','regex:/^DID\-\d{5}$/'],
			'name' => 'required|max:300',
			'nric' => ['required','regex:/^\d{6}\-\d{2}\-\d{4}$/'],
			'gender' => 'required',
			'phone' => ['required','regex:/^\d{2,3}\-\d{6,10}$/'],
			'education' => 'required',
		]);
		$doctor->fill($request->all());
		$doctor->save();
	
		return redirect()->route('doctor.index');
	}
	
	public function index()
	{
		$doctors = Doctor::orderBy('name', 'asc')->get();

		return view('doctors.index', [
		'doctors' => $doctors
		]);
	}
	
	public function show($id)
	{
		$doctor = Doctor::find($id);
		if(!$doctor) throw new ModelNotFoundException;
	
		return view('doctors.show', [
		'doctor' => $doctor
		]);
	}
	
	public function edit($id)
	{
		if(\Gate::allows('isSuperAdmin')){
			$doctor = Doctor::find($id);
			if(!$doctor) throw new ModelNotFoundException;
	
			return view('doctors.edit', [
			'doctor' => $doctor
			]);
		}else{
			\Session::flash('msg', 'Unable to edit. ');
			return \Redirect::back();
		}
	}
	
	public function update(Request $request, $id)
	{
		$doctor = Doctor::find($id);
		if(!$doctor) throw new ModelNotFoundException;
		
		$request->validate([
			'doctor_no' => ['required','regex:/^DID\-\d{5}$/'],
			'name' => 'required|max:300',
			'nric' => ['required','regex:/^\d{6}\-\d{2}\-\d{4}$/'],
			'gender' => 'required',
			'phone' => ['required','regex:/^\d{2,3}\-\d{6,10}$/'],
			'education' => 'required',
		]);
		$doctor->fill($request->all());

		$doctor->save();

		return redirect()->route('doctor.index');
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
			$doctor =Doctor::where('id',$id)->first();
			if ($doctor != null) {
				$doctor->delete();
				return redirect()->route('doctor.index')->with('success','Doctor deleted successfully');
			}
			return redirect()->route('doctor.index')->with(['message'=> 'Wrong ID!!']);
		}else{
			\Session::flash('msg', 'Unable to delete. ');
			return \Redirect::back();
		}
    }

}
