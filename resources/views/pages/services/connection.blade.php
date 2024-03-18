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
                                IOT Connection
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
                        <h3>IOT Connection</h3>
                        <br>
                        <p>
                            Teknykar's IoT Connection platform serves as the cornerstone of our innovative ecosystem,
                            providing seamless connectivity for diverse IoT devices. Leveraging state-of-the-art
                            protocols and standards, our platform ensures reliable and efficient communication between
                            devices and the central network infrastructure. Whether it's connecting sensors in smart
                            homes, industrial equipment in factories, or tracking devices in logistics, Teknykar's IoT
                            Connection technology establishes a robust foundation for building scalable and
                            interoperable IoT solutions.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
