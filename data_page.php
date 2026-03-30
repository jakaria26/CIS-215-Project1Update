<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Survey Data</title>
    </head>
    <body>
<header>
            <h1>Student Survey</h1>
            <p><a href="summary.php"> summary of our survey data</a></p>
            <p><a href="webform.php">Return to Form.</a></p>
</header>
<main>
<?php

function main(){
require "dbconfig.php";
$db = connectDB();
displaySurvey($db, surveyArray($db));
                }
function surveyArray($db){
$select_id = $db->prepare("SELECT id FROM student_survey");
$select_id->execute();
$ids = $select_id->fetchAll();
$id_array = array();
foreach ($ids as $array){
array_push($id_array, $array["id"]);
                    }
  return $id_array;
                }

  function displaySurvey($db, $id_array){
  $select_all = $db->prepare("SELECT * FROM student_survey");
  $select_all->execute();
foreach ($id_array as $id){
$survey_array = $select_all->fetch();
$email = $survey_array["email"];
$age = $survey_array["age"];
$gender = $survey_array["gender"];
$major = $survey_array["major"];
$credit_hours = $survey_array["credit_hours"];
if ($gender == "m"){
$gender = "Male";
}
elseif ($gender == "f"){
$gender = "Female";
 }
elseif ($gender == "nb"){
$gender = "Nonbinary";
                        }
elseif ($gender == "gf"){
$gender = "Genderfluid";
                        }
elseif ($gender == "a"){
$gender = "Agender";
                        }
elseif ($gender == "o"){
$gender = "Choose not to say/Other";
                        }
  print("<div><h2>$email</h2>
  <p>Age: $age | Gender: $gender | Credit Hours: $credit_hours</p>
  <p>Major: $major</p></div>");
  }
  }
main();

?>
</main>

    </body>
</html>
