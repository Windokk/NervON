<!DOCTYPE  html>

<?php include("header.php")?>

<title>Windokk's Freelance</title>
<body style=background-color:#333333>
<div class="contactbox">
	  
	  <a>*Please note that this contact form is only for business inquires. Don't abuse or spam.</a>

	  <form action="/submit_contact.php" method="get">
	    
		  <input class="short_input" placeholder="Type your name..."type=text name="name"id="name"><br><br>
		  
		<input class="short_input"placeholder="Type your email..."type=email name="email"id="email"style="margin-top:70px;"><br><br>
		  
		<input class="short_input"placeholder="Type your subject..."type=text name="subject"id="subject"style="margin-top:150px;"><br><br>
		  
		<br>
         <textarea class="long_input"rows = "10" cols = "60" name="body" id="body" style="margin-top:200px;margin-left:180px;height:200px;">Enter details here...</textarea><br>
		
	    <input type="submit" value="Send" style="margin-top:500px;margin-left:320px;">
		  
	  </form>
	
	
	
</div>
	
<div>
   <button class="button1 button1a" onclick="fn3()" id="buttonside"style="top:240px;">
	<img src="https://windokkstudio.net/arrow.png" width=75 height=37,1> 
  </button>
</div>
<div class="sidebar" id="sidebar"style="height:100px;">
          <a >Contact me</a>
          <a >Links</a>
	   
</div>

	
   
</body>

<script>

<?php include("function.js")?>
	
Portfolio_Button.style.height = "60px";
Home_Button.style.height = "60px";
Game_Button.style.height = "60px";
Freelance_Button.style.height = "70px";
	
Portfolio_Button.style.backgroundColor = "#a0a0a0";
Home_Button.style.backgroundColor = "#a0a0a0";
Game_Button.style.backgroundColor = "#a0a0a0";
Freelance_Button.style.backgroundColor = "#4D4D4D";	
	
Home_Button.style.borderColor = "#a0a0a0";
Game_Button.style.borderColor = "#a0a0a0";
Freelance_Button.style.borderColor = "#4D4D4D";
Portfolio_Button.style.borderColor = "#a0a0a0";

</script>
<?php include("footer.php")?>
</html>