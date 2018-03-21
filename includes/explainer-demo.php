<?php
require( "connect.php" );
$table = "explainer_demo";
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
$alt = array( "Animated Explainer Video Pricing", "What Is An Explainer Video", "Custom Animated Explainer Video", "Custom Explainer Video", "Best Animated Explainer Video", "Best Whiteboard Explainer Video", "Explainer Video Definition", "Explainer Video Production Companies", "Cheap Explainer Video", "Custom Whiteboard Explainer Video", "Explainer Video Services", "Animated Explainer Video", "What Is An Explainer Article", "Explainer Video Company", "Explainer Video Production", "What Is The Purpose Of An Explainer Video", "Best Explainer Video", "Explainer Video", "Best Custom Explainer Video", "Best Custom Whiteboard Explainer Video", "Whiteboard Explainer Video", "Best Custom Animated Explainer Video" );
$link = '" href="https://www.youtube.com/watch?v=';
$class = '&rel=0&autoplay=1&hd=1" class="lightbox">';
if ( $result->num_rows > 0 ) {
	echo '<section class="text-center">';
	echo PHP_EOL;
	echo '<h2>Best Explainer Videos</h2>';
	echo PHP_EOL;
	echo '<div class="example-column">';
	echo PHP_EOL;
	$x = 1;
	while ( $row = $result->fetch_assoc() ) {
		$target = $row[ "target" ];
		$video = $row[ "name" ];
		$type = array_rand( $alt, 1 );
		$id = $video . " - " . $alt[ $type ];
		echo '<div class="col-sm-' . $span . '">';
		echo PHP_EOL;
		echo '<a title="' . $video . $link . $target . $class . '<img src="https://img.youtube.com/vi/' . $target . '/maxresdefault.jpg" class="img img-responsive box" id="' . $id . '" alt="' . $id . ' Example' . $example->name . ' " ></a>';
		echo PHP_EOL;
		echo '<div class="example-text"><a title="' . $id . $link . $target . $class .  $video . '</a></div>';
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
		$x = $x++;
	}
} else {
	echo "0 results";
}
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;
echo '<div class="clearfix"></div>';
echo PHP_EOL;
echo '<a href="https://www.websitetalkingheads.com/mrss/explainer.rss" target="_blank"><img class="img img-responsive m-25" alt="Talking Heads Animation RSS Feed"  src="https://www.websitetalkingheads.com/mrss/images/Whiteboard RSS Feed.png" title="Explainer Videos RSS Feed"></a>';
echo PHP_EOL;
echo '';
echo PHP_EOL;
echo PHP_EOL;
echo '</section>';
?>