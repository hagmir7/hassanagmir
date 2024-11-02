<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function list(){
        $projects = Project::paginate(10);
        return view('project.list', compact("projects"));
    }


    public function show(Project $project){
        return view('project.show', compact('project'));
    }
}
