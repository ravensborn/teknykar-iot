@extends('layouts.app')


@section('content')
    <div class="inner-banner text-center">
        <div class="container">
            <div class="box">
                <h3>Services</h3>
            </div><!-- /.box -->
            <div class="breadcumb-wrapper">
                <div class="clearfix">
                    <div class="pull-left">
                        <ul class="list-inline link-list">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}">Services</a>
                            </li>
                            <li>
                                Mobile Application
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-content">
                        <h3>Mobile Application</h3>
                        <br>
                        <p>
                            Teknykar's Mobile Application empowers users to stay connected and in control of their IoT
                            devices from the palm of their hand. With intuitive interfaces and powerful features, our
                            mobile app offers seamless access to real-time data, alerts, and remote control
                            functionalities. Whether it's adjusting smart thermostats, monitoring security cameras, or
                            managing connected appliances, users can effortlessly interact with their IoT ecosystem
                            anytime, anywhere. Additionally, our mobile app prioritizes user privacy and security,
                            employing robust encryption protocols to safeguard sensitive information and ensure a secure
                            IoT experience.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
