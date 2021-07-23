@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
    <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Contact Us</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li>\ </li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <!-- contact posts -->
        <section class="main-content contact-posts">
            <div class="container">
                <div class="row">
                    <div class="post-contact">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form">
                                        <div class="line-box"></div>
                                        <form action="./contact/contact-process.php" method="post" id="contactform" class="comment-form" novalidate="">                            
                                            <fieldset class="style-1 full-name">
                                                <input type="text" id="name" placeholder="Your name" class="tb-my-input" name="author" tabindex="1" value="" size="32" aria-required="true">
                                            </fieldset>

                                            <fieldset class="style-1 email-address">
                                                <input type="email" id="email" placeholder="Your email" class="tb-my-input" name="email" tabindex="2" value="" size="32" aria-required="true">
                                            </fieldset> 

                                            <fieldset class="style-1 subject">
                                                <input type="text" id="subject" placeholder="Subject" class="tb-my-input" name="subject" tabindex="2" value="" size="32" aria-required="true">
                                            </fieldset> 

                                            <fieldset class="message-form">
                                                <textarea id="comment-message" placeholder="Your Message" name="comment" rows="8" tabindex="4"></textarea>
                                            </fieldset>

                                            <div class="submit-wrap">
                                                <button class="flat-button button-style style-v1">Send <i class="fa fa-angle-right"></i></button>
                                            </div>             
                                        </form>
                                    </div><!-- contact-form -->
                                </div><!-- col-md-6 -->

                                <div class="col-md-6">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div id="map" style="width: 100%; height: 500px; "></div> 
                                        </div>
                                    </div><!-- /container-fluid -->
                                </div>
                            </div><!-- /row-->
                        </div><!-- /col-md-9 -->

                        <div class="col-md-3">
                            <!-- sidebar -->
                            @include('user.site_user.user_sidebar')
                            <!-- /sidebar -->
                        </div><!-- /col-md-3 -->
                    </div>
                </div>
            </div>
        </section>
@endsection