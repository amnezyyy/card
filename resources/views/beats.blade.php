<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/beats.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <title>beats</title>
</head>
<body>

@include('blocks.header')



{{--<form action="{{url('/add_beat')}}" method="post">--}}
{{--    <button type="submit"></button>--}}
{{--</form>--}}


{{--<section class="beats">--}}
{{--    @foreach($beats as $key => $beat)--}}
{{--    <div class="beat" style="background: url({{asset($beat->cover)}}); background-size: cover">--}}
{{--        <div class="black">--}}
{{--            <p class="beat-name">{{$beat->name}}</p>--}}
{{--            <div class="btn">--}}
{{--                <i class='bx bx-play play' onclick="playBeat({{$key}})"></i>--}}
{{--                <i class='bx bx-pause pause' onclick="pauseBeat({{$key}})" style="display: none"></i>--}}
{{--                <a href="https://www.youtube.com/watch?v=zIL-kiHiQUU" target="_blank"><i class='bx bx-link link'></i></a>--}}
{{--            </div>--}}
{{--            <p class="beat-tags">{{$beat->tags}}</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--        @include('blocks.music-bar')--}}
{{--    @endforeach--}}
{{--</section>--}}

<script src="{{asset('js/jquery-v3.7.0.min.js')}}"></script>
<script>

    audio = $('.audio')
    play = $('.play')
    pause = $('.pause')
    bar= $('.bar')
    black = $('.black')

    function playBeat(id){
        audio.eq(id).trigger('play')
        play.eq(id).hide()
        pause.eq(id).show()
        bar.eq(id).css("display", "flex").show()
        black.eq(id).css("display", "flex").show()
    }

    function pauseBeat(id){
        audio.eq(id).trigger('pause')
        pause.eq(id).hide()
        play.eq(id).show()
    }
</script>
</body>
</html>
