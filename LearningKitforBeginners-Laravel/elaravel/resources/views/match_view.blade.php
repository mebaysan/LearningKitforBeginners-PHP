<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Match View</title>
</head>
<body>
<h1>Match View</h1>
<br>
<div>
    <p style="font-size: 20px;">Şu anki Request Methodu : <b><?php echo $_SERVER['REQUEST_METHOD']; ?></b></p>
</div>
<form action="" method="post">
    @csrf <!-- Formlar csrf token olmadan gönderilmiyor -->
    <input type="submit" value="Gönder">
</form>
</body>
</html>
