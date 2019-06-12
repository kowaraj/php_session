<?php
session_start();
session_unset(); //clear out variables
session_destroy();  //delete the file
header('Location: public.php');
?>