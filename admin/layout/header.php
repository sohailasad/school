<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School Management</title>
<link href="css/stylo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header_all">
            <div id="header" class="container">
                <?php if(isset($_SESSION['name'])):?>
                <div>
                    <div style="float: right;">
                    <span style="text-align: right; width: 760px;"><?php echo "Welcome : " . $_SESSION['name'];?></span>
                    &nbsp;&nbsp;
                    <span>
                        <a style="text-decoration: none;" href="logout.php">Logout</a> </span>
                    &nbsp;&nbsp;
                    </div>                   
                </div>
                <?php endif;?>
                
                <div id="logo"><img src="../images/index_03.gif" height="55" width="357" /></div>
                <div id="banner">
                  <div id="img1"></div>
                  <div id="img2"></div>
                  <div id="img3">
                    <ul>
                       <li><a href="student_show.php">Students</a></li>
                       <li><a href="class_show.php">Class</a></li>
                       <li><a href="subject_show.php">Subjects</a></li>
                       <li><a href="marks_show.php">Marks</a></li>
                       <li><a href="marksdetail_show.php">Marks Detail</a></li>
                      
                    </ul>
                  </div>
                </div>
            </div>
</div>
<!----------------------content--------------------------------->
<div id="content_all">
       <div id="content" class="container">