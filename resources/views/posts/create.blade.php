@extends ('layouts.master')


@section ('content')
    <form method="POST" action="/posts/store">
        {{ csrf_field() }}
        제목:<br>
        <input type="text" name="title"><br>
        글쓴이:<br>
        <input type="text" name="author"><br>
        내용:<br>
        <input type="text" name="body"><br><br>
        <input type="submit" value="Submit">
    </form>

    @include ('layouts.errors')
@endsection