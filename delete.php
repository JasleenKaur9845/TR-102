<?php
  $conn=mysqli_connect("localhost","root","","jazzy");
  if(!$conn){
      echo "error";
  }
  else{
      echo"<br>";
      echo "connected";
  }
 if(isset($_GET["name"])){
    $b=$_GET["name"];
    $sql="DELETE FROM table1 WHERE name='$b'";
     $a=mysqli_query($conn,$sql);
     if($a){
        echo"<br>";
        echo"successful";
     }else{
        echo"error";
     }


     } ?>