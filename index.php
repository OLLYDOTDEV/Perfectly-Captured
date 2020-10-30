<?php
//require('db.php');
error_reporting('none');
?>
<!-- 
<?php
//http://kunststube.net/escapism/
/*$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

$firstname = $_POST['firstname'];
$firstname = $mysqli->real_escape_string($firstname);//Remove dangerous SQL characters $mysqli->real_escape_string($username) is Very differnt from $mysql_real_escape_string() // https://www.php.net/manual/en/mysqli.real-escape-string.php // http://kunststube.net/escapism/
$firstname = filter_var($firstname, FILTER_SANITIZE_STRING);//Remove dangerous HTML characters

$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$region = $_POST['region'];
$comment = $_POST['comment'];
//https://tecadmin.net/get-current-date-and-time-in-php/

if (mysqli_connect_error()){// Check connection
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
  $sql = "INSERT INTO contactformdata (firstName, lastName, phone, email, region, comment)
  values ('$firstname','$lastname', '$phone', '$email', '$region', '$comment')";
  if ($_conn->query($sql)){}
else{
echo "Error: ". $sql ." ". $_conn->error;
}


$_conn->close();
$mysqli->close();


}
// CREATE TABLE `Users`.`Users` ( `ID` INT NOT NULL AUTO_INCREMENT , `Name` TEXT NOT NULL , `Password` TEXT NOT NULL , `Elevated_Privileges` TEXT NOT NULL COMMENT 'Values can be Admin or User' ,`DateJoined` date NOT NULL,`Lastonline` Date NOT NULL,`email` TEXT NOT NULL, INDEX `ID` (`ID`)) ENGINE = InnoDB;
*/
?> -->

<html>
<head>
<title>Perfectly Captured</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="portfolioloader(); natureloader(); landscapeloader();">
 


<!-- HEADER -->
<div class="header" id="home">
      <div class="topnav" id="myTopnav">
        <a href="#gallery" class="active">Gallery</a>
        <a href="#">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myHeader()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>    
<!-- END OF HEADER -->

<!-- GALLERY HEADER -->
<div class="header_gallery">

</div>
<!-- GALLERY HEADER END -->

<!-- BEGINNING OF GALLERY -->
<div class="header-section" id="gallery">
              <h1>Gallery</h1>
            </div>
            <br>



<div class="button" onclick="switch_div(1);">
  Portfolio
</div>

<div class="button" onclick="switch_div(2);">
  Nature
</div>
<div class="button" onclick="switch_div(3);">
  Landscapes
</div>
<!-- <div class="button" onclick="switch_div(4);">
  4
</div> -->
<!-- Defualt Viewing -->
<div class="content" id="show_1" >
  <div class="container">        
   <p id="box" class="gallery" ></p>
  </div>
</div>

<div class="content hide" id="show_2" >
  <div class="container">        
  <p id="box2" class="gallery"></p>
  </div>
</div>


<div class="content hide" id="show_3">
  <div class="container">        
      <p id="box3" class="gallery"></p>
  </div>
</div>
<!-- <div class="content hide" id="show_4">
</div> -->
<!-- END OF GALLERY -->

<!-- ABOUT ME -->

<div class="parent">
  <div class="container1">
    <div class="about_me" id="about">

      <div class="about-section">
      <h1>About Me</h1>
      </div>

      <div class="row-about">
      <div class="column-about-1">
        <div class="card-about">
          <img src="About_Me.jpg" alt="Jane" style="width:100%">
        </div>
      </div>

        <div class="column-about-3">
          <div class="container-about">
            <h2>Joshua Elphick</h2>
            <p class="title-about">CEO & Founder</p>
            <p>Hey Guys, my name is Josh, click my email to email me or if you want to learn more about me click on the button.</p>
            <p><a href="mailto:perfectlycaptured.xyz@gmail.com?Subject=Contact%20Me" target="_top" class="mail-a">perfectlycaptured.xyz@gmail.com</a></p>
            <br><br>
            <a href="about/about.php" class="button-about">Learn more about me</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- ABOUT ME END -->

<!-- CONTACT ME  -->


<div class="container2">  
          <div class="contact" id="contact">

            <div class="contact-section">
              <h1>Contact Me</h1>
            </div>
        <div class="container-contact">
            <div style="text-align:center">
              <!-- <p>Leave me a message, and I will get back to you as soon as possilble:</p> -->
            </div>
              <div class="row-contact">
                <div class="column-contact">
                  <form method="post" action="home.php">

                    <div>
                    <label for="firstName">First Name:</label>
                    <input required type="text" id="firstName" name="firstname" placeholder="Your name..">
                    </div>

                    <div>
                    <label for="lastName">Last Name:</label>
                    <input required type="text" id="lastName" name="lastname" placeholder="Your last name..">
                    </div>

                    <div>
                    <label for="email">Email:</label>
                    <input required type="email" id="email" name="email" placeholder="someone@somwhere.com">
                    </div>

                    <div>
                    <label for="phone">Phone:</label>
                    <input required type="text" id="phone" name="phone" placeholder="01234567890">
                    </div>

                    <div>
                      <label for="region">Region:</label>
                        <select required id="region" name="region">
                          <option value="Northland">Northland</option>
                          <option value="Auckland">Auckland</option>
                          <option value="Waikato">Waikato</option>
                          <option value="Bay of Plenty">Bay of Plenty</option>
                          <option value="Gisborne">Gisborne</option>
                          <option value="Hawke's Bay">Hawke's Bay</option>
                          <option value="Taranaki">Taranaki</option>
                          <option value="Manawatū-Whanganui">Manawatū-Whanganui</option>
                          <option value="Wellington">Wellington</option>
                          <option value="Tasman">Tasman</option>
                          <option value="Nelson">Nelson</option>
                          <option value="Marlborough">Marlborough</option>
                          <option value="West Coast">West Coast</option>
                          <option value="Canterbury">Canterbury</option>
                          <option value="Otago">Otago</option>
                          <option value="Southland">Southland</option>
                        </select>
                    </div>
                    <div>
                    <label for="comment">Subject:</label>
                    <textarea required id="subject" name="comment" placeholder="Write something.." style="height:170px"></textarea>
                    <input type="submit" value="Submit">
                    </div>
                  </form>
                </div>
                <div class="column-contact-image">
                  <img src="blank.gif" data-echo="contact.jpg" alt="contact-image" style="width:100%;">
                </div>
              </div>
            </div>

          </div>
      </div>
  </div>
  <hr>
<!-- END OF CONTACT ME -->
<!-- FOOTER -->


<footer>
    <div class="container-footer">
        <div class="far-left"></div>
        <div class="left"><h2>Perfectly Captured</h2></div>
        <div class="center-left"></div>
        <div class="center-right">
            <br>
            <div style="text-align: center;">Contact:</div>
            <div style="font-size: 23px;"><a class="underline" href="mailto:perfectlycaptured.xyz@gmail.com">perfectlycaptured.xyz@gmail.com</a></div>
        
            <div>0226276407</div>

        </div>
        <div class="right">
            <br>
            <a class="no-underline" href="#about">About Me</a> 
            <br>
            <a class="no-underline" href="#gallery">Browse Catalog</a> 
        </div>
        <div class="far-right"></div>

    </div>
    <hr>
    <div class="container-footer-2">
        <div class="copyright">Copyright: Perfectly Captured 2020</div>
    </div>
</footer>

<!-- FOOTER END -->
</body>


<script>
function portfolioloader(){

var count = 12;
var imgcon
var i;
for (i = 1; i <= count; i++) {

stringnum =  String(i);

imgcon = '<img src="blank.gif" alt="Photo" data-echo="../../../../Small/image' + stringnum + '.jpg" class="gallery__img gallery_item-'+stringnum+'">';


document.getElementById('box').innerHTML += imgcon;
}
}


function natureloader(){

var count = 12;
var imgcon
var i;
for (i = 1; i <= count; i++) {

stringnum =  String(i);

imgcon = '<img src="blank.gif" alt="Photo" data-echo="../../../../Nature/image' + stringnum + '.jpg" class="gallery__img gallery_item-'+stringnum+'">';


document.getElementById('box2').innerHTML += imgcon;

}
}


function landscapeloader(){

var count = 12;
var imgcon
var i;
for (i = 1; i <= count; i++) {

stringnum =  String(i);

imgcon = '<img src="blank.gif" alt="Photo" data-echo="../../../../landscapes/image' + stringnum + '.jpg" class="gallery__img gallery_item-'+stringnum+'">';


document.getElementById('box3').innerHTML += imgcon;

}
}
</script>

<style>
html {
  scroll-behavior: smooth;
}
body{
    margin:0px;
    background-color:#000000;
}

/* Add a black background color to the top navigation */
.header {
  position: sticky;
}
.topnav {
  background-color: black;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #E3ECFE;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #2F2F2F;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

/*end of HEADER*/



.header-section {
    padding: 50px;
    text-align: center;
    background-color: #3E3E3E;
    color: white;
  }


.button {
  width: 100px;
  height: 30px;
  display: inline-block;
  background-color: #3E3E3E;
  margin: 0 10px 10px 0;
  color: #fff;
  text-align: center;
  line-height: 30px;
  cursor: pointer;
}

.button:hover {
  background-color: #0F0F0F;
  color:white;
}


.hide {
  display: none;
}


.container {
  width: 97%;
  margin: 1em 1em; 
}

.gallery {
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-template-rows: repeat(19, 5vw);
  grid-gap: 0.2em; 
}

.gallery__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block; 
}

.gallery_item-1 {
   grid-column: 1 / span 2;  
   grid-row: 1 / span 2; 
}

.gallery_item-2 {

   grid-column: 3 / span 2;  
   grid-row: 1 / span 2; 
}

.gallery_item-3 {
   grid-column: 5 / span 4;
  grid-row: 1 / span 5; 
}

.gallery_item-4 {
   grid-column: 1 / span 4;  
   grid-row: 3 / span 3; 
}

.gallery_item-5 {
   grid-column: 1 / span 4; 
   grid-row: 6 / span 3; 
}

.gallery_item-6 {
   grid-column: 5 / span 4; 
   grid-row: 6 / span 3; 
}


.gallery_item-7 {
    grid-column: 1 / span 4; 
    grid-row: 9 / span 5; 
 }

 .gallery_item-8 {
    grid-column: 5 / span 4; 
    grid-row: 16 / span 5; 
 }
 .gallery_item-9 {
    grid-column: 5 / span 2; 
    grid-row: 9 / span 3; 
 }
 .gallery_item-10 {
    grid-column: 7 / span 2; 
    grid-row: 9 / span 3; 
 }
 .gallery_item-11 {
    grid-column: 5 / span 4; 
    grid-row: 12 / span 4; 
 }
 .gallery_item-12 {
    grid-column: 1 / span 4; 
    grid-row: 14 / span 6; 
 }
/* ABOUT ME */




.container1{
    display: grid;
    grid-gap: 2px;
}
h2{
  color:white;
  font-size:2.5em;
}
p{
  color:white;
  font-size:1.5em;
}

.mail-a{
  text-decoration: underline;
  color:white;
}
.column-about-1 {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.column-about-3 {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.card-about {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #3E3E3E;
  color: #FFFFFF;
}

.container-about {
  padding: 0 16px;
}

.container-about::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title-about {
  color: grey;
}

.button-about {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #3E3E3E;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button-about:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column-about {
    width: 100%;
    display: block;
  }
}  

/* END OF ABOUT ME */


.contact-section {
    padding: 50px;
    text-align: center;
    background-color: #3E3E3E;
    color: white;
  }

  /* Style inputs */
  input, select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color:#3E3E3E;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: white;
    color:black;
  }

  /* Style the container/contact section */
  .container-contact {
    border-radius: 5px;
    background-color: black;
    padding: 10px;
    color:white;
    font-size:1.5em;
  }

  /* Create two columns that float next to eachother */
  .column-contact {
    float: left;
    width: 40%;
    margin-top: 6px;
    padding: 20px;
  }


  .column-contact-image{
    float: right;
    width: 55%;
    margin-top: 25px;

  }

  /* Clear floats after the columns */
  .row-contact:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column-contact, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }


/* END OF CONTACT */
/* FOOTER */

hr {
	margin:0;
}

.container-footer {
    display: grid;
    grid-gap: 0px;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
	grid-auto-rows: flex;
}

.far-left {
	grid-column: 1 / span 1;
	text-align: center;
	background-color: #black;
	color: white;
	font-size: 24px;
	font-style: italic;
}
.left {
	grid-column: 2 / span 4;
	text-align: center;
	background-color: #black;
	color: white;
	font-size: 24px;
	font-style: italic;
}
.center-left{
	grid-column: 6 / span 1;
	text-align: center;
	background-color: #black;
	color: white;
	font-size: 24px;
	font-style: italic;
}
.center-right{
	 grid-column: 7 / span 2;
	 text-align: left;
	 background-color: #black;
	 color: white;
	 font-size: 24px;
	 font-style: italic;
}
.right{
	grid-column: 9 / span 2;
	text-align: center;
	background-color: #black;
	color: white;
	font-size: 24px;
	font-style: italic;
}
.far-right{
	grid-column: 11 / span 2;
	text-align: center;
	background-color: #black;
	color: white;
	font-size: 24px;
	font-style: italic;
}

.copyright {
	grid-column: 1 / -1;
	background-color: #black;
	color:white;
	font-size: 20px; 
	padding-left: 20%;
}
a.no-underline {
	color: white;
	text-decoration: none;
}
a.underline {
	color: white;
}

/* END OF FOOTER */

</style>

<script src="echo.js"></script>


    <script src="jquery-2.0.2.js"></script>





<script>
function myHeader() {
 var x = document.getElementById("myTopnav");
 if (x.className === "topnav") {
   x.className += " responsive";
 } else {
   x.className = "topnav";
 }
}
/*GALLERY*/
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  //*var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  //*imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}


function switch_div(show) {  
  document.getElementById("show_"+show).style.display = "block";
  document.getElementById("show_"+((show==1)?2:1)).style.display = "none";
    document.getElementById("show_"+((show==2)?3:2)).style.display = "none";
      document.getElementById("show_"+((show==3)?1:3)).style.display = "none";
      // document.getElementById("show_"+((show==4)?1:4)).style.display = "none";
} 


echo.init({
      offset: 100,
      throttle: 250,
      unload: false,
      callback: function (element, op) {
        console.log(element, 'has been', op + 'ed')
      }
    });

    echo.render();
</script>


<script>
function galleryloader(){

  var count = 12;
var imgcon
var i;
for (i = 1; i <= count; i++) {

  stringnum =  String(i);

 imgcon = '<img src="blank.gif" alt="Photo" data-echo="../../../../Small/image' + stringnum + '.jpg" class="gallery__img gallery_item-'+stringnum+'">';



 document.getElementById('box').innerHTML += imgcon;
}


} 


</script>

</html>
