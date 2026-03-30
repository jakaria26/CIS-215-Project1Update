<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Survey Submission</title>
</head>
<body>
<header>
        <h1>Submission Page</h1>
        <p>Thank you for completesurvey.</p>
</header>
<main>
<?php

$global_password_hash = '$2y$10$NsymMgnuxhe7gKn4HsHTr.0uZ23Zm2RIUurqMxxpXxQqhIdZvPgJq';

/*
Tested Inputs:
correct password passd
wrong password faild
blank password faild
*/
function password_checker($password){
    global $global_password_hash;
if (password_verify($password, $global_password_hash)){
        return True;
    }
    else{
        return False;
    }
}

/*
Tested Inputs:
valid email -> check that it registers proper.
emails not from genesee.edu -> make work
inputs that are not emails -> make sure not work.
*/
function valEmail(){
    $email = $_POST["email"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        if (str_ends_with($email, "@genesee.edu")){
            return True;
        }
        else{
            print("<p>Email is invalid. :(</p><p>Please return to the form and try again.</p>");
            return False;
        }
    }
    else{
        print("<p>Email is invalid. :(</p><p>Please return to the form and try again.</p>");
        return False;
    }
}

/*
Tested Inputs:
valid option -> pass
no selection -> fail
fake value -> fail
*/
function age_checker(){
  $age = $_POST["age"];
$age_array = array(
  "0-12","13-17","18-22","23-27","28-32","33-37",
  "38-42","43-47","48-52","53-57","58-62","63-67","68+"
    );
if (in_array($age, $age_array)){
  return True;
    }
    else{
        return False;
    }
}

/*
Tested Inputs:
valid option passd
blank faild
*/
function gender_checker(){
$gender = $_POST["gender"];
$gender_array = array("m","f","nb","gf","a","o");
if (in_array($gender, $gender_array)){
return True;
    }
else{
return False;
    }
}

/*
Tested Inputs:
normal text -> pass
blank -> fail
too long -> fail
*/
function major_checker(){
$major = $_POST["major"];
if ($major == ""){
  return False;
    }
if (strlen($major) > 30){
  return False;
}
return True;
}

/*
Tested Inputs:
0, 12, 29 -> pass
-1, 31 -> fail
letters -> fail
blank -> fail
*/
function credit_hours_checker(){
  $credit_hours = $_POST["credit_hours"];
if ($credit_hours == ""){
return False;
    }
  if (!is_numeric($credit_hours)){
        return False;
    }
if ($credit_hours < 0){
        return False;
    }
if ($credit_hours > 30){
        return False;
    }
return True;
}

function good_submission(){
    print("<p>Thank you Submission!</p>");
    print("<p>Your form passed validation.</p>");
}

function bad_submission(){
    print("<p>Something was invalid.</p>");
    print("<p><a href='webform.php'>Go back to Web Form</a></p>");
}

function main(){

$user_password = $_POST["pw"];
if (password_checker($user_password)){
if (valEmail()){
if (age_checker()){
if (gender_checker()){
if (major_checker()){
if (credit_hours_checker()){
    good_submission();
                        }
else{
bad_submission();
                        }

                    }
else{
bad_submission();
                    }

                else{
    bad_submission();
 }

            }
else{
 bad_submission();
            }

        }
        else{
            bad_submission();
        }

    }
    else{
        bad_submission();
    }
}

main();

?>
    </main>

</body>
</html>


                   
   
   
   
    


               
 

