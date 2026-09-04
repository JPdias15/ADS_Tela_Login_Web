<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           
            $database = 'pweb';
            $user = 'root';
            $password = 'root';
            $host = 'localhost';
            
            $conexao = mysqli_connect($host, $user, $password, $database);
            
        ?>
    </body>
</html>
