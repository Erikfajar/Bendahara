<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function history() {
        $his = History::all();
        return view('History.edit-history1',compact('his'));
    }
    public function update() {
        $his = History::findorfail($id);
        $his->update($request->all());
        return redirect('tingkat-satu');
    }
}
