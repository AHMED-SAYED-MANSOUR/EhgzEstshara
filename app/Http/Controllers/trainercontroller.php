<?php

namespace App\Http\Controllers;
use App\Models\trainer;
use Illuminate\Http\Request;

class trainercontroller extends Controller
{
    public function show()
    {
        $trainers= trainer::get();
        return view('trainer.show',compact('trainers'));

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
      $trainer = new trainer();
      $trainer->name= $request->name;
      $trainer->title=$request->title;
      $trainer->image=$filename;
      $trainer->save() ;
      return redirect(url('show-trainers'));
    }
    //delete
    public function delete($id){
        $trainer=trainer::find($id);
        $trainer->delete();
        return redirect(url('show-trainer'));
}
  public function edit ($id) {
    $trainers=trainer::find($id);
    return view('trainer.edit',compact('trainers'));

  }
  public function update (Request $request){


        $file_name='';
        if($request->hasfile('photo')){
            $file_name=$request->photo->getClientOriginalName();
            $request->photo->move(public_path('images/'),$file_name);
        }else{
            $file_name=$request->original;
        }
    $trainer=trainer::find($request->id);
    $trainer->update([
        'name'=>$request->name ,
        'title'=>$request->title ,
        'image'=>$file_name
    ]);
    return redirect(url('show-trainers'));
  }

}
