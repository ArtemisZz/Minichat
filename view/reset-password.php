<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Reset password Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../styles/pagelogin.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="sidenav">
    <div class="login-main-text">
        <h2>Application<br> Reset Password Page</h2>
        <p>Reset password</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method="post" action="../controller/reset-password-controller.php">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="email" placeholder="Username or Email">
                </div>

                <button type="submit" class="btn btn-black">Send reset password to mail</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>