<?php
  session_start();
  if(isset($_SESSION['authTweet'])){
    header('Location: ../account/account.php?id=' . $_SESSION['authTweet']['idUSer']);
  }
  require_once "../php/init3.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link href="../../tailwind/tailwind.css" rel="stylesheet">
	<title>Inscription</title>
	<meta charset="utf-8">
</head>

<body>

  
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="" alt="Workflow">

    </div>
    <form class="mt-8 space-y-6" action="../php/handle_inscription.php" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md space-y-6">
        <div>
            <label for="name" class="sr-only">Nom complet</label>
            <input id="name" name="name" type="text" autocomplete="name"  class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nom complet">
        </div>
        <div>
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email"  class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
        </div>
        <div>
            <label for="pseudo" class="sr-only">Pseudo</label>
            <input id="pseudo" name="pseudo" type="text" autocomplete="pseudo"  class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Pseudo">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password"  class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
        </div>
        <div>
          <label for="password-confirm" class="sr-only">Confirmation Password</label>
          <input id="password-confirm" name="password-confirm" type="password" autocomplete="current-password"  class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirmation Password">
        </div>
        <div>
          <label for="localisation" class="sr-only">Ville</label>
          <input id="localisation" name="localisation" type="text" autocomplete="localisation"  class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Votre ville">
        </div>
        <div>
          <label for="birth-date" class="sr-only">Date de naissance</label>
          <input id="birth-date" name="birth-date" type="date" autocomplete="birth-date"  class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>
        
        <!-- <div>
          <select class="bg-gray-300 w-24 h-7 rounded px-2" name="day">
            <option value="">Jour</option>
            <option value="">1</option>
            <option value="">31</option>
          </select>
          <select class="bg-gray-300 w-24 h-7 rounded px-2" name="month">
            <option value="">Mois</option>
            <option value="">1</option>
            <option value="">31</option>
          </select>
          <select class="bg-gray-300 w-36 h-7 rounded px-2" name="year">
            <option value="">Année</option>
            <option value="">2021</option>
            <option value="">1901</option>
          </select>
        </div> -->
      </div>

      <div class="flex items-center justify-between">
        <!-- <div class="flex items-center">
          <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
          <label for="remember_me" class="ml-2 block text-sm text-gray-900">
            Remember me
          </label>
        </div> -->

        <div class="text-sm">
            Vous avez déjà un compte ?
          <a href="../connexion/connexion.php" class="font-medium text-indigo-600 hover:text-indigo-500">
            Se connecter
          </a>
        </div>
      </div>

      <div>
        <button name="forminscription" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Sign up
        </button>
      </div>
      <?php
        if(isset($_GET['error'])){
      ?>
        <div>
          <p style="color:red">
            <?= $listError[$_GET['error']] ?>
          </p>
        </div>
      <?php
        }
      ?>
    </form>
  </div>
</div>





</body>
</html>
