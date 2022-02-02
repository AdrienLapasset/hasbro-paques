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
  </form>
</main>

<?php include 'partials/footer.php'; ?>
