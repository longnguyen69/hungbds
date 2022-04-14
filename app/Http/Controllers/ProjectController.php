<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
//        dd($project);
        return view('admin/project',compact('project'));
    }

    public function create()
    {
        return view('admin/create_project');
    }

    public function store(Request $request)
    {
        $old = Project::where('code',$request->code)->get();
        if ($old->count() == 0) {
            $project = new Project();
            $project->code = strtoupper($request->code);
            $project->name = $request->name;
            $project->save();
            return back()->with('message','Create Successfully');
        } else {
            return back()->with('msg1','Project already exists');
        }
    }

    public function edit($id)
    {
        $projectOld = Project::where('id',$id)->get();
        return view('admin/editProject',compact('projectOld'));
    }

    public function save(Request $request)
    {
        //
    }
}
