<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We specialise in making whiteboard videos for all purposes. You'll be able to rely on our efficiency and technical competence plus the talents of our renowned, experienced team to make a truly impressive whiteboard video for any business.">
    <meta name="Keywords" content="Whiteboard,Animated Video,Custom Video,Typography,Animation,Video Production,Whiteboard Videos,Whiteboard Animation,Explainer Videos,Blackboard Video,Drawing Animation,Doodle Video,Sketch Video,Chalkboard Video,Custom Animation,Video Presentation,Video,Commercial,Explainer Video,Professional,YouTube,Website Video,Whiteboard Video,Doodle Animation,Web Video">
    <meta name="robots" CONTENT="index, follow">
    <title>Whiteboard.Video|Best Whiteboard Video</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="lightbox/js/lightbox/themes/default/jquery.lightbox.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="css/fluid.css" rel="stylesheet" type="text/css"/>
    <script src="lightbox/js/lightbox/jquery.lightbox.min.js"></script>
    <script>
        jQuery( document ).ready( function ( $ ) {
            $( '.lightbox' ).lightbox();
        } );
    </script>
    <?php include ('includes/googleanalytics.php'); ?>
</head>

<body>
    <?php include("includes/header.php"); ?>
    <section class="container-fluid banner">
        <div class="row banner-video">
            <div class="col-lg-8">
                <div class="embed-responsive embed-responsive-16by9 box">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NiCdoZ_7kcA?rel=0&autohide=2&showinfo=0" allowfullscreen></iframe>
                </div>
                <div class="banner-text">Cool Explainer Videos, Whiteboard Sketch Videos, Spokesperson too! </div>
            </div>
            <div class="col-lg-4 pad-this">
                <?php include("forms/contact.php"); ?>
            </div>
        </div>
    </section>
    <?php 
    $table = "whiteboard";
    include("includes/showDemo.php"); 
    ?>
    <section class="alert alert-info">
       <div class="container">
        <?php include("includes/testimonial-awards.php"); ?>
        </div>
    </section>
    <section class="container m-25">
        <div class="row">
            <div class="col-sm-6">
                <h2>Latest Blog Post- <span id="title"></span></h2>
                <p id="excerpt" class="text-info"></p>
            </div>
            <div class="col-sm-6">
                <h2>We Specialize in Whiteboard Video</h2>
                <p class="text-info">At Whiteboard.Video we specialise in creating whiteboard videos for many purposes. You'll be able to bank on the efficiency, technical competence and the talents of our highly skilled experienced team to make a truly spellbinding whiteboard video for any business. You will find that our services very collaborative right from the start to completion of the video.</p>
            </div>
        </div>
    </section>
    <section class="container-fluid call-now">
        <div class="">
            <h2 class="call-now-to-get-results">CALL NOW to Get Results!</h2>
            <h2 class="call-now-to-get-results"><a href="tel://801-748-2281" title="Give us a call." >801-748-2281</a></h2>
        </div>
    </section>
    <section class="alert alert-info">
        <div class="container">
            <div class="row best">
                <h2>Custom Whiteboard Video</h2>
                <h3 class="italic text-center">Grab your website's visitors' attention while increasing your revenue. </h3>
                <div class="col-md-4">

                    <p>At Whiteboard.Video we don't just make whiteboard sketch videos. We have spent years studying the art of persuasion and communication. Your story must be told well.</p>
                    <p>We collaborate and listen to you to create a unique video to get your message across and that will boost your leads and increases sales in your product or service.</p>
                </div>
                <div class="col-md-4">
                    <p> You can get yourself a highly professional whiteboard video from us and link it with all you website and media accounts. A increasing amount of people are visiting websites and using web 2.0 therefore. </p>
                    <p>The internet has developed into highly valuable platform to find millions who may take an active interest in your product or service.</p>
                </div>
                <div class="col-md-4">
                    <p>Our prices could be the most affordable and you will have many reasons to understand others why Whiteboard.Video is the most distinctive and distinguished company in the industry.</p>
                    <p><a href="tel:801-748-2281" title="Call Now!">Call us today </a>and let our personnel connect wtih you and provide enough ideas about how to go about preparing a stunning kind involving whiteboard video for ones business.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="examples">
        <div class="banner-bottom-text">Explanation Videos, Whiteboard Animation Videos, and Spokesperson Video.
            <blockquote class="content-text">We know all companies are not alike, so,we work with you to create the best solution for your company. Your company offers a solution to your clients, but sometimes that solution or product needs some explaining. That's where we come in. We create high impact, exciting VIDEOS that explain your product, service, software or business. </blockquote>
        </div>
    </section>
    <?php include("includes/footer.php"); ?>
    <script>
        $( window ).load( function () {
            if ( $( document ).width() > 1200 ) {
                padHeight( ".banner-video", ".pad-this" );
            }
            $( document ).ready( function () {
                $.ajax( {
                    url: "http://seovideoexperts.com/wp-json/wp/v2/posts?per_page=1",
                    success: function ( result ) {
                        var excerpt = result[ 0 ].excerpt.rendered;
                        var linkStart = '[&hellip;]';
                        var theLink = '<a href="http://seovideoexperts.com/">[&hellip;]</a>';
                        var excerptLink = excerpt.replace( linkStart, theLink );
                        $( "#excerpt" ).html( excerptLink );
                        $( '#title' ).text( result[ 0 ].title.rendered );
                    },
                    error: function ( xhr ) {
                        alert( "An error occured: " + xhr.status + " " + xhr.statusText );
                    }
                } );
            } );
        } );

        function padHeight( holder, toPad ) {
            var hHeight = $( holder ).innerHeight();
            var bHeight = $( toPad ).outerHeight();
            var pad = ( hHeight - bHeight ) / 2;
            $( toPad ).css( 'margin-top', pad + 'px' );
            console.log( 'hHeight-' + hHeight );
            console.log( 'bHeight-' + bHeight );
            console.log( 'pad-' + pad );
        }
    </script>
</body>

</html>