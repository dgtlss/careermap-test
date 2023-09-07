<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function listJobs()
    {
        $jobs = Job::orderByDesc('created_at')->get();

        return response()->json([
            'jobs' => $jobs
        ]);
    }

    public function createJob()
    {
        // check that the information has been sent properly
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        // Create the job
        $job = Job::create([
            'title' => $data['title'],
            'description' => $data['description']
        ]);

        // return a response for the frontend
        return response()->json([
            'job' => $job,
            'message' => 'Job created successfully'
        ],200);
    }

    public function singleJob($id)
    {
        $job = Job::find($id);
        return view('jobs.single-job', compact('job'));
    }

    public function singleJobInformation($id)
    {
        $job = Job::find($id);

        return response()->json([
            'job' => $job
        ]);
    }

    public function newJobForm()
    {
        return view('jobs.new-job');
    }


}
