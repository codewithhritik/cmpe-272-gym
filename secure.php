<?php
    $users = ["Hrithik Bagane", "Richard Sinn", "Alex Bington"];
    $loggedIn = false;
    $message = "";

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check for the admin credentials
        if($username === 'admin' && $password === 'admin') {
            $loggedIn = true;
        } else {
            $message = 'Invalid credentials!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen font-sans">

<!-- Navbar -->
<section class="w-full px-8 text-gray-700 bg-white">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <div class="relative flex flex-col md:flex-row">
            <a href="./index.html" class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">FlexiFit<span class="text-indigo-600">.</span></span>
            </a>
            <nav class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                <a href="./index.html" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Home</a>
                <a href="./about.html" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">About</a>
                <a href="./services.html" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Services</a>
                <a href="./news.html" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">News</a>
                <a href="./contact.php" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Contact</a>
                <a href="./secure.php" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Secure</a>
            </nav>
        </div>
    </div>
</section>

<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-1/3 bg-white p-6 rounded-lg shadow-md">

        <?php if(!$loggedIn): ?>
        <h1 class="text-xl font-semibold mb-5">Administrator Login</h1>

        <?php if($message): ?>
        <p class="text-red-500 mb-4"><?= $message ?></p>
        <?php endif; ?>

        <form action="secure.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required class="mt-2 p-2 w-full rounded-md border border-gray-300">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required class="mt-2 p-2 w-full rounded-md border border-gray-300">
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white p-2 rounded-md hover:bg-blue-600">Login</button>
            </div>
        </form>

        <?php else: ?>

        <h1 class="text-xl font-semibold mb-5">Current Users</h1>

        <ul class="list-disc pl-5">
            <?php foreach($users as $user): ?>
            <li><?= $user ?></li>
            <?php endforeach; ?>
        </ul>

        <?php endif; ?>

    </div>
</div>

</body>
</html>