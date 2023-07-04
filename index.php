<link rel="stylesheet" href="style.css/" ; <?php

echo "<div>";

echo "<form 
action=\"contact.php\" 
method=\"POST\">

<input id =\"nameId\" class=\"form-item\" name=\"name\" placeholder=\"name\"/>

<input id =\"firstNameId\" class=\"form-item\" name=\"firstName\" placeholder=\"first name\"/>

<input id =\"emailId\" class=\"form-item\" name=\"email\" placeholder=\"email\"/>

<input id =\"telId\" class=\"form-item\" name=\"tel\" placeholder=\"phone\"/>

<input id =\"messageId\" class=\"form-item\" name=\"message\" placeholder=\"message\"/>

<input type=\"submit\" name=\"submit\" />

</form>

</div>";

?>