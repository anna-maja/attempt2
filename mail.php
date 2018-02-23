<?php
include 'header.php'
?>

<h1><?= PAGE_MAIL?></h1>

<?php

// hämtning av alla värden
$prodArtikelnummer = $_GET['prodArtikelnummer'];
$pris = $_GET['pris'];
$epost = $_POST['epost'];
$fnamn = $_POST['fnamn'];
$enamn = $_POST['enamn'];
$adr = $_POST['adr'];
$postadr = $_POST['postadr'];
$levadr = $_POST['levadr'];
$epost = $_POST['epost'];
$meddelande = $_POST['meddelande'];


// mailhanteringen
if(isset($_POST['epost'])){
    // skicka mail till mig
    $to      = "amk.lithner@gmail.com";

    $subject = "Ett meddelande från hemsidan. \r\n\r\n";

    $message = "Såld produkt: ". $prodArtikelnummer ."\r\n";
    $message .= "Pris: " .$pris. "\r\n";
    $message .= "Kunduppgifter: \r\n";
    $message .= "Namn: ".$fnamn.$enamn."\r\n";
    $message .= "Adress: ".$adr."\r\n";
    $message .= $postadr."\r\n";
    $message .= "Angiven leveransadress: ".$levadr."\r\n";
    $message .= "Meddelande: " . $meddelande;

    $headers = "From: noreply@webshop.se";

    // $headers = "From: $from_user <$from_email>\r\n". 
    //            "MIME-Version: 1.0" . "\r\n" . 
    //            "Content-type: text/html; charset=UTF-8" . "\r\n"; 


    mail($to, $subject, $message, $headers);

    // skicka mail till kunden
    $to      = $_POST['epost']; //kundens emailadress

    $subject = "Beställning från webshoppen";

    $message = "Hej " . $fnamn ."!\r\n\r\n"; // info från formuläret Du har beställt 
    $message .= "Här kommer en sammanställning av din beställning från Shop 'til you Drop.\r\n"; // info från url
    $message .= "Såld produkt: " . $prodArtikelnummer ."\r\n";
    $message .= "Pris: " .$pris. "\r\n";
    $message .= "Kunduppgifter: \r\n";
    $message .= "Namn: ".$fnamn."".enamn."\r\n";
    $message .= "Adress: ".$adr."\r\n";
    $message .= $postadr."\r\n";
    $message .= "Angiven leveransadress: ".$levadr."\r\n";
    $message .= "Meddelande: " . $meddelande;
    
    $headers = "From: noreply@webshop.se";
    
    mail($to, $subject, $message, $headers);
 }

 // meddelande på hemsidan
 echo "<p>Beställningen är skickad. <br>
    Ett bekräftelsemail är skickat från oss till din angivna mailadress. <br>
    Vi hoppas att du skall bli nöjd med din leverans. <br>
    Välkommen åter!</p>";
?>
<!-- Lägg in sidfot -->
<?php include 'footer.php' ?>