<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\Major;
use App\Models\projects;
use App\Models\User;
use App\Models\dashboardprojects;


class ProjectController extends Controller
{
    //
    public function tampilkan()
    {
        return view('projects' ,[
            'title'=> 'All Project',
            // 'projects' => project::all()
            // 'projects' => project::latest()->filter(request('search'))->get()///fungsi method with unutk mengaktifkan eager loading
            'projects' => projects::latest()->filter(request(['search', 'major']))->get()///fungsi method with unutk mengaktifkan eager loading
        ]);
        // 'projects' => project::latest()->filter(request(['search', 'major']))->get()///fungsi method with unutk mengaktifkan eager loading

        
    //     $title = '';

    //     if (request('Major')) {
    //         $Major =Major::firstWhere('slug', request('Major'));
    //         $title = ' in ' . $Major->name;
    //     }

    //     if (request('author')) {
    //         $author = User::firstWhere('username', request('author'));
    //         $title = ' by ' . $author->name;
    //     }


    //     return view('projects', [
    //         "title" => 'All projects' . $title,
    //         "projects" =>projects::latest()->filter(request(['btn-keyword', 'Major', 'author']))->paginate(7)->withQueryString()
    //     ]);
            
    }

    public function tampilkanDetail(projects $project)
    {
        return view('project',[
            'title'=> 'Single hal',
            'major'=> $project
        ]);
    }

    
}
