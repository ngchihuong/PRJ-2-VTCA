<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            padding: 20px;
        }
        #header , #footer {
            background-color: yellow;
        }
    </style>
</head>
<body>
   <div id="header"></div>
    <div id="content">

        <img src="https://th.bing.com/th/id/OIP.BIZbOHp-Enot1H-jcLKYJgHaFX?w=220&h=181&c=7&r=0&o=5&dpr=1.3&pid=1.7"
            alt="logo">
        <?php 
        require_once "./mvc/views/pages/".$data["Pages"].".php";
        ?>
        
    </div>
    <div id="footer"></div>
</body>
</html>