<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Response;

class ProjectDownloadController extends Controller
{
    /**
     * Download a single project in csv format
     *
     * @param Project $project
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function download(Project $project)
    {
        $csvFileName = 'projects' . $project->title . '.csv';
        $headers     = [
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
        ];

        $callback = static function () use ($project) {
            echo 'id,title,description';
            echo "\n\r";
            echo implode(
                ',',
                [
                    $project->id,
                    $project->title,
                    $project->description,
                ]
            );
        };

        return Response::stream($callback, 200, $headers);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function downloadAll()
    {
        $projects = Project::all();
        $callback = static function () use ($projects) {
            echo 'ID,Title,Description';
            echo "\n\r";
            foreach ($projects as $project) {
                echo implode(
                    ',',
                    [
                        $project->id,
                        $project->title,
                        $project->description,
                    ]
                );
                echo "\n\r";
            }
        };

        $csvFileName = 'projects.csv';
        $headers     = [
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
        ];

        return Response::stream($callback, 200, $headers);
    }
}
