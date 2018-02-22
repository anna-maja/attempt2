<?php
//visa varningar och felmeddelanden
ini_set("display_errors", 1);
?>
<?php
    define("COMPANY", "Shop 'Til You Drop AB");
    define("WEBMASTER", "Anna-Maja Lithner");
?>
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
<link rel="stylesheet" href="assignment1.css">
<hr>
<footer>
<?=COMPANY?>&nbsp;&nbsp; &bull;&nbsp;  &nbsp;  &nbsp;<?=WEBMASTER?> <br>
Copyright &copy; <?php echo date("Y"); ?> 
</footer>
</body>
</html>