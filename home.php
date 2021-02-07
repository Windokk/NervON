

<!DOCTYPE  html>

<?php include("header.php")?>

<body style=background-color:#00D1FA>
<button class="button1 button1a" onclick="fn3()" id="buttonside">
<img src="https://windokkstudio.net/arrow.png" width=75 height=37,1> 
</button>

<div class="sidebar" id="sidebar">
          <a onclick="hi()">Welcome !</a>
          <a >Why this website ?</a>
          <a >Who am I ?</a>
          <a >Links</a>
    </div>
    
	
	
	
	</div>
</body>

<script>
var pageURL = window.location.href;
    var sidebar = document.getElementById("sidebar");
    var button1 = document.getElementById("buttonside");
    
var fn3 = (function() {
  var first = true;
  return function() {
    first ? fn1() : fn2();
    first = !first;
  }
})();

function fn1() {
  sidebar.style.left = "-160px";
    button1.style.left = "0px";
  
};
function fn2() {
  sidebar.style.left = "0px";
    button1.style.left = "170px";
  
};
    
    
function hi()
{
      window.scrollTo(0, 0);
}
    
</script>
</html>

