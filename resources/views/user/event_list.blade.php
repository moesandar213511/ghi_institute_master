@extends('user.site_user.user_master')
@section('title','Green Hackers Institute')
@section('content')
    <div class="page-title full-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Events</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="#">Home </a></li>
                                <li>\ EVENT</li>
                            </ul>                   
                        </div>                  
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title -->

        <section class="flat-row padding-v1">
            <div class="container">
                <div class="row">
                    <div id="content" class="col-md-9">
                        <div class="project-listing">
                            <div class="filter-cat">
                                <a href="#" class="flat-button">All</a>
                                <a href="#" class="flat-button">Academy</a>
                                <a href="#" class="flat-button">Others</a>
                                <select id="uni-project">
                                    <option value="#" selected="selected">All</option>
                                    <option value="#">Marketing</option><option value="#">academy</option>
                                </select>
                            </div>
                        </div>

                        @foreach($events as $event)
                        <div class="event-listing event-listing-classic">
                            <article class="post-item row event-classic-item">
                                <div class="col-md-4 col-sm-5">
                                    <div class="content-pad">
                                        <div class="item-thumbnail">
                                            <a href="{{url('/eventSingle/'.$event->id)}}">
                                                <img src="{{$event->photo_url}}" alt="image" style="width: 100%; height: 270px;">
                                                <div class="date-block">
                                                    <div class="month">
                                                        @php
                                                            $date = $event->date;
                                                                $year = substr($date,0,4);
                                                                     $month = substr($date,5,3);

                                                                     switch ($month) {
                                                                         case '01-':
                                                                             echo "Jan";
                                                                             break;

                                                                         case '02-':
                                                                             echo "Feb";
                                                                             break;

                                                                         case '03-':
                                                                             echo "Mar";
                                                                             break;

                                                                         case '04-':
                                                                             echo "Apri";
                                                                             break;

                                                                         case '05-':
                                                                             echo "May";
                                                                             break;

                                                                         case '06-':
                                                                             echo "Jun";
                                                                             break;

                                                                         case '07-':
                                                                             echo "Jul";
                                                                             break;

                                                                         case '08-':
                                                                             echo "Aug";
                                                                             break;

                                                                         case '09-':
                                                                             echo "Sep";
                                                                             break;

                                                                         case '10-':
                                                                             echo "Oct";
                                                                             break;

                                                                         case '11-':
                                                                             echo "Nov";
                                                                             break;

                                                                         case '12-':
                                                                             echo "Dec";
                                                                             break;

                                                                         default:

                                                                             break;
                                                                     }
                                                        @endphp
                                                    </div>
                                                    <div class="day">{{substr($event->date,8)}}</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <div class="content-pad">
                                        <div class="item-content">
                                            <h3 class="item-title">
                                                <a href="{{url('/eventSingle/'.$event->id)}}" class="main-color-1-hover">{{$event->title}}</a>
                                            </h3>
                                            <div class="price main-color-1">{{$event->fee}}</div>
                                            <p>
                                                {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($event->detail)),150)}}
                                            </p>
                                            <div class="event-time">{{$event->timing}}</div>
                                            <div class="event-address">{{$event->location}}</div>
                                        </div>
                                        <div class="item-meta">
                                        <a class="flat-button" href="{{url('/eventSingle/'.$event->id)}}">DETAILS
                                            <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div><!--/event-listing-->
                        @endforeach

                    </div><!-- /col-md-9 -->

                    <div class="col-md-3">
                        <!-- sidebar -->
                        @include('user.site_user.user_sidebar')
                        <!-- /sidebar -->
                    </div><!-- /col-md-3 -->
                </div>
            </div>
        </section>
@endsection