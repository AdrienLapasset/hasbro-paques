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
    <p>Merci,<br />
      pour pouvez maintenant remplir
      vos grilles dans l’onglet « mes grilles »
      ou revenir le faire plus tard.</p>
  </div>
  <button class="btn btn-primary mx-auto">Ajouter un ticket</button>
</main>

<?php include 'partials/footer.php'; ?>
