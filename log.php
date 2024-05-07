<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/WebTest2/css/main.css">
</head>
<body>
    <?php require_once "blocks/header.php"?>
    
    <div class="feedback">
        <div class="container">
            <h2>Login</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form method="post" action="/WebTest2/lib/log.php">
                <div class="inline">
                    <div>
                        <label>Login</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <?php require_once "blocks/footer.php"?>
</body> 
</html>