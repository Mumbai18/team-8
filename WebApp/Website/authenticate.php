<?php
  require __DIR__.'/vendor/autoload.php';

  $username = $_POST['user_name'];
  $password = $_POST['password'];
  const DEFAULT_URL = "https://cfg18-a0b02.firebaseio.com/";
  const DEFAULT_TOKEN = "6maU75HwNOBjZblwKkWLjtztdOZQ7NcWnuSZkZ11";
  const DEFAULT_PATH = '/admin';
  $firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

  $result = $firebase->get("admin/3");
  echo($result);
  $result = str_replace('{', '', $result);
  $result = str_replace('}', '', $result);
  $value = explode(',',$result,2);
  for($k=0;$k<sizeof($value);$k++){
    for($j=12;$j<strlen($value[$k]);$j++)
    {
      if($k==0){
        $password1=$password1+$value[$k][$j];
      }
      if($k==1){
        $user_name1=$user_name1+$value[$k][$j];
      }
    }
  }
  if($user_name1 === null && $password1 === null)
  {
      header('Location: /team-8/WebApp/Website/admin.php?invalid=1');
  }else {
      header('Location: /team-8/WebApp/Website/admin.php?$user_name='.$user_name1);
  }
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
