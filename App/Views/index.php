<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index page</title>
</head>
<body>

    <b>Posts</b>

    <?php foreach ($this->data['posts'] as $singlePost): ?>
    <article>
        <h3><?php echo $singlePost->post_title; ?></h3>
        <p>
            <?php echo $singlePost->post_content; ?>
        </p>
        <hr>
    </article>
    <?php endforeach; ?>

</body>
</html>