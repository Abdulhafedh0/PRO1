<?php
$db_server ="localhost";
$db_user = "root";
$db_pass = "";
$db_name = "testdb";
$conn ="";

try{
    $conn =mysqli_connect($db_server ,
                          $db_user,
                          $db_pass,
                         $db_name);
    echo   "you are conncting "."<br>"   ;                
}catch(mysqli_sql_exception){

    echo "you are not conncting ";
}




    // if($conn){
    //     echo "you are conncting ";
    // }else{
    //     echo "you are not conncting ";
    // }
 
?>