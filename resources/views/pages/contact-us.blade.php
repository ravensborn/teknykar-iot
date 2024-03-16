@extends('layouts.app')


@section('content')

    <div class="inner-banner text-center">
        <div class="container">
            <div class="box">
                <h3>Contact Us</h3>
            </div><!-- /.box -->
            <div class="breadcumb-wrapper">
                <div class="clearfix">
                    <div class="pull-left">
                        <ul class="list-inline link-list">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li><!-- comment for inline hack
                        --><li>
                                Contact Us
                            </li>
                        </ul><!-- /.list-line -->
                    </div><!-- /.pull-left -->
                </div><!-- /.container -->
            </div>
        </div><!-- /.container -->
    </div>
    <section class="default-section sec-padd">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item center">
                        <div class="icon_box">
                            <span class="icon-magnifying-glass"></span>
                        </div>
                        <h4>Visit Our Place</h4>
                        <div class="text">
                            <p>Ankawa Khabat Street <br>Erbil, 44001, KRI</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item center">
                        <div class="icon_box">
                            <span class="icon-clock"></span>
                        </div>
                        <h4>Office Schedule</h4>
                        <div class="text">
                            <p>Saturday to Thursday: 09.00am to 5.00pm <br>Friday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item center">
                        <div class="icon_box">
                            <span class="icon-telephone"></span>
                        </div>
                        <h4>Quick Contact</h4>
                        <div class="text">
                            <p>Ph: +964 (750) 380-7676<br>Email: sale@teknykar.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_us sec-padd-bottom" id="support-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3>Send Your Message Us</h3>
                    </div>
                    <div class="default-form-area" >
                        @if(session()->has('success_message'))
                            <div class="alert alert-success">
                                Successfully sent the message.
                            </div>
                        @endif
                        <form class="default-form" action="{{ route('send-support-email') }}" method="post">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="" placeholder="Your Name *" required="" aria-required="true">
                                        @error('name') {{ $message }}  @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control required email" value="" placeholder="Your Mail *" required="" aria-required="true">
                                        @error('email') {{ $message }}  @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" value="" placeholder="Phone">
                                        @error('phone') {{ $message }}  @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" value="" placeholder="Subject">
                                        @error('subject') {{ $message }}  @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control textarea required" placeholder="Your Message...." aria-required="true"></textarea>
                                        @error('message') {{ $message }}  @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="thm-btn2" type="submit" data-loading-text="Please wait...">send message</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <div class="home-google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6437.12372408354!2d43.996198!3d36.225843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4007190061dfb669%3A0x14dd9a1b784fe7ea!2sTimeNet%20ISP!5e0!3m2!1sen!2siq!4v1710147526078!5m2!1sen!2siq" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
