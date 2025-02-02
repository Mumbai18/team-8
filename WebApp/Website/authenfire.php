
<?php
  require __DIR__.'/vendor/autoload.php';
  use Kreait\Firebase\Factory;
  use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/cfg18-a0b02-firebase-adminsdk-pgcyw-132a5e436d.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://cfg18-a0b02.firebaseio.com')
    ->create();
  //$username = $_POST['user_name'];
  //$password = $_POST['password'];

  //$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
  $database = $firebase->getDatabase();
  $auth = $firebase->getAuth();
  //echo($auth);
  try {
    $user = $auth->verifyPassword($email, $password);
    echo($user);
  } catch (Kreait\Firebase\Exception\Auth\InvalidPassword $e) {
    echo $e->getMessage();
  }
  //$users = $auth->listUsers($defaultMaxResults = 1000, $defaultBatchSize = 1000);

/*
  foreach ($users as $user) {
      echo($user);
  }
*/

?>
