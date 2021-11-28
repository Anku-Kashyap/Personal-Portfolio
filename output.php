<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname ="website";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// Code to insert values in the database.

$sqlmain = "SELECT * FROM person";
$result = $conn->query($sqlmain);
$id = $result->num_rows;
$id++;
//echo $id;
$text = mysqli_real_escape_string($conn, $_POST["about"]);
$fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image));

// $sqltest = "INSERT INTO person (PERSONID, PERSONNAME) VALUES ({$id}, '{$_POST["name"]}')";
$insertInPerson = "INSERT INTO person VALUES($id, '{$_POST["name"]}', '{$_POST["tagline"]}', '{$_POST["college"]}', '{$_POST["degree"]}', '{$_POST["resume"]}',
  '{$imgContent}', '{$text}', '{$_POST["fact"]}', '{$_POST["languages"]}', '{$_POST["hobbies"]}');";

$insertInSocial = "INSERT INTO social(PID, EMAIL, TWITTER, GITHUB, LINKEDIN) VALUES(
  $id, '{$_POST["email"]}','{$_POST["twitter"]}', '{$_POST["github"]}', '{$_POST["linkedin"]}')";

$insertInInterest1 = "INSERT INTO interest VALUES(NULL, '{$_POST["interest1"]}', $id)"; 
$insertInInterest2 = "INSERT INTO interest VALUES(NULL, '{$_POST["interest2"]}', $id)";

$insertIntoProject1 = "INSERT INTO project VALUES(NULL, '{$_POST["pname1"]}', '{$_POST["pdescription1"]}', $id, '{$_POST["ptechstack1"]}', '{$_POST["github1"]}')";
$insertIntoProject2 = "INSERT INTO project VALUES(NULL, '{$_POST["pname2"]}', '{$_POST["pdescription2"]}', $id, '{$_POST["ptechstack2"]}', '{$_POST["github2"]}' )";
$insertIntoProject3 = "INSERT INTO project VALUES(NULL, '{$_POST["pname3"]}', '{$_POST["pdescription3"]}', $id, '{$_POST["ptechstack3"]}', '{$_POST["github3"]}' )";

$insertIntoRoles1 = "INSERT INTO roles VALUES(NULL, '{$_POST["rname1"]}', '{$_POST["rcompany1"]}','{$_POST["rstart1"]}', '{$_POST["rend1"]}', $id)";
$insertIntoRoles2 = "INSERT INTO roles VALUES (NULL, '{$_POST["rname2"]}', '{$_POST["rcompany2"]}', '{$_POST["rstart2"]}', '{$_POST["rend2"]}', $id)";
$insertIntoRoles3 = "INSERT INTO roles VALUES(NULL, '{$_POST["rname3"]}', '{$_POST["rcompany3"]}','{$_POST["rstart3"]}', '{$_POST["rend3"]}', $id)";

$skill = explode(", ", $_POST["skills"]);

$conn->query($insertInPerson);
$conn->query($insertInSocial);
$conn->query($insertInInterest1);
$conn->query($insertInInterest2);
$conn->query($insertIntoProject1);
$conn->query($insertIntoProject2);
$conn->query($insertIntoProject3);
$conn->query($insertIntoRoles1);
$conn->query($insertIntoRoles2);
$conn->query($insertIntoRoles3);

// if ($conn->query($insertInPerson) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertInPerson . "<br>" . $conn->error;
// }
// if ($conn->query($insertInSocial) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertInSocial . "<br>" . $conn->error;
// }
// if ($conn->query($insertIntoRoles2) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertIntoRoles2 . "<br>" . $conn->error;
// }
// if ($conn->query($insertIntoRoles1) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertIntoRoles1 . "<br>" . $conn->error;
// }
// if ($conn->query($insertIntoRoles3) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertIntoRoles3 . "<br>" . $conn->error;
// }
// if ($conn->query($insertIntoProject2) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertIntoProject2 . "<br>" . $conn->error;
// }
// if ($conn->query($insertIntoProject1) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertIntoProject1 . "<br>" . $conn->error;
// }
// if ($conn->query($insertIntoProject3) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertIntoProject3 . "<br>" . $conn->error;
// }
// if ($conn->query($insertInInterest1) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertInInterest1 . "<br>" . $conn->error;
// }

// if ($conn->query($insertInInterest2) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $insertInInterest2 . "<br>" . $conn->error;
// }


foreach ($skill as $value) {
  $conn->query("INSERT INTO skills VALUES(NULL, '{$value}', $id)");
}

$name = $ptag = $college = $degree = $resume = $pic = $about =$fact = $hobbies = $lang = "";

// Function to get data out of database
$sql = "SELECT * FROM person where PERSONID ={$id}";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name = $row["PERSONNAME"];
    $ptag = $row["PERSONTAG"];
    $college = $row["COLLEGENAME"];
    $degree = $row["DEGREE"];
    $resume = $row["RESUME"];
    $pic = base64_encode($row["PICTURE"]);
    
  	// Get text
  	

    $about = $row["ABOUT"];
    $fact = $row["FACT"];
    $hobbies = $row["HOBBIES"];
    $lang = $row["LANGUAGES"];
  }
} else {
  echo "personData Not Found";
}

$sql = "SELECT * FROM interest where PID ={$id}";
$result = $conn->query($sql);
$interests = array();
$i =0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $interests[$i++] = $row["INTERESTNAME"];
  }
} else {
  echo "interestData Not Found";
}


$sql = "SELECT * FROM social where PID = {$id}";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $twitter = $row["TWITTER"];
   $email = $row["EMAIL"];
   $github = $row["GITHUB"];
   $linkedin = $row["LINKEDIN"];

  }
} else {
  echo "socialData Not Found";
}

?>



<html>

<head>
  <meta charset="utf-8">
  <title>Resume</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <!-- Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- CSS File -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- Icons -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>


<section id ="title">
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light">
            <img class="nav-img" src="images/avatar.png" alt="Profile Pic">
            <!-- <a class="navbar-brand" href="">{Riya} </a> -->
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
          
                <li class="nav-item">
                  <a class="nav-link" href="#projects">Projects</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#roles">Experience</a>
                </li>
          
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>
            </div>
    
          </nav>
    
           <!-- Title -->
      <div class="row">
        <div class="col-lg-6">
    
           <a href='https://pngtree.com/so/laptop-icons'><img class="title-img" src="images/profilepic.png" alt="Profile Pic"></a> 
        </div>

        <div class="col-lg-6">
        <div class="text">
            <h6>Hello World! I am</h6>
            <h1><?php echo  $name;?></h1>
            <h5><?php echo  $ptag;?></h5>
            <p>Currently pursuing <?php echo  $degree;?> from <?php echo  $college;?>. My fields of interest are <?php echo $interests[0];?> and <?php echo  $interests[1];?>.</p>
            
            <a href='<?php echo  $resume;?>' download="MyResume">
            <button type="button" class="btn btn-danger downloadbtn"> Resume</button> </a>
            <!-- <i class="fas fa-download"></i> -->
        </div>

        </div>

      </div>

    </div>
</section>


<section id="about">

 
<div class="row">
  <div class="col-lg-5">
  <img class="mypic" src="data:image/jpg;charset=utf8;base64,<?php echo $pic; ?>" alt="Profile Pic">
  
</div>
<div class="col-lg-7">
  <h3 > About Me</h3>
  <p><?php echo  $about;?> Following are the technologies I have worked with:
  <ol>
  <?php
      $sql = "SELECT * FROM skills where PID ={$id}";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_array()) {
  
  ?>

  <li><?php echo  $row["SKILLNAME"];?></li>
 
  <?php
 
}
} else {
echo "skillData Not Found";
}
?>
</ol>
<br>
<h5>Non-Technical Information</h5>
<table style="width: 100%" >
  <colgroup>
    <col style="width: 30%">
    <col style="width: auto">
  </colgroup>
  <tr>
  <th>
    Hobbies:  
  </th>
  <td> <?php echo  $hobbies;?></td>
</tr>
<tr >

  <th>
    Languages:
  </th>
  <td> <?php echo  $lang;?></td>
</tr>

<tr>

  <th>
    Crazy fact: 
  </th>
  <td><?php echo  $fact;?></td>
</tr>

</table>



 

</div>
  </div>
  
 
</section>


<!-- PROJECTSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->
<section id="projects">
  <div class="row">
  <div class="col-lg-6">
    <h3 > My Projects</h3>
    <br>
    <?php
      $sql = "SELECT * FROM project where PID ={$id}";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_array()) {
      $link = $row["GITHUBLINK"]
  ?>

      <h6><a href="https://www.github.com/<?php echo  $github;?>/<?php echo $link;?>/">
        <i class="fab fa-github social"></i></a>

        <?php echo  $row["PROJNAME"];?> </h6>
      <p><?php echo  $row["PROJTAG"];?>
        
        <br>
        Tech Stack: <?php echo  $row["TECHSTACK"];?>
      </p>   
<br>
<?php
 
}
} else {
echo "projectData Not Found";
}
?>

  </div>
  <div class="col-lg-6">
    <img class="mypic" src="images/Slide1.PNG" alt="Profile Pic">
  </div>
    </div>
</section>

<section id="roles">
  <div class="row">

    <div class="col-lg-7">
      <img class="mypic" src="images/Slide2.PNG" alt="Profile Pic">
    </div>
  
    <div class="col-lg-5">
      <h3 > Work Experience</h3>
      <br>
      <?php
      $sql = "SELECT * FROM roles WHERE PID = {$id}";
$result = $conn->query($sql);
$id =0;
$proles = array();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_array()) {
  ?>

<h5><?php echo  $row["ROLENAME"];?></h5>
        <p><?php echo  $row["INSTITUTE"];?>
          
          <br>
          <?php echo  $row["START"];?> - <?php echo  $row["END"];?>
        </p>

        <br>
 <?php
 
  }
  $conn->close();
  //echo "CONNECTION CLOSED";
} else {
  echo "roleData Not Found";
}
?>

    </div>
    
      </div>  
  </section>

  <section id="contact">

<h4>Liked my work?</h4>
<p>Connect with me on social media.</p>


      <a href="https://www.twitter.com/<?php echo  $twitter;?>/">
      <i class="fab fa-twitter fa-lg social-icon"></i></a>
      <a href="https://www.linkedin.com/in/<?php echo  $linkedin;?>/">
      <i class="fab fa-linkedin fa-lg social-icon"></i></a>
      <a href="mailto:<?php echo  $email;?>/">
      <i class="fas fa-envelope fa-lg social-icon"></i></a>
      <a href="https://www.github.com/<?php echo  $github;?>/">
      <i class="fab fa-github fa-lg social-icon"></i></a>
    
</section>

  </body>
</html>
