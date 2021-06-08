<?php
  session_start();
  if(isset($_SESSION['authTweet'])){
    header('Location: index.php?p=profil');
    //header('Location: ../../Touitte/touitte.php');
    die();
  }
  require_once "Profil/php/init2.php";
?>

<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 w-full">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="data:image/png;base64,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" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
      Connectez-vous à votre compte
      </h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Ou
        <a href="Profil/inscription/inscription.php" class="font-medium text-indigo-600 hover:text-indigo-500">
          Vous n'avez pas de compte ? 
        </a>
      </p>
    </div>
    <form class="mt-8 space-y-6" action="Profil/php/handle_connexion.php" method="POST">
      <input type="hidden" name="remember" value="true">

      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="email-address" class="sr-only">Addresse e-mail</label>
          <input id="email-address" name="email" type="text" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Addresse e-mail ou pseudo ">
        </div>

        <div>
          <label for="password" class="sr-only">Mot de passe</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Mot de passe">
        </div>
      </div>

      <div class="flex items-center justify-between ">
        <div class="flex items-center">
          <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
          <label for="remember_me" class="ml-2 block text-sm text-gray-900">
            Se souvenir de Moi 
          </label>
        </div>

        <div class="text-sm">
          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
          Mot de passe oublié ? 
          </a>
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          S'identifier
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

