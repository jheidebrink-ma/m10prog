<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(5);

        return view('dashboard.projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid_data = $this->validator($request);
        $project    = new Project($valid_data);
        $project->save();

        return redirect(route('project.show', $project->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Project $project)
    {
        $valid_data = $this->validator($request);
        $project->update($valid_data);
        $project->save();

        return redirect(route('project.show', $project->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function validator(Request $request)
    {
        return $request->validate(
            [
                'title'       => 'required|unique:projects|max:255',
                'intro'       => 'required',
                'description' => 'required',
                'active'      => 'nullable',
            ]
        );
    }
}
