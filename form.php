<?php
    $ACCEPTED_USERNAME_LENGTH = 2;
    $ACCEPTED_PASSWORD = "bcit";
    $errorMessages = "";
    $bcit_student_number_pattern = "/^A0[0-9]{7}/";
    $array_of_languages = array();
    if (isset($_POST['username']) == false  || trim($_POST['username']) == "") {

        $errorMessages = 	$errorMessages . "<p>Please fill out the username field</p>";
    }
    if (isset($_POST['password']) == false   || trim($_POST['password']) == "") {

        $errorMessages = 	$errorMessages . "<p>Please fill out the password field</p>";
    }
    if (isset($_POST['studentNumber']) == false  || trim($_POST['studentNumber']) == "") {

        $errorMessages = 	$errorMessages . "<p>Please fill out the student number field</p>";
    }
    if (isset($_POST['gender']) == false){
        $errorMessages =    $errorMessages . "<p> Please fill out the gender field </p>";
    }
    
    /**
     * data normalization
     */
    $user = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(strlen($user)<$ACCEPTED_USERNAME_LENGTH){
        $$errorMessages = $errorMessages . "<p>Username length must be greater than 2</p>";
    }
    if($password != $ACCEPTED_PASSWORD){
        $errorMessages = $errorMessages . "<p>Password field must be 'bcit'</p>";
    }
    if(preg_match($bcit_student_number_pattern,$_POST['studentNumber']) != 1){
        $errorMessages = $errorMessages . "<p>Student Number must start with A0 followed by 7 more digits</p>";
    }
    if ($errorMessages != "") {

        $encodedMessages = urlencode($errorMessages);
        header("Location: index.php?errors=" . $encodedMessages);
    }

    if($_POST['gender'] == "Male"){
        echo "Hello, Mr." . $user . "!";
    }
    if($_POST['gender'] == "Female"){
        echo "Hello, Ms." . $user . "!";
    }
   
    if( isset($_POST['languages'])){
        echo "<br />";
        $array_of_languages = $_POST['languages'];

        if(sizeof($array_of_languages)>=1){
            echo "<br />List of languages: <br />";
            foreach ($array_of_languages as $lang){
                echo "<br />" .$lang;
            }
            echo "<br />";
            if(sizeof($array_of_languages)>5){
                echo "<br />" . "Impressive. You have been studying quite a few computing languages.";
            }
            elseif(sizeof($array_of_languages)>2){
                echo"<br />" . "You are multilingual.";
            }
        }
    }
    if(!$array_of_languages){
        echo "<br />You are not studying any computer language(s)<br />";
    }
    

?>