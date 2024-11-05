@props(['job'])


<div class="bg-white/5 p-4 flex rounded-xl gap-x-6 border border-transparent hover:border-blue-700 group  transition-colors duration-1000">
    <div>
        <x-employer-img :employer="$job->employer" :width="100" />
    </div>

        <div class=" flex-1 flex flex-col">

            <a href="#" class="text-sm text-gray-400">{{$job->employer->name}}</a>
            <h3 class="text-xl mt-3 group-hover:text-blue-600 transition-colors duration-1000">{{$job->title}}</h3>
            <p class="text-sm text-gray-500 mt-auto">{{$job->schedule}} - {{$job->salary}}</p>

        </div>
        <div class="">
            @foreach ($job->tags as $tag)
            <x-tag :$tag />

            @endforeach
        </div>

</div>
