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
    <br />
    <br />
    <br />
    <br />
    <br />
    <?php
      $var1 = 3;
      $var2 = 4;
    ?>
    Absolute value: abs <br />
    Exponential: pow <br />
    Square root: sqrt <br />
    Modulo: fmod(20, 7) <br />
    Random: rand <br />
    Random(min, max) <br />
    <br />
    += <br />
    -= <br />
    *= <br />
    /= <br />
    <br />
    <br />
    Round: round($var) <br />
    Ceiling: ceil($var) <br />
    Floor: floor($var) <br />
    <br />
    Can figure out what kind of variables we're dealing with by using methods like is_int, is_float, is_numeric
    <br />
    <br />
    <br />
    Define arrays by going $var = array();<br />
    PHP zero-indexed with regards to arrays? YES<br />
    Combine echo and print_r($var) method to debug by showing plain-text version of array or object<br />
    <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <pre>
      <?php echo print_r($mixed) ?>
    </pre>
    <br />
    More recent versions of PHP also accept conventional square brackets notation => shorter<br />
    <br />
    <br />
    Associative arrays are essentially like objects in JS<br />
    Create those by using same array() function but using key values pairs inside of it: keys point to values with big arrows like => with commas separating pairs<br />
    <br />
    <br />
    Array functions:<br />
    Count: count($numbers); <br />
    Max value: max($numbers); <br />
    Min value: min($numbers); <br />
    Sort in ascending order: sort($numbers); <br />
    Reverse sort in descending order: rsort($numbers); <br />
    Implode will show elements of array in string form separated by argument like a star <br />
    Explode will divide string up based on argument and turn it into an array => extremely useful when working with comma separated list<br />
    15 in array: in_array(15, $numbers); => returns boolean like 1 or 0 for true or false <br />
    array_unshift, array_push => look for different functions in documentation <br />
    <br />
    <br />
    Booleans: <br />
    Use is_bool function to find out if variable is boolean<br />
    PHP if statement syntax seems to be pretty much identical to JS<br />
    Empty in PHP: "", null, 0, 0.0, "0", false, array()<br />
    EMPTY IS A LEADING CAUSE OF BUGS IN PHP<br />
    type juggling when PHP converts different types on the fly, called casting when we do it deliberately<br />
    <br />
    <br />
    <br />
    Constants can't change value (duh) and are written in ALL CAPS




  </body>
</html>
