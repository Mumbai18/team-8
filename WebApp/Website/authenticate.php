<?php
  require __DIR__.'/vendor/autoload.php';
  $username = $_POST["user_name"];
  $password = $_POST["password"];
  const DEFAULT_URL = "https://cfg18-a0b02.firebaseio.com/";
  const DEFAULT_TOKEN = "6maU75HwNOBjZblwKkWLjtztdOZQ7NcWnuSZkZ11";
  const DEFAULT_PATH = '/admin';
  $firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
  $i=1;
  $result = $firebase->get("admin/$i");
  echo($result);
  // $result = str_replace('{', '', $result);
  // $result = str_replace('}', '', $result);
  // $value = explode(',',$result,2);
  echo($value[0][12]);
  echo($value[0][12]);
  // $firebase.child(first_child_node).child(second_child_node).getValue();

  /*
  while($firebase->get("admin/$i")!=null){
    $result = $firebase->get("admin/$i");
    $i=$i+1;
    var_dump($result);
  }*/


  /*
  $db->getReference('cars')->orderByChild('brand')->equalTo('volvo')->limitToLast(10);

  $values = $db->getValue();
  $name = $firebase->get(DEFAULT_PATH . '/name/contact001');*/
?>
