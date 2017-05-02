<?php namespace App\Http\Controllers;

use App\Course;

class CourseController extends Controller
{
  public function index()
  {
    $courses = Course::all();
    return $this->createSuccessResponse($courses, 200);
  }

  public function show($id)
  {
    $course = Course::find($id);
    if ($course)
    {
      $this->createSuccessResponse($course, 200);
    }
    else
    {
      $message = 'Course with ID ' . $id .' does not exist';
      return $this->createErrorResponse($message, 404);
    }

  }
}