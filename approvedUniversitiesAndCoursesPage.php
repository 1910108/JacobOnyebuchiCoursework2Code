<!--For the approved universities and courses page-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>Jacomp+ Scholarship Application Portal | Approved Schools</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
    </style>
</head>
<body>

<!--for the nav bar-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><b>Jacomp+</b></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="homePage.php">Home</a></li>
                <li class="active"><a href="#">Approved Universities And Courses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--styling the table for the universities, courses and countries-->
<!-- Page Content. The target attribute is set to "_blank", so as to open the link in a new browser window or a new tab-->
<div class="container">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3><b>Approved Universities & Courses:</b></h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered" id="university" class="display nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <th>S/No</th>
                        <th>University</th>
                        <th>Course</th>
                        <th>Country</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="https://www.ox.ac.uk" target="_blank">University of Oxford</a></td>
                        <td><a href="https://www.ox.ac.uk/admissions/graduate/courses/msc-computer-science?wssl=1" target="_blank">MSc in Computer Science</a></td>
                        <td>United Kingdom</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="https://www.stanford.edu" target="_blank">Stanford University</a></td>
                        <td><a href="https://cs.stanford.edu/academics/masters" target="_blank">MSc Computer Science</a></td>
                        <td>United States of America</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="https://ethz.ch/en" target="_blank">ETH Zurich</a></td>
                        <td><a href="https://ethz.ch/en/studies/prospective-masters-degree-students/masters-degree-programmes/masters-degree-programmes-natural-sciences-and-mathematics/master-computational-science-and-engineering.html" target="_blank">MSc Computational Science and Engineering</a><br><a href="https://ethz.ch/en/studies/prospective-masters-degree-students/masters-degree-programmes/engineering-sciences/master-computer-science.html" target="_blank">MSc Computer Science</a><br><a href="https://ethz.ch/en/studies/prospective-masters-degree-students/masters-degree-programmes/engineering-sciences/master-data-science.html" target="_blank">MSc Data Science</a><br><a href="https://ethz.ch/en/studies/prospective-masters-degree-students/masters-degree-programmes/engineering-sciences/master-cyber-security.html" target="_blank">MSc Cyber Security</a><br><a href="https://ethz.ch/en/studies/prospective-masters-degree-students/masters-degree-programmes/engineering-sciences/master-electrical-engineering-and-information-technology.html" target="_blank">MSc Electrical Engineering and Information Technology</a><br><a href="https://ethz.ch/en/studies/prospective-masters-degree-students/masters-degree-programmes/engineering-sciences/master-robotics-systems-and-control.html" target="_blank">MSc Robotics, Systems and Control</a></td>
                        <td>Switzerland</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="https://www.mit.edu" target="_blank">Massachusetts Institute of Technology</a></td>
                        <td><a href="https://mitwpu.edu.in/msc-computer-science" target="_blank">MSc Computer Science</a><br><a href="https://mitwpu.edu.in/computer-science-programs/#MSCDSBDA" target="_blank">MSc Data Science & Big Data Analytics</a></td>
                        <td>United States of America</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><a href="https://www.cam.ac.uk" target="_blank">University of Cambridge</a></td>
                        <td><a href="https://www.cst.cam.ac.uk/admissions/acs" target="_blank">MPhil in Advanced Computer Science</a></td>
                        <td>United Kingdom</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><a href="https://www.cmu.edu" target="_blank">Carnegie Mellon University</a></td>
                        <td><a href="https://msaii.cs.cmu.edu/" target="_blank">MSc in Artificial Intelligence and Innovation</a><br><a href="https://www.heinz.cmu.edu/programs/information-systems-management-master/bida" target="_blank">MSc in Business Intelligence & Data Analytics</a><br><a href="https://mcds.cs.cmu.edu/" target="_blank">MSc in Computational Data Science</a><br><a href="https://www.cmu.edu/mscf/" target="_blank">MSc in Computational Finance</a><br><a href="https://www.csd.cs.cmu.edu/academics/masters/overview" target="_blank">MSc in Computer Science</a><br><a href="https://www.ri.cmu.edu/education/academic-programs/master-of-science-computer-vision/" target="_blank">MSc in Computer Vision</a><br><a href="https://metals.hcii.cmu.edu/?_ga=2.183665573.2047585409.1583656510-1288116715.1583656510" target="_blank">MSc in Educational Technology and Applied Learning Science</a><br><a href="https://www.ece.cmu.edu/academics/ms-ece/index.html" target="_blank">MSc in Electrical and Computer Engineering</a><br><a href="https://www.cmu.edu/engineering/etim/index.html" target="_blank">MSc in Engineering & Technology Innovation Management</a><br><a href="https://www.hcii.cmu.edu/academics/mhci" target="_blank">MSc in Human-Computer Interaction</a><br><a href="https://www.cmu.edu/ini/academics/msin" target="_blank">MSc in Information Networking</a><br><a href="https://www.cmu.edu/ini/academics/msis/" target="_blank">MSc in Information Security</a><br><a href="https://www.heinz.cmu.edu/programs/information-security-policy-management-master/" target="_blank">MSc in Information Security Policy and Management</a><br><a href="https://www.heinz.cmu.edu/programs/information-systems-management-master" target="_blank">MSc in Information Systems Management</a><br><a href="https://www.heinz.cmu.edu/programs/information-technology-master" target="_blank">MSc in Information Technology</a><br><a href="https://www.cmu.edu/ini/academics/bicoastal/index.html" target="_blank">MSc in Information Technology-Information Security</a><br><a href="https://miis.cs.cmu.edu/" target="_blank">MSc in Intelligent Information Systems</a><br><a href="https://www.cmu.edu/ini/academics/msit/msitdegreeoptions.html#mobility-degree-option" target="_blank">MSc in Information Technology-Mobility</a><br><a href="https://privacy.cs.cmu.edu/" target="_blank">MSc in Information Technology-Privacy Engineering</a><br><a href="https://www.ml.cmu.edu/academics/machine-learning-masters-curriculum.html" target="_blank">MSc in Machine Learning</a><br><a href="https://lti.cs.cmu.edu/mlt/" target="_blank">MSc in Language Technologies</a><br><a href="https://www.cmu.edu/ini/academics/bicoastal/index.html" target="_blank">MSc in Mobile and IoT Engineering</a><br><a href="https://www.ri.cmu.edu/education/academic-programs/master-of-science-robotics/" target="_blank">MSc in Robotics</a><br><a href="https://mrsd.ri.cmu.edu/" target="_blank">MSc in Robotic Systems Development</a><br><a href="https://sv.cmu.edu/programs/msse.html" target="_blank">MSc in Software Engineering</a><br><a href="https://sv.cmu.edu/programs/mssm.html" target="_blank">MSc in Software Management</a><br><a href="https://www.cmu.edu/iii/degrees/mstv/" target="_blank">MSc in Technology Ventures</a></td>
                        <td>United States of America</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><a href="https://www.imperial.ac.uk/" target="_blank">Imperial College London</a></td>
                        <td><a href="https://www.imperial.ac.uk/study/pg/computing/advanced-computing/" target="_blank">MSc Advanced Computing</a><br><a href="https://www.imperial.ac.uk/study/pg/electrical-engineering/analogue-digital-circuit/" target="_blank">MSc Analogue and Digital Integrated Circuit Design</a><br><a href="https://www.imperial.ac.uk/study/pg/earth-science/computational-science/" target="_blank">MSc Applied Computational Science and Engineering</a><br><a href="https://www.imperial.ac.uk/study/pg/computing/artificial-intelligence/" target="_blank">MSc Artificial Intelligence</a><br><a href="https://www.imperial.ac.uk/study/pg/electrical-engineering/communications-signal-processing/" target="_blank">MSc Communications and Signal Processing</a><br><a href="https://www.imperial.ac.uk/study/pg/computing/ai-ml/" target="_blank">MSc Computing (Artificial Intelligence and Machine Learning)</a><br><a href="https://www.imperial.ac.uk/study/pg/computing/computational-management/" target="_blank">MSc Computing (Management and Finance)</a><br><a href="https://www.imperial.ac.uk/study/pg/computing/secure-software-systems/" target="_blank">MSc Computing (Security and Reliability)</a><br><a href="https://www.imperial.ac.uk/study/pg/computing/software-engineering/" target="_blank">MSc Computing (Software Engineering)</a><br><a href="https://www.imperial.ac.uk/study/pg/computing/visual-computing-robotics/" target="_blank">MSc Computing (Visual Computing and Robotics)</a><br><a href="https://www.imperial.ac.uk/study/pg/computing/computing-science/" target="_blank">MSc Computing Science</a><br><a href="https://www.imperial.ac.uk/study/pg/electrical-engineering/control-systems/" target="_blank">MSc Control Systems</a></td>
                        <td>United Kingdom</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><a href="https://www.harvard.edu" target="_blank">Harvard University</a></td>
                        <td><a href="https://www.seas.harvard.edu/applied-computation/graduate-programs/masters-computational-science-and-engineering" target="_blank">MSc in Computational Science and Engineering</a><br><a href="https://www.seas.harvard.edu/applied-computation/graduate-programs/masters-data-science" target="_blank">MSc in Data Science</a></td>
                        <td>United States of America</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><a href="https://www.princeton.edu" target="_blank">Princeton University</a></td>
                        <td><a href="https://www.cs.princeton.edu/grad/degrees" target="_blank">MSc in Engineering</a></td>
                        <td>United States of America</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a href="https://www.caltech.edu" target="_blank">California Institute of Technology</a></td>
                        <td><a href="http://cms.caltech.edu/academics/grad_cs" target="_blank">MSc in Computer Science</a><br><a href="http://www.cms.caltech.edu/academics/grad_cms" target="_blank">MSc in Computing and Mathematical Science</a><br><a href="http://www.cms.caltech.edu/academics/grad_cms" target="_blank">MSc in Control and Dynamical Systems</a></td>
                        <td>United States of America</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--FOOTER-->
<footer class="container-fluid text-center">
    <p>JACOMP+ TOWER, PLOT 9018 JACOMP+ DRIVE, OPPOSITE JACOMP+ RESEARCH CENTRE, JACOMP+ TECH DISTRICT, JACOMP+ ZONE J+0, JACOMP CITY</p>
    <p>Copyright &copy Jacomp+ Technology Inc. <?php echo date("Y");?></p>
</footer>

</body>
</html>