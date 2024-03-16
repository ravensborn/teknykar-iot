@extends('layouts.app')


@section('content')
    <div class="inner-banner text-center">
        <div class="container">
            <div class="box">
                <h3>Privacy and Policy</h3>
            </div><!-- /.box -->
            <div class="breadcumb-wrapper">
                <div class="clearfix">
                    <div class="pull-left">
                        <ul class="list-inline link-list">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                Privacy and Policy
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

                        <p>At Teknykar, we understand the importance of privacy and are committed to safeguarding the personal information of our website visitors. This Privacy Policy outlines how we collect, use, and protect your information when you visit Teknykar.com (referred to as "the Website").</p>
                        br
                        <h5>Information Collection and Use</h5>
                        <p>Teknykar.com does not collect any personally identifiable information from visitors browsing our website. We do not use cookies or any tracking mechanisms to gather information about your visit. The only data we receive is the information voluntarily provided by you through the contact form available on our website.</p>

                        <h5>Contact Form</h5>
                        <p>When you fill out the contact form on Teknykar.com, we collect the following information:</p>
                        <ul>
                            <li>Name</li>
                            <li>Phone Number</li>
                            <li>Email address</li>
                            <li>Subject</li>
                            <li>Message</li>
                        </ul>
                        <p>This information is used solely for the purpose of responding to your inquiries or feedback. We do not share, sell, or disclose this information to any third parties unless required by law.</p>

                        <h5>Data Security</h5>
                        <p>Teknykar takes appropriate measures to ensure the security of your personal information. We utilize industry-standard security protocols to protect data transmitted to us through our contact form. However, please be aware that no method of transmission over the internet or electronic storage is 100% secure, and while we strive to protect your personal information, we cannot guarantee its absolute security.</p>

                        <h5>Links to Third-Party Websites</h5>
                        <p>Teknykar.com may contain links to third-party websites for your convenience and reference. We are not responsible for the privacy practices or the content of these third-party sites. We encourage you to review the privacy policies of any website you visit.</p>

                        <h5>Children's Privacy</h5>
                        <p>Teknykar.com is not directed at individuals under the age of 13. We do not knowingly collect any personally identifiable information from children under 13. If you are a parent or guardian and believe that your child has provided us with personal information, please contact us, and we will promptly delete such information from our records.</p>

                        <h5>Changes to this Privacy Policy</h5>
                        <p>Teknykar reserves the right to update or modify this Privacy Policy at any time without prior notice. Any changes will be effective immediately upon posting the revised Privacy Policy on this page. We encourage you to review this Privacy Policy periodically for any updates.</p>

                        <h5>Contact Us</h5>
                        <p>If you have any questions or concerns about our Privacy Policy, please contact us at <a href="mailto:info@teknykar.com">info@teknykar.com</a>.</p>

                        <p>Last updated: March 17, 2024</p>

                        <p>By using Teknykar.com, you signify your acceptance of this Privacy Policy. If you do not agree to this Privacy Policy, please do not use our website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
