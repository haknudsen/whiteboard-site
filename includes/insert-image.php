<?php
$spintax = new Spintax();
$spun = $spintax->process( '{Best Animated Explainer Video|Best Animated Explainer Videos|Best Animated Whiteboard Videos|Best Custom Whiteboard Animation Video|Best Custom Whiteboard Videos|Best Whiteboard Animation Video|Best Whiteboard Explainer Video|Custom Animated Whiteboard Video|Custom Animated Whiteboard Videos|Custom Whiteboard Animation Videos|Custom Whiteboard Videos|Learn about Whiteboard Animation Video|What goes into Blackboard Video|What goes into Custom Animation|What goes into Website Video|Whiteboard Explainer Video|Whiteboard Explainer Videos}' );
echo( '<a href="http://www.whiteboard.video/">' );
echo PHP_EOL;
echo( '<img title="'.$spun.'" alt="Whiteboard Video,Whiteboard Animation Video,Whiteboard Explainer Video,Best Explainer Videos,Best Sketch Videos,Custom Whiteboard Video" ' );
echo PHP_EOL;
echo( 'src="http://bestwhiteboardvideo.com/wp-content/uploads/whiteboard/'.$spun.'.jpg" class="box img img-responsive"' );
echo( '</img>' );
echo PHP_EOL;
echo( '</a>' );
echo PHP_EOL;
?>