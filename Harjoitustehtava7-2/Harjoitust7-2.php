<?php
$koodi = isset($_GET['koodi']) ? $_GET['koodi'] : '';
echo get_page($koodi);


if(preg_match("/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/", $koodi)) {
   echo "<code>$koodi</code> on ok!<br>\n";
}
else {
  echo ("<code>$koodi</code> EI ole ok!<br>\n");
}


function get_page($koodi) {
  $page = <<<EOPage

  <title>Harjoitus 7 Tehtävä 2</title>
  <style>code {background-color: #ff0;} </style>
  <form method="get" action="{$_SERVER['PHP_SELF']}">
    <input type="text" name="koodi" size="20" value="$koodi"><br>
    <input type="submit" value="Tarkista">
  </form>
EOPage;

  return $page;
}
?>