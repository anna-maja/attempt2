<!-- Lägger -->
<?php
include 'header.php';
?>
<h1><?= PAGE_INDEX ?> - en annan slags webshop!</h1>
<h2>Välkommen till webshopen!</h2>

<?php
$sortiment = [
  ["Girl With Hood", "girlWithHood.jpg", "549", "pic1"],// produkt 1
  ["Guy In Green", "guyInGreen.jpg", "749", "pic2"],   // produkt 2
  ["Purple Strength", "purpleSuper.jpg", "949", "pic3"]
];

?>

<!-- Här startar mitt fält med produkter -->
<form action="order.php" method="get">
<div class="row"> <!-- Allt ska ligga på en rad-->

<!-- startar foreach -->
<?php foreach ($sortiment as $produkt) :  ?>

<!-- Starta en kolumn -->
<div class="col-sm-4">

<div class="card">
  <img class="card-img-top" src="images/<?= $produkt[1] ?>" alt="<?= $produkt[0] ?>">
  <div class="card-body" style="text-align:center">
    <h5 class="card-title"><?= $produkt[0] ?></h5>
    <p class="card-text">Pris: <?= $produkt[2] ?></p>
    <a href="order.php?id=<?= $produkt[3] ?>&name=<?= $produkt[0] ?>&pris=<?= $produkt[2] ?>&artnr=<?= $produkt[3] ?>"  class="btn btn-primary">Köp</a>
  </div>
</div>

</div>
<!-- kolumn avslutad -->

<?php endforeach ?>
<!-- foreach avslutad -->

</div> 
<!-- row avslutad -->
</form>
<!-- form avslutads -->

<!-- Lägg in sidfot -->
<?php include 'footer.php' ?>