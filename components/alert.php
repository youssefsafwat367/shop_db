<?php
if(isset($_SESSION['success'])){
      echo '<script>swal("'. $_SESSION['success'][0].'", "" ,"success");</script>';
}
unset($_SESSION['success']);

if(isset($_SESSION['warning'])){
      echo '<script>swal("'. $_SESSION['warning'][0].'", "" ,"warning");</script>';
}
unset($_SESSION['warning']);
if(isset($info_msg)){
   foreach($info_msg as $success_msg){
      echo '<script>swal("'.$info_msg.'", "" ,"info");</script>';
   }
}

if(isset($error_msg)){
   foreach($error_msg as $error_msg){
      echo '<script>swal("'.$error_msg.'", "" ,"error");</script>';
   }
}

?>