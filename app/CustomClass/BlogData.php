<?php


namespace App\CustomClass;


use App\Blog;

class BlogData
{

    private $id;
    private $blog_data;

    function __construct($blog_id) {
        $blog=Blog::findOrFail($blog_id);
        $this->id=$blog->id;
        $this->setBlogData($blog);
    }

    /**
     * @return mixed
     */
    public function getBlogData()
    {
        $this->blog_data['photo_url']=Path::$domain_url.'/upload/blog/'.$this->blog_data['photo'];

        return $this->blog_data;
    }

    /**
     * @param mixed $blog_data
     */
    private function setBlogData($blog_data)
    {
        $this->blog_data = $blog_data;
    }

}