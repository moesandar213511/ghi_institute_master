<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Course;
use App\CustomClass\BlogData;
use App\CustomClass\CourseData;
use App\CustomClass\EventData;
use App\CustomClass\MemberData;
use App\Event;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UIController extends Controller
{    
    public function HomePage(){
        $courses=Course::where('category','academic')->orderBy('id','desc')->limit(1)->get();
        $academic_course=[];
        foreach ($courses as $data){
            $course_data=new CourseData($data->id);
            array_push($academic_course,$course_data->getCourseData());
        }

        $courses_o=Course::where('category','diploma')->orWhere('category','online course')->orderBy('id','desc')->get();
        $other_course=[];
        foreach ($courses_o as $data){
            $course_data=new CourseData($data->id);
            array_push($other_course,$course_data->getCourseData());
        }

        return view('user.index')->with([
            'academic_course'=>$academic_course,
            'other_course'=>$other_course
        ]);
    }

    public function member()
    {
        $members=Member::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($members as $data){
            $member_data=new MemberData($data->id);
            array_push($arr,$member_data->getMemberData());
        }

        return view('user.member')->with([
            'member'=>$arr
        ]);
    }

    public function eventList()
    {
        $events=Event::where('date', '>=', date('Y-m-d'))->orderBy('date')->get();
        $arr=[];
        foreach ($events as $data){
            $event_data=new EventData($data->id);
            array_push($arr,$event_data->getEventData());
        }

        return view('user.event_list')->with([
            'events'=>$arr,
        ]);
    }

    public function courseList()
    {
        $courses=Course::where('category','academic')->orderBy('id','desc')->limit(1)->get();
        $academic_course=[];
        foreach ($courses as $data){
            $course_data=new CourseData($data->id);
            array_push($academic_course,$course_data->getCourseData());
        }

        $courses_o=Course::where('category','diploma')->orWhere('category','online course')->orderBy('id','desc')->get();
        $other_course=[];
        foreach ($courses_o as $data){
            $course_data=new CourseData($data->id);
            array_push($other_course,$course_data->getCourseData());
        }

        return view('user.course_list')->with([
            'academic_course'=>$academic_course,
            'other_course'=>$other_course
        ]);
    }

    public function blogList()
    {
        $blogs=Blog::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($blogs as $data){
            $blog_data=new BlogData($data->id);
            array_push($arr,$blog_data->getBlogData());
        }

        return view('user.blog_list')->with([
            'blogs'=>$arr
        ]);
    }

    public function blogSingle($id)
    {
        $blog_obj = new BlogData($id);
        $blog_detail = $blog_obj->getBlogData();

        return view('user.blog_single')->with([
            'blog_detail'=>$blog_detail
        ]);
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function courseSingle($id)
    {
        $course_obj = new CourseData($id);
        $course_detail = $course_obj->getCourseData();

        return view('user.course_single')->with([
            'course_detail'=>$course_detail
        ]);
    }

    public function memberSingle($id)
    {
        $member_obj = new MemberData($id);
        $member_detail = $member_obj->getMemberData();

        return view('user.member_single')->with([
            'member_detail'=>$member_detail
        ]);
    }

    public function portfolio()
    {
        return view('user.portfolio');
    }
    public function portfolioSingle()
    {
        return view('user.portfolio_single');
    }

    public function eventSingle($id)
    {
        $event_obj = new EventData($id);
        $event_detail = $event_obj->getEventData();

       return view('user.event_single')->with([
           'event_detail'=>$event_detail,
       ]);
    }
}
