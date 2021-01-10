<html>
<head>
<style> 
body {
  margin: 30px;
  background-color: #E9E9E9;
}
/* The Modal (background) */
.modal {
  display: block;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.thank-you{
  width: 284px;
  padding: 10px 10px 20px 10px;
  border: 1px solid #BFBFBF;
  background-color: white;
  box-shadow: 10px 10px 5px #aaaaaa;
}

/*--thank-you--*/
.thank-you {
	background: #fff;
	min-height: 300px;
	width: 30%;
	margin: 9% auto 4% auto;
	text-align: center;
	position: relative;
	box-shadow: inset 0px 0px 10px 0px #ABABAB,-1px 1px 17px 7px #0F0000;
	-webkit-box-shadow: inset 0px 0px 10px 0px #ABABAB,-1px 1px 17px 7px #0F0000;
	-moz-box-shadow: inset 0px 0px 10px 0px #ABABAB,-1px 1px 17px 7px #0F0000;
	-o-box-shadow: inset 0px 0px 10px 0px #ABABAB,-1px 1px 17px 7px #0F0000;
}
.thank-you h4 {
	background: #2980b9;
	color: #fff;
	padding: 0.91em 0;
}
.thank-you p {
	color: #7C7777;
	width: 82%;
	margin: 0 auto;
	padding: 1em 0 0em;
}
.thank-you-button {
	border: none;
	outline: 0;
	color: #fff;
	background: #2ecc71;
	padding: 15px 90px;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
	font-size: 18px;
	font-weight: 100;
	border-radius:10px;
	width:auto;
}
.thank-you-button:hover {
	background: #2B7264;
	border-radius: 6px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	-o-border-radius: 6px;
	-ms-border-radius: 6px;
		transition: 0.1s all;
	-webkit-transition: 0.1s all;
	-moz-transition: 0.1s all;
	-o-transition: 0.1s all;
	border-radius:10px;
}
.thank-you h5 {
	margin: 0.5em 0 3em;
	color:#000;
}
/*--/thank-you--*/

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}



</style>
</head>
<body>

<div id="myModal" class="modal">
  <div class="thank-you">
	<span class="close">&times;</span> 
	<h4>THANK YOU</h4>
	<p>Your account has been created and a
		verification email has been sent.
		Click on the link included in the email
		to activate your account.  
		</p>
		<h5>Thank you.</h5>
	<button id="okbtn" class="thank-you-button">OK</button>
   </div>
</div>

<script>

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("okbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
			btn.onclick = function() {
			  modal.style.display = "none";
			  window.location = 'index.php';
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			  modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			  if (event.target == modal) {
				modal.style.display = "none";
				}
			}

</script>

</body>
</html>
