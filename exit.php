<?php
include 'header.php'
?>

<h1><?= PAGE_EXIT ?></h1>
<link rel="stylesheet" href="assignment1.css">

<p>
 Vänligen bekräfta nedanstående uppgifter. 
 </p>
<?php
$prodArtikelnummer = $_GET['id'];
$pris = $_GET['pris'];
$fnamn = $_POST['fnamn'];
$enamn = $_POST['enamn'];
$adr = $_POST['adr'];
$postadr = $_POST['postadr'];
$levadr = $_POST['levadr'];
$epost = $_POST['epost'];

?>

<div style="margin:auto; padding:20px;">
    <form method="post" action="mail.php?prodArtikelnummer=<?=$prodArtikelnummer?>&pris=<?=$pris?>">
            <table class="table">
            <tr><td colspan="2" style="background:grey"> Uppgifter om din beställning</td></tr>
            <tr><td><b>Produkt</b></td>
            <td><b><?= $prodArtikelnummer ?></b></td></i></tr>
            <tr><td><b>Pris</b></td>
            <td><b><?= $pris?></b></td></i></tr>
            <tr><td>Namn</td>
            <td><?= $fnamn ?>&nbsp;<?= $enamn ?></td></tr>
            <tr><td>Adress</td>
            <td><?= $adr ?><br><?= $postadr ?></td></tr>
            <tr><td>E-post:  </td>
            <td><?=$epost?></td></tr>
            <tr><td>Leveransadress</td>
            <td><?= $levadr ?></td></tr>
            <tr><td>Ev meddelande:</td>
            <td><input name="meddelande" type="textarea" rows="5" cols="40"></input></td></tr>
            <td><input name="fnamn" type="hidden" value="<?=$fnamn?>"></input></td></tr>
            <td><input name="enamn" type="hidden" value="<?=$enamn?>"></input></td></tr>
            <td><input name="adr" type="hidden" value="<?=$adr?>"></input></td></tr>
            <td><input name="postadr" type="hidden" value="<?=$postadr?>"></input></td></tr>
            <td><input name="levadr" type="hidden" value="<?=$levadr?>"></input></td></tr>
            <td><input name="epost" type="hidden" value="<?=$epost?>"></input></td></tr>
        </table> 
        <input type="submit" value="Bekräfta" class="btn btn-outline-info">
    </form>
</div>
<?php
?>
<?php include 'footer.php' ?>