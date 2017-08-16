<?php
require( "connect.php" );
$sql = "SELECT * FROM whiteboard_content ORDER BY RAND() LIMIT 1";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    echo PHP_EOL;
    while ( $row = $result->fetch_assoc() ) {
        $title = $row[ "title" ];
        $content = $row[ "content" ];
        $spintax = new Spintax();
        $spun = $spintax->process( $content );
        $alt = $row[ "alt" ];
        echo( '<div class="container">' );
        echo PHP_EOL;
        echo('<h2 class="text-center">' .$title . '</h2>');
        echo PHP_EOL;
        echo( '<div class="text">' );
        echo PHP_EOL;
        echo( $spun);
        echo PHP_EOL;
        echo PHP_EOL;
        echo( '   </div>' );
        echo PHP_EOL;
    }
} else {
    echo "0 results";
}
echo PHP_EOL;
class Spintax {
    public
    function process( $text ) {
        return preg_replace_callback( '/\{(((?>[^\{\}]+)|(?R))*)\}/x', array(
            $this,
            'replace'
        ), $text );
    }
    public
    function replace( $text ) {
        $text = $this->process( $text[ 1 ] );
        $parts = explode( '|', $text );
        return $parts[ array_rand( $parts ) ];
    }
}
?>