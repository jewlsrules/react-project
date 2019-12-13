<?php

class Application {
  public $user;
  public $companyName;
  public $jobTitle;
  public $jobLink;
  public $appStatus;
  public function __construct($user, $companyName, $jobTitle, $jobLink, $appStatus){
    $this->user = $user;
    $this->companyName = $companyName;
    $this->jobTitle = $jobTitle;
    $this->jobLink = $jobLink
    $this->appStatus = $appStatus
  }
}

?>
