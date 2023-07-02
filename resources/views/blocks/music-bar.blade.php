<link rel="stylesheet" type="text/css" href="{{asset('css/music-bar.css')}}">

<div class="bar">
    <div class="bar-start">
        <div class="logo-bar" style="background: url({{asset($beat->cover)}}); background-size: cover"></div>
        <p class="title-bar">name</p>
    </div>
    <div class="bar-middle">
        <audio controls class="player audio">
            <source src="{{asset($beat->audio)}}" type="audio/mp3">
        </audio>
    </div>
    <div class="bar-middle">
        <i class='bx bx-play play-bar' onclick="playBeat()"></i>
        <i class='bx bx-pause pause-bar' onclick="pauseBeat()"></i>
    </div>
</div>

