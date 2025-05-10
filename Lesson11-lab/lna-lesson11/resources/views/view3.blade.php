<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cấu trúc vòng lặp [foreach, forelse, while,...]</title>
</head>

<body>
    <h1>#Loops:Cấu trúc vòng lặp [foreach, forelse, while,...] </h1>
    <hr>
    @for ($i = 0; $i < 5; $i++)
        <p>The current values is{{ $i }}</p>
    @endfor
    <hr>
    @foreach ($name as $item)
        <p>This is item: <b>{{ $item }}</b></p>
    @endforeach
    <hr>
    @forelse ($user as $user)
        <li>{{ $user }}</li>
    @empty
        <p>No user</p>
    @endforelse
    @while ($i < 5)
        <p>Current @$i = {{ $i }}</p>
        @php
            $i++;
        @endphp
    @endwhile
    <hr>
    @foreach ($arr as $iteam)
        @if ($loop->first)
            @continue
        @endif
        @if ($loop->last)
            <p>This is the last iteration</p>
        @endif
        <li>{{ $item }}</li>
    @endforeach
</body>

</html>
