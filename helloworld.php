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

// testing comment
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
    <br />
    Length: <?php echo strlen($third) ?><br />
    Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
    Find: <?php echo strstr($third, "brown"); ?><br />
    Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br />
    <br />
    Repeat: <?php echo str_repeat($third, 2) ?><br />
    Make susbtring: <?php echo substr($third, 5, 10); ?><br />
    Find position: <?php echo strpos($third, "brown"); ?><br />
    Find character: <?php echo strchr($third, "z"); ?><br />
  </body>
</html>
