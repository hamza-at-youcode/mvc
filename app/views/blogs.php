<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
</head>
<body>
    <?php foreach($data as $post): ?>
        <h2><?= $post['title'] ?></h2>
        <p><?= $post['text'] ?></p>
    <?php endforeach; ?>
</body>
</html>