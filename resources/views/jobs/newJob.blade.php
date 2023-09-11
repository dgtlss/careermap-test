@extends('layouts.app')
@section('content')
<div id="newjoblistingform">
    <div class="max-w-7xl mx-auto w-full mt-8">
        <div class="w-full p-4">
            <h1 class="text-2xl font-semibold">Create a new job listing</h1>
        </div>
        <div class="w-full mt-4 border bg-gray-50 border-gray-200 rounded-md shadow-md p-4">
            <div class="w-full">
                <p>Enter your job information below to create a new listing on the job board</p>
            </div>
            <div class="w-full formarea mt-2">
                <div class="flex flex-col gap-2">
                    <div>
                        <label for="" class="text-xs text-gray-800">Job Title</label>
                        <input v-model="title" type="text" name="" class="w-full bg-white p-2 text-sm text-gray-800 rounded-md border border-gray-200" placeholder="Job Title" id="">
                    </div>
                    <div>
                        <label for="" class="text-xs text-gray-800">Job Description</label>
                        <textarea v-model="description" name="" id="" cols="30" rows="10" class="w-full bg-white p-2 text-sm text-gray-800 rounded-md border border-gray-200 resize-none" placeholder="Write a brief description of your job"></textarea>
                    </div>
                    <div>
                        <div class="w-full flex items-center justify-end">
                            <div>
                                <button class="bg-green-600 text-white p-2 text-sm rounded-md border border-green-700 hover:bg-green-700 transition-all duration-200" v-on:click="createJob">
                                    Create Job
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection