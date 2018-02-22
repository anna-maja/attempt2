<?php
include 'header.php'
?>

<h1><?= PAGE_MAIL?></h1>
<!-- <link rel="stylesheet" href="assignment1.css"> -->

<?php

$prodArtikelnummer = $_GET['id'];
$fnamn = $_POST['fnamn'];
$enamn = $_POST['enamn'];
$adr = $_POST['adr'];
$postadr = $_POST['postadr'];
$levadr = $_POST['levadr'];
$epost = $_POST['epost'];
$meddelande = $_POST['meddelande'];

echo "<pre>";
print_r($_POST);
print_r($_GET);
echo "</pre>";
?>
<?php

if(isset($_POST['epost'])){
    // skicka mail till mig
 $to      = "am_lithner@hotmail.com";
    $subject = "Ett meddelande från xxxx";
    $message = "Info från formuläret: ";
    $message .= $_POST['fnamn'];
 $message .= $_POST['epost'];
 $message .= $_POST['meddelande'];

    $message .= "Följande info kommer från url";
    $message .= $_GET['prodArtikelnummer'];
 $headers = "From: noreply@webshop.se";

 mail($to, $subject, $message, $headers);

    // skicka mail till kunden
 $to      = $_POST['epost']; //kundens emailadress
 $subject = "Beställning från webshoppen";

 $message = "Hej " . $fnamn ."!"; // info från formuläret Du har beställt 
 $message .= "Du har valt att köpa " .$_GET['prodArtikelnummer']; // info från url
 $headers = "From: noreply@webshop.se";
 mail($to, $subject, $message, $headers);

 }
?>

<!-- Lägg in sidfot -->
<?php include 'footer.php' ?>