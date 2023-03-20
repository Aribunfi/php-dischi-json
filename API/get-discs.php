<?php 

$data = file_get_contents(__DIR__ . "../data/discs.json");

$discs = json_decode($data);

$result = null;

if(isset($_GET["title"])) {
    $searched_title = $_GET["title"];
  
    foreach($discs as $disc){
      if($disc->title === $searched_title) {
        $result = $disc;
      }
    }
    
  } else {
    
    $result = [];
    foreach($discs as $disc){
      $result[] = [
        "title" => $disc->title,
        "author" => $disc->author,
        "poster" => $disc->poster,
      ];
    }
  }
  
  header("Content-Type: application/json");
  echo json_encode($result);
  


