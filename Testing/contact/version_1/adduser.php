<?php
require('db.php');
error_reporting('none');
//http://kunststube.net/escapism/
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

$firstname = $_POST['firstname'];
$firstname = $mysqli->real_escape_string($firstname);//DOESN'T WORK PROPERLY//Remove dangerous SQL characters $mysqli->real_escape_string($username) is Very differnt from $mysql_real_escape_string() // https://www.php.net/manual/en/mysqli.real-escape-string.php // http://kunststube.net/escapism/
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

?>


<html>
  <head>

  </head>
  <body>
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
                  <form method="post" action="adduser.php">

                    <div>
                    <label for="firstName">First Name</label>
                    <input required type="text" id="firstName" name="firstname" placeholder="Your name..">
                    </div>

                    <div>
                    <label for="lastName">Last Name</label>
                    <input required type="text" id="lastName" name="lastname" placeholder="Your last name..">
                    </div>

                    <div>
                    <label for="email">Email</label>
                    <input required type="email" id="email" name="email" placeholder="someone@somwhere.com">
                    </div>

                    <div>
                    <label for="phone">Phone</label>
                    <input required type="text" id="phone" name="phone" placeholder="01234567890">
                    </div>

                    <div>
                      <label for="region">Region</label>
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
                    <label for="comment">Subject</label>
                    <textarea required id="subject" name="comment" placeholder="Write something.." style="height:170px"></textarea>
                    <input type="submit" value="Submit">
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
      </div>
  </div>
  <style>

  .contact-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }

  /* Style inputs */
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color:#3E485D;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  /* Style the container/contact section */
  .container-contact {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
  }

  /* Create two columns that float next to eachother */
  .column-contact {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
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
  </style>


  </body>
</html>
