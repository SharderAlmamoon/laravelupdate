<form action="<?php echo url('post/update',$post->id) ?>" method="get">
    <label for="">HEADING</label>
    <input type="text" value="<?php echo $post->heading?>" name="heading">
    <label for="">BODY</label>
    <textarea name="body" id="" cols="30" rows="10"><?php echo $post->body?>
        <button type="submit">Update</button>


</form>
