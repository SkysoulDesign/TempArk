<?php

namespace DreamsArk\Http\Controllers\Project;

use DreamsArk\Commands\Project\AddCastCommand;
use DreamsArk\Models\Project\Project;
use Illuminate\Http\Request;
use DreamsArk\Http\Requests;
use DreamsArk\Http\Controllers\Controller;

class CastController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Project $project
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project, Request $request)
    {
        $this->dispatch(new AddCastCommand($project, $request->all()));
        return redirect()->back();
    }

}
