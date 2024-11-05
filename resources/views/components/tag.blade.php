@props(['tag'])
<a href="/tags/{{ strtolower($tag->name)}}" class="text-2xs bg-white/10 hover:bg-white/25 py-1 px-3 rounded-full transition-colors font-bold duration-300 ">{{$tag->name}}</a>
