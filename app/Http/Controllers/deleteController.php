<?php

namespace App\Http\Controllers;

use App\Models\userPosts;
use Illuminate\Http\Request;

class deleteController extends Controller
{
    //
    function delete_post($id){
        $cat = userPosts::find($id);
        $cat->delete();
        return redirect()->route('home');
    }
}
