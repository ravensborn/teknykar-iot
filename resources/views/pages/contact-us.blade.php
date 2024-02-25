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
                            <p>Ph: +964 (750) 380-7676<br>Email: info@time-net.net</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
