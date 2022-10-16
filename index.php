<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <title>José Manuel Díaz PHP</title>
</head>
<body>
    <h1>José Manuel Díaz PHP</h1>
    <p>
        <?php
        $codigo = hash('sha256', 'José Manuel Díaz');
        echo ("The SHA256 hash of \"José Manuel Díaz\" is $codigo");
        ?>
    </p>
    <p>
        ASCII ART:
    </p>
    <pre>
           ****
            **
            **
            **
    ****    **
     **     **
     *********
    </pre>
    <p>
        <a href="http://localhost/WA4E/fail.php">Click here to check the error setting</a>
        <br>
        <a href="http://localhost/WA4E/check.php">Click here to cause a traceback</a>
    </p>
</body>