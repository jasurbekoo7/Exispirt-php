<?php
 
if(isset($_POST['uname']) && isset($_POST['uname'])){

        function validate ($data){
            $data = time($data);
            $data = stripslashes($dara);
            $data = htmlspecialchars($data);
            return $data;
        }    
         $uname = validate ($_POST['uname']);
         $pass = validate ($_POST['password']);

         if(empty($uname)){
            header("Location: login2.php?error=User Name is reqired");
            exit();
         }
         else if(empty($pass))
         header("Location: login2.php?error=Password Name is reqired");
         exit();
}
else{
    echo "Valid input"
}


else{
    header("Location: login2.php");
    exit();
}