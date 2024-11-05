<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Queue\Failed\PrunableFailedJobProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with(['employer' , 'tags'])->latest()->get()->groupBy('featured');
        return view('jobs.index' , [
            'featuredjob' => $jobs[1],
            'jobs' => $jobs[0],
            'tags' => Tag::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jobvalidated= request()->validate([
            'title'         => ['required'],
            'salary'        => ['required'],
            'location'      => ['required'],
            'url'           => ['required' , 'active_url'],
            'schedule'      => ['required' , Rule::in(['Full Time' , 'Part Time'])],
            'tags'          => ['nullable']
        ]);
        $jobvalidated['featured'] = request()->has('featured');
        $jobvalidated['employer_id'] = Auth::user()->employer->id;
        $job =   Auth::user()->employer->job()->create(Arr::except($jobvalidated , 'tags'));

        if($jobvalidated['tags'] ?? false){
            foreach(explode(',' , $jobvalidated['tags']) as $tag){
                $job->tag($tag);
            }
        }
        return redirect('/');
    }

}
