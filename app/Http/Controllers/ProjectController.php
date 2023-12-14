<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Faker\Factory as Faker;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', ['projects'=>$projects]);
    }

    public function show(Project $project): string
    {
        dump($project);
        return view('projects.show', ['project'=>$project]);
    }

    public function project()
    {
        $project = new Project();
        return view('projects.show', ['project'=>$project]);
    }

    /**
     * @return string
     */
    public function add()
    {
        $faker = Faker::create();

        // maak een project aan
        $project = new Project();
        // vul de parameters
        $project->title       = $faker->colorName();
        $project->description = $faker->text();
        $project->active      = true;
        // sla het project op
        $project->save();

        return 'Project aangemaakt: ' . $project->title;
    }
}
