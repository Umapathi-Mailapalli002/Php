<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button click</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" vlalu="btn1">Click</button>
    </form>
</body>
</html>

<?php 
if (isset($_POST['button'])) {
    btn_clicked();
}
function btn_clicked(){
    echo "Button is clicked";
}
?>