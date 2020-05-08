<?php

            $dbUser = "root";
            $dbPass = "";
            $server = "mysql:host=localhost; dbname=Livestock_Show";
            
            $conn = new pdo($server, $dbUser, $dbPass);

            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>