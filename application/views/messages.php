<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
        <h1>TEST</h1>

        <form action="controller/post" method="POST">
            <input type="text"><input type="submit">
        </form>

        <h2><?php echo $title; ?></h2>
        <?php foreach ($messages as $message) { ?>
            <h3><?php echo $message->id ." ". $message->message; ?></h3>
        <?php }; ?>

</body>
</html>
