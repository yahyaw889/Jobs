@props(['employer' ,'width' => 90])
{{-- <img class="rounded-xl" src="{{asset( $employer->logo)}}" width="{{$width}}" alt="Company Logo"> --}}
<img class="rounded-xl" src="http://picsum.photos/seed/{{ rand(0,10000)}}/{{$width}}" alt="Company Logo">
