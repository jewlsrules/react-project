<?php

//*****once we figure out connecting to the database on heroku, add it here***

// this is the model for the individual application that we're tracking
class Application {
  public $id;
  public $user;
  public $companyName;
  public $jobTitle;
  public $jobLink;
  public $appStatus;
  public function __construct($id, $user, $companyName, $jobTitle, $jobLink, $appStatus){
    $this->id = $id;
    $this->user = $user;
    $this->companyName = $companyName;
    $this->jobTitle = $jobTitle;
    $this->jobLink = $jobLink
    $this->appStatus = $appStatus
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
        $row_object->companyName,
        $row_object->jobTitle,
        $row_object->$jobLink,
        $row_object->$appStatus
        )
      $applications[] = $new_application;
      $row_object = pg_fetch_object($results)
    }
    return $applications;
  }
}

?>
