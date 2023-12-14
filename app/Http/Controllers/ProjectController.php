<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Faker\Factory as Faker;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view( 'projects.index', 
            [
                'projects'=>$projects, 
                'title'=>'mijn titel', 
                'side_bar'=>true
            ]);
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
        // hier gebruik ik faker om fake data te genereren.
        $faker = Faker::create();

        // maak een project aan
        $project = new Project();
        // vul de parameters
        $project->title       = $faker->colorName();
        $project->intro       = $faker->text(50);
        $project->description = $faker->text();
        $project->active      = true;
        // sla het project op
        $project->save();

        // ik laat ook nog even zien wat ik gedana heb.
        return 'Project aangemaakt: ' . $project->title;
    }
}
