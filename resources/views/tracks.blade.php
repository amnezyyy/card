<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>credits</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/tracks.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

@include('blocks.header')

<section class="tracks">
    @foreach($tracks as $track)
    <a href="{{$track->link}}" class="cover" style="background: url({{asset($track->cover)}}); background-size: cover;">
        <div class="black">
            <i class='bx bx-play play'></i>
        </div>
    </a>
    @endforeach
</section>

</body>
</html>
