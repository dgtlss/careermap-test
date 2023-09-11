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
         The title and description should be both strings and are required */
        $data = $request->validate([
            'title' => 'required | string | max:255',
            'description' => 'required | string',
            'csrf' => 'required',
        ]);

        /* make sure the CSRF token that has been sent with the request
         matches the one that is stored in the session */
        if ($data['csrf'] !== csrf_token()) {
            return response()->json([
                'message' => 'CSRF token mismatch',
            ], 401);
        }

        /* Strip any HTML tags from the title and description & cleanup any whitespace */
        $data['title'] = strip_tags(trim($data['title']));
        $data['description'] = strip_tags(trim($data['description']));

        /* Now that the data has been validated we need to create a new job post
         and save it to the database */
        $job = JobPost::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        /* Return a response to the user with the job that has been created
         and a message to let them know that the job has been created */
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
