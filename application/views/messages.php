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
        <?php echo base_url() ?>


        <?php echo form_open_multipart('controller/uploadphoto');?>

        <input type="file" name="userfile" size="20" />

        <input type="submit" value="upload" />

        </form>


        <form action="<?php echo base_url('index.php/controller/postmessage') ?>" method="POST">
            <input type="text" name="title">
            <input type="text" name="message"><input type="submit">
        </form>


        <h2><?php echo $title; ?></h2>
        <?php foreach ($messages as $message) { ?>
            <h3><?php echo $message->id ." ". $message->title ." ". $message->message; ?></h3>
        <?php }; ?>

        <?php foreach ($photos as $photo) { ?>
            <h3><?php echo $photo->id ." ". $photo->path . " " . $photo->type; ?></h3>
            <img src="<?php echo base_url('uploads/' . $photo->path);?>" alt="">
        <?php }; ?>

</body>
</html>
