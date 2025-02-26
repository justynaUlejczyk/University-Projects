<?php # DISPLAY COMPLETE LOGGED OUT PAGE.
# Access session.
session_start() ;
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
# Set page title and display header section.
$page_title = 'Home' ;
include ( 'login.html' ) ;

# Clear existing variables.
$_SESSION = array() ;
# Destroy the session.
session_destroy() ;
# Display body section.

echo '<br> <div class="container text-center">
 <div class ="row" >
	<div class="col align-self-center">
	<div class = "col-md-6 offset-md-3"  >
	<div class="card-header">
	<div class="text-center">
	<div class = "card-header"> <h5> GOOD BYE!</h5><br>
    <h4 class="card-subtitle mb-2 text-muted">You are now logged out.</h4>
    <p class="card-text">Thank you for using Webflix<br> <h4>See you soon !</h4> </p>
    <a href="login.php">Login</a>
    </div>
	</div>
	</div>
  </div>
</div>
</div>
' ;
 include ( 'footer.html' ) ;

?>
