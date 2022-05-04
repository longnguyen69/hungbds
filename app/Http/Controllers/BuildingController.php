<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Project;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $index = Building::all();
        return view('admin/listBuilding', compact('index'));
    }

    public function create()
    {
        $project = Project::all();
        return view('admin/createBuilding', compact('project'));
    }

    public function store(Request $request)
    {
        $old = Building::where('code', $request->code)->get();
        if ($old->count() > 0) {
            return back()->with('msg1', 'Building already exists');
        } else {
            $building = new Building();
            $building->code = strtoupper($request->code);
            $building->name = $request->name;
            $building->id_duan = $request->project;
            $building->save();
            return back()->with('message', 'Building Successfully');
        }
    }

    public function edit($id)
    {
        $edit = Building::where('id', $id)->first();
        $projects = Project::all();
        if ($edit) {
            return view('admin/editBuilding',compact('edit','projects'));
        } else {
            return abort(404);
        }
    }

    public function update(Request $request, $id)
    {
        $edit = Building::where('id', $id)->first();
        $edit->code = strtoupper($request->code);
        $edit->name = $request->name;
        $edit->id_duan = $request->project;
        $edit->save();
        return back()->with('message', 'Edit Successfully');
    }
}
