<html>
  <title>
    what the hell ?!
  </title>
  <body>
  <h1>The Sample Website</h1>
   <?php
     $servername = "127.0.0.1";
     $username   = "vest";
     $password   = "vest";
     $dbname     = "test002";

     $conn = new mysqli($servername, $username, $password, $dbname);

     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }

     $sql = "INSERT INTO test002.test002 (fname, lname, email)
     VALUES ('John', 'Doe', 'john@example.com')";

     if ($conn->query($sql) === TRUE) {
         echo "New record created successfully\n";
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }

     $conn->close();

     $array = array('key1' => 'value1', 'key2' => 'value2');
     extract($array, EXTR_PREFIX_ALL, 'my_prefix');
     echo "$my_prefix_key1  $my_prefix_key2" ;
     echo "<h2> <p> Hell </p> </h2>" ;
   ?>
  </body>
</html>
