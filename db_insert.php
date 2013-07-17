<?php

// Config  
$data = json_decode($_POST['data']);
print_r($_POST);
$dbhost = 'localhost:27017';
$dbname = 'know_facts';

// Connect to test database  
$m = new Mongo("mongodb://$dbhost");
$db = $m->$dbname;

// select the collection  
$collection = $db->death_info;

// add a record
$document = $data;
$collection->insert($document);

// find everything in the collection
$cursor = $collection->find();


// iterate through the results
//foreach ($cursor as $document) {
//    echo $document["name"] . "\n";
//}
echo 'success';

?>  