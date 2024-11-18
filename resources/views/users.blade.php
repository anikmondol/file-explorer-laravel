<div>
    <h1>users lists</h1>
    <form action="/users" method="post">
        @csrf
        <input type="hidden" name="_method" value="delete">
        <input type="text" name="name" placeholder="enter name">
        <br>
        <br>
        <input type="email" name="email" placeholder="enter email">
        <br>
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>Submit</button>
    </form>
    {{-- <form action="/users" method="post">
        @csrf
        <input type="hidden" name="_method" value="patch ">
        <input type="text" name="name" placeholder="enter name">
        <br>
        <br>
        <input type="email" name="email" placeholder="enter email">
        <br>
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>Submit</button>
    </form> --}}
    {{-- <form action="/users" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" placeholder="enter name">
        <br>
        <br>
        <input type="email" name="email" placeholder="enter email">
        <br>
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>Submit</button>
    </form> --}}
    {{-- <form action="/users" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter name">
        <br>
        <br>
        <input type="email" name="email" placeholder="enter email">
        <br>
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>Submit</button>
    </form> --}}
    {{-- <form action="/users" method="GET">
        @csrf
        <input type="text" name="name" placeholder="enter name">
        <br>
        <br>
        <input type="email" name="email" placeholder="enter email">
        <br>
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>Submit</button>
    </form> --}}
    {{-- <table border="1">
        <tr>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        @endforeach
    </table> --}}
    {{-- {{print_r($users)}} --}}
    {{-- {{print_r($users)}} --}}
    {{-- <table border="1">
        <tr>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        @endforeach
    </table> --}}
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    {{-- <table border="1">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>city</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address->city}}</td>
        </tr>
        @endforeach
    </table> --}}
</div>
