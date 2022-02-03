<?php
function includeHeader($nav)
{
  include("partials/header.php");
}
includeHeader('isNav')
?>

<main class="declarer-un-achat">
  <h1>Je déclare un achat</h1>
  <div class="bloc-ticket feedback">
    <p>Vous avez atteint le nombre
      de grilles maximum !</p>
    <p>Vous pouvez maintenant remplir
      vos grilles dans l’onglet « mes grilles »
      ou revenir le faire plus tard.</p>
  </div>
</main>

<?php include 'partials/footer.php'; ?>
