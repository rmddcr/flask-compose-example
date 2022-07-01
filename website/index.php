
<html>
    <head>
        <title>My APP</title>
    </head>

    <body>
        <h1>Welcome to my App</h1>
        <ul>
            <?php
            $json = file_get_contents('http://backend-service/');
            var_dump($json);

            ?>
        </ul>
    </body>
</html>