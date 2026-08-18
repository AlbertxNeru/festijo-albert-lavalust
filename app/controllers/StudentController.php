<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    private function getStudentData()
    {
        return [
            'student_id' => 'MCC2024-01610',
            'name'       => 'Albert C. Festijo',
            'course'     => 'BSIT',
            'year'       => '3rd Year',
            'section'    => '3F6',
            'email'      => 'albertfestijo27@gmail.com',
            'title'      => 'My Student Digital Profile'
        ];
    }

    public function index()
    {
        $data = $this->getStudentData();

        $data['access_granted'] =
            isset($_SESSION['acf_student_access']) &&
            $_SESSION['acf_student_access'] === true;

        $data['message'] = $_SESSION['student_message'] ?? '';

        unset($_SESSION['student_message']);

        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $data = $this->getStudentData();

        $data['skills'] = 'Web Development, Java Programming, HTML and CSS';
        $data['hobbies'] = 'Technology, Music, and Learning Programming';

        $this->call->view('student_profile', $data);
    }

    public function grantAccess()
    {
        $_SESSION['acf_student_access'] = true;
        $_SESSION['student_message'] =
            'Profile access has been successfully enabled.';

        redirect('student/profile');
    }

    public function lockProfile()
    {
        unset($_SESSION['acf_student_access']);

        $_SESSION['student_message'] =
            'Student profile has been locked successfully.';

        redirect('student');
    }
}