<div class="post">
    <div class="meta">
        <h2 class="title"><a href="{{ url('/post/'.$post->slug) }}">{{ $post->title }}</a></h2>
        <div class="date">{{ date("M/d/Y", strtotime($post->publish_date)) }}</div>
        <div class="cf"></div>
        @include(theme_view('inc.tags'))
    </div>
    <div class="cf"></div>
    <div class="content">
        {{ $post->parsed_content }}
    </div>
</div>
