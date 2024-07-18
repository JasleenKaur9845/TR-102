
<?php

$conn=mysqli_connect("localhost","root","","jazzy");
if(!$conn){
    echo "error";
}
else{
    echo"<br>";
    echo "connected succesfully";
}
$name = $_REQUEST['name'];
$contact = $_REQUEST['contact'];
$password= $_REQUEST['password'];
$email = $_REQUEST['email'];

$gender=$_REQUEST['gender'];
$date=$_REQUEST['date'];

// We are going to insert the data into our sampleDB table
$sql = "INSERT INTO table1 VALUES ('$name',
    '$contact','$password','$email','$gender','$date')";

     // Check if the query is successful
     if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

    } else{
        echo "ERROR: $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

   ?>



