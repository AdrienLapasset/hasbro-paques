<?php
function includeHeader($nav)
{
  include("partials/header.php");
}
includeHeader('')
?>

<main class="creer-compte">
  <h1>Je crée mon compte</h1>
  <form class="g-form" action="">
    <input type="text" placeholder="Nom*">
    <img src="assets/icons/pen.svg" alt="">
    <input type="text" placeholder="Prénom*">
    <img src="assets/icons/pen.svg" alt="">
    <input type="email" placeholder="Adresse email*">
    <img src="assets/icons/pen.svg" alt="">
    <input type="text" placeholder="Numéro de téléphone*">
    <img src="assets/icons/pen.svg" alt="">
    <input type="text" placeholder="Adresse postale*">
    <img src="assets/icons/pen.svg" alt="">
    <div class="row">
      <div class="col-md-6">
        <input type="text" placeholder="Code postal*">
        <img src="assets/icons/pen.svg" alt="">
      </div>
      <div class="col-md-6">
        <input type="text" placeholder="Pays*">
        <img src="assets/icons/pen.svg" alt="">
      </div>
    </div>
    <p class="mentions-obligatoires">* Mentions obligatoires</p>
    <label class="checkbox-container">
      One
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    <label class="checkbox-container">two
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    <button type="submit" class="btn btn-yellow mx-auto mt-4">Valider les modifications</button>
  </form>
</main>

<?php include 'partials/footer.php'; ?>
