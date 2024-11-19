<div>
    <h1>Add new Student</h1>
    {{-- <form action="/edit-student/{{$student->id}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put" id="{{$student->id}}">
        <input type="text" name="name" value="{{$student->name}}" placeholder="enter name">
        @if ($errors->has('name'))
            <span style="color: red; font-size: 14px;">{{ $errors->first('name') }}</span>
        @endif
        <br>
        <br>
        <input type="email" name="email" value="{{$student->email}}" placeholder="enter email">
        @if ($errors->has('email'))
            <span style="color: red; font-size: 14px;">{{ $errors->first('email') }}</span>
        @endif
        <br>
        <br>
        <input type="text" name="phone" value="{{$student->phone}}" placeholder="enter phone">
        @if ($errors->has('phone'))
            <span style="color: red; font-size: 14px;">{{ $errors->first('phone') }}</span>
        @endif
        <br>
        <br>
        <button name="submit" type="submit">Submit</button>
        <button><a href="/list">Cancel</a></button>
    </form> --}}
</div>
