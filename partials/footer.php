<footer>
  <div class="container-fluid">
    <div class="d-flex justify-content-center  text-center">
      <div class="">
        <a href="#">Mentions Légales</a>
        <a href="#">Politique de protection des données personnelles</a>
        <a href="#">règlement jeu instant gagnant</a>
        <a href="#">règlement jeu tirage au sort</a>
      </div>
    </div>
</footer>

<!-- Bootstrap JS import -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Slick Carousel JS import -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Slick Carousel settings -->
<script type="text/javascript">
  const carouselProps = {
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<img class="arrow prev" src="assets/icons/carousel-next-arrow.png">',
    nextArrow: '<img class="arrow next" src="assets/icons/carousel-next-arrow.png">',
    responsive: [{
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
      }
    }]
  }
  $(document).ready(function() {
    $('.carousel-1').slick(carouselProps);
    $('.carousel-2').slick(carouselProps);
  });
</script>

</body>

</html>
