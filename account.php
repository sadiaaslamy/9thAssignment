<?php
session_start();
require_once 'helpers/functions.php';
require_once 'core/model.php';
require_once 'core/Post.php';


if(!is_authenticated()){
	header('location: login.php');
}

$post_model = new Post();
$posts = $post_model->select(['user_id' => $_SESSION['user']['id']]);

?>


<?php require_once('includes/header.php') ?>

<div class="container block max-w-2xl mx-auto">
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <div><a href="addPost.php">
    <button type="submit" name="insert_post" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add new record</button>
    </div></a>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
				   Description
                </th>
                <th scope="col" class="py-3 px-6">
				    Image
                </th>
                
            </tr>
        </thead>
        <tbody>
			<?php foreach ($posts as $post) ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo "<td>.{$post['id']}</td>." ?>
                </td>
                <td class="py-4 px-6">
				     <?php echo "<td>.{$post['description']}</td>." ?>
                </td>
                <td class="py-4 px-6 max-w-s">
                    <?php echo "<td>
									".( ($post['image']) ? '<img src="storage/posts/'. $post['image'] .'" />' : '<i>No Image</i>' )."
								</td>"?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>

<?php require_once('includes/footer.php') ?>