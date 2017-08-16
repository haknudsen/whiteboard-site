<?php
require( "connect.php" );
$table = "whiteboard";
$sql = "SELECT * FROM " . $table . " ORDER BY RAND() LIMIT " . $count;;
$result = $conn->query( $sql );
switch ( $columns ) {
    case 2:
        $span = 6;
        break;
    case 3:
        $span = 4;
        break;
    case 4:
        $span = 3;
        beak;
    default:
        $span = 4;
}
$alt = array("Whiteboard","Whiteboard Video","Whiteboard Animation","Explainer Videos","Animated Explainer","Drawing Animation","Doodle Video","Sketch Video","Chalkboard Video","Custom Animation","Explainer Video","Website Video","Doodle Animation","Animated Video","Drawn Typography","Whiteboard Animation","Web Video","Video Production","Custom Video");
$link = '" href="https://www.youtube.com/watch?v=';
$class = '&rel=0&autoplay=1&hd=1" class="lightbox">';
if ( $result->num_rows > 0 ) {
    echo '<div class="example-column">';
    echo PHP_EOL;
    $x = 1;
    while ( $row = $result->fetch_assoc() ) {
        $target = $row[ "target" ];
        $video = $row[ "name" ];
        $type = array_rand($alt, 1);
        $id = $video . " - " . $alt[$type];
        echo '<div class="col-sm-' . $span . '">';
        echo PHP_EOL;
        echo '<a title="' . $video . $link . $target .  $class . '<img src="https://img.youtube.com/vi/' . $target . '/maxresdefault.jpg" class="img img-responsive box" id="' . $id . '" alt="' . $id . ' Example' . $example->name . ' " ></a>';
        echo PHP_EOL;
        echo '<h3 class="example-text"><a title="' . $id . $link . $target . $class . '#' . $x . " " . $video . '</a></h3>';
        echo PHP_EOL;
        echo '</div>';
        echo PHP_EOL;
        $x = $x + 1;
        if ( $x == 19 ) {
            break;
        }
    }
} else {
    echo "0 results";
}
echo PHP_EOL;
echo '</div>';
echo '<div class="c"></div>';
?>