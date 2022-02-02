<?php
function includeHeader($nav)
{
  include("partials/header.php");
}
includeHeader('isNav')
?>

<main class="mon-compte">
  <h1>mon comtpe</h1>
  <form class="g-form" action="">
    <div class="input-container">
      <input type="text" placeholder="Nom">
      <img src="assets/icons/pen.svg" alt="">
    </div>
    <div class="input-container">
      <input type="text" placeholder="Prénom">
      <img src="assets/icons/pen.svg" alt="">
    </div>
    <div class="input-container mt-3">
      <input type="email" placeholder="Adresse email">
      <img src="assets/icons/pen.svg" alt="">
    </div>
    <div class="input-container">
      <input type="text" placeholder="Numéro de téléphone">
      <img src="assets/icons/pen.svg" alt="">
    </div>
    <div class="input-container mt-3">
      <input type="text" placeholder="Adresse postale">
      <img src="assets/icons/pen.svg" alt="">
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <div class="input-container">
          <input type="text" placeholder="Code postal">
          <img src="assets/icons/pen.svg" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-container">
          <input type="text" placeholder="Pays">
          <img src="assets/icons/pen.svg" alt="">
        </div>
      </div>
    </div>
    <input type="text" placeholder="Mot de passe actuel ">
    <input type="text" placeholder="Nouveau mot de passe ">
    <input type="text" placeholder="Confirmer le nouveau mot de passe ">
    <button type="submit" class="btn btn-yellow mx-auto mt-4">Valider les modifications</button>
  </form>
</main>

<?php include 'partials/footer.php'; ?>
