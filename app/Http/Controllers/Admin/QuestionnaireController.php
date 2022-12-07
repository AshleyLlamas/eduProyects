<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.questionnaires.index')->only('index');
        $this->middleware('can:admin.questionnaires.show')->only('show');
        $this->middleware('can:admin.questionnaires.destroy')->only('destroy');
        $this->middleware('can:admin.questionnaires.create')->only('create', 'store');
        $this->middleware('can:admin.questionnaires.edit')->only('edit');
    }

    public function index(){
        return view('admin.questionnaires.index');
    }

    public function create()
    {
        return view('admin.questionnaires.create');
    }

    public function show(Questionnaire $questionnaire)
    {
        return view('admin.questionnaires.show', compact('questionnaire'));
    }

    public function edit(Questionnaire $questionnaire)
    {
        return view('admin.questionnaires.edit', compact('questionnaire'));
    }

    public function destroy(Questionnaire $questionnaire)
    {   
        $questionnaire->delete();

        return redirect()->route('admin.questionnaires.index');
    }
}
