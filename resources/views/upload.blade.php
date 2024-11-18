<div>
    <h1>Upload file</h1>
    <form action="from" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload</button>
        <img src="{{ asset('/storage/images/0HYuNsfNjJEcSQtq6m8PJP41Uc64UQnUdtE0t0n1.jpg') }}" alt="">
    </form>

</div>
