<?php
function includeHeader($noNav)
{
  include("partials/header.php");
}
includeHeader('no-nav')
?>

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class=" w-100">
    <h1>Pages :</h1>
    <div class="list-group">
      <a class="list-group-item list-group-item-action" href="home.php">Home</a>
      <a class="list-group-item list-group-item-action" href="mon-compte.php">Mon compte</a>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
