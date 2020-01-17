<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table</title>
</head>
<body>
  <h1 align="center">VIEW TABLE</h1>
  <br><br><br>
  <a href="<?php echo url('tableview/create')?>">CLICK_INSERT</a>
  <br><br>
<table border="2" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>DETAILS</th>
        <th>OPTION</th>
    </tr>
    <?php foreach ($name as $item){?>
    <tr>
        <td><?php echo $item->id?></td>
        <td><?php echo $item->name?></td>
        <td><?php echo $item->price?></td>
        <td><?php echo $item->details?></td>
        <td>
            <a href="<?php echo url('tableview/edit',$item->id); ?>">Edit</a>
            ||
            <form action="<?php echo url('tableview/delete',$item->id)?>" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
                <input type="hidden" name="_method" value="delete">
                <button type="submit">Delete</button>
            </form>

        </td>
    </tr>
    <?php }?>
</table>


</body>
</html>
