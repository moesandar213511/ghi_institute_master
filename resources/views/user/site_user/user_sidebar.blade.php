<div class="sidebar">
    <div class="widget widget-nav-menu">
        <div class=" widget-inner">
            <h2 class="widget-title maincolor2">Main Menu</h2>
            <div class="menu-main-navigation-container">
                <ul id="menu-main-navigation-1" class="menu">
                    <li class="menu-item">
                        <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                    </li>

                    <li class="menu-item"><a href="{{url('member')}}"><i class="fa fa-users"></i> Members</a>
                    </li>
                    <li class="sub-menu-left menu-item"><a href="{{url('eventList')}}"><i class="fa fa-bookmark"></i> Events</a>
                    </li>
                    <li class="menu-item"><a href="{{url('courseList')}}"><i class="fa fa-graduation-cap"></i> Courses</a>
                    </li>

                    <li class="multi-column menu-item"><a href="{{url('blogList')}}"><i class="
                                            fa fa-file"></i> Blogs</a>
                    </li>
                    <li class="menu-item"><a href="{{url('contact')}}"><i class="fa fa-phone"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="widget widget-search">
        <h2 class="widget-title">COURSE SEARCH</h2>
        <form role="search" method="get" id="searchform" class="u-course-search-form" action="http://university.cactusthemes.com/">
            <div class="input-group">
                <div class="input-group-btn u-course-search-dropdown">
                    <button class="btn btn-default dropdown-toggle u-course-search-dropdown-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="button-label">All</span> <span class="fa fa-angle-down"></span></button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" data-value="">All</a></li>
                        <li>
                            <a href="#" data-value="course-autumn-2014">Autumn Courses 2014</a>
                        </li>
                        <li>
                            <a href="#" data-value="bachelor">Bachelor</a>
                        </li>
                        <li>
                            <a href="#" data-value="course">Course</a>
                        </li>
                        <li>
                            <a href="#" data-value="study-2">Study</a>
                        </li>
                    </ul>
                </div><!-- /btn-group -->

                <input type="text" value="" name="s" id="s" placeholder="SEARCH" class="form-control">
                <input type="hidden" name="post_type" value="u_course">
                <input type="hidden" name="u_course_cat" class="u-course-search-cat" value="">
                <span class="input-group-btn">
                                        <button type="submit" id="searchsubmit" class="btn btn-default u-course-search-submit"><i class="fa fa-search"></i></button>
                                        </span>
            </div>
        </form>
    </div><!-- /widget-search -->

    <div class="widget widget-posts">
        <div class="blog-box">
            <h2 class="widget-title">LATEST POST</h2>
            <ul class="recent-posts clearfix">
                <li>
                    <div class="thumb item-thumbnail">
                        <a href="#">
                            <img src="{{asset('images/blog/widget/1.jpg')}}" alt="image">
                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                            <div class="thumbnail-hoverlay-cross"></div>
                        </a>
                    </div>
                    <div class="text">
                        <a href="#">Your Career Starts Here</a>
                        <p>JUNE 3, 2014</p>
                    </div>
                </li>
                <li>
                    <div class="thumb item-thumbnail">
                        <a href="#">
                            <img src="{{asset('images/blog/widget/2.jpg')}}" alt="image">
                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                            <div class="thumbnail-hoverlay-cross"></div>
                        </a>
                    </div>
                    <div class="text">
                        <a href="#">Spark Of Genius</a>
                        <p>JUNE 3, 2014</p>
                    </div>
                </li>
                <li>
                    <div class="thumb item-thumbnail">
                        <a href="#">
                            <img src="{{asset('images/blog/widget/3.jpg')}}" alt="image">
                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                            <div class="thumbnail-hoverlay-cross"></div>
                        </a>
                    </div>
                    <div class="text">
                        <a href="#">University Ranking</a>
                        <p>MAY 29, 2014</p>
                    </div>
                </li>
            </ul><!-- /popular-news clearfix -->
        </div>
    </div><!-- /widget-posts -->

    <div class="widget widget-courses">
        <h2 class="widget-title">COURSES LIST</h2>
        <ul class="recent-posts clearfix">
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/4.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">Chemical Engineering</a>
                    <p>DECEMBER 25, 2015</p>
                </div>
            </li>
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/5.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">Information System</a>
                    <p>MARCH 11, 2015</p>
                </div>
            </li>
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/6.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">Work-Life Balance</a>
                    <p>AUGUST 21, 2015</p>
                </div>
            </li>
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/7.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">The Theory Of Sport</a>
                    <p>OCTOBER 31, 2015</p>
                </div>
            </li>
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/8.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">Bachelor Of Nursing</a>
                    <p>JULY 24, 2015</p>
                </div>
            </li>
        </ul><!-- /popular-news clearfix -->
    </div><!-- /widget-posts -->

    <div class="widget widget-posts">
        <h2 class="widget-title">EVENTS LIST</h2>
        <ul class="recent-posts clearfix">
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/9.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">Chicago Architecture Foundation River Cruise</a>
                    <p>JUNE 22, 2016</p>
                </div>
            </li>
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/10.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">Spark Of Genius</a>
                    <p>JUNE 3, 2014</p>
                </div>
            </li>
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/11.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">University Ranking</a>
                    <p>MAY 29, 2014</p>
                </div>
            </li>
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/12.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">University Ranking</a>
                    <p>MAY 29, 2014</p>
                </div>
            </li>
            <li>
                <div class="thumb item-thumbnail">
                    <a href="#">
                        <img src="{{asset('images/blog/widget/13.jpg')}}" alt="image">
                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                        <div class="thumbnail-hoverlay-cross"></div>
                    </a>
                </div>
                <div class="text">
                    <a href="#">University Ranking</a>
                    <p>MAY 29, 2014</p>
                </div>
            </li>
        </ul><!-- /popular-news clearfix -->
    </div><!-- /widget-posts -->
</div><!-- sidebar -->