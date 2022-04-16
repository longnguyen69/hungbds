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
        return view('admin/listBuilding',compact('index'));
    }

    public function create()
    {
        $project = Project::all();
        return view('admin/createBuilding', compact('project'));
    }

    public function store(Request $request)
    {
        $old = Building::where('code',$request->code)->get();
        if ($old->count() > 0) {
            return back()->with('msg1','Building already exists');
        } else {
            $building = new Building();
            $building->code = strtoupper($request->code);
            $building->name = $request->name;
            $building->id_duan = $request->project;
            $building->save();
            return back()->with('message','Building Successfully');
        }
    }
}
