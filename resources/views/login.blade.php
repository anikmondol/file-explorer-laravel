@extends("layout")

@section('title', "This is login page")


@section("main")

<h3>User login</h3>
<form action="">
    <input type="text" placeholder="enter name">
    <br>
    <br>
    <input type="email" placeholder="enter email">
    <br>
    <br>
    <input type="password" placeholder="enter password">
    <br>
    <br>
    <button>login</button>
</form>

@endsection
