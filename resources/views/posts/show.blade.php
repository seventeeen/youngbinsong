@extends ('layouts.master')


@section ('content')
    <div class="main-width">
        <div>title:</div>
        <div>{{ $post->title }}</div>
        <br/>
        <div>body:</div>
        <div>{{ $post->body }}</div>
        <br/>
        <div>created at:</div>
        <div>{{ $post->created_at->toFormattedDateString() }}</div>
    </div>
@endsection