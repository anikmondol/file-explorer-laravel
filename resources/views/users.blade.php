<div>
    <h1>users lists</h1>
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
    <table border="1">
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
    </table>
</div>
