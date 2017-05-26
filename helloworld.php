<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>String functions</title>
  </head>
  <body>
    <?php
    $first = "The quick brown fox";
    $second = " jumped over the lazy dog";

    $third = $first;
    $third .= $second;
    echo $third;
    echo "<br />";
    echo "<br />";
     $var1 = 10;
     echo $var1;
     echo "<br />";
     $var1 = 100;
     echo $var1;
    ?>
    <br />
    Lowercase: <?php echo strtolower($third); ?> <br />
    Uppercase: <?php echo strtoupper($third); ?> <br />
    Uppercase first: <?php echo ucfirst($third); ?> <br />
    Uppercase words: <?php echo ucwords($third); ?> <br />
  </body>
</html>
