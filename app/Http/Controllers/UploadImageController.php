<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Postimage;

class UploadImageController extends Controller
{
    //Add image
    public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeImage(Request $request){
        $data= new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('Image.view');
    }
    //View image
    public function viewImage(){
        $imageData= Postimage::all();
        return view('Image.view_image', compact('imageData'));
    }
}
