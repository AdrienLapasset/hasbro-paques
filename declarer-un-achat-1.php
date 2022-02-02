<?php
function includeHeader($nav)
{
  include("partials/header.php");
}
includeHeader('isNav')
?>

<main class="declarer-un-achat">
  <h1>Je déclare un achat </h1>
  <div class="bloc-ticket">
    <h2>Ticket 1</h2>
    <p>Nombre d’achats sur le ticket de caisse </p>
    <form class="g-form" action="">
      <input type="text" placeholder="Nom*">
      <input type="text" placeholder="Nom*">
      <input type="text" placeholder="Nom*">
      <button type="submit" class="btn btn-yellow mx-auto mt-4">Valider</button>
    </form>
  </div>
</main>

<?php include 'partials/footer.php'; ?>
