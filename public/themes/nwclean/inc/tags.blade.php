<div class="tags">
    <ul>
        <li><i class="icon-tags"></i></li>
        @foreach ($post->tags as $item)
            @if ($item->tag != "")
                <li><a href="{{ wardrobe_url('/tag/'.$item->tag) }}">{{ $item->tag }}</a></li>
            @endif
        @endforeach
    </ul>
</div>
