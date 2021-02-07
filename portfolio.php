<!DOCTYPE  html>

<?php include("header.php")?>

<title>Windokk's Portfolio</title>
<body style=background-color:#333333>
<button class="button1 button1a" onclick="fn3()" id="buttonside">
<img src="https://windokkstudio.net/arrow.png" width=75 height=37,1> 
</button>

   <div class="sidebar" id="sidebar">
          <a>3D</a>
          <a>2D</a>
          <a>Audios</a>
          <a>Links</a>
   </div>
   <div>
	      
   </div>
    
</body>

<script>
	
<?php include("function.js")?>
	
Home_Button.style.height = "60px";
Game_Button.style.height = "60px";
Freelance_Button.style.height = "60px";	
Portfolio_Button.style.height = "70px";	
	
Portfolio_Button.style.backgroundColor = "#4D4D4D";
Game_Button.style.backgroundColor = "#a0a0a0";
Freelance_Button.style.backgroundColor = "#a0a0a0";
Home_Button.style.backgroundColor = "#a0a0a0";	
	
Portfolio_Button.style.borderColor = "#4D4D4D";
Game_Button.style.borderColor = "#a0a0a0";
Freelance_Button.style.borderColor = "#a0a0a0";
Home_Button.style.borderColor = "#a0a0a0";

</script>
<?php include("footer.php")?>
</html>

