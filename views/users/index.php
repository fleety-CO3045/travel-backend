<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <?php foreach($data as $item ){?>
        <p><?php echo $item['id'];?></p>   
        <p><?php echo $item['name'];?></p>   
    <?php }?>
</body>
</html>