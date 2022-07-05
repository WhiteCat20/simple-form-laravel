<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @include('link.icon')
    <title>Admin Page</title>
</head>

<body>
    <h1 id="title" class="mt-3">newestProject Admin Page</h1>
    <div class="explanation">
        <p id="description">this is the admin page, goodluck</p>
    </div>
    <div class="table-card mx-auto p-3 rounded">
        <table class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Major</th>
                    <th scope="col">Reason</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($regists as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->major }}</td>
                        <td>{{ $item->reason }}</td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="/" class="admin-button text-center mt-3">
        Form
    </a>
    <script>
        function toggleZoomScreen() {
            document.body.style.zoom = "75%";
        }
        toggleZoomScreen()
    </script>
</body>

</html>
