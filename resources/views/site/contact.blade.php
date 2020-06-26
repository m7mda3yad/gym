@extends('site.index')
@section('content')
<section class="breadcrumb-section set-bg" style="background-image:url('asset/img/breadcrumb/classes-breadcrumb.jpg')"
         data-setbg="{{asset('asset/img/breadcrumb/classes-breadcrumb.jpg')}}">
<div class="container"><div class="row"><div class="col-lg-12"><div class="breadcrumb-text">
                    <h2>Contact</h2>
<div class="breadcrumb-option">
                            <a href="home"><i class="fa fa-home"></i> Home</a>
                            <span>Contact</span>
</div></div></div></div></div></section><div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55251.37709964788!2d31.29348387917556!3d30.059483810319847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2z2KfZhNmC2KfZh9ix2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1584062837566!5m2!1sar!2seg"width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<section class="contact-section spad"><div class="container"><div class="row"><div class="col-lg-4"><div class="contact-info">
                                <h4>Contacts Us</h4>
<div class="contact-address"><div class="ca-widget"><div class="cw-icon">
<img src="img/icon/icon-1.png" alt="">
</div><div class="cw-text">
                                    <h5>Our Location</h5>
                                    <p>49 Road 11461 Cairo</p>
</div></div><div class="ca-widget"><div class="cw-icon">
                                    <img src="img/icon/icon-2.png" alt="">
</div><div class="cw-text">
                                    <h5>Phone:</h5>
                                    <p>+20 1234567891</p>
</div></div><div class="ca-widget"><div class="cw-icon">
                                    <img src="img/icon/icon-3.png" alt="">
</div><div class="cw-text">
                                    <h5>Mail</h5>
                                    <p>timgym@ gmail.com</p>
</div></div></div></div></div><div class="col-lg-8"><div class="contact-form">
                                    <h4>Leave A Comment</h4>
                              
                                    <form method="post" action="">
                                            @csrf          
<div class="row">
    @if(isset(Auth::user()->name))    
<div class="col-lg-6">
                                        <input name="name" type="text" placeholder="Your name" required value="{{Auth::user()->name}}">
</div>
<div class="col-lg-6">
                                        <input type="email" name="email" placeholder="Your email" required value="{{Auth::user()->email}}">
</div>
@else
<div class="col-lg-6">
                                        <input name="name" type="text" placeholder="Your name" required >

</div>
<div class="col-lg-6">
                                        <input type="email" name="email" placeholder="Your email" required >
</div><div class="col-lg-12">
@endif                                                <textarea name="massage" placeholder="Your messages" required></textarea>
                                                      <button type="submit">Send Message</button>
</div></div>
                                               </form>
</div></div></div></div></section>
@endsection  