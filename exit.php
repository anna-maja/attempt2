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
$fnamn = $_POST['fnamn'];
$enamn = $_POST['enamn'];
$adr = $_POST['adr'];
$postadr = $_POST['postadr'];
$levadr = $_POST['levadr'];
$epost = $_POST['epost'];
$meddelande = $_POST['meddelande'];

?>

<div style="margin:auto; padding:20px;">
    <form method="post" action="mail.php?id=<?=$prodArtikelnummer?>">
            <table class="table">
            <tr><td colspan="2" style="background:grey"> Uppgifter om din beställning</td></tr>
            <tr><td><b>Produkt</b></td>
            <td><b><?=$prodArtikelnummer?></b></td></i></tr>
            <tr><td>Namn</td>
            <td><?=$fnamn?>&nbsp;<?=$enamn?></td></tr>
            <tr><td>Adress</td>
            <td><?=$adr?><br><?=$postadr?></td></tr>
            <tr><td>E-post:  </td>
            <td><?=$epost?></td></tr>
            <tr><td>Leveransadress</td>
            <td><?=$levadr?></td></tr>
            <tr><td>Ev meddelande:</td>
            <td><?=$meddelande?></td></tr>
        </table> 
        <button>
            <input type="submit" value="Bekräfta">
        </button>
    </form>

    
    
</div>
<?php
?>

<?php
/*
// Hämta data från formuläret via metoden POST
$name    = $_POST($fnamn.$enamn);
$mail    = $_POST($epost);
$message = $_POST(ordersammanfattning());
$message = "Ett meddelande från $name. " . $message;

// Argument som behövs i funktionen mail
$to = "Ange mottagarens e-post";
$subject = "Meddelande från $name";
$headers = "From: $mail";

if(isset($_POST['epost'])){
    mail($to , $subject, $message, $headers);
    echo "<h2>Ditt meddelande har skickats.</h2>";
    echo "<h2>Vi återkommer efter lunch!</h2>";
}
else{
    echo "<h2>Felaktig adress!</h2>";
}
?>
<form method="post" action="mail.php">
<button>
<input type=
"submit" value="Skicka">
</button>
</form>
</p>
 */
?>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include 'footer.php' ?>