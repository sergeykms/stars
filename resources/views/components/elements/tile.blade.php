{{--@props(['link' => '$link',--}}
{{--'image' => '$image'--}}
{{--])--}}

<a class="tile" href="{{$link}}">
    <img class="tile__image-block" src="{{ $image }}" alt=""/>
    <div class="tile__text-block">
        <p class="tile__text">{{ $slot }}</p>
    </div>
</a>
