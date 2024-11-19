<div>
    <h1>students list</h1>
    <form action="search" method="get">
        <input type="text" placeholder="Search with name" name="search" value="{{@$search}}">
        <button>Search</button>
    </form>
    <table border="1">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>Operation</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>
                <a style="margin: 0px 2px;" href="{{'delete/'.$student->id}}">Delete</a>
                <a style="margin: 0px 2px;" href="{{'edit/'.$student->id}}">Edit</a>
                <a style="margin: 0px 2px;" href="{{'addStudent'}}">Add</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$students->links()}}

</div>

<style>
    .w-5.h-5{
        width: 20px;
    }
</style>
