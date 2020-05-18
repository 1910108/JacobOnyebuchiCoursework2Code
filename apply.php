<!--For the Apply form-->
<?php 
	include('functions.php');
	// check if applicant is logged in
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You Must Log In First";
	header('location: login.php');
}
?>
<?php include_once('applyFunction.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jacomp+ Scholarship Portal | Applicant's Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--Bootstrap CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
    <!--for stylying the application form-->
  <link rel="stylesheet" href="apply.css">
  
</head>
<body style="background-color:#006654">
<!--Application form layout-->
 <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <a href="homePage.php" style="color: red;">&#10005;</i></a>
        <form action="apply.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3" style="color:white">Create profile</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4 style="color:white">Upload Profile Image</h4>
              </div>
              <img src="images/avatar.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label style="color:white">Profile Image</label>
          </div>
	  <div class="form-group">
                <input type="text" name ="first_name" class="form-control" value="" placeholder="First Name" required="" data-toggle = "tooltip"  title="Enter Your First Name Here">
           </div>
            <div class="form-group">
                <input type="text" name ="last_name" class="form-control" value=""  placeholder="Last Name" required="" data-toggle = "tooltip"  title="Enter Your Last Name Here">
           </div>
	   <div class="form-group">
                 <label for="Date of Birth" style="color:white">Date of Birth</label>
                 <div>
                 <input type="date" name="date_of_birth" value="" class="form-control" placeholder="Date Of Birth" required=""/>
                 </div>
           </div>
<div class="form-group">
                <div>
                     <select name="gender" class="form-control" required="">
		     <option value="">Select Gender</option>
		     <option value="Male">Male</option>
		     <option value="Female">Female</option>
		     </select>
                 </div>
             </div>
	  <div class="form-group">
                <div>
                     <select name="state_of_origin" class="form-control" required="">
		     <option value="">Select State Of Origin</option>
		     <option value="Abia">Abia</option>
		     <option value="Anambra">Anambra</option>
		     <option value="Ebonyi">Ebonyi</option>
		     <option value="Enugu">Enugu</option>
		     <option value="Imo">Imo</option>
		     </select>
                 </div>
             </div>
                                                <div class="form-group">
      
                                                    <div>
                                                        <textarea name="contact_address" class="form-control" required="" placeholder="Enter Your Contact Address"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    
                                                    <div>
                                                        <input type="tel" name="phone_number" class="form-control" placeholder = "Phone Number" required="" value=""/>
                                                    </div>
                                                </div>
						<div class="form-group">
                					<input type="email" name ="email" class="form-control" value="" placeholder="Email" required="" data-toggle = "tooltip"  title="Enter Your Email Here">
           					</div>
                                                <div class="form-group">
                    				    
                    				    <select name="proposed_institution_of_study" class="form-control"  required="" data-toggle = "tooltip"  title="Select Your Proposed Institution Of Study Here">
		    				    <option value="">Select Proposed Institution Of Study</option>
		    				    <option value="California Institute of Technology">California Institute of Technology</option>
		    				    <option value="Carnegie Mellon University">Carnegie Mellon University</option>
		    				    <option value="ETH Zurich">ETH Zurich</option>
		    				    <option value="Harvard University">Harvard University</option>
		    				    <option value="Imperial College London">Imperial College London</option>
		    				    <option value="Massachusetts Institute of Technology">Massachusetts Institute of Technology</option>
		    				    <option value="Princeton University">Princeton University</option>
		    				    <option value="Stanford University">Stanford University</option>
		    				    <option value="University of Cambridge">University of Cambridge</option>
		    				    <option value="University of Oxford">University of Oxford</option>
		    				    </select>
            					</div>                                           
                                                <div class="form-group">
                    
                    <select name="proposed_course_of_study" class="form-control"  required="" data-toggle = "tooltip"  title="Select Your Proposed Course Of Study Here">
		    <option value="">Select Proposed Course Of Study</option>
		    <option value="MSc Advanced Computing">MSc Advanced Computing</option>
		    <option value="MSc Analogue and Digital Integrated Circuit Design">MSc Analogue and Digital Integrated Circuit Design</option>
		    <option value="Applied Computational Science and Engineering">Applied Computational Science and Engineering</option>
		    <option value="MSc Artificial Intelligence">MSc Artificial Intelligence</option>
		    <option value="MSc Communications and Signal Processing">MSc Communications and Signal Processing</option>
		    <option value="MSc Computational Science and Engineering">MSc Computational Science and Engineering</option>
		    <option value="MSc Computer Science">MSc Computer Science</option>
		    <option value="MSc Computing (Artificial Intelligence and Machine Learning)">MSc Computing (Artificial Intelligence and Machine Learning)</option>
		    <option value="MSc Computing (Management and Finance)">MSc Computing (Management and Finance)</option>
		    <option value="MSc Computing (Security and Reliability)">MSc Computing (Security and Reliability)</option>
		    <option value="MSc Computing (Software Engineering)">MSc Computing (Software Engineering)</option>
		    <option value="MSc Computing (Visual Computing and Robotics)">MSc Computing (Visual Computing and Robotics)</option>
		    <option value="MSc Computing Science">MSc Computing Science</option>
		    <option value="MSc Control Systems">MSc Control Systems</option>
		    <option value="MSc Cyber Security">MSc Cyber Security</option>
		    <option value="MSc Data Science">MSc Data Science</option>
		    <option value="MSc Data Science & Big Data Analytics">MSc Data Science & Big Data Analytics</option>
		    <option value="MSc Electrical Engineering and Information Technology">MSc Electrical Engineering and Information Technology</option>
		    <option value="MSc in Artificial Intelligence and Innovation">MSc in Artificial Intelligence and Innovation</option>
		    <option value="MSc in Business Intelligence & Data Analytics">MSc in Business Intelligence & Data Analytics</option>
		    <option value="MSc in Computational Data Science">MSc in Computational Data Science</option>
		    <option value="MSc in Computational Finance">MSc in Computational Finance</option>
		    <option value="MSc in Computational Science and Engineering">MSc in Computational Science and Engineering</option>
		    <option value="MSc in Computer Science">MSc in Computer Science</option>
		    <option value="MSc in Computer Vision">MSc in Computer Vision</option>
		    <option value="MSc in Computing and Mathematical Science">MSc in Computing and Mathematical Science</option>
		    <option value="MSc in Control and Dynamical Systems">MSc in Control and Dynamical Systems</option>
		    <option value="MSc in Data Science">MSc in Data Science</option>
		    <option value="MSc in Educational Technology and Applied Learning Science">MSc in Educational Technology and Applied Learning Science</option>
		    <option value="mscieace">MSc in Electrical and Computer Engineering</option>
		    <option value="MSc in Electrical and Computer Engineering">MSc in Engineering</option>
		    <option value="MSc in Engineering & Technology Innovation Management">MSc in Engineering & Technology Innovation Management</option>
		    <option value="MSc in Human-Computer Interaction">MSc in Human-Computer Interaction</option>
		    <option value="MSc in Information Networking">MSc in Information Networking</option>
		    <option value="MSc in Information Security">MSc in Information Security</option>
		    <option value="MSc in Information Security Policy and Management">MSc in Information Security Policy and Management</option>
		    <option value="MSc in Information Systems Management">MSc in Information Systems Management</option>
		    <option value="MSc in Information Technology">MSc in Information Technology</option>
		    <option value="MSc in Information Technology-Information Security">MSc in Information Technology-Information Security</option>
		    <option value="MSc in Intelligent Information Systems">MSc in Intelligent Information Systems</option>
		    <option value="MSc in Information Technology-Mobility">MSc in Information Technology-Mobility</option>
		    <option value="MSc in Information Technology-Privacy Engineering">MSc in Information Technology-Privacy Engineering</option>
		    <option value="MSc in Machine Learning">MSc in Machine Learning</option>
		    <option value="MSc in Language Technologies">MSc in Language Technologies</option>
		    <option value="MSc in Mobile and IoT Engineering">MSc in Mobile and IoT Engineering</option>
		    <option value="MSc in Robotics">MSc in Robotics</option>
		    <option value="MSc in Robotic Systems Development">MSc in Robotic Systems Development</option>
		    <option value="MSc in Software Engineering">MSc in Software Engineering</option>
		    <option value="MSc in Software Management">MSc in Software Management</option>
		    <option value="MSc in Technology Ventures">MSc in Technology Ventures</option>
		    <option value="MSc Robotics, Systems and Control">MSc Robotics, Systems and Control</option>
		    <option value="MPhil in Advanced Computer Science">MPhil in Advanced Computer Science</option>
		    </select>
            </div>  
<div class="form-group">
            <button type="submit" name="apply" class="btn btn-primary btn-block">Apply</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
<!--A script for uploading the profile photo. Down here for faster uploading and loading of the page-->
<script src="createprofilescript.js"></script>
