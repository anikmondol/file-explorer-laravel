<div>
    <h1>students list</h1>
    {{-- <form action="search" method="get">
        <input type="text" placeholder="Search with name" name="search" value="{{ @$search }}">
        <button>Search</button>
    </form>
    <form action="delete-multiple" method="POST">
        @csrf
        <button>Delete</button>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>section</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Operation</th>
            </tr>
            @php $rowNumber = 1; @endphp
            @foreach ($students as $student)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $student->id }}"></td>
                    <td>{{ $rowNumber++ }} . {{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a style="margin: 0px 2px;" href="{{ 'delete/' . $student->id }}">Delete</a>
                        <a style="margin: 0px 2px;" href="{{ 'edit/' . $student->id }}">Edit</a>
                        <a style="margin: 0px 2px;" href="{{ 'addStudent' }}">Add</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </form>
    {{ $students->links() }} --}}

</div>
{{-- 
<style>
    .w-5.h-5 {
        width: 20px;
    }
</style> --}}
