<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/survey.css">
  <link rel="stylesheet" href="css/go.css">
  <script src="js/index.js"></script>
  <title>National Survey</title>
</head>
<body onload="name()">
<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      $urlj = str_replace('http://localhost:7890/survey.php?name=' , "" , $url);
    echo("<script> function name() {
    document.getElementById('name').value = '". $urlj . "' }</script>" );
    
?>   

  
<div class="header">
  <a href="#default" class="logo">National
 Survey</a>
 <marquee direction="right" scrollamount = "1px" >   <img src= "https://upload.wikimedia.org/wikipedia/commons/e/e4/Spinning_Ashoka_Chakra.gif" style="width:50px"></marquee>
<hr />
</div>

<div id="body" class="body" >
  <p>1. What's is your name?</p>
  <input name="name" type="text" id="name" value="">
  <p>2. Where Do you live? 
<select name="state" id="state" class="form-control">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
</select>  </p>
  
  <hr />
  
  <p>3. Which Company phone do you use? 
<select name="phone" id="phone" class="phone">
  <option value="Iphone">Iphone</option>
  <option value="Samsung">Samsung</option>
  <option value="Nokia">Nokia</option>
  <option value="Realme">Realme</option>
  <option value="Redmi">Redmi</option>
  <option value="Narzo by Realme">Narzo by Realme</option>
  <option value="Vivo">Vivo</option>
  <option value="Oppo">Oppo</option>
  <option value="Lg">LG</option>
  <option value="Tecno">Tecno</option>
  <option value="IQOO">IQOO</option>
  <option value="One Plus+">One Plus</option>
  <option value="jio">Jio Feature phone</option>
  <option value="oth">Others</option>
  </select>
  </p>
<p>4.What is your Sim Operator?</p>
<select name="Sim" id="Sim" class="phone">
  <option value="Jio">Jio</option>
  <option value="Airtel">Airtel</option>
  <option value="Vodafone">Vodafone</option>
  <option value="Aircel">Aircel</option>
  <option value="VI">VI</option>
  <option value="BSNL">BSNL</option>

</div>

</body>
</html>