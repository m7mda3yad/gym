<?php  
  $d = new \App\Web_data();
       $d=$d->find(1);

?>            <footer class="footer-section">
<div class="container"><div class="row"><div class="col-md-4"><div class="contact-option">
                    <span>Phone</span>
                    <p>{{$d->site_phone}}</p>
</div></div>
<div class="col-md-4"><div class="contact-option">
                    <span>Address</span>
                    <p>49 Road 11461 Cairo</p>
</div></div>
<div class="col-md-4">
<div class="contact-option">
                    <span>Email</span>
                    <p>{{$d->email}}</p>
</div></div></div>
<div class="subscribe-option set-bg" data-setbg="img/footer-signup.jpg">
<div class="so-text">
                <h4>Subscribe To Our Mailing List</h4>
                <p>Sign up to receive the latest information </p>
</div>
            <form action="#" class="subscribe-form">
                <input type="text" placeholder="Enter Your Mail">
                <button type="submit"><i class="fa fa-send"></i></button>
            </form>
</div>
<div class="copyright-text">
            <ul>
                <li><a href="#">Term&Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
       <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made with 
            <i class="fa fa-heart" aria-hidden="true"></i> by SWTeam
     </p>
<div class="footer-social">
                <a href="/{{$d->facebook}}"><i class="fa fa-facebook"></i></a>
                <a href="/{{$d->twitter}}"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                <a href="/{{$d->youtube}}"><i class="fa fa-youtube-play"></i></a>
</div></div></div>
</footer>

<button id="btnScrollToTop">
  <i class="fa fa-chevron-up" style="font-size:24px"></i>
</button>
<script>
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 300) {
        $('#btnScrollToTop').fadeIn("slow");
    } else {
        $('#btnScrollToTop').fadeOut("slow");
    }
});
$(document).ready(function() {
    $("#btnScrollToTop").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "smooth");
        return false;
    });

});

$(document).ready(function(){
// Add smooth scrolling to all links
$("a").on('click', function(event) {

// Make sure this.hash has a value before overriding default behavior
if (this.hash !== "") {
  // Prevent default anchor click behavior
  event.preventDefault();

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 800, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
  });
} // End if
});
});
</script>
<script src="{{asset('asset/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('asset/js/mixitup.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
</body>
</html>