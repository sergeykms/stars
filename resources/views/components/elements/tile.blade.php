@props(['link' => '$link'])

<a class="tile" href="{{$link}}">
    <div class="tile__inner-block">
        <p class="tile__text">{{ $slot }}</p>
    </div>
</a>
