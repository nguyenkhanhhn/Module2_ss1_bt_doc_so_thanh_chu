<?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $searchnumber=$_POST['number'];
       switch ($searchnumber){
           case 1:
           echo "one";
           break;
           case 2:
           echo "two";
           break;
           case 3:
           echo "three";
           break;

       }
    }
