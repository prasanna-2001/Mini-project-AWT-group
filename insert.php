<?php
    $name = $_POST['name'] ;
    $regno = $_POST['regno'] ;
    $email = $_POST['email'] ;
    $semester = $_POST['semester'] ;
    $section = $_POST['section'] ;
    $eventt = $_POST['eventt'] ;
    $eventn = $_POST['eventn'] ;
    $grp = $_POST['grp'] ;
    $grpdet = $_POST['grpdet'] ;
    $org = $_POST['org'] ;
    $datef = $_POST['datefrom'] ;
    $dateto = $_POST['dateto'] ;
    $cert = $_POST['cert'] ;
    $prz = $_POST['prz'] ;
    $cash = $_POST['cash'] ;
    $cashamt = $_POST['cashamt'] ;
    
    $conn = new mysqli('localhost','root','','databasenew') ;
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        if(!empty($_POST['name']) && !empty($_POST['regno']) && !empty($_POST['email']) && !empty($_POST['semester']) && !empty($_POST['section']) && !empty($_POST['eventt']) && !empty($_POST['eventn']) && 
        !empty($_POST['grp']) && !empty($_POST['grpdet']) && !empty($_POST['org']) && !empty($_POST['datefrom']) && !empty($_POST['dateto']) && !empty($_POST['cert']) && !empty($_POST['prz']) && !empty($_POST['cash']) && 
        !empty($_POST['cashamt'])){
            $stmt = $conn->prepare("insert into form(name, regno, email, semester, section, eventt, eventn, grp, grpdet, org, datef, dateto, cert, prz, cash, cashamt) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") ;
            $stmt->bind_param("sisssssssssssssi",$name, $regno, $email, $semester, $section, $eventt, $eventn, $grp, $grpdet, $org, $datef, $dateto, $cert, $prz, $cash, $cashamt);
            $stmt->execute();
            $stmt->close();
            echo 
            '
                <script>
                    alert("Your Response is recorded. Thanks (❁´◡`❁)");
                    window.location = "activity.php";
                </script>
            ';
        }
        else{
            echo 
            '
                <script>
                    alert("All Fields are mandatory ＞﹏＜");
                    window.history.go(-1);
                </script>
            ';
        }
    }
        

?>