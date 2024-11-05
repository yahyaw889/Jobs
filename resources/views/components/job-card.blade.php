@props(['job'])

<div class="bg-white/5 p-4 flex rounded-xl flex-col text-center border border-transparent hover:border-blue-700 group transition-colors duration-1000">
    <div class="self-start text-sm">
        {{ $job->employer->name }}
    </div>
    <div class=" text-sm py-8 ">
        <h3 class="group-hover:text-blue-600 transition-colors duration-1000 font-bold" >{{ $job->title }}</h3>
        <p class="text-sm mt-4">{{$job->schedule}} - {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag :$tag/>

            @endforeach

        </div>
        <div>
            <x-employer-img :employer="$job->employer" :width="40" />

        </div>
    </div>
</div>
