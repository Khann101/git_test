<?php
    $zahl1 = $_POST['zahl1'];
    $zahl2 = $_POST['zahl2'];
    
    echo $zahl1."+".$zahl2."=";
    echo $zahl1+$zahl2;
    
    $host="localhost";
    $username="root";
    $password="";
    $db_name="Berechnungen";
    $tbl_name="Rechnen";

    mysqli("$host", "$username", "$password")or die("cannot connect server");
    mysql_select_db("$db_name")or die("cannot select DB");

    $sql="INSERT INTO $tbl_name(zahl1, zahl2)VALUES('$zahl1', '$zahl2')";
    $result=mysql_query($sql);
    
?>