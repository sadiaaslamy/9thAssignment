<?php
$edit_post = null;

if (isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];

   $post_query = "SELECT * FROM posts WHERE id=${id}";
   
   $post_result = $db->query($post_query);

   $edit_post= $post_result->fetch_assoc();
   
}
?>



<div class="continar">
<form action="post_controller.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo ($edit_post) ? $edit_post['id'] : ''?>">
  <h2 class="title">Details</h2>
  <table>
    <tr>
            <td>ID</td>
            <td>
                <input type="number" name="id" value="<?php echo($edit_post) ? $edit_book['id'] : '' ?>">
            </td>
        </tr>

        <tr>
            <td>Description</td>
            <td>
                <input type="text" name="description" value="<?php echo($edit_post) ? $edit_post['description'] : '' ?>">
            </td>
        </tr>
        
        <tr>
            <td>Published Date</td>
            <td>
                <input type="date" name="created_at" value="<?php echo($edit_post) ? $edit_post['created_at'] : '' ?>">
            </td>
        </tr>
    
        <tr>
            <td>Image</td>
            <td>
                <input type="file" name="image">
                <br>
                <img src="storage/products/<?php echo $edit_post['image'] ?>" alt="">
                
                <?php  ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <div class='buttons'>
                <button class="save"type="submit" name="<?php echo ($edit_product) ? 'update_post' : 'insert_post' ?>"> Save</button>
                <button class="cancel"name="<?php header('location: addPost.php'); ?>">Cancel</button>
                </div>
            </td>
        </tr>

        
    </table>
</form>
</div>