<?php
include 'header.php';
?>

<h1>Beställningsformulär</h1>

<?php
$id = $_GET['id'];
$pris = $_GET['pris'];
$name = $_GET['name'];
$artikelnummer = $_GET['id'];

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

?>

    <?php
    echo "Du har valt att köpa " . $name . ". Utmärkt val!"
    ?>
</p>
<p>Fyll i formuläret nedan för att slutföra din beställning. <br>
Du kommer sedan att få se sammanställningen av alla uppgifter, för att kunna bekräfta. <br>
Ett bekräftelsemail med alla uppgifter kommer därefter att skickas till angiven mailadress.</p>

<table>
<form method="post" action="exit.php?id=<?=$id?>">

<tr><th colspan="2" class="th"> &bull;&bull;&bull;Din beställning: <?=$name?><i></th></tr>
<tr><td colspan="2" style="text-align:center"> <hr><b> Uppgifter om beställaren </b><br>(fält markerade med * är obligatoriska) <hr></td></tr>
<tr><td>* Förnamn: </td>
<td><input name="fnamn" type="text" required></td></tr>
<tr><td>* Efternamn</td>
<td><input name="enamn" type="text" required></td></tr>
<tr><td>* Adress</td><td>
<input name="adr" type="text" required></td></tr>
<tr><td>* Postnummer + ort:</td>
<td><input name="postadr" type="text" required></td></tr>
<tr><td>* E-post:  </td>
<td><input name="epost" type="text" required> </td></tr>
<tr><td>Leveransadress (om annan än ovan): </td>
<td><input name="levadr" type="text"> </td></tr>
<tr><td>Ev meddelande:</td>
<td><textarea name="meddelande" rows="5" cols="40"></textarea></td></tr>

</table> 
<button>
<input
     type="submit" value="Skicka">
</button>
</form>

<!-- <a href="exit.php" class="btn btn-primary">Bekräfta</a> -->
</form>


<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
