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

    public function update($id){
        $person = Person::find($id);
        return view('update', ["person" => $person]);
    }

    public function saveupdate(Request $request){
        $p = new Person();

        $p->id = $request->input('id');
        $p->first_name = $request->input('first_name');
        $p->last_name = $request->input('last_name');
        $p->city = $request->input('city');
        $p->exists = true;

        $p->save();

        $people = Person::all();
        return view('index', ['data' => $people]);

    }

    public function delete($id){
        return view('delete', ["id" => $id]);
    }

    public function confirmdelete(Request $request){
        $id = $request->input('id');
        Person::destroy($id);

        $people = Person::all();
        return view('index', ['data' => $people]);
    }
}
