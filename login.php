<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body class="h-100 bg-secondary">
    <div class="d-flex container h-100">
        <div class="my-auto w-50 mx-auto rounded border bg-light p-2">
            <h1>Loging in</h1>
            <form class="mt-3" method="POST" action="users/login.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>email</label>
                    <input type="email" name="email" placeholder="Enter your email..." class="form-control">
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" placeholder="choose a password..." class="form-control">
                </div>
                <div class="form-group justify-content-end d-flex">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>