<div>
    <h1>Upload file</h1>
    <form action="upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>

</div>
