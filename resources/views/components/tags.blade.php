@props( ['tag'])
<a href="/tags/{{strtolower($tag->name)}}" class="text-xs bg-white/10 hover:bg-white/25 py-2 px-4 rounded-full transition-colors font-bold duration-300 ">{{$tag->name}}</a>
