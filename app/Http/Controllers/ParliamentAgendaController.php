<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ParliamentAgenda;
use App\Models\ParliamentAgendaCategory;

class ParliamentAgendaController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'agenda_name' => 'required' 
        ]);

        //making an agenda
        ParliamentAgenda::create([
            'agenda_name' => $request->agenda_name,
            'parliament_period_session_id' => $request->parliament_period_session_id,
            'parliament_agenda_category_id' => $request->parliament_agenda_category_id,
            'sector_id' => $request->sector_id
        ]);
        //so how would you make an agenda category in here ?
    }
}
