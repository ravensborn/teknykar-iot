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
                                Web Application
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
                        <h3>Web Application</h3>
                        <br>
                        <p>
                            Teknykar's Web Application serves as a comprehensive hub for managing and analyzing IoT
                            data, providing users with actionable insights and enhanced visibility into their connected
                            devices. With customizable dashboards, interactive visualizations, and advanced analytics
                            tools, our web app empowers businesses and individuals to make informed decisions and
                            optimize their IoT deployments. From monitoring sensor data trends to identifying potential
                            performance bottlenecks, Teknykar's web-based interface offers unparalleled flexibility and
                            scalability for managing IoT ecosystems of any size.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
