<?php

namespace App\Http\Controllers;

use App\Models\Person;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        $people = Person::all();
        return view('index', ['data' => $people]);
    }

    public function addnew(){
        return view('addnew');
    }

    public function savenew(Request $request){
        $p = new Person();

        $p->first_name = $request->input('first_name');
        $p->last_name = $request->input('last_name');
        $p->city = $request->input('city');

        $p->save();

        $people = Person::all();
        return view('index', ['data' => $people]);

        return view('index');
    }
}
