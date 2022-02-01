<?php
function includeHeader($page)
{
  include("partials/header.php");
}
includeHeader('ishome')
?>

<div class="layout home">
  <img class="brand-logo" src="assets/imgs/logo.png" alt="">
  <a href="question-1.php" class="btn btn-primary d-none d-md-block mx-auto mb-5 mb-xl-0 mt-xxl-5">Jouer</a>
  <div class="mt-auto d-flex flex-column flex-xl-row-reverse justify-content-xl-end align-items-xl-end">
    <div class="align-self-center">
      <img width="400" class="d-block px-3 px-md-0 m-auto m-xl-0 img-fluid pb-md-4 pb-xl-0" src="assets/imgs/bloc-a-gagner.png" alt="">
    </div>
    <div class="d-none d-xl-block">
      <img class="img-fluid" width="800" src="assets/imgs/home-canape.png" alt="">
    </div>
    <div class="d-none d-md-block d-xl-none">
      <img class="img-fluid" src="assets/imgs/home-canape-tablet.png" alt="">
    </div>
    <a href="question-1.php" class="btn btn-primary d-md-none mx-auto mt-5">Jouer</a>
    <div class="d-md-none">
      <img class="img-fluid mt-4" src="assets/imgs/home-canape-mobile.png" alt="">
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
