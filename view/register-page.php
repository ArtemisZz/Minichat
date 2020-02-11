<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Login Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../styles/pagelogin.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="sidenav">
    <div class="login-main-text">
        <h2>Application<br> Register Page</h2>
        <p>Register from here to access.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-3 col-sm-12">
        <div class="login-form">
            <form method="post" action="../lib/process-register.php">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="login" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Pseudo</label>
                    <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
                </div>
                <div class="form-group">
                    <label>Birthday</label>
                    <input type="date" class="form-control" name="birthday" placeholder="Birthday">
                </div>
                <div class="form-group">
                    <label>Sex</label>
                    <select name="sexe">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="o">Other</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-black">Register</button>
                <a href="../controller/chat-controller.php"><button type="button" class="btn btn-black">Return</button></a>
            </form>
        </div>
    </div>
</div>
</body>
</html>