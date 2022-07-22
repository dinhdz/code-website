    

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/box/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="assets/animation/wow.min.js"></script>
    <script type="text/javascript" src="assets/slick/slick.js"></script>
    <script type="text/javascript" src="assets/carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/hc-offcanvas-nav.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script>
        wow = new WOW(
        {
           animateClass: 'animated',
           offset: 100,
           callback: function (box) {
               console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
           }
        }
        );
        wow.init();
    </script>
</body>

</html>