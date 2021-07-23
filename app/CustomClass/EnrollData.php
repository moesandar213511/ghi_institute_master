<?php


namespace App\CustomClass;

 use App\Enrollment;

 class EnrollData {

    private $id;
    private $enrollment_data;

     function __construct($enroll_id) {
         $enroll=Enrollment::findOrFail($enroll_id);
         $this->id=$enroll->id;
         $this->setEnrollData($enroll);
     }

     /**
      * @return mixed
      */
     public function getEnrollData()
     {
         return $this->enrollment_data;
     }

     /**
      * @param mixed $blog_data
      */
     private function setEnrollData($entrollment_data)
     {
         $this->enrollment_data = $entrollment_data;
     }





 }
