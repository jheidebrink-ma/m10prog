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
        $valid_data = $this->validator($request, new Project());
        $project    = new Project($valid_data);
        $project->save();

        $image = $request->file('image');
        if ( ! empty($image) ) {
            $path = $request->file('image')?->store('public/project');
            $project->image = $path;
            $project->save();
        }

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
        $valid_data = $this->validator($request, $project);
        $project->update($valid_data);

        $image = $request->file('image');
        if ( ! empty($image) ) {
            $path = $request->file('image')?->store('public/project');
            $project->image = $path;
            $project->save();
        }

        return redirect(route('project.show', $project->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect(route('projects.index'))->with('alert', 'Het item '.$project->title.' is nu weg.');
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function validator(Request $request, Project $project)
    {
        return $request->validate(
            [
                'title'       => 'required|max:255|unique:projects,id,'.$project->id,
                'intro'       => 'required',
                'description' => 'required',
                'active'      => 'nullable',
            ]
        );
    }
}
