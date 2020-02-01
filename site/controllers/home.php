<?php

return function ($kirby) {

  $error = null;
  $bookmarks = null;

	if($user = $kirby->user() and $kirby->request()->is('POST')) {

    // AddBookmark()
    if(get('title') and get('link')) {

      $bookmarks = $user->bookmarks()->yaml();

      $arr = array(
         'title' => get('title')
        ,'link'  => get('link'));

      
      array_push($bookmarks, $arr);

      try {
        $user->update([
          'Bookmarks' => Yaml::encode($bookmarks)
        ]);
        header("Refresh:0");
  
      } catch(Exception $e) {
  
        $error = $e->getMessage(); 
      }
    }

    // DeleteBookmark()
    if(get('bookmark')) {

      $bookmarks = $user->bookmarks()->yaml();

      array_splice($bookmarks, get('bookmark'), 1);

      try {
        $user->update([
          'Bookmarks' => Yaml::encode($bookmarks)
        ]);
        header("Refresh:0");
  
      } catch(Exception $e) {
  
        $error = $e->getMessage(); 
      }
    }



  }
    
  return [
    'error' => $error,
    'bookmarks' => $bookmarks
  ];
};