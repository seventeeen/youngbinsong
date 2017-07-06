@extends ('layouts.master')


@section ('content')
    <div class="main-width">
        @foreach ($posts as $post)
            <a href="posts/{{ $post->id }}">{{ $post->title }}</a><br/>
        @endforeach

        <a href="/posts/create" style="color: red;">글쓰기</a>
    </div>
@endsection