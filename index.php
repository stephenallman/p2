
<?php
error_reporting(-1); 
ini_set('display_errors', 1);
?> 

<!DOCTYPE html>
<html>
<head>
	<title>P2 Allman</title>
<link href="p2.css" rel="stylesheet" type="text/css">
</head>	

<body>

<?php

$qWords = $qSymbols = $qNumbers = 0;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$qWords = user_input($_POST["qWords"]);
	$qSymbols = user_input($_POST["qSymbols"]);
	$qNumbers = user_input($_POST["qNumbers"]);
}

function user_input($data){
	$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  
  return ($data);
} 
?>

<form method = 'POST' action = 'index.php' onsubmit = "return valdiateForm" >

<fieldset>
	<table>
    
    <th class = "title" colspan="2">Password Generator</th></th>
    <tr>
    <td class = "user" colspan="2">User Inputs</td>
    </tr>
    
    <tr>
    <td class = "words">
	Quantity of Words
    </td>
    <td>
	<select  name= "qWords" >
    	<optgroup><label></label>
    	<option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
        <option value = "6">6</option>
        <option value = "7">7</option>
        <option value = "8">8</option>
    </optgroup>
   </select>
   </td>
   </tr> 
   <tr>
    <td class = "numbers">
	Quantity of Numbers
    </td>
    <td>
	<select  name= "qNumbers" >
    	<optgroup><label></label>
        <option value = "0">0</option>
    	<option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
        <option value = "6">6</option>
        <option value = "7">7</option>
        <option value = "8">8</option>
        <option value = "9">9</option>
    </optgroup>
   </select>
   </td>
   </tr>
   <tr>
   <td class = "symbols">
   Number of Symbols
   </td>
   <td>
   <select name= "qSymbols">
    	<optgroup><label></label>
         <option value = "0">0</option>
    	<option value = "1">1</option>  
        <option value = "2">2</option>
         <option value ="3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
        <option value = "6">6</option>
        <option value = "7">7</option> 
    </optgroup>
   </select>
    </td>
    </tr>

 <tr> 
	<td class = "submit">Submit To Generate Secret Code</td>
	<td>
	<input type = "submit" name = "submit" value = "Submit"> 
	</td>
</tr>
<tr>
<td class = "result" colspan = "2">

<?php require 'logic.php'; ?>

</td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>