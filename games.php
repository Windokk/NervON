<!DOCTYPE html>


<?php include("header.php")?>

<
<title>Windokk's Games</title>
<body style=background-color:#333333>
<button class="button1 button1a" onclick="fn3()" id="buttonside">
<img src="http://windokkstudio.net/arrow.png" width=75 height=37,1> 
</button>

<div class="sidebar" id="sidebar">
          <a onclick="hi()">Intro</a>
          <a>Done</a>
          <a>W.I.P.</a>
          <a>Links</a>
    </div>
    
</body>
<script>

<?php include("function.js")?>

Game_Button.style.height = "70px";
Home_Button.style.height = "60px";
Freelance_Button.style.height = "60px";	
Portfolio_Button.style.height = "60px";	
	
Home_Button.style.backgroundColor = "#a0a0a0";
Game_Button.style.backgroundColor = "#4D4D4D";
Freelance_Button.style.backgroundColor = "#a0a0a0";
Portfolio_Button.style.backgroundColor = "#a0a0a0";
	
Home_Button.style.borderColor = "#a0a0a0";
Game_Button.style.borderColor = "#4D4D4D";
Freelance_Button.style.borderColor = "#a0a0a0";
Portfolio_Button.style.borderColor = "#a0a0a0";	


</script>
<?php include("footer.php")?>
</html>