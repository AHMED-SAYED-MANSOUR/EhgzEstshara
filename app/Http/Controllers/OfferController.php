<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{   public function show()
    {
        $offers= Offer::get();
        return view('admin.offer.show',compact('offers'));

    }
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'photo'=>'image|mimes:jpg,jpeg,png',
            'name'=>'required',
            'price'=>'required|numeric'
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
      $offer = new Offer();
      $offer->name= $request->name;
      $offer->price=$request->price;
      $offer->image=$filename;
      $offer->save() ;
      return redirect(url('show-offers'));
    }
    //delete
    public function delete($id){
        $offer=Offer::find($id);
        $offer->delete();
        return redirect(url('show-offers'));
}
  public function edit ($id) {
    $offers=Offer::find($id);
    return view('admin.offer.edit',compact('offers'));

  }
  public function update (Request $request){


        $file_name='';
        if($request->hasfile('photo')){
            $file_name=$request->photo->getClientOriginalName();
            $request->photo->move(public_path('images/'),$file_name);
        }else{
            $file_name=$request->original;
        }
    $offer=Offer::find($request->id);
    $offer->update([
        'name'=>$request->name ,
        'price'=>$request->price ,
        'image'=>$file_name
    ]);
    return redirect(url('show-offers'));
  }


}
