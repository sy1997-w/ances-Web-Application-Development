<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;

class ImageGalleryController extends Controller
{
    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$images = ImageGallery::get();
    	return view('imagegallerys.index',compact('images'));
    }

    public function userindex()
    {
    	$images = ImageGallery::get();
    	return view('smilegallery',compact('images'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(\Gate::allows('isSuperAdmin')){
    	$this->validate($request, [
    		'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        $input['title'] = $request->title;
        ImageGallery::create($input);

        $images = ImageGallery::get();
    	return view('imagegallerys.index',compact('images'))
    		->with('success','Image Uploaded successfully.');
      }else{
  			\Session::flash('msg', 'Unable to upload. ');
  			return \Redirect::back();
  		}
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if(\Gate::allows('isSuperAdmin')){
    	ImageGallery::find($id)->delete();
    	return back()
    		->with('success','Image removed successfully.');
      }else{
  			\Session::flash('msg', 'Unable to delete. ');
  			return \Redirect::back();
  		}
    }
}
