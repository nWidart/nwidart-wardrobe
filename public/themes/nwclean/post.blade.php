@extends(theme_view('layout'))

@section('content')
<div class="post">
    <h2 class="title"><a href="{{ url('/post/'.$post->slug) }}">{{ $post->title }}</a></h2>
    <div class="meta">
        <div class="date"><i class="icon-time"></i> {{ date("M/d/Y", strtotime($post->publish_date)) }}</div>
        @include(theme_view('inc/tags'))
    </div>
    <div class="cf"></div>
    <hr />
  <section class="content">
    {{ $post->parsed_content }}
  </section>
</div>
<hr />
<div class="comments">
    <!-- <h2 class="title">Comments</h2> -->
    {{ Disqus::comments() }}
</div>
@stop
