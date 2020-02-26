<?php

return function ($kirby, $page) {

  $error = null;

	if($user = $kirby->user() and $kirby->request()->is('POST')) {

    try {

      $user->delete();
    
    } catch(Exception $e) {
    
      $error = 'The user could not be deleted! ' . $e->getMessage();    
    }
  }
    
  return [
    'error' => $error
  ];
};