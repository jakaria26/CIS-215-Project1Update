<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Survey Summary</title>
</head>
<body>
<header>
<h1>Survey Summary:</h1>
<p><a href="data_page.php">Return to Responses.</a></p>
<p><a href="webform.php">Return to Form.</a></p>
</header>
<main>
<?php
function main(){
require "dbconfig.php";
$db = connectDB();
age($db);
                }
function surveyArray($db){
$select_id = $db->prepare("SELECT id FROM student_survey");
$select_id->execute();
$ids = $select_id->fetchAll();
$id_array = array();
foreach ($ids as $array){
array_push($id_array, $array["id"]);}
return $id_array;}
function age($db){
print("<h2>Respondent Ages:</h2>");
$select_age = $db->prepare("SELECT age FROM student_survey");
$select_age->execute();
$age_select = $select_age->fetchAll();
$age_array = array();
foreach ($age_select as $array){
array_push($age_array, $array["age"]);}
$a0_12 = 0;
$a13_17 = 0;
$a18_22 = 0;
$a23_27 = 0;
$a28_32 = 0;
$a33_37 = 0;
$a38_42 = 0;
$a43_47 = 0;
$a48_52 = 0;
$a53_57 = 0;
$a58_62 = 0;
$a63_67 = 0;
$a68 = 0;
foreach ($age_array as $item){
if ($item == "0-12"){
$a0_12++;}
elseif ($item == "13-17"){
$a13_17++;
}
elseif ($item == "18-22"){
$a18_22++;}
elseif ($item == "23-27"){
$a23_27++;
}
elseif ($item == "28-32"){
$a28_32++;
}
elseif ($item == "33-37"){
$a33_37++;}
elseif ($item == "38-42"){
$a38_42++;}
elseif ($item == "43-47"){
$a43_47++;}
elseif ($item == "48-52"){
$a48_52++;}
elseif ($item == "53-57"){
$a53_57++;}
elseif ($item == "58-62"){
$a58_62++;}
elseif ($item == "63-67"){
  $a63_67++;}
  elseif ($item == "68+"){
  $a68++;}
  }

print("<p>0-12: $a0_12</p>");
print("<p>13-17: $a13_17</p>")
print("<p>18-22: $a18_22</p>");
print("<p>23-27: $a23_27</p>");
print("<p>28-32: $a28_32</p>");
print("<p>33-37: $a33_37</p>");
print("<p>38-42: $a38_42</p>");
print("<p>43-47: $a43_47</p>");
print("<p>48-52: $a48_52</p>");
print("<p>53-57: $a53_57</p>");
print("<p>58-62: $a58_62</p>");
print("<p>63-67: $a63_67</p>");
print("<p>68+: $a68</p>");
}
}
main();
?>
</main>
</body>
</html>
                }
