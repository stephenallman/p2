
<?php
error_reporting(-1); # Report all PHP errors
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
    <tr>
    <th class = "title" colspan="0"><h1>Password Generator</h1></th>
    </tr>
    
    <tr>
    <td class = "user" colspan="0"><h1>User Inputs</h1></td>
    </tr>
    
    <tr>
    <td class = "words">
	<h3>Quantity of Words</h3>
    </td>
    <td>
	<select  name= "qWords" value = "">
    	<optgroup>
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
	<h3>Quantity of Numbers</h3>
    </td>
    <td>
	<select  name= "qNumbers" value = "">
    	<optgroup>
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
   <h3>Number of Symbols</h3> 
   </td>
   <td>
   <select name= "qSymbols" value = "">
    	<optgroup>
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
	<td><h3>Submit To Generate Secret Code</h3></td>
	<td class = "submit">
	<input type = "submit" name = "submit" value = "Submit"> 
	</td>
</tr>
<tr>
<td class = "result" colspan = "0">

<?php require 'logic.php'; ?>

</td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>