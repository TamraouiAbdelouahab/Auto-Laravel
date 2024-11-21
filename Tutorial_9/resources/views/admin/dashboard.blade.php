<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome to the Dashboard</h1>
        <form action="{{Route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger mt-3">
            Logout
            </button>
        </form>
    </div>
</body>
</html>