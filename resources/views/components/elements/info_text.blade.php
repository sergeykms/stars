@props(['content' => '$content', 'head' => '$head', 'id' => '$id'])

<div class="info__block">
    <button class="info__button" type="button" data-bs-toggle="collapse"
            data-bs-target="#{{$id}}" aria-expanded="true">
        {{ $head }}
    </button>
    <div class="accordion-collapse collapse" id={{$id}}>
        @php
            $items = explode("\n", $content);
            foreach ($items as $item) {
                if(strlen($item) > 50) {
                    echo "<p class='info__text'>$item</p>";
                } else {
                    echo "<h3 class='info__subtitle'>$item</h3>";
                }
            }
        @endphp
    </div>

</div>

