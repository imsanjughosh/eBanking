	<?php include ('connect.php') ?>
	<!-- Header -->
	<style type="text/css">
		label.error {
			background-color: tomato;
			color:white;
			padding:10px;
		}
	</style>
			<header id="header">
				<a class="logo" href="#">E-Banking</a>

				<?php  if(isset($_SESSION['ardent']))
				{
				?>
				<h2 style="color: white;">Hi <?php echo $_SESSION['ardent']['name']?></h2>
			<?php }?>
			
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">

				
					<?php if(!isset($_SESSION['ardent'])){?>
						<li><a href="index.php">Home</a></li>
						<li><a href="openaccount.php">Open Account</a></li>
						<li><a href="login.php">Login</a></li>
					<!--  <li><a href="signup.php">Sign Up</a></li>
					 <button onclick="myFunction()" class="dropbtn">Login</button>-->
  <!-- <div id="myDropdown" class="dropdown-content">
    <a href="Userlogin.php">User login</a>
    <a href="Adminlogin.php">Admin login</a>
  </div> -->
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>




  

				<?php } else { ?>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="checkbal.php">Check Balance</a></li>
					<li><a href="transaction.php">Transaction</a></li>
					<li><a href="history.php">Transaction History</a></li>
					<li><a href="password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				<?php } ?>
				<li><a href="about.php">About</a></li>
					<!--<li><a href="contact.php">Contact</a></li>-->
				</ul>
			</nav>
