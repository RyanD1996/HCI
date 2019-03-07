<?php


// Start XML file, create parent node.
$doc = new DOMDocument("1.0");
$node = $doc->createElement("markers");
$parnode = $doc->appendChild($node);
// Opens a connection to a MySQL server
$connection = mysqli_connect('localhost','root');
if(!$connection){
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysqli_select_db($connection, 'userregistration');
if(!$db_selected){
  die('Can\'t use db: ' . mysql_error());
}

// Select all the rows in the bikes table
$query = "SELECT * FROM bikes WHERE 1";
$result = mysqli_query($connection, $query);
if(!$result){
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $doc->createElement("marker");
  $newnode = $parnode->appendChild($node);

  $newnode->setAttribute("id", $row['id']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
}
echo $doc->saveXML();

 ?>
