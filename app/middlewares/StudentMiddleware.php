<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (
            !isset($_SESSION['acf_student_access']) ||
            $_SESSION['acf_student_access'] !== true
        ) {
            $_SESSION['student_message'] =
                'Access denied by StudentMiddleware. Enable profile access first.';

            redirect('student');

            return;
        }

        return $next();
    }
}