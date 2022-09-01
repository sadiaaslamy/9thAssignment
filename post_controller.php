<?php

$connection = new mysqli('localhost:3307', 'root', 'root', 'codeproject');
if($connection->connect_error){
   die('no DB connection');
}

if(isset($_POST['insert_post'])){

   $id = $_POST['id'];
   $description = $_POST['description'];
   $created_at = $_POST['created_at'];

   $image_file = $_FILES['image'];
	$tmp_name = $image_file['tmp_name'];
	$image_name = $image_file['name'];

	move_uploaded_file($tmp_name, 'storage/products/'. $image_name);
   
   $query = "INSERT INTO posts (id,description,author,published_date,language,genres,pages,price,image) VALUES ('$id','$description','$created_at',";

   if($created_at){
       $query .= " '$created_at'";
   }else{
      $query .= "NULL";
   }
   
   $query .= ", '$image_name')";
   $connection->query($query);

   header('location: addPost.php');
   
}

else if(isset($_POST['update_post'])){

    $id = $_POST['id'];
   $description = $_POST['description'];
   $created_at = $_POST['created_at'];
    
   $image_query = "SELECT image FROM posts WHERE id=$id";
   $result = $connection->query($image_query);
   $image_product = $result->fetch_assoc();

   $image_name = $image_product['image'];

   if(isset($_FILES['image'])){
    unlink('storage/products/'. $image_name);

   $image_file = $_FILES['image'];
	$tmp_name = $image_file['tmp_name'];

	$image_name = $image_file['name'];
   move_uploaded_file($tmp_name, 'storage/products/'. $image_name);
   }


   $query = " UPDATE posts SET created_at='$created_at', image='$image_name' WHERE id=$id";
   
   $connection->query($query);
   
   header('location: addPost.php');
}

else if(isset($_GET['delete_id'])){

   $id = $_GET['delete_id'];
   $image_query = "SELECT image FROM posts WHERE id=$id";
   $result = $connection->query($image_query);
   $image_product = $result->fetch_assoc();

   unlink('storage/products/'. $image_product['image']);
	$query = " DELETE FROM posts WHERE id=$id";

	$connection->query($query);

	if($connection->error){
		echo $connection->error;
	}else{
		header('location: addPost.php');
	}
}