<?php
echo "hello world";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <button id="btn">mewo</button>
<script src="view/src/libs/functions.js"></script>

<script>
    let btn =document.getElementById('btn');
    btn.onclick =function(){
        request("POST","controller/loginController.php", "login", "mewo")
    }
</script>
</body>
</html>