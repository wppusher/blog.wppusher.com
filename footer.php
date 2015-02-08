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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js"></script>

<script type="text/javascript">
$(function() {
    $(window).scroll(function (e) {
        var distanceTop = window.pageYOffset || document.documentElement.scrollTop;
        var beginAnimationAt = 50;

        if (distanceTop > beginAnimationAt) {
            $('.header').addClass('smaller', 1000);
        } else {
            $('.header').removeClass('smaller');
        }
    });
});
</script>


</body>
</html>
