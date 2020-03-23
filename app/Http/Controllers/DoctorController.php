<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    //
	
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
		$doctor = Doctor::find($id);
		if(!$doctor) throw new ModelNotFoundException;

		return view('doctors.edit', [
		'doctor' => $doctor
		]);
	}
	
	public function update(Request $request, $id)
	{
		$doctor = Doctor::find($id);
		if(!$doctor) throw new ModelNotFoundException;

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
		$doctor =Doctor::where('id',$id)->first();

		if ($doctor != null) {
			$doctor->delete();
			return redirect()->route('doctor.index')->with('success','Doctor deleted successfully');
		}
		return redirect()->route('doctor.index')->with(['message'=> 'Wrong ID!!']);
    }

}
