<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberOfParliament;
use App\Models\TargetedGroup;
use App\Models\SectorField;
use App\Models\ParliamentAgendaCategory;
use App\Models\ParliamentAgenda;
use App\Models\ParliamentPeriodSession;
use App\Models\MpQuestions;


class QuestionController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function store (Request $request)
    {
        $members = MemberOfParliament::get();
        $targets = TargetedGroup::get();
        $sectors = SectorField::get();
        $categories = ParliamentAgendaCategory::get();
        $agendas = ParliamentAgenda::get();
        $sessions = ParliamentPeriodSession::get();

        $this->validate($request, [
            'question' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);

        //Create a question
        $questionare = new MpQuestions;
        $questionare->question = $request->input('question');
        $questionare->type = $request->input('type');
        $questionare->description = $request->input('description');
        $questionare->save();

// im unsure on how to include the foreign keys, could you see if this is right
// and let me know if you have a better  way?
    
    }

    public function  search()
    {

    }
}
