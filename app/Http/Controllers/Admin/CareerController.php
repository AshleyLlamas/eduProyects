<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.careers.index')->only('index');
        $this->middleware('can:admin.careers.show')->only('show');
        $this->middleware('can:admin.careers.destroy')->only('destroy');
        $this->middleware('can:admin.careers.create')->only('create', 'store');
        $this->middleware('can:admin.careers.edit')->only('edit');
    }

    public function index(){
        return view('admin.careers.index');
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function show(Career $career)
    {
        return view('admin.careers.show', compact('career'));
    }

    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    public function destroy(Career $career)
    {   
        $career->delete();

        return redirect()->route('admin.careers.index');
    }
}
