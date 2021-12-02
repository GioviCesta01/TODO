<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class todocontrolloer extends Controller
{
    public function list() {
        return todo::all();
    }
    
    public function view($id) {
        return todo::find($id);
    }
        
    public function create (request $req){
        $todoData = json_decode($req->getContent());
        $todo = new Todo();
            $todo->task = $todoData->task;
            $todo->save();
            return $todo;
    }
        
    public function tick($id) {
        $todo = todo::where("id", $id)->where("done", false)->first();
         If ($todo == null){
                return response ()->json ("todo_not_found",404);
            }
        $todo->done = true;
        $todo->ticked_at = Carbon::now();
        $todo->save();
        return "ok";
    }
        
}
