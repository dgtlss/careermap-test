@extends('layouts.app')
@section('content')
<div id="joblist">
    <div class="max-w-7xl mx-auto w-full mt-8">
        <div class="w-full p-4">
            <h1 class="text-2xl font-semibold">Job Board</h1>
        </div>
        <Transition>
            <div id="joblistContainer" class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4" v-show="jobsLoading == false" v-cloak>
                <div class="joblisting w-full bg-white shadow-md rounded-md border border-gray-200 p-2 overflow-hidden" v-for="job in jobs">
                    <a :href='"/job/i/"+job.uid'>
                        <div class="flex flex-row gap-4 items-center">
                            <div class="flex-none">
                                <span class="inline-flex h-16 w-16 items-center justify-center rounded-sm bg-indigo-500 capitalize">
                                    <span class="text-xl font-medium leading-none text-white">@{{striptitleInitial(job.title)}}</span>
                                </span>
                            </div>
                            <div class="flex-1 overflow-hidden">
                                <h3 class="jobtitle font-semibold text-lg">@{{job.title}}</h3>
                                <div class="w-full truncate max-w-full text-sm font-normal text-ellipsis overflow-hidden ">
                                    @{{job.description}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </Transition>
    </div>
</div>
@endsection