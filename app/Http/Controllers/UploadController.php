<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use App\Photo;

class UploadController extends Controller
{
    public function index(){
        return view('hello.upload',['msg1'=>'●あなたのグルメを記録しましょう']);
    }
    public function store(HelloRequest $request){
        $post_data = $request->except('photo');
        $imagefile = $request->file('photo');

        $image_path = $imagefile->store('public/food_image');
        $read_image_path = str_replace('public/','storage/',$image_path);

        $title = $post_data['title'];
        $address = $post_data['address'];
        $howmuch = $post_data['howmuch'];
        $coment = $post_data['coment'];

        $data = array(
            'image_path' => $image_path,
            'read_image_path' => $read_image_path,
            'title' => $title,
            'address' => $address,
            'howmuch' => $howmuch,
            'coment' => $coment,
        );
        $request->session()->put('data', $data);
    
        return view('hello.confirm', compact('data') );

    }
    public function complete(Request $request){
        $data = $request->session()->get('data');
        $image_path = $data['image_path'];
        $read_image_path = $data['read_image_path'];

        $filename = str_replace('public/food_image/', '', $image_path);
            
        $storage_path = 'public/productimage/'.$filename;
            

        $request->session()->forget('data');

        \Storage::move($image_path, $storage_path);
            

        $read_path = str_replace('public/', 'storage/', $storage_path);

        $title = $data['title'];
        $address = $data['address'];
        $howmuch = $data['howmuch'];
        $coment = $data['coment'];
            
        $photo = new Photo;
        $photo->photo_path = $read_path;
        $photo->title = $title;
        $photo->address = $address;
        $photo->howmuch = $howmuch;
        $photo->coment = $coment;
        $photo->save();
    
            
        return view('hello.complete',['msg2'=>'アップロードされました！']);
    }
}
