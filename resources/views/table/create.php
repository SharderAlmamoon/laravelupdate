<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSERT_OPTION</title>
</head>
<body>
<form action="<?php echo url('tableview/store')?>" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>" >
    <label for="">NAME</label>
    <input type="text" name="name">
    <br><br>
    <label for="">PRICE</label>
    <input type="text" name="price">
    <br><br>
    <label for="">DETAILS</label>
    <input type="text" name="details">
    <br><br>
    <button type="submit">StOrE</button>
</form>
</body>
</html>
