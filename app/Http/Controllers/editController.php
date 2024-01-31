<?php

namespace App\Http\Controllers;

use App\Http\Requests\createRequest;
use App\Http\Requests\editRequest;
use App\Models\userPosts;
use Illuminate\Http\Request;

class editController extends Controller
{
    //

    function edit($id, editRequest $req){
        $cat = new userPosts;
        return view('edit',['data'=> $cat->find($id)]);
    }
    function updated_post($id, createRequest $req)
    {
        $cats=userPosts::find($id);

        $cats->name = $req->input('name');
        $cats->birth_date = $req->input('birth_date');
        $cats->about = $req->input('about');
        $cats->image = $req->input('image');
        $cats->save();
        return redirect()->route('home');
    }
}
