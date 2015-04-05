<br><br><br><br>

<footer>
    <div class="container">
        <small>
            Copyright &copy; 2014 <a href="https://wppusher.com">WP Pusher.com</a>
            |
            <a href="https://wppusher.com/tos">Terms of Service</a>
        </small>
        <h3><a href="https://wppusher.com/"><img class="logo-button" src="https://wppusher.com/png_400px.png"></a></h3>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(function() {
    var header = $('.header');
    $(window).scroll(function (e) {
        var distanceTop = window.pageYOffset || document.documentElement.scrollTop;
        var beginAnimationAt = 50;

        if (distanceTop > beginAnimationAt) {
            $(header).addClass('smaller', 1000);
        } else {
            $(header).removeClass('smaller');
        }
    });
});
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55740519-4', 'auto');
    ga('send', 'pageview');

</script>


</body>
</html>
