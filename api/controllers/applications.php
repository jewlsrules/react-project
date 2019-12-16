<?php
include_once __DIR__ . '/../models/application.php';
header('Content-Type: application/json');

if ($_REQUEST['action'] === 'index') {
  echo json_encode(Applications::all());
} elseif ($_REQUEST['action'] === 'post') {
  $request_body = file_get_contents('php://input');
  $body_object = json_decode($request_body);
  $new_application = new Application(null, $body_object->user_id, $body_object->company_name, $body_object->job_title, $body_object->job_link, $body_object->app_status);
  $all_applications = Applications::create($new_application);
  echo json_encode($all_applications);
}

?>
