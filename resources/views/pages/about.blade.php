@extends('layouts.app')


@section('content')
    <div class="inner-banner text-center">
        <div class="container">
            <div class="box">
                <h3>About Us</h3>
            </div><!-- /.box -->
            <div class="breadcumb-wrapper">
                <div class="clearfix">
                    <div class="pull-left">
                        <ul class="list-inline link-list">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li><!-- comment for inline hack
                        --><li>
                                About Us
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
                        <h4>We are always looking for specific approach to each <br>cases &amp; Provide full solutions.</h4>
                        <p>Welcome to EverythingIOT, your ultimate destination for all things related to the Internet of Things (IoT). We are a passionate team of technology enthusiasts committed to simplifying the complexities of IoT and making it accessible to everyone.</p>
                        <p>Founded with a vision to empower individuals and businesses with innovative IoT solutions, EverythingIOT offers a curated selection of top-tier IoT products, personalized consultations, custom development services, and comprehensive support.</p>
                        <p>At EverythingIOT, we believe in the transformative power of IoT to revolutionize the way we live, work, and interact with the world around us. Join us on our journey to explore the endless possibilities of IoT technology and unlock a future where everything is connected.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
