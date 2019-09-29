<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return "This is <b>category</b> page";
    }


    public function create()
    {
        return "I am the create method :)";
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return "This category's number : $id";
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        return "Deleted category id : $id";
    }

    public function showmyview($name)
    {
        return view("myview")->with('name', $name);
    }
}
