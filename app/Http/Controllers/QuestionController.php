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
        // $members = MemberOfParliament::get();
        // $targets = TargetedGroup::get();
        // $sectors = SectorField::get();
        // $categories = ParliamentAgendaCategory::get();
        // $agendas = ParliamentAgenda::get();
        // $sessions = ParliamentPeriodSession::get();

        $this->validate($request, [
            'question' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);

        //Create a question
        // $questionare = new MpQuestions;
        // $questionare->question = $request->input('question');
        // $questionare->type = $request->input('type');
        // $questionare->description = $request->input('description');
        // $questionare->save();

        // im unsure on how to include the foreign keys, could you see if this is right
        // and let me know if you have a better  way?


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
