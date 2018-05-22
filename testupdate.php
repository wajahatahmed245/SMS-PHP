<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>



<?php

if(isset($_REQUEST['click'])== true)
{

    echo $_REQUEST['take'];
}
?>

<body>
<form action="" method ="post">    
<input name="take" type="text" value="ok">
<button type ="submit" name="click">click </button>
</form>

</body>
</html>