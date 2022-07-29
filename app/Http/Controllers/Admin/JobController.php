<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobRequest;
use App\Models\Category;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.jobs.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $job = Job::create($request->all());

        if($request->file('file')) {
            $url = Storage::disk('public')->put('jobs', $request->file('file'));
            $job->thumbnail = $url;
            $job->save();
        }

        if($request->file('banner')) {
            $url = Storage::disk('public')->put('jobs', $request->file('banner'));
            $job->banner = $url;
            $job->save();
        }

        if($request->tags) {
            $job->tags()->attach($request->tags);
        }

        return redirect()->route('admin.jobs.edit', $job)->with('info', 'El trabajo se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.jobs.edit', compact('job', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $job->update($request->all());

        if($request->file('file')) {
            $url = Storage::disk('public')->put('jobs', $request->file('file'));
    
            if($job->thumbnail) {
                Storage::delete([$job->thumbnail]);
            }

            $job->thumbnail = $url;
            $job->save();
        }

        if($request->file('banner')) {
            $url = Storage::disk('public')->put('jobs', $request->file('banner'));
    
            if($job->banner) {
                Storage::delete([$job->banner]);
            }

            $job->banner = $url;
            $job->save();
        }

        if($request->tags) {
            $job->tags()->sync($request->tags);
        }
        return redirect()->route('admin.jobs.edit', $job)->with('info', 'El trabajo se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('admin.jobs.index')->with('info', 'El post se eliminó correctamente');
    }

}
