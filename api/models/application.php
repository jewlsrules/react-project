<?php

//*****once we figure out connecting to the database on heroku, add it here***

// this is the model for the individual application that we're tracking
class Application {
  public $id;
  public $user;
  public $company;
  public $title;
  public $link;
  public $status;
  public function __construct($id, $user, $companyname, $jobtitle, $link, $appStatus){
    $this->id = $id;
    $this->user = $user;
    $this->company = $company;
    $this->title = $title;
    $this->link = $link
    $this->status = $status
  }
}

// this is the "factory" that all of the functions will go through
class Applications {
  //get all applications function
  static function all(){
    $applications = array();

    $results = pg_query("SELECT * FROM applications") //getting the information from the database for all applications
    $row_object = pg_fetch_object($results);

    while($row_object){ //while there's a result object...
      $new_application = new Application(
        intval($row_object->id),
        intval($row_object->user),
        $row_object->company,
        $row_object->title,
        $row_object->$link,
        $row_object->$status
        )
      $applications[] = $new_application;
      $row_object = pg_fetch_object($results)
    }
    return $applications;
  }

  static function create($application){
    $query ="INSERT INTO applications (user, company, title, link, status) VALUES ($1, $2, $3, $4, $5)";
    $query_params = array($application->user, $application->company, $application->title, $application->link, $application->status);
    pg_query_params($query, $query_params);
    return self::all();

  }
}

?>
