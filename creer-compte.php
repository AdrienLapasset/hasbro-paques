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
    <p class="mentions">* Mentions obligatoires</p>
    <label class="checkbox-container">
      J’ai lu et j’accepte le règlement du jeu*
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    <label class="checkbox-container">
      J’accepte que mes données personnelles soient utilisées dans
      le cadre du jeu*
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    <p class="mentions">Take Off, société de gestion, prestataire de services, met en œuvre des traitements de données à caractère personnel ayant pour finalités la conservation des preuves d’achats, la gestion et le suivi de l’organisation de l’opération du jeu, la vérification et le contrôle du respect des dispositions du règlement du jeu, l’analyse de la régularité de la participation, la gestion de la relation avec les participants et gagnants, la désignation des gagnants et la remise des lots, le pilotage, le reporting et les statistiques. Vous disposez d’un droit d’accès, de rectification, de portabilité, d’effacement de vos données à caractère personnel et de limitation du traitement de vos données ainsi que d’un droit d’opposition et du droit de définir des directives relatives à la conservation, à l’effacement et à la communication de vos données à caractère personnel. Pour en savoir plus sur la protection de vos données, consultez l’article 12 du règlement.</p>
    <button type="submit" class="btn btn-yellow mx-auto mt-4">Valider</button>
  </form>
</main>

<?php include 'partials/footer.php'; ?>
