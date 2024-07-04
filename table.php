<html>
<head>
    <title>table</title>
</head>
    
    <body>
           <table border="1" cellspacing="0"  cellpadding="10">
            <tr>
                <td>Name</td>
                <td>Contact</td>
                <td> Password</td>
                <td>Email</td>
                <td>Gender</td>
                <td>Date</td>
                <td>Delete</td>
                <td>Update</td>
                
                </tr>

                                                               
  <?php
  $conn=mysqli_connect("localhost","root","","jazzy");
  if(!$conn){
      echo "error";
  }
  else{
      echo"<br>";
      echo "connected succesfully";
  }
  $a="SELECT * FROM table1";
  $b=mysqli_query($conn,$a);
  while($row=mysqli_fetch_assoc($b)){
    $name=$row["name"];
    $contact=$row["contact"];
    $password=$row["password"];
    $email=$row["email"];
    $gender=$row["gender"];
    $date=$row["date"];
    echo '<tr>
    <td>'.$name.'</td>
    <td>'.$contact.'</td>
    <td>'.$password.'</td>
    <td>'.$email.'</td>
    <td>'.$gender.'</td>
    <td>'.$date.'</td>
    <td><a href="delete.php?name='.$name.'">delete</a></td>
    <td><a href="update.php?name='.$name.'">update</a></td>
    </tr>';
  }
  ?>                                   
                                        
                                        
</body>
</html>                                      
                


