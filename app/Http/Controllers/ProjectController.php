<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        dump( $projects );
    }
    
    public function show( Project $project):string {
        dump( $project );
        return 'view';
    }

    public function project() {
        return 'Dit is een project';
    }
}
