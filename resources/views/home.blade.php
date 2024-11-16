<div>
    <h1>Home page</h1>
    {{$name}}
    <h1>{{rand(1, 10)}}</h1>
    @foreach ($arr as $a)
        {{$a}}
        <br>
    @endforeach
    @if ($name == "anik")
    {{"ok"}}
    @else
    {{"no"}}
    @endif

</div>
