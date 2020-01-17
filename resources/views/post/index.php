<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Postdocumentview</title>
</head>
<body>

<h1 align="center">POST VIEW TABLE METHOD!</h1>

<!--TABLE HERE-->
<table border="2" cellpadding="10" >
    <tr align="center">
        <th>ID</th>
        <th>TITLE</th>
        <th>DETAILS</th>
        <th>OPTIONS</th>
    </tr>
    <?php foreach($blogs as $pp){?>
    <tr align="center">
        <td><?php echo $pp->id?></td>
        <td><?php echo $pp->heading?></td>
        <td><?php echo $pp->body?></td>
        <td>
            <a href="<?php echo url('post/edit',$pp->id)?>">Edit</a>
            ||
            <a href="<?php echo url('post/delete',$pp->id)?>">Delete</a>
        </td>
    </tr>
    <?php }?>
</table>

</body>
</html>
