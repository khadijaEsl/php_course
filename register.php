<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <title>Register</title>
</head>

<body class="h-100 bg-secondary">
    <div class="d-flex container h-100">
        <div class="my-auto w-50 mx-auto rounded border bg-light p-2">
            <h1>Registering</h1>
            <form class="mt-3" method="POST" action="users/register.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>full name</label>
                    <input type="text" name="fullname" placeholder="Enter your fullname..." class="form-control">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" name="email" placeholder="Enter your email..." class="form-control">
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" placeholder="choose a password..." class="form-control">
                </div>
                <div class="form-group">
                    <label>confirm your password</label>
                    <input type="password" name="confirm_password" placeholder="confirm your password..." class="form-control">
                </div>
                <div class="form-group">
                    <label>Birth Date</label>
                    <input type="date" name="birth" placeholder="Enter your birth date..." class="form-control">
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <!-- <span class="input-group-prepend">
                        <span class="input-group-text">Picture</span>
                    </span> -->
                    <div class="custom-file">
                        <input name="picture" type="file" class="custom-file-input">
                        <label class="custom-file-label">Choose picture</label>
                    </div>
                </div>
                <div class="form-group justify-content-end d-flex">
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>