<div>
    {{-- @include('common.inner', ['page'=>"this is home page"]) --}}
   <x-message-banner msg="User singup Successfully" class="success" />
   <x-message-banner msg="User singup Successfully" class="success" />
   <br>
   <br>
   <br>
   <x-message-banner msg="try agin" class="error" />
    <h1>Home page</h1>
    @include('common.header')
    {{-- {{$name}}
    <h1>{{rand(1, 10)}}</h1>
    @foreach ($arr as $a)
        {{$a}}
        <br>
    @endforeach
    @if ($name == "anik")
    {{"ok"}}
    @else
    {{"no"}}
    @endif --}}

    <style>
        .success {
            background-color: lawngreen;
            color: green;
            padding: 3px 10px;
            border-radius: 2px;
            display: inline-block;
            margin: 10px;
        }

        .error {
            background-color: rgb(198, 111, 111);
            color: red;
            padding: 3px 10px;
            border-radius: 2px;
            display: inline-block;
            margin: 10px;
        }
    </style>

</div>
