<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        dump($projects);
    }

    public function show(Project $project): string
    {
        dump($project);
        return 'view';
    }

    public function project()
    {
        return 'Dit is een project';
    }

    /**
     * @return string
     */
    public function add()
    {
        // maak een project aan
        $project = new Project();
        // vul de parameters
        $project->title       = 'Mijn eerste project';
        $project->description = 'Mijn project omschrijving';
        $project->active      = true;
        // sla het project op
        $project->save();

        return 'Project aangemaakt: ' . $project->title;
    }
}
