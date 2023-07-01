<link rel="stylesheet" type="text/css" href="{{asset('css/music-bar.css')}}">

<div class="bar">
    <div class="bar-start">
        <div class="logo-bar" style="background: url({{asset('img/albobz47nc4ic_600.jpg')}}); background-size: cover"></div>
        <p class="title-bar">name</p>
    </div>
    <div class="bar-middle">
        <audio controls class="player">
            <source src="{{'audio/glaza.mp3'}}" type="audio/mp3">
        </audio>
    </div>
    <div class="bar-middle">
        <i class='bx bx-play play-bar' onclick="playBeat()"></i>
        <i class='bx bx-pause pause-bar' onclick="pauseBeat()"></i>
    </div>
</div>

