@extends('layouts.app')
@section('content')
<div id="joblist">
    <div class="w-full relative items-center min-h-56">
        <div class="absolute inset-0 bg-cover bg-center z-50 bg-indigo-600/60 w-full h-full backdrop-blur-sm"></div>
        <img src="/img/jobsplash_banner.jpg" class="w-full object-cover max-h-56 grayscale" alt="Career map job board">
    </div>
    <div class="max-w-7xl mx-auto w-full mt-8">
        <div class="max-w-7xl">
            <div class="w-full py-4">
                <h1 class="text-2xl font-semibold">Job Board</h1>
            </div>
        </div>
        <Transition>
            <div id="joblistContainer" class="mt-4 grid grid-cols-1 gap-4 mb-12" v-show="jobsLoading == false" v-cloak>
                <div class="joblisting w-full bg-white shadow-md rounded-md border border-gray-200 p-2 overflow-hidden hover:scale-105 hover:bg-indigo-100 hover:border-indigo-200 hover:shadow-indigo-200/50 transition-all duration-200" v-for="job in jobs">
                    <a :href='"/job/i/"+job.uid'>
                        <div class="flex flex-row gap-4 items-center">
                            <div class="flex-none">
                                <span class="inline-flex h-16 w-16 items-center justify-center rounded-sm bg-teal-700 capitalize">
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