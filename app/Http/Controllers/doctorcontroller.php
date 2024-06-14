<?php

namespace App\Http\Controllers;
use App\Models\doctor;
use Illuminate\Http\Request;

class doctorcontroller extends Controller
{
    public function show()
    {
        $doctors= doctor::get();
        return view('doctor.show',compact('doctors'));

    }
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'photo'=>'image|mimes:jpg,jpeg,png',
            'name'=>'required',
            'title'=>'required|string'
        ]);
        //save the image in folder and get its path
        $file_name='';
        if($request->hasfile('photo')){
            $filename=$request->photo->getClientOriginalName();
            $request->photo->move(public_path('images/'),$filename);
        }else{
            $filename=Null;
        }
        // insert in DB
      $doctor = new doctor();
      $doctor->name= $request->name;
      $doctor->title=$request->title;
      $doctor->image=$filename;
      $doctor->save() ;
      return redirect(url('show-doctors'));
    }
    //delete
    public function delete($id){
        $doctor=doctor::find($id);
        $doctor->delete();
        return redirect(url('show-doctors'));
}
  public function edit ($id) {
    $doctors=doctor::find($id);
    return view('doctor.edit',compact('doctors'));

  }
  public function update (Request $request){


        $file_name='';
        if($request->hasfile('photo')){
            $file_name=$request->photo->getClientOriginalName();
            $request->photo->move(public_path('images/'),$file_name);
        }else{
            $file_name=$request->original;
        }
    $doctor=doctor::find($request->id);
    $doctor->update([
        'name'=>$request->name ,
        'title'=>$request->title ,
        'image'=>$file_name
    ]);
    return redirect(url('show'));
  }

}
