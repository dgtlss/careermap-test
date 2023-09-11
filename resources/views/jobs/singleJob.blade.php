@extends('layouts.app')
@section('content')
<div id="singleJobPage">
    <div class="max-w-7xl mx-auto w-full mt-8">
        <div class="jobcard w-full rounded-md shadow-md bg-white border border-gray-200">
            <div class="cardheader w-full bg-gradient-to-t from-indigo-800 to-indigo-600 rounded-t-md h-[100px] p-12"></div>
            <div class="jobinfo p-4">
                <div class="w-full">
                    <h1 class="text-2xl font-semibold">{{$job->title}}</h1>
                </div>
                <div class="mt-4 w-full">
                    <p class="text-sm text-gray-500">
                        {!!nl2br(e($job->description))!!}
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection