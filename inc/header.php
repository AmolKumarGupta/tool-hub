<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tool-hub Download free tools</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="theme-color" content=""/>
	<link rel="canonical" href=""/>
  <link rel="apple-touch-icon" sizes="180x180" href="<?= PATH ?>/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= PATH ?>/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= PATH ?>/assets/favicon/favicon-16x16.png">
	<!-- <link rel="manifest" href="assets/favicon/site.webmanifest"> -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="">
	<meta property="twitter:title" content="">
	<meta property="twitter:description" content="">
	<meta property="twitter:image" content="">
  <link rel="stylesheet" href="<?= PATH ?>/dist/style.css">
  <script src="<?= PATH ?>/src/js/index.js" defer></script>
</head>
<body class="dark:bg-gray-800 dark:text-gray-200">
<nav class="relative bg-sky-50 dark:bg-gray-700 sm:flex border-[1px] border-gray-200 dark:border-gray-500 z-50">
    <div class="w-screen p-2 flex flex-wrap rounded">
      <div class="grow flex gap-[2px] items-center">
        <div class="dark:text-gray-50">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"viewBox="0 0 16 16"><path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/></svg>
        </div>
        <h1 class="font-bold text-2xl dark:text-gray-200 font-serif">
          Tool hub
        </h1>
      </div>
      <div id="navBtn" class="flex-none flex justify-center items-center w-8 h-auto border-2 border-gray-300 dark:border-gray-500 rounded hover:border-gray-500 dark:hover:border-gray-300 focus:border-gray-500 dark:focus:border-gray-300 mr-1 sm:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
      </div>
    </div>
    <div id="navItems" class="hidden w-screen sm:block sm:mr-4 text-center dark:text-gray-100">
      <ul class="text-l sm:flex sm:justify-end sm:gap-1 sm:h-full sm:items-center ">
        <a href="<?= PATH ?>/index.php"><li class="py-2 px-2 border-[1px] border-gray-300 dark:border-gray-500 rounded sm:border-sky-50 dark:sm:border-gray-700 hover:bg-zinc-200 dark:hover:bg-gray-600 hover:border-sky-900 ">Home</li></a>
        <a href="<?= PATH ?>/products.php"><li class="py-2 px-2 border-[1px] border-gray-300 dark:border-gray-500 rounded sm:border-sky-50 dark:sm:border-gray-700 hover:bg-zinc-200 dark:hover:bg-gray-600 hover:border-sky-900">Apps</li></a>
        <a href="<?= PATH ?>/"><li class="py-2 px-2 border-[1px] border-gray-300 dark:border-gray-500 rounded sm:border-sky-50 dark:sm:border-gray-700 hover:bg-zinc-200 dark:hover:bg-gray-600 hover:border-sky-900">Articles</li></a>
        <a href="<?= PATH ?>/"><li class="py-2 px-2 border-[1px] border-gray-300 dark:border-gray-500 rounded sm:border-sky-50 dark:sm:border-gray-700 hover:bg-zinc-200 dark:hover:bg-gray-600 hover:border-sky-900 sm:w-max">Best Products</li></a>
        <?php
        if(isset($_SESSION['name'])){
          // echo '<a href="'. PATH . '/logout.php"><li class="py-2 px-2 border-[1px] border-gray-300 rounded sm:border-sky-50 hover:bg-zinc-200 hover:border-sky-900">Logout</li></a>';
          echo '<a class=""><li class="py-2 px-2 border-[1px] border-gray-300 dark:border-gray-500 rounded sm:border-sky-50 dark:sm:border-gray-700 hover:bg-zinc-200 dark:hover:bg-gray-600 hover:border-sky-900">
              <div class="group relative inline-block w-full h-full">
                <button id="username">'. $name .'</button>
                <div class="hidden group-hover:block absolute top-6 right-0 w-full sm:min-w-[120px] py-2 space-y-1 z-1 bg-sky-50 dark:bg-gray-600 border-2 border-gray-200 dark:border-gray-500 rounded">
                  <a href="'. PATH .'/user/profile.php" class="block">Profile</a><hr>
                  <a href="'. PATH .'/user/setting.php" class="block">Setting</a><hr>
                  <a href="'. PATH .'/logout.php" class="block">Logout</a>
                </div>
              </div>
            </li></a>';
        }else{
          echo '<a href="'. PATH .'/login.php"><li class="py-2 px-2 border-[1px] border-gray-300 dark:border-gray-500 rounded sm:border-sky-50 dark:sm:border-gray-700 hover:bg-zinc-200 dark:hover:bg-gray-600 hover:border-sky-900">Login</li></a>';
        }
        ?>
        <a href="<?= PATH ?>/"><li class="flex justify-center py-2 px-2 border-[1px] border-gray-300 dark:border-gray-500 rounded sm:border-sky-50 dark:sm:border-gray-700 hover:bg-zinc-200 dark:hover:bg-gray-600 hover:border-sky-900"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg></li></a>
        <li class="dark-mode-icon flex justify-center py-2 px-2 border-[1px] border-gray-300 dark:border-gray-500 rounded sm:border-sky-50 dark:sm:border-gray-700 hover:bg-zinc-200 dark:hover:bg-gray-600 hover:border-sky-900">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-auto icon" viewBox="0 0 16 16"><path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-auto icon icon-hidden" viewBox="0 0 16 16"><path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/><path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/></svg>
          <span class="ml-2 sm:hidden">Theme</span>
        </li>
      </ul>
    </div>
  </nav><!-- NAV ENDS -->