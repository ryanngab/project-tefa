<?php

namespace App\Http\Controllers;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Major;
use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



class DashboardProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        return view('dashboard.projects.index',[
            'posts' => projects::where('user_id', auth()->user()->id)->get()
        ]);

        // $posts = projects::latest()->paginate(10);

        // return view('dashboard.projects.index' , compact('posts'))
        // ->with('i', (request()->input('page', 1) -1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('dashboard.projects.create',[
            'Majors' => Major::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateDate = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:projects',
            'major_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if($request->file('image')) {
            $validateDate['image'] = $request->file('image')->store('images');
        }

        $validateDate['user_id'] = auth()->user()->id;
        $validateDate['excerpt'] = Str::limit(strip_tags($request->body,50));

         projects::create($validateDate);

         return redirect('/dashboard/projects')->with('berhasil','good job!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(projects $project)
    {
        //
        // return view('dashboard.projects.show');
        return view('dashboard.layouts.show',[
            'title'=> 'Single hal',
            'project'=> $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(projects $project)
    {
        //
        return view('dashboard.projects.edit',[
            'project' => $project,
            'Majors' => Major::all()
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projects $project)
    {
        //
        $rules = [
            'title' => 'required|max:255',
            'major_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if($request->slug != $project->slug) {
            $rules['slug'] = 'required|unique:projects';
        }

        $validateDate = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateDate['image'] = $request->file('image')->store('images');
        }

        $validateDate['user_id'] = auth()->user()->id;
        $validateDate['excerpt'] = Str::limit(strip_tags($request->body,50));

         projects::where('id', $project->id)->update($validateDate);

         return redirect('/dashboard/projects')->with('berhasil','Berhasil Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(projects $project)
    {
        //
        if($project->image) {
                Storage::delete($project->image);
            }

        projects::destroy($project->id);
        return redirect('/dashboard/projects')->with('berhasil', 'berhasil di hapus ');
    }

    // public function checkSlug(Request $request) {

    //     $slug = SlugService::createSlug(projects::class, 'slug', $request->ttle);
    //     return response()->json(['slug' => $slug]);
    // }
}
