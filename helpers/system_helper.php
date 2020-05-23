<?php
// Redirect to page
function redirect($page = FALSE, $message = NULL, $message_type = NULL) {
  if(is_string($page)) {
    $location = $page;
  } else {
    $location = $_SERVER['SCRIPT_NAME'];
  }

  // check for message
  if($message != NULL) {
    // Set messate
    $_SESSION['message'] = $message;
  }

  if($message_type != NULL) {
    // Set messate
    $_SESSION['message_type'] = $message_type;
  }

  header('Location: ' . $location);
  echo $location;
  exit;

}

//display the message
function displayMessage() {
  if(!empty($_SESSION['message'])) {

    $message = $_SESSION['message'];

    if(!empty($_SESSION['message_type'])) {
      // assing variable
      $message_type = $_SESSION['message_type'];
      //create output
      if($message_type == 'error'){
        echo '<div class="alert alert-danger">' . $message . '</div>';
      } else {
        echo '<div class="alert alert-success">' . $message . '</div>';
      }
    }

    unset($_SESSION['message']);
    unset($_SESSION['message_type']);

  } else {
    echo '';
  }
}


