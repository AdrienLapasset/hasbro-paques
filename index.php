<?php
function includeHeader($page)
{
  include("partials/header.php");
}
includeHeader('ishome')
?>

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class=" w-100">
    <h1>Pages :</h1>
    <div class="list-group">
      <a class="list-group-item list-group-item-action" href="home.php">Home</a>
    </div>
  </div>
</div>

</html>


<?php include 'partials/footer.php'; ?>
