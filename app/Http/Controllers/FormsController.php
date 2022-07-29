<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormsController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){

        if($request->file('file')){
            $name = md5(uniqid()).'.'.$request->file('file')->getClientOriginalExtension();
            
        }
        // else{
        //     $name = null;
        // }
        $request->validate([
            'message' => 'required|min:5',
            'file' => 'mimes:jpeg,jpg,png|required|max:1000'
        ]);

        Form::create([
            'message' => $request->input('message'),
            'file' => $name
        ]);

        if($request->file('file')){
            Storage::putFileAs('/public', $request->file('file'), $name);
        }

        return view('index');
    }
}
