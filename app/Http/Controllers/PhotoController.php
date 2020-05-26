<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

class PhotoController extends Controller
{
    public function index(Request $request)
    {
        $items = Photo::all();
        return view('hello.index',['items' => $items]);
    }

    public function edit(Request $request)
    {
        $photo = Photo::where('gurume_id',$request->id)->first();
        return view('hello.edit',['form' =>$photo]);
    }
    public function update(Request $request)
    {
        $this->validate($request,Photo::$rules);
        //$photo = Photo::where('gurume_id',$request->gurume_id)->first();
        $photo = Photo::find($request->gurume_id);
        //$form = $request->all();
        //unset($form['_token']);
        //$photo->fill($form)->save();
        $photo->title = $request->title;
        $photo->address = $request->address;
        $photo->howmuch = $request->howmuch;
        $photo->coment = $request->coment;
        $photo->update();
        return redirect('hello');
    }
    public function delete(Request $request)
    {
        $photo = Photo::find($request->id);
        return view('hello.del',['data' =>$photo]);
    }
    public function remove(Request $request)
    {
        $photo = Photo::find($request->gurume_id)->delete();
        return redirect('hello');
    }
}
