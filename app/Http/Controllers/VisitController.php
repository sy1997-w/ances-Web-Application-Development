<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;

class VisitController extends Controller
{
    //
	
	public function create()
	{
		$visit = new Visit();

		return view('visits.create', [
		'visit' => $visit,
		]);
	}
	
	public function store(Request $request)
	{
		$visit = new Visit;
		$visit->fill($request->all());
		$visit->save();
	
		return redirect()->route('visit.index');
	}
	
	public function index()
	{
		$visits = Visit::orderBy('code', 'asc')->get();

		return view('visits.index', [
		'visits' => $visits
		]);
	}
	
	public function show($id)
	{
		$visit = Visit::find($id);
		if(!$visit) throw new ModelNotFoundException;
	
		return view('visits.show', [
		'visit' => $visit
		]);
	}
	
	public function edit($id)
	{
		$visit = Visit::find($id);
		if(!$visit) throw new ModelNotFoundException;

		return view('visits.edit', [
		'visit' => $visit
		]);
	}
	
	public function update(Request $request, $id)
	{
		$visit = Visit::find($id);
		if(!$visit) throw new ModelNotFoundException;

		$visit->fill($request->all());

		$visit->save();

		return redirect()->route('visit.index');
	}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */	
	public function destroy($id)
    {
		$visit =Visit::where('id',$id)->first();

		if ($visit != null) {
			$visit->delete();
			return redirect()->route('visit.index')->with('success','Visit deleted successfully');
		}
		return redirect()->route('visit.index')->with(['message'=> 'Wrong ID!!']);
    }

}
