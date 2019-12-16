<?php

//*****once we figure out connecting to the database on heroku, add it here***
// ​$dbconn = pg_connect(getenv("DATABASE_URL")); //to see db in heroku
// $dbconn = pg_connect("host=localhost dbname=app_tracker"); //added when talking to Matt, to see stuff locally

$dbconn = null;
if(getenv('DATABASE_URL')){
    $connectionConfig = parse_url(getenv('DATABASE_URL'));
    $host = $connectionConfig['host'];
    $user = $connectionConfig['user'];
    $password = $connectionConfig['pass'];
    $port = $connectionConfig['port'];
    $dbname = trim($connectionConfig['path'],'/');
    $dbconn = pg_connect(
        "host=".$host." ".
        "user=".$user." ".
        "password=".$password." ".
        "port=".$port." ".
        "dbname=".$dbname
    );
} else {
    $dbconn = pg_connect("host=localhost dbname=app_tracker");
}

// this is the model for the individual application that we're tracking
class Application {
  public $id;
  public $user_id;
  public $company_name;
  public $job_title;
  public $job_link;
  public $app_status;
  public function __construct($id, $user_id, $company_name, $job_title, $job_link, $app_status){
    $this->id = $id;
    $this->user_id = $user_id;
    $this->company_name = $company_name;
    $this->job_title = $job_title;
    $this->job_link = $job_link;
    $this->app_status = $app_status;
  }
}

// this is the "factory" that all of the functions will go through
class Applications {
  //get all applications function
  static function all(){
    $applications = array();

    $results = pg_query("SELECT * FROM applications"); //getting the information from the database for all applications
    $row_object = pg_fetch_object($results);

    while($row_object){ //while there's a result object...
      $new_application = new Application(
        intval($row_object->id),
        intval($row_object->user_id),
        $row_object->company_name,
        $row_object->job_title,
        $row_object->$job_link,
        $row_object->$app_status
      );
      $applications[] = $new_application;
      $row_object = pg_fetch_object($results);
    }
    return $applications;
  }

  static function create($application){
    $query ="INSERT INTO applications (user_id, company_name, job_title, app_link, app_status) VALUES ($1, $2, $3, $4, $5)";
    $query_params = array($application->user_id, $application->company_name, $application->job_title, $application->job_link, $application->app_status);
    pg_query_params($query, $query_params);
    return self::all();

  }
}

?>
