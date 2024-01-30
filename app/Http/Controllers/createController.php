<?php

namespace App\Http\Controllers;

use App\Http\Requests\createRequest;
use App\Models\userPosts;
use Illuminate\Http\Request;

class createController extends Controller
{
    //
    function create(createRequest $req){
        $cats = new userPosts();
        $cats->name = $req->input('name');
        $cats->birth_date = $req->input('birth_date');
        $cats->image = $req->input('image');
        $cats->save();

        return redirect()->route('home');

    }
}
