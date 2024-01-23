<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>


    <title>@yield('title')</title>

    
</head>
<body>

    <header>
        <a class="btn btn-primary" href="/">Home</a>

        <button onclick="history.back()">Go Back</button>

        <nav>
            <ul>
                <li><a href="{{ route('student.index') }}">Naupang List</a></li>
                <li><a href="{{ route('user.index') }}">Zirtirtu List</a></li>
                <li><a href="{{ route('f') }}">Department</a></li>

                 <!-- Add more menu items as needed -->
            </ul>
        </nav>
    </header>

    @yield('content')

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
</body>
</html>