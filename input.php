<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Resume</title>
<link rel="stylesheet" href="css/styles.css">

 <!-- Bootstrap-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <!-- Icons -->
 <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body >
    
<div class="row">
    <div class="col-lg-3"></div>

    <div class="col-lg-6">
    <h4> Fill Information for your website ;)</h4>
    <p>All fields are required.</p><br>
    <form action="output.php" method="post" enctype="multipart/form-data">

    <h4>Personal Details</h4><hr>

    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter Name in capital letters" name="name" value="" required>
    </div>

    <div class="form-group">
    <label>TagLine</label>
    <input type="text" class="form-control"  placeholder="" name="tagline" required  >
    </div>

    <div class="form-group">
    <label>Email Address</label>
    <input type="email" class="form-control"  placeholder="" name="email" required>
    </div>

    <div class="form-group">
    <label>About You</label>
    <input type="text" class="form-control"  placeholder="" name="about" required>
    </div>

    <div class="form-group">
    <label>A Interesting Fact About You</label>
    <input type="text" class="form-control"  placeholder="" name="fact" required>
    </div>

    <h6>Social Media Contact</h6>

    <div class="form-group">
    <label>LinkedIn</label>
    <input type="text" class="form-control"  placeholder="Write after https://www.linkedin.com/ " name="linkedin" required>
    </div>

    <div class="form-group">
    <label>Twitter</label>
    <input type="text" class="form-control"  placeholder="Write after https://www.twitter.com/" name="twitter" required>
    </div>

    <div class="form-group">
    <label>GitHub</label>
    <input type="text" class="form-control"  placeholder="Write after https://www.github.com/" name="github" required>
    </div>

    <div class="form-group">
    <label>Resume Link</label>
    <input type="url" class="form-control"  placeholder="" name="resume" required>
    </div>

    <div class="form-group">
    <label>Picture Link</label>
    <input type="file" class="form-control" placeholder="" name="image"></div>

    <div class="form-group">
    <label>Languages Known</label>
    <input type="text" class="form-control"  placeholder="" name="languages" required>
    </div>


    
    <h4>Education Details</h4>
    <hr>
    <h6>Current Course Details</h6>

    <div class="form-group">
    <label>Degree</label>
    <input type="text" class="form-control"  placeholder="" name="degree" required>
    </div>

    <div class="form-group">
    <label>Institute/College Name</label>
    <input type="text" class="form-control"  placeholder="" name="college" required>
    </div>

    <div class="form-group">
    <label>Area of Interests</label>
    <!-- <input type="text" class="form-control"  placeholder="" name="interest"> -->
    <div class="form-row">
        <div class="col">
        <input type="text" class="form-control" placeholder="1. " name="interest1" required>
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="2. " name="interest2" required>
        </div>
    </div>
    </div>


  <h4>Technical Skills</h4>
    <hr>

    <input type="text" class="form-control" placeholder="Write comma space seperated values eg:(Abcd, Efgh)" name="skills" required>

<br>

<h4>Hobbies</h4>
    <hr>

    <input type="text" class="form-control" placeholder="" name="hobbies" required>

<br>

<h4>Project Details</h4>
    <hr>
    <!-- project1111111111111111111 -->
    <h6>Project One</h6>
    <div class="form-group">
    <div class="form-row">
    <div class="col">

    <label>Name</label>
    <input type="text" class="form-control"  placeholder="" name="pname1" required>
    </div>
    <div class="col">
    <label>Description/ TagLine</label>
    <input type="text" class="form-control"  placeholder="" name="pdescription1" required>
    </div>
  </div>

<br>
  <div class="form-group">
  <div class="form-row">
    <div class="col">
    <label>Tech Stack</label>
    <input type="text" class="form-control"  placeholder=" " name="ptechstack1" required>
    </div>
    <div class="col">
    <label>GitHub Repository Name</label>
    <input type="text" class="form-control"  placeholder="" name="github1" required>
    </div>
  </div></div>

   <!-- project222222222222222222222222 -->
   
   <h6>Project Two</h6>
    <div class="form-group">

  <div class="form-row">
    <div class="col">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="" name="pname2" required>
    </div>
    <div class="col">
    <label>Description/ TagLine</label>
    <input type="text" class="form-control"  placeholder="" name="pdescription2" required>
    </div>
  </div>

    </div>
  <div class="form-group">
  <div class="form-row">
    <div class="col">
    <label>Tech Stack</label>
    <input type="text" class="form-control"  placeholder="" name="ptechstack2" required>
    </div>
    <div class="col">
    <label>GitHub Repository Name</label>
    <input type="text" class="form-control"  placeholder="" name="github2" required>
    </div>
  </div>
  </div>

   <!-- project333333333333333333333333333 -->
   
   <h6>Project Three</h6>
    <div class="form-group">
        <div class="form-row">
            <div class="col">   

            <label>Name</label>
             <input type="text" class="form-control"  placeholder="" name="pname3" required>
            </div>
            <div class="col">
             <label>Description/ TagLine</label>
             <input type="text" class="form-control"  placeholder="" name="pdescription3" required>
            </div>
        </div>
    </div>

  <div class="form-group">
  <div class="form-row">
    <div class="col">
    <label>Tech Stack</label>
    <input type="text" class="form-control"  placeholder=" " name="ptechstack3" required>
    </div>
    <div class="col">
    <label>GitHub Repository Name</label>
    <input type="text" class="form-control"  placeholder="" name="github3" required>
    </div>
  </div></div>

    </div>
<br>
    <h4>Roles of Responsibility</h4>
    <hr>
    <!-- Position one -->
    <h6>Position One</h6>
    <div class="form-group">
        <div class="form-row">
            <div class="col">   

            <label>Position</label>
             <input type="text" class="form-control"  placeholder="" name="rname1" required>
            </div>
            <div class="col">
             <label>Institute/ Company</label>
             <input type="text" class="form-control"  placeholder="" name="rcompany1" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col">   

            <label>Start month & year</label>
             <input type="month" class="form-control"  placeholder="" name="rstart1" required>
            </div>
            <div class="col">
             <label>End Month & year</label>
             <input type="month" class="form-control"  placeholder="" name="rend1" required>
            </div>
        </div>
    </div>

        <!-- Position two -->
        <h6>Position Two</h6>
    <div class="form-group">
        <div class="form-row">
            <div class="col">   

            <label>Position</label>
             <input type="text" class="form-control"  placeholder="" name="rname2" required>
            </div>
            <div class="col">
             <label>Institute/ Company</label>
             <input type="text" class="form-control"  placeholder="" name="rcompany2" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col">   

            <label>Start month & year</label>
             <input type="month" class="form-control"  placeholder="" name="rstart2" required>
            </div>
            <div class="col">
             <label>End Month & year</label>
             <input type="month" class="form-control"  placeholder="" name="rend2" required>
            </div>
        </div>
    </div>

        <!-- Position three -->
        <h6>Position Three</h6>
    <div class="form-group">
        <div class="form-row">
            <div class="col">   

            <label>Position</label>
             <input type="text" class="form-control"  placeholder="" name="rname3" required>
            </div>
            <div class="col">
             <label>Institute/ Company</label>
             <input type="text" class="form-control"  placeholder="" name="rcompany3" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col">   

            <label>Start month & year</label>
             <input type="month" class="form-control"  placeholder="" name="rstart3" required>
            </div>
            <div class="col">
             <label>End Month & year</label>
             <input type="month" class="form-control"  placeholder="" name="rend3" required>
            </div>
        </div>
    </div>

    <br>
    <h6>You are just one click away from your personal website.</h6>

  <button type="submit" class="btn btn-primary">Go On!</button>
    </form>
</div>
<div class="col-lg-3"></div>
</div>
</body>
</html>
