<?php
require( "connect.php" );
if(is_null($table)){$table="whiteboard";}
$sql = "SELECT * FROM " . $table;
$sql .= " ORDER BY RAND()";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
    echo '<section class="container-fluid m-25">';
        echo PHP_EOL;
    echo '<h2 class="text-center">Examples</h2>';
        echo PHP_EOL;
    echo '<div class="row m-25">';
    $x = 1;
    while ( $row = $result->fetch_assoc() ) {
        $target = $row[ "target" ];
        $video = $row[ "name" ];
        echo '<div class="col-sm-4">';
        echo PHP_EOL;
        echo '<div class="embed-responsive embed-responsive-16by9 box">';
        echo PHP_EOL;
        echo '<iframe class="embed-responsive-item" src="//www.youtube.com/embed/' . $target . '" frameborder="0" allowfullscreen"></iframe>';
        echo PHP_EOL;
        echo '</div>';
        echo PHP_EOL;
        echo '<h3 class="text-center">' . $video . '</a></h3>';
        echo PHP_EOL;
        echo '</div>';
        echo PHP_EOL;
        $x = $x + 1;
        if ( $x == $show+1 ) {
            break;
        }
    }
} else {
    echo "0 results";
}
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;
    echo '</section>';

?>