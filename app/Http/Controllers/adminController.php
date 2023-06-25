<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $tests= Test::all();
        return view ('table', compact('tests'));
    }

    public function destroy($id){
        Test::find($id)->delete();
        return redirect()->route('tabla');
    }

    public function show($id){
        $test= Test::find($id);
        return view('show', compact('test'));
    }

    public function store(Request $request){
       Test::create($request->all());
       return redirect()->route('tabla');
    }

    public function create(){
        return view('User');
    }
}