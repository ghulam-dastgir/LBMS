<?php
// Get Users
function get_user_count(){
    include("config.php");
    $sql="SELECT COUNT(*) AS total_users FROM users";
    $result = mysqli_query($conn,$sql) or die("Query Failed");
    while($row=mysqli_fetch_assoc($result)){
        $total_users=$row['total_users'];
    }
    return($total_users);
}
// Get Books
function get_total_books(){
    include("config.php");
    $sql="SELECT COUNT(*) AS total_books FROM books";
    $result = mysqli_query($conn,$sql) or die("Query Failed");
    while($row=mysqli_fetch_assoc($result)){
        $total_books=$row['total_books'];
    }
    return($total_books);
}
// Get Authors
function get_total_authors(){
    include("config.php");
    $sql="SELECT COUNT(*) AS total_authors FROM authors";
    $result = mysqli_query($conn,$sql) or die("Query Failed");
    while($row=mysqli_fetch_assoc($result)){
        $total_authors=$row['total_authors'];
    }
    return($total_authors);
}
// Get Categories
function get_total_category(){
    include("config.php");
    $sql="SELECT COUNT(*) AS total_category FROM category";
    $result = mysqli_query($conn,$sql) or die("Query Failed");
    while($row=mysqli_fetch_assoc($result)){
        $total_category=$row['total_category'];
    }
    return($total_category);
}
?>