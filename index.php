<?php
if(isset($_POST['generate'])){
     $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()?,.\'';
     $generated_password = substr(str_shuffle($charset), 0, 12);
}

?>
<form action="index.php" method="post">

    <input type="submit" name="generate" value="Generate" />
    <input type="text" value="<?php if(isset($generated_password)) echo $generated_password; ?>" size="35"/>

</form>