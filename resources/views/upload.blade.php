<html>

<head>
    <title>upload files</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="{{ route('fileuploads') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" id="files" name="files[]" accept=".pdf" multiple
                class="form-control form-control-lg">
        </div><br><br>
        <div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>
