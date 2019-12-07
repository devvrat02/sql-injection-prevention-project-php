<?php
function sqli($poster) {
	$poster = trim($poster);
//this line needs mysql connection
  $poster = mysql_real_escape_string($poster);
  if(get_magic_quotes_gpc())
{
$poster = stripslashes($poster);
}
  $poster = strip_tags($poster);
  $poster = str_replace(array("\n", "'", "‘", "’", "'", "“", "”", "„", "?", '"'), array("", "\’", "\’", "\’", "\’", "\"", "\"", "\"", "\"", "\""), $poster);
    return $poster;

}

while (list($Key, $Val) = each($_POST)) { 
 if (substr($Key, 0, 4) != "fsk_") {
  if (is_array($Val) === true) {
   while (list($sKey, $sVal) = each($Val)) {
    $Val[$sKey] = sqli($sVal);
   }
   $_POST[$Key] = $Val; 
  } else {
   $_POST[$Key] = sqli($Val); 
  }
 }
}


?>
