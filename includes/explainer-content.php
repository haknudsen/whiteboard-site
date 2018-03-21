<?php
require( "connect.php" );
$sql = "SELECT * FROM explainer_content ORDER BY RAND() LIMIT 1";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    while ( $row = $result->fetch_assoc() ) {
        $title = $row[ "title" ];
        $content = $row[ "content" ];
        $spintax = new Spintax();
        $spun = $spintax->process( $content );
        echo( '<div>' );
        echo PHP_EOL;
        echo( '<h3 class="text-center">' . $title . '</h3>' );
        echo PHP_EOL;
        echo( '<div class="text">' );
        echo PHP_EOL;
        echo( $spun );
        echo PHP_EOL;
        echo PHP_EOL;
        echo( '   </div>' );
        echo PHP_EOL;
    echo( '</div>' );
    }
} else {
    echo "0 results";
}
echo PHP_EOL;

?>