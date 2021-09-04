<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
   function fetch_img()
   {
       return view('index');
   }

   function images_f()
   {
       $data=Photo::all()->toArray();
       return view('images',compact('data'));
   }

   function insert_img(Request $request)
   {
     $request->validate([
       'text_img' => 'required',
       'image'    => 'required|image|mimes:jpeg,png,jpg|max:2048'
     ]);

     $imageName=time().'.'.$request->image->extension();

     $request->image->move(public_path('images'),$imageName);

     $insert_data=new Photo();

     $insert_data->name_img = $imageName;
     $insert_data->text_img = $request->get('text_img');
     $insert_data->save();
     
     return redirect('/images_f');


   }
}
