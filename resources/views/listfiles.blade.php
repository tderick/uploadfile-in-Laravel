<html>

<head>
    <title>List uploaded files</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Filname</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{ $file->filename }}</td>
                    <td><a href="{{ route('downloadfile', $file->id) }}" class="btn-sm btn-primary">Download</a>
                        <form method="post" action="{{ route('deletefile', $file->id) }}" style="display:inline">
                            @method('delete')
                            @csrf
                            <button type='submit' class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
