<?php
function includeHeader($nav)
{
  include("partials/header.php");
}
includeHeader('')
?>

<main class="text-center">
  <h1>Je me connecte</h1>
  <form class="g-form input-grey" action="">
    <input type="email" placeholder="Adresse email">
    <input type="text" placeholder="Mot de passe">
    <a class="text-center" href="">J’ai oublié mon mot de passe</a>
    <button type="submit" class="btn btn-yellow mx-auto mt-5">Se connecter</button>
  </form>
</main>

<?php include 'partials/footer.php'; ?>
