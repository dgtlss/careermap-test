<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class jobPostCreationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_jobformLoad(): void
    {
        /*  Make sure that the job creation form loads correctly
        and that the correct fields are displayed */

        $response = $this->get('/job/new-job');

        $response->assertStatus(200);

        $response->assertSee('Create a new job listing');

        $response->assertSee('Job Title');

        $response->assertSee('Job Description');

        $response->assertSee('Create Job');

    }
}
