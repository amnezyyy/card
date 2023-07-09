<link rel="stylesheet" type="text/css" href="{{asset('css/music-bar.css')}}">

<div class="bar">
    <div class="bar-start">
        <div class="logo-bar" style="background: url({{asset($beat->cover)}}); background-size: cover"></div>
        <div class="text-bar">
            <p class="title-bar">{{$beat->name}}</p>
            <p class="title-bar" style="font-size: .8rem">{{$beat->tags}}</p>
        </div>
    </div>
    <div class="bar-middle">
        <audio controls class="audio">
            <source src="{{asset($beat->audio)}}" type="audio/mp3">
        </audio>
    </div>
{{--    <div class="bar-end">--}}
{{--        <i class='bx bx-play play' style="font-size: 3rem; display: none" onclick="playBeat({{$key}})"></i>--}}
{{--        <i class='bx bx-pause pause'  style="font-size: 3rem" onclick="pauseBeat({{$key}})"></i>--}}
{{--    </div>--}}
</div>

