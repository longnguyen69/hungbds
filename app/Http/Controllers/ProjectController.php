<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\AbstractList;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
//        dd($project);
        return view('admin/project', compact('project'));
    }

    public function create()
    {
        return view('admin/create_project');
    }

    public function store(Request $request)
    {
        $old = Project::where('code', $request->code)->get();
        if ($old->count() == 0) {
            $project = new Project();
            $project->code = strtoupper($request->code);
            $project->name = $request->name;
            $project->save();
            return back()->with('message', 'Create Successfully');
        } else {
            return back()->with('msg1', 'Project already exists');
        }
    }

    public function edit($id)
    {
        $projectOld = Project::where('id', $id)->first();
        if ($projectOld){
            return view('admin/editProject', compact('projectOld'));
        } else {
            return abort(404);
        }

    }

    public function save(Request $request, $id)
    {
        $project = Project::where('id', $id)->first();
        $project->code = $request->code;
        $project->name = $request->name;
        $project->save();
        return back()->with('message', 'Edit Successfully!');
    }
}
