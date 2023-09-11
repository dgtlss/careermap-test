<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobsController extends Controller
{
    public function index()
    {
        /* Get all of the jobs from the database with the newest item first */
        $jobs = JobPost::latest()->get();

        /* Return all of the jobs as a JSON response */
        return response()->json([
            'jobs' => $jobs,
        ], 200);
    }

    public function store(Request $request)
    {
        /* Validate the information that has been sent via the request
         The title and description should be both strings and are required
        */

        $data = $request->validate([
            'title' => 'required | string | max:255',
            'description' => 'required | string',
        ]);

        /* Now that the data has been validated we need to create a new job post
         and save it to the database
        */

        $job = JobPost::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        /* Return a response to the user with the job that has been created
         and a message to let them know that the job has been created
        */

        return response()->json([
            'job' => $job,
            'message' => 'Job created successfully',
        ], 200);
    }

    public function create(): View
    {
        return view('jobs.newJob');
    }
}
