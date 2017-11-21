<hr>
<style>
.mySlides {display:none;}
</style>
<body>

<div class="w3-content w3-display-container" style="max-width:100%">

<img class="mySlides" src="assets/images/banner1-960x300.jpg" style="width: 100%;">
	<img class="mySlides" src="assets/images/banner2-960x300.jpg" style="width: 100%;">
	<img class="mySlides" src="assets/images/banner2-960x300.jpg" style="width: 100%;">

</div>
<br>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}
</script>




		
