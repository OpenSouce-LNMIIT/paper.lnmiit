<?php
if($_GET["var"] == "cce")
{
 $cur="./cce";
}
else if($_GET["var"] == "cse")
{
 $cur="./cse";
}
else if($_GET["var"] == "ece")
{
 $cur="./ece";
}
else if($_GET["var"] == "me")
{
 $cur="./me";
}
else if($_GET["var"] == "mme")
{
 $cur="./mme";
}
else 
{
 echo "You are in the Wrong Path";
}

  if ($handle = opendir($cur)) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {

$thelist .= '<tr><td></td><td>' .$file. '</td><td><form action="'.$cur.'/'.$file.'"><input class="btn btn-primary" type="submit" value="View/Download"></form></td></tr>';

 
      }
    }
    closedir($handle);
  }

?>
<!Doctype html>
<html>
<style>
body
{
    counter-reset: Serial;           /* Set the Serial counter to 0 */
}

table
{
    border-collapse: separate;
}

tr td:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content:counter(Serial); /* Display the counter */
}
</style>
<body>
<h1>List of files:</h1>
<table border=1>
<tr>
<th>S. No.</th>
<th>Paper Name</th>
<th>Download</th>
</tr>
<?php echo $thelist; ?></table>
<body>
<html>
