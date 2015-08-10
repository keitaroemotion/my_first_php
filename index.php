<html>
  <title>
    what the hell ?!
  </title>
  <body>
  <h1>The Sample Website</h1>
   <?php
     $array = array('key1' => 'value1', 'key2' => 'value2');
     extract($array, EXTR_PREFIX_ALL, 'my_prefix');
     echo "$my_prefix_key1  $my_prefix_key2" ;
     echo "<h2> <p> Hell </p> </h2>" ;
   ?>
  </body>
</html>
