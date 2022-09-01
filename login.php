<?php require_once('includes/header.php') ?>
    <?php 
		if(isset($_GET['auth_error'])){
				echo "
                <div class='p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800' role='alert'>
					Wrong password or email! Try again
				</div>";
		}
	?>
<div class="container block max-w-lg mx-auto">
   <div class="container flex flex-wrap justify-between items-center mx-auto">
     <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="post" action="controllers/login.php">
           <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to your account</h5>
      <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required="">
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
        </div>
       
        <button type="submit" name="submit_login" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered? <a href="register.php" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
        </div>
    </form>
   </div>
  </div>
</div>
<?php require_once('includes/footer.php') ?>