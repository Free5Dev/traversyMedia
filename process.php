<?php 
// connect a database
$conn = mysqli_connect('localhost', 'root','',  'ajaxtest');

echo "Processing ...";
// check for POST variable
if(isset($_POST['name'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST: Your name is '.$_POST['name'];
    $query="INSERT INTO ajaxtable(name) VALUES('$name')";
    if(mysqli_query($conn, $query)){
        echo 'User Added...';
    }else{
        echo "Error:".mysqli_error($conn);
    }
}
// check for GET variable
if(isset($_GET['name'])){
    echo 'GET: Your name is '.$_GET['name'];
}