<div id="menuBtn">
  <a href="#" onclick=toggle()><img src="menu.png"</a>
</div>


<!-----Features---->

</div>
<div id="popup" class="menu-bar">
  <li><a href="index.html" class="btn" > Home </a></li>
    <li><a href="myform1.php" class="btn" > BECOME A DONOR </a></li>
    <li><a href="search donor.php" class="btn" > SEARCH DONOR </a></li>
    <li><a href="tcode.html" class="btn" > REQUEST BLOOD </a></li>
    <li><a href="Crequests.php" class="btn" > CURRENT REQUEST </a></li>
    <li><a href="blood bank.php" class="btn">BLOOD BANK</a></li>
  <li><a href="#" onclick="toggle()" id="Close" class="btn">Close</a></li>
</div>
<script>
    function toggle() {
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
    }
</script>
