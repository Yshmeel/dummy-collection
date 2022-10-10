<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
    <div class="header">
        <h1>Some site</h1>
    </div>

    <div class="wrapper">
        <?php if(isset($_GET['error'])): ?>
            <div class="error"><span style="color: red;"><?= $_GET['error']; ?></span></div><br/>
        <?php endif; ?>
        <form action="/sso.php" method="POST">
            <div class="form-control">
                <label for="login">Login</label>
                <input type="text" name="login" id="login">
            </div>
            <div class="form-control">
                <label for="login">Password</label>
                <input type="text" name="password" id="password">
            </div>

            <div class="form-button">
                <button type="submit">Login!</button>
            </div>
        </form>
    </div>
</body>
</html>