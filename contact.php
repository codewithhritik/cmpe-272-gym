<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
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
                    <a href="./contact.html" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Contact</a>
                </nav>
            </div>

        </div>
    </section>

    <?php ?>

    <section class="box-border py-8 leading-7 text-gray-900 bg-white border-0 border-gray-200 border-solid sm:py-12 md:py-16 lg:py-24">
        <div class="box-border max-w-6xl px-4 pb-12 mx-auto border-solid sm:px-6 md:px-6 lg:px-4">
            <div class="flex flex-col leading-7 text-gray-900">
                <h2 class="box-border m-0 text-3xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
                    Connect with us
                </h2>
                <p class="box-border mt-4 text-2xl leading-normal text-gray-500 border-solid">
                    Our reps are at your service
                </p>
            </div>

            <?php 
            
                $file_path = 'contacts.txt'; // Path to your contacts file

                if (file_exists($file_path)) {
                    $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                    echo '<div class="flex flex-wrap gap-4 mt-10">';

                    foreach ($lines as $line) {
                        list($name, $email, $phone) = explode(', ', $line);
                        echo '<div class="flex-none w-full p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 md:w-1/4 cursor-pointer">';
                        echo "<h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900'>$name</h5>";
                        echo "<p class='font-normal text-gray-900 dark:text-gray-400'>Email: $email</p>";
                        echo "<p class='font-normal text-gray-900 dark:text-gray-400'>Phone: $phone</p>";
                        echo '</div>';
                    }

                    echo '</div>';
                } else {
                    echo "<div class='p-4 m-2 bg-red-100 border border-red-400 text-red-700 border rounded'>Contacts file not found!</div>";
                }

            ?>
        </div>
    </section>
</body>
</html>