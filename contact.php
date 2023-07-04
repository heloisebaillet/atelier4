<link rel="stylesheet" href="./style.css" />

<?php 

echo "<h2>Vos Informations :</h2>";

echo "<div>";
echo "<p><b> Nom : </b></p>";
echo $_POST["name"];

echo "<p><b> Prénom : </b></p>";
echo $_POST["firstName"];

echo "<p><b> E-mail : </b></p>";
echo $_POST["email"];

echo "<p><b> Téléphone : </b></p>";
echo $_POST["tel"];

echo "<p><b> Message : </b></p>";
echo $_POST["message"];

echo "<h1 class=\"messageConfirmation\">BIEN REÇU !</h1>";

echo "</div>";

if ($_POST ["name"] === "teapot") {

    echo "<h3 class=\"teapot\">I'm a Teapot!</h3>";
    http_response_code(418);
    var_dump(http_response_code(418));
};

?>