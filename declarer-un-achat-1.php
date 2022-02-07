<?php
function includeHeader($nav)
{
  include("partials/header.php");
}
includeHeader('isNav')
?>

<main class="declarer-un-achat">
  <h1>Je déclare un achat </h1>
  <form class="g-form" action="">
    <div class="bloc-ticket">
      <h2>Ticket 1</h2>
      <div class="d-flex flex-column flex-sm-row align-items-center mb-2">
        <p>Nombre d’achats sur le ticket de caisse </p>
        <select class="select-number" name="" id="">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
      <select class="mb-4" name="" id="">
        <option value="">ENSEIGNE DE L’ACHAT</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
      <input type="text" placeholder="Code-barres produit 1">
      <input type="text" placeholder="Code-barres produit 2">
      <input type="file" id="file-1">
      <label for="file-1" class="btn btn-red mx-auto mt-3">
        Uploader mon ticket <span class="d-none d-sm-inline">&nbsp;/ ma facture</span>
      </label>
    </div>
    <button type="submit" class="btn btn-yellow mx-auto">Valider</button>
  </form>
</main>

<?php include 'partials/footer.php'; ?>
