<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

$routes->get('/forgetCodeLink','Login::forgetPasssword');
$routes->get('/forgetCode','Login::sendMailForgetPasssword');
$routes->post('/auth', 'Login::authentication');
$routes->add('/dashboard','Home::dashboard');
$routes->get('/logout','Home::logout');
$routes->get('/profile','Home::profile');
$routes->post('/imageUpload','Home::upload');
$routes->get('/org_drive','Organisation::drive_list');
$routes->get('/subject','Subject');
$routes->get('/subject_sets','Subject::Subject_sets');

$routes->add('/insert_drive','Organisation::insert_drive');
$routes->post('Question-add','Question::insertQuestion');
$routes->get('/questionBack','Question::index');
$routes->post('/Question-delete','Question::deleteQuestion');
$routes->post('Question-edit','Question::updateQuestion');

$routes->get('custom_set','Organisation::custom_set');
$routes->get('question-detail','Subject/viewSetQuestionDetails');

$routes->get('/student','Student');
$routes->get('/student_enrollment_list','Student::student_enrollment_list');
$routes->get('/InstituteStudent','Student::institute_student_list');
$routes->get('/InstituteEnrollmentStudent','Student::institute_student_enrollment_list');

$routes->get('/instituteReport','Report::instituteReport');



$routes->add('/InstituteScheduler','InstituteScheduler::scheduler_list');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
