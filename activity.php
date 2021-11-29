<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Activities</title>
    <link rel="stylesheet" href="activity.css">
    
</head>
<body>
<header>
     <div class="nav_links">
       <nav>
          <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Administration</a>
                <div class="submenu-1">
                </div>
              </li>
              <li><a href="#">Departments</a>
                <div class="submenu-1">
                  <ul>
                    <li><a href="#">Computer Technology</a></li>
                    <li><a href="#">Civil</a></li>
                    <li><a href="#">Mechanical</a></li>
                    <li><a href="#">Electronics & Telecom.</a></li>
                    <li><a href="#">Information Technology</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="#">Workshop</a>
                <div class="submenu-1">
                  <ul>
                    <li><a href="#">Organised by</a></li>
                    <li><a href="#">Attended by</a></li>
                    <li><a href="#">Others</a></li>
                  </ul>
                </div></li>
              <li><a href="#">Activities</a>
                <div class="submenu-1">
                  <ul>
                    <li><a href="#">Sports activities</a></li>
                    <li><a href="activity.php">Competitions</a></li>
                    <li><a href="#">Cultural activities</a></li>
                  </ul>
                </div></li>
              <li><a href="#">About us</a>
                <div class="submenu-1">
                  <ul>
                  <li><a href="https://www.ycce.edu/#">About YCCE</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Facilities</a></li>
                    <li><a href="team.html">Our Team</a></li>
                  </ul>
                </div></li>
                <a href="#"><button type="button" class="btn1">Contact</button></a>
          </ul>
        </nav>
      </div>
    </header>
    <div class="newreg">
        <a href="form.html">
            <button>New Entry</button>
        </a>
    </div>
    <div class="main1">
      <h2>⚡Student's Achievements⚡</h2> 
      <table class="tbl">
          <tr>
              <td>Sr.No.</td>
              <td>Name of Student</td>
              <td>Sem/Sec</td>
              <td>Competition</td>
              <td>Organizing Body</td>
              <td>Certificate</td>
              <td>Prize and Cash Amount</td>
          </tr>
          <?php
                include "dbconn.php";
                $records = mysqli_query($db,"select * from form");
                while($data = mysqli_fetch_array($records))
                {
                    ?>
                    <tr>
                        <td class="tblrow"></td>
                        <td><?php echo $data['name'];?></td>
                        <td><?php echo $data['semester']."-".$data['section'];?></td>
                        <td><?php echo $data['eventn'];?></td>
                        <td><?php echo $data['org'];?></td>
                        <td><?php echo $data['cert'];?></td>
                        <td><?php echo $data['prz']." / ₹ ".$data['cashamt'];?></td>
                    </tr>
                    <?php
                }
              ?>
      </table>
      <?php mysqli_close($db);?> 
    </div>
</body>
</html>