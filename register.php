<?php require_once('includes/header.php') ?>

<div class="container block max-w-lg mx-auto">
<div class="container flex flex-wrap justify-between items-center mx-auto">
<div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6" method="post" action="controllers/register.php">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Please Register here</h5>
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full Name</label>
            <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ahmad" required="">
        </div>
		<div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email Address</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="ahmad@gmail.com" required="">
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
        </div>
       
        <button type="submit" name="submit_register" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
        
    </form>
</div>
</div>
</div>
<?php require_once('includes/footer.php') ?>