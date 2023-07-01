<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beats</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/beats.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

@include('blocks.header')

<section class="beats">
    @foreach($beats as $beat)
    <div class="beat" style="background: url({{asset($beat->cover)}}); background-size: cover">
        <div class="black">
            <i class='bx bx-play play' onclick="playBeat()"></i>
            <i class='bx bx-pause pause' onclick="pauseBeat()" style="display: none"></i>
            <audio controls style="width:100%; display: none" id="audio">
                <source src="{{asset($beat->audio)}}" type="audio/mp3">
            </audio>
        </div>
    </div>
        @include('blocks.music-bar')
    @endforeach
</section>


</body>
</html>

<script src="{{asset('js/jquery-v3.7.0.min.js')}}"></script>
<script>
    audio = document.getElementById("audio");
    play = $('.play')
    pause = $('.pause')
    bar= $('.bar')

    function playBeat(){
        audio.play();
        play.hide()
        pause.show()
        bar.css("display", "flex").hide().show();
    }

    function pauseBeat(){
        audio.pause();
        pause.hide()
        play.show()
    }
</script>
