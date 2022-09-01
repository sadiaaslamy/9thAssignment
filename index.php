<?php
	require_once ('core/model.php');
	require_once ('core/Post.php');
	$post_model = new Post();

	$post_model->select();
	$posts = $post_model->get_posts_with_user();
?>
<?php require_once('includes/header.php') ?>
<?php foreach ($posts as $post) ?>
<div class="container block max-w-lg mx-auto">
	<div class="container flex flex-wrap justify-between items-center mx-auto">	
	<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
		
    <a href="#">
       <?php if($post['image']){
		     echo '<div>
			<img src="storage/posts/'. $post['image'] .'" />
				 </div>';} ?>
    </a>
    <div class="p-5">
        <h2>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo '<strong>'. $post['user_name'] .'</strong>' ?></h5>
		</h2>
		<p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php  echo '<p>'. $post['description'] .'</p>' ?></p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php  echo '<p>'. $post['created_at'] .'</p>' ?></p>
        
    </div>
</div>
</div>
	   </div>
<?php require_once('includes/footer.php') ?>