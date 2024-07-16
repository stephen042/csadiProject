<script src="{{asset('assets/assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/assets/js/equal-height.min.js')}}"></script>
<script src="{{asset('assets/assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/assets/js/progress-bar.min.js')}}"></script>
<script src="{{asset('assets/assets/js/modernizr.custom.13711.js')}}"></script>
<script src="{{asset('assets/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/assets/js/count-to.js')}}"></script>
<script src="{{asset('assets/assets/js/bootsnav.js')}}"></script>
<script src="{{asset('assets/assets/js/YTPlayer.min.js')}}"></script>
<script src="{{asset('assets/assets/js/main.js')}}"></script>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "{{ config('app.App_number') }}", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->