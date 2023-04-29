<body>
<?php
  include ("mathfunctions.php");
?>
<h1> Factorial </h1>
<?php
function isPositiveInteger($n) {
	$result = false;
		if (is_numeric($n))
			if ($n == floor($n))
    			if ($n>0)
				   $result = true;
	return $result;
}
?>
<?php
    if(isset($_GET["number"])) {
        $num = $_GET["number"];
        if(isPositiveInteger($num)) {
            echo "<p>", $num, "! is ", factorial ($num), ".</p>";
        } 
        else {
            echo "<p>Please enter a positive integer.</p>";
        }
    } 
    echo "<p><a href='factorial.html'>Return to the Entry Page</a></p>";
    ?>
    </body>