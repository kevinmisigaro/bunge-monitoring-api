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

        $this->validate($request, [
            'question' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);



    //this is the implementation
        MpQuestions::create([
            'question' => $request->question, 
            'type' => $request->type, 
            'description' => $request->description, 
            'member_of_parliament_id' => $request->member_of_parliament_id, 
            'targeted_group_id' => $request->targeted_group_id, 
            'sector_field_id' => $request->sector_field_id, 
            'parliament_agenda_category_id' => $request->parliament_agenda_category_id,
             'parliament_period_session_id' => $request->parliament_period_session_id,
             'parliament_agenda_id' => $request->parliament_agenda_id
        ]);

        return 'Done';
    
    }

    public function  search()
    {

    }
}
