<?php

  function postImg($img_path){
     return asset('images/post/'.$img_path);
  }
  function postExcerpt($post_dsc){
      return  substr($post_dsc,0,200);
  }