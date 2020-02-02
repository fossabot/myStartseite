<?php

return function ($kirby) {

  if($kirby->user()) {
    go('/');
  } 

  $error = null;
  
	if($kirby->request()->is('POST') and get('email') and get('password')) {

     try {

      $user = $kirby->users()->create([
        'email'     => esc(get('email')),
        'role'      => 'visitor',
        'language'  => 'en',
        'password'  => esc(get('password'))
      ]);
    
    } catch(Exception $e) {
    
      $error = $e->getMessage();    
    }

  }
    
  return [
    'error' => $error
  ];
};