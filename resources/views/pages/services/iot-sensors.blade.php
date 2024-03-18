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
                                IOT Sensors
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
                        <h3>IOT Sensors</h3>
                        <br>
                        <p>
                            Teknykar's portfolio of IoT sensors encompasses a wide range of cutting-edge devices
                            designed to capture and transmit real-time data across various environments and
                            applications. From temperature and humidity sensors to motion detectors and air quality
                            monitors, our sensors leverage advanced technologies to provide accurate measurements and
                            reliable performance. Built to withstand harsh conditions and operate in diverse settings,
                            Teknykar's IoT sensors are engineered for durability, longevity, and interoperability,
                            ensuring seamless integration into any IoT ecosystem. Whether it's optimizing energy
                            efficiency in buildings, improving agricultural yields, or enhancing industrial processes,
                            our sensors play a vital role in enabling smarter, more connected environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
