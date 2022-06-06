<?php

namespace App\Http\Controllers;

use App\Models\checklist;
use Illuminate\Http\Request;

class checklistController extends Controller
{
    public function index()
    {
        return view('checklist.index');
    }

    public function create()
    {
        return view('checklist.create');
    }

    public function store(Request $request)
    {
        Checklist::create($request->except(['']));
        return redirect('/checklist');
    }

    public function edit($id)
    {
        return view('checklist.edit');
    }

}
