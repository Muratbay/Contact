<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Form;
use  App\Models\User;
class AdminController extends Controller
{
    public function index(){
        $users= User::get();
        $forms = Form::get();
        return view('admin.admin',[
            'forms' => $forms,
            'users' => $users
        ]);
    }


    public function destroy($id)
    {
        Form::destroy($id);
        return redirect('admin.admin');
    }
}
