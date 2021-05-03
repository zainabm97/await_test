 
<?php 

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
// $init = array(

// 	// Add some test data
// 	"foo" => "Test data",
// 	"bar" => "Testing",
// 	"bar2" => "Testing again",
// 	"foox" => "Just test",
// );


$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
sleep(5);
echo json_encode($age);


?>