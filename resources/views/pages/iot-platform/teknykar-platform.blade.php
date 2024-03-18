@extends('layouts.app')


@section('content')
    <div class="inner-banner text-center">
        <div class="container">
            <div class="box">
                <h3>IOT Platform</h3>
            </div><!-- /.box -->
            <div class="breadcumb-wrapper">
                <div class="clearfix">
                    <div class="pull-left">
                        <ul class="list-inline link-list">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}">IOT Platform</a>
                            </li>
                            <li>
                                Teknykar Platform
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
                        <h3>Teknykar Platform Offers and Packages</h3>
                        <br>
                        <p>
                            At Teknykar, we understand that every IoT project is unique, which is why we offer a range of tailored packages designed to meet diverse needs and budgets. Our Starter Package provides an ideal entry point for those embarking on small-scale IoT initiatives, offering 5 IoT sensors along with basic connectivity features and access to our intuitive mobile and web applications. For those ready to expand their IoT deployments, our Standard Package steps up the game with 15 IoT sensors, advanced connectivity options, and enhanced analytics features, providing the perfect balance of functionality and scalability. Meanwhile, our Premium Package is crafted for organizations seeking comprehensive IoT solutions, offering unlimited IoT sensors, enterprise-grade connectivity solutions, and customizable dashboards and reports tailored to their specific requirements. Whether you're just starting out or looking to revolutionize your IoT infrastructure, Teknykar's packages provide the flexibility, performance, and support needed to succeed in today's connected world.
                        </p>
                        <br>
                        <ul>
                            <li>
                                <hr>
                                <h4 style="margin-bottom: 5px; font-style: normal;">Starter Package</h4>
                                <p>Get started with our Starter Package, ideal for small-scale IoT projects. This package includes 5 IoT sensors, basic connectivity features, and access to our mobile and web applications.</p>
                                <ul>
                                    <li>5 IoT sensors</li>
                                    <li>Basic connectivity</li>
                                    <li>Access to mobile and web applications</li>
                                </ul>
                                <p>Price: $99.99/month</p>
                            </li>
                            <li>
                                <hr>
                                <h4 style="margin-bottom: 5px; font-style: normal;">Standard Package</h4>
                                <p>Upgrade to our Standard Package for expanded IoT capabilities. With 15 IoT sensors, advanced connectivity options, and enhanced analytics features, this package is perfect for growing IoT deployments.</p>
                                <ul>
                                    <li>15 IoT sensors</li>
                                    <li>Advanced connectivity</li>
                                    <li>Enhanced analytics features</li>
                                </ul>
                                <p>Price: $199.99/month</p>
                            </li>
                            <li>
                                <hr>
                                <h4 style="margin-bottom: 5px; font-style: normal;">Premium Package</h4>
                                <p>Unlock the full potential of your IoT ecosystem with our Premium Package. Enjoy unlimited IoT sensors, enterprise-grade connectivity solutions, and customizable dashboards and reports tailored to your specific needs.</p>
                                <ul>
                                    <li>Unlimited IoT sensors</li>
                                    <li>Enterprise-grade connectivity</li>
                                    <li>Customizable dashboards and reports</li>
                                </ul>
                                <p>Contact us for pricing</p>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
