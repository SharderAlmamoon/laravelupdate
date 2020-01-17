<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
   <h1 align="center">EDITE_page</h1>

   <form action="<?php echo url('tableview/update',$hh->id)?>" method="post">
       <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
       <input type="hidden" name="_method" value="put">
       <label for="">NAME</label>
       <input type="text" value="<?php echo $hh->name?>" name="name">
       <br><br>
       <label for="">PRICE</label>
       <input type="text" value="<?php echo $hh->price?>" name="price">
       <br><br>
       <label for="">DETAILS</label>
       <input type="text" value="<?php echo $hh->details?>" name="details">
       <br><br>
       <button type="submit">StOrE</button>
   </form>
</body>
</html>
