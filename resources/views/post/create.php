<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>

<form action="<?php echo url('postview/store')?>">
    <label for="">Titile :</label>
    <input type="text" name="heading">
    <br><br>
    <label for="">Details :</label>
    <textarea name="body" id="" cols="30" rows="5"></textarea>
    <br><br>
    <button type="submit" style="margin-left: 120px">Store</button>
</form>
</body>
</html>
