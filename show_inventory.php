<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Inventory</title>
</head>
<body>
<?php
//Luke Bisgard
//GITHUB LINK: https://github.com/lbizness/cs85-module4b-inventory
//TEST URL: http://cs85_projects.test/module4b/show_inventory.php

try {
  $db = new PDO("mysql:host=localhost;dbname=inventory_db", "root", "");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $db->query("SELECT * FROM items");
  $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo "<h1>Inventory List</h1>";
  echo "<ul>";
  foreach ($items as $item) {
    echo "<li>{$item['item_name']} ({$item['quantity']} units)</li>";
  }
  echo "</ul>";
  
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


/*
REFLECTION:
I chose five items that I use often, which are my Coffee Mug, Sketchbooks, Bulletin Board, Glass Cup (for water), and Monitor. 
These are important to my day-to-day life, so therefore seemed important to include in my inventory.

This could scale to real world inventory systems by connecting the PDO to a bigger database, with more items, and due to the the foreach statement
it would display the amount of items in the inventory no matter how many. However, if the database is too big, it may be pertinent to 
include limits to the amount of data being displayed as well as creating search features.

Using PDO, particularly with prepared statements, is a great way to prevent SQL injection. PDO prepared statements take the data the user 
inputs and, due to the untrustworthiness of user input, then takes that and places it in a statement you have already created yourself instead
of allowing the user to create their own statement.
This lets you create a layer of security to the database that direct access would not have.

*/
//GITHUB LINK: https://github.com/lbizness/cs85-module4b-inventory
//TEST URL: http://cs85_projects.test/module4b/show_inventory.php
?>
</body>