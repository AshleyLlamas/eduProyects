<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campus;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.campuses.index')->only('index');
        $this->middleware('can:admin.campuses.show')->only('show');
        $this->middleware('can:admin.campuses.destroy')->only('destroy');
        $this->middleware('can:admin.campuses.create')->only('create', 'store');
        $this->middleware('can:admin.campuses.edit')->only('edit');
    }

    public function index(){
        return view('admin.campuses.index');
    }

    public function create()
    {
        return view('admin.campuses.create');
    }

    public function show(Campus $campus)
    {
        return view('admin.campuses.show', compact('campus'));
    }

    public function edit(Campus $campus)
    {
        return view('admin.campuses.edit', compact('campus'));
    }

    public function destroy(Campus $campus)
    {   
        $campus->delete();

        return redirect()->route('admin.campuses.index');
    }
}
