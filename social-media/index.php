<div class="container text-center">
    <h2 class="text-center text-capitalize">Please Share this Page</h2>
    <div class="center-block">
        <div id="unik" data-ayoshare="http://bachors.github.io/jQuery-Awesome-Sosmed-Share-Button/"></div>
    </div>
</div>
<script src="/js/ayoshare.js"></script>
<script>
    var url = window.location.href;
    $('#unik').attr("data-ayoshare", url);
    console.log( ''+url );
    $( "#unik" ).ayoshare( {
        button: {
            google: true,
            stumbleupon: true,
            facebook: true,
            pinterest: true,
            reddit: true,
            vk: true,
            pocket: true,
            twitter: true,
            digg: true,
            telegram: true,
            sms: true
        }
    } );
</script>