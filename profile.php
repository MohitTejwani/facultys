<?php
session_start();

include('connection.php');
?>

<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboad Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- date time -->
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="./css/profile.css">

    <script src="main.js"></script>
    <!-- Begin  Image upload link  Script  -->


    <!-- End  Image Upload Link AND Script  -->
  </head>
  <!--  -->

  <link rel="stylesheet" type="text/css" href="./css/home.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- icon link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="main.js"></script>
  <style>
    .card-back {
      margin: 5px;
      border-radius: 10px;
      box-shadow: 6px 6px 0px 0px rgba(193, 193, 216, 0.22);

    }

    .card-cover {
      margin: 20px;
      border-radius: 10px;
      box-shadow: 6px 6px 0px 0px rgba(193, 193, 216, 0.22);

    }

    .image-slider {
      width: 100%;
      height: 200px;
    }

    .text-text {
      width: 90%;
      height: 40px;
      border-radius: 15px;
      border-style: groove;
      padding: 20px;
      margin-top: 20px;
    }

    .image-icon {
      width: 85px;
      height: 85px;
      border-radius: 50%;
      position: absolute;
      top: 100px;
      left: 20px;
    }

    h3 {
      position: absolute;
      top: 105px;
      left: 110px;
      color: white;
      font-weight: 800;
    }

    .card-head {
      background-color: #0e33f7;
      color: white;
      font-weight: 500;
    }

    .btn {
      background-color: #0e33f7;
      border: none;
      color: white;
      padding: 12px 16px;
      font-size: 16px;
      cursor: pointer;
      position: absolute;
      right: 3px;
      top: 10px;
    }

    /* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
    }

    label {
      font-weight: 800;
    }

    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto;
      /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }

    .btnn {
      width: 25%;
      height: 40px;
      background-color: #0e33f7;
      color: white;
      font-weight: 800;
      border-radius: 8px;
      border-style: none;
    }
    }

    .container {
      position: relative;
      width: 50%;
    }

    /* .image {
  width: 85px;
      height: 85px;
      border-radius: 50%;
      position: absolute;
      top: 100px;
      left: 20px;
   
  display: block;

}

.overlay {
  position: absolute;
  
  left: 20;
  
  top: 100px;
  background-color: rgba(0, 0, 0, 0.6);
  overflow: hidden;
  width: 85px;
  border-radius: 50%;
  height: 85px;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 100%;
} */

    /* new  begin */

    body-wrapper {
      background-color: #fff;

      .footer {
        height: 200px;
        background-color: #707070;

        .footer-inner {
          padding: 50px;
        }

        .logo {
          img {
            height: 70px;
            width: 70px;
            border-radius: 50%;
          }
        }
      }

      .full-name {
        position: absolute;
        margin-top: -60px;
        margin-left: 266px;

        h4,
        p {
          color: white;
        }
      }

      .image-hover {
        height: 120px;
        width: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-top: -67px;
        position: absolute;
        margin-left: 130px;
        border: 1px solid #1B29D1;
        background: #0009;
        opacity: 0;
        transition: 0.5s all ease;
        cursor: pointer;
      }

      .image-hover:hover {
        opacity: 1;
      }

      .changedp {
        color: #fff;
        position: absolute;
        margin: 0 auto;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      .faculty-avater img {
        height: 120px;
        width: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-top: -67px;
        position: absolute;
        margin-left: 130px;
        border: 1px solid #1B29D1;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.336);
      }

      .faculty-profile-banner {
        position: relative;

        img {
          height: 40vh;
          width: 100%;
          object-fit: cover;
          position: relative;
          background-position: -5px -145px;
          -webkit-filter: blur(5px);
          -moz-filter: blur(5px);
          -o-filter: blur(5px);
          -ms-filter: blur(5px);
          filter: blur(3px);
        }

        .overlay-on-banner {
          width: 100%;
          height: 100%;
          /* background: linear-gradient(to left,rgba(91,152,222,0.38) ,rgba(0,0,0,0.8));*/
          background-color: rgba(0, 0, 0, 0.6);
          position: absolute;
          top: 0;
        }
      }

      .content-wrapper {
        margin-top: 100px;
        margin-bottom: 100px;
      }

      .main-card-header {
        background-color: #1B29D1;
        border-radius: 5px;
        padding: 10px;
        position: sticky;
        top: 0;
      }

      .main-card {
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.371);
        height: 450px;
        overflow: scroll;
        background-color: #fff;
      }

      .main-card-body {
        margin-bottom: 20px;
        padding: 15px;
        color: #707070;

        span {
          padding-right: 10px;
        }
      }

      .uploda-card {
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.371);
        // height: 450px;
        overflow: scroll;
        background-color: #fff;
      }

      @media only screen and (max-width: 500px) {
        .full-name {
          position: absolute;
          margin-top: -60px;
          margin-left: 160px;

          h4,
          p {
            color: white;
          }
        }

        .faculty-avater img {
          height: 90px;
          width: 90px;
          -o-object-fit: cover;
          object-fit: cover;
          border-radius: 50%;
          margin-top: -65px;
          position: absolute;
          margin-left: 55px;
          border: 1px solid #1B29D1;
          box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.336);
        }

        .image-hover {
          height: 90px;
          width: 90px;
          -o-object-fit: cover;
          object-fit: cover;
          border-radius: 50%;
          margin-top: -65px;
          position: absolute;
          margin-left: 55px;
          border: 1px solid #1B29D1;
          background: #0009;
          opacity: 0;
          transition: 0.5s all ease;
          cursor: pointer;
        }

        .image-hover:hover {
          opacity: 1;
        }

      }
    }

    @media only screen and (max-width: 500px) {
      .edit-experiences {
        .card-content-wrapper {
          padding: 0 !important;
          margin-top: 15px;
        }

        .main-card-body {
          margin-bottom: 20px;
          padding: 0 !important;
          color: #707070;

          span {
            padding-right: 10px;

          }
        }
      }
    }

    /* End new */
    .banner{
      margin:0;
      padding: 0;
      width: 600px;
    }
    @media only screen and (max-width: 600px) {
      .banner{
      margin:0;
      padding: 0;
      width: 600px;
    }
}

/* Small devices (portrait tablets and large phones, 600px and up) */


/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .banner{
      margin:0;
      padding: 0;
      width: 768px;
    }
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .banner{
      margin:0;
      padding: 0;
      width: 992px;
    }
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .banner{
      margin:0;
      padding: 0;
      width: 1200px;
    }
}
 
  </style>
</head>

<body>
  <!-- begin Header -->
  <?php include('header.php'); ?>
  <!-- End Header -->
  <!-- Begin Retriver data  -->
  <?php
  $name = "";
  $email = "";
  $dob = "";
  $number = "";
  $qualification = "";
  $price = "";
  $year = "";
  $month = "";
  $j = 0;
  $sql = "select * from tbl_faculty where facultyId='" . $_SESSION['fid'] . "'";
  $result = mysqli_query($conn, $sql);
  while ($res = mysqli_fetch_assoc($result)) {
    $name = $res['facultyName'];
    $email = $res['facultyEmail'];
    $dob = $res['facultyDob'];
    $number = $res['facultyContact'];
    $price = $res['facultyPrice'];
    $qualification = $res['facultyQulification'];
  }
  $sql1 = "select * from tbl_skill where facultyId='" . $_SESSION['fid'] . "'";
  $result1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result1) > 0) {
    $i = 0;
    while ($r = mysqli_fetch_assoc($result1)) {
      $sk[$i] = $r['skillName'];
      $i += 1;
    }
  }

  $exp = "select * from tbl_experience where facultyId='" . $_SESSION['fid'] . "'";
  $resultExp = mysqli_query($conn, $exp);
  if (mysqli_num_rows($resultExp) > 0) {
    while ($expr = mysqli_fetch_assoc($resultExp)) {
      $year = $expr['year'];
      $month = $expr['month'];
    }
  }

  $des = "select * from tbl_description where facultyId='" . $_SESSION['fid'] . "'";
  $resultDes = mysqli_query($conn, $des);
  if (mysqli_num_rows($resultDes) > 0) {
    while ($d = mysqli_fetch_assoc($resultDes)) {

      $desc = $d['description'];
    }
  } else {
    echo "fail";
  }
  ?>

  <!-- End Retrive data  -->
  <!--  begin cover Image -->
  <div class="container banner">
    <div class="row">
      <div class="col-lg-12" >
        <div class="card" style="width: 1350px">
          <img src="./image/m1.jpeg" height="200px" alt="Faculty Banner">
        </div>
      </div>
    </div>
  </div>

  <!-- End Cover image -->
  <!-- Begin Main  -->

  <!-- Begin booking Box -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card card-cover text-center">
          <div class="card-header card-head">
            <h2>Personal Information</h2>
            <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></button>
          </div>
          <div class="card-body ">
            <label> Email :</label> <label> <?php echo $email; ?></label> <br>
            <label> Contact :</label> <label> <?php echo $number; ?></label> <br>
            <label> DOB :</label> <label> <?php echo $dob; ?></label> <br>
            <label> Amout Per Hour :</label> <label> <?php echo $price; ?></label> <br>
          </div>
        </div>
      </div>
      <!--  -->
      <!--  -->

      <div class="col-sm-6">
        <div class="card card-cover text-center">
          <div class="card-header card-head">
            <h2>Proffesnal Information</h2>
            <button class="btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></button>
          </div>
          <div class="card-body ">
            <label> Qulification :</label> <label><?php echo $qualification; ?></label> <br>
            <label> Discription :</label>
            <p><?php echo $desc; ?></p>
            <br>

          </div>
        </div>
      </div>
      <!--  -->
    </div>
  </div>
  <!--  -->
  <!--  -->

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card card-cover text-center">
          <div class="card-header card-head">
            <h2>Skill Information</h2>
            <button class="btn" onclick="document.getElementById('id03').style.display='block'" style="width:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></button>
          </div>
          <div class="card-body ">
            <label> Skills :</label>
            <?php
            for ($x = 0; $x < 2; $x++) {
              ?>
              <label> <?php echo $sk[$x];  ?></label> <?php } ?> <br>

          </div>
        </div>
      </div>
      <!--  -->
      <!--  -->

      <div class="col-sm-6">
        <div class="card card-cover text-center">
          <div class="card-header card-head">
            <h2>Experience Information</h2>
            <button class="btn" onclick="document.getElementById('id04').style.display='block'" style="width:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></button>
          </div>
          <div class="card-body ">
            <label> Experience :</label> <label> <?php echo "Years " . $year . " Months " . $month; ?></label> <br>

          </div>
        </div>
      </div>
      <!--  -->
    </div>
  </div>
  <!--  -->


  <!-- personal  info  update  -->
  <div id="id01" class="modal">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="card card-cover text-center">
            <div class="card-header card-head">
              <h2>Personal Information</h2>
              <button class="btn" onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"><i class="fa fa-close" aria-hidden="true"></i></button>
            </div>
            <div class="card-body ">


              <form>
                <div class="form-group">

                  <input type="text" class="form-control" name="txtname" id="formGroupExampleInput" placeholder="Enter Name " value="<?php echo $name; ?>">
                </div>
                <div class="form-group">

                  <input type="email" class="form-control" name="txtemail" id="formGroupExampleInput2" placeholder=" Enter Email" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">

                  <input type="phone" class="form-control" name="txtnumber" id="formGroupExampleInput" placeholder="Enter Contact Number " value="<?php echo $number; ?>">
                </div>

                <div class="form-group">

                  <input type="text" class="form-control" name="txtqualification" id="formGroupExampleInput" placeholder="Enter Qualification " value=" <?php echo $qualification; ?>">
                </div>
                <div class="form-group">

                  <input type="text" class="form-control" name="txtprice" id="formGroupExampleInput" placeholder="Enter Amount " value=" <?php echo $price; ?>">
                </div>
                <button class="btnn" name="btnpersonal" type="submit">Submit </button>
                <button class="btnn" style="background-color:red" type="reset">Reset</button>
              </form>




            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- end personal -->

  <!-- begin Description  -->
  <div id="id02" class="modal">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="card card-cover text-center">
            <div class="card-header card-head">
              <h2>Proffesnal Information</h2>
              <button class="btn" onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"><i class="fa fa-close" aria-hidden="true"></i></button>
            </div>
            <div class="card-body ">
              <!-- <form class="modal-content animate">
    <div class="imgcontainer"> -->

              <form>
                <div class="form-group">
                  <label>Description:</label>
                  <textarea class="form-control" name="txtdes" rows="3" id=""></textarea>
                </div>

                <button class="btnn" name="btndes" type="submit">Submit </button>
                <button class="btnn" style="background-color:red" type="reset">Reset</button>
              </form>




            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
 
  <!-- End Description  -->

  <!-- begin skill -->

  <div id="id03" class="modal">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="card card-cover text-center">
            <div class="card-header card-head">
              <h2>Skills Information</h2>
              <button class="btn" onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal"><i class="fa fa-close" aria-hidden="true"></i></button>
            </div>
            <div class="card-body ">
              <form>
                <div class="form-group">
                  <label for="sel2">Select Skills :</label>
                  <select onChange="selectskill(this)" class="form-control" id="sel2">

                    <option selected>PHP</option>
                    <option>JAVA</option>
                    <option>PYTHON</option>
                    <option>PERL</option>
                    <option>C#</option>
                  </select>
                  <div id="follate" style="padding: 20px;margin:20px">


                  </div>
                </div>
                <!-- <input type="submit" value="" id="btnsk" style="display:none"> -->
                <!-- <button  id="btnsk" class="btn btn-primary" style="display:none"><i class="fa fa-close"></i></button> -->
                <script>
                  var i = 0;

                  function selectskill(element) {
                    i += 1;

                    // document.getElementById('btnsk').style.display="block"; 
                    //     document.getElementById('btnsk').value=element.value;
                    var x = document.createElement("input");
                    x.setAttribute("type", "submit");
                    x.setAttribute("value", element.value);
                    x.setAttribute("name", "sk" + i);
                    var p = "sk" + 1;
                    document.cookie = "p";
                    // var y = document.createElement("i");
                    // y.className="fa fa-close";
                    // y.setAttribute("onclick","del(this)");
                    document.getElementById("follate").appendChild(x);
                    //document.getElementById("follate").appendChild(y);


                  }
                  // function del(elem){
                  //   alert(elem);
                  // }
                </script>
                <button class="btnn" type="submit">Submit </button>
                <button class="btnn" style="background-color:red" type="reset">Reset</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  

  <!-- End Skills  -->

  <!-- Begin Experience -->


  <div id="id04" class="modal">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="card card-cover text-center">
            <div class="card-header card-head">
              <h2>Skills Information</h2>
              <button class="btn" onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal"><i class="fa fa-close" aria-hidden="true"></i></button>
            </div>
            <div class="card-body ">
              <!-- <form class="modal-content animate">
    <div class="imgcontainer"> -->

              <form>
                <div class="form-group">
                  <input type="number" name="txtyear" class="form-control" id="formGroupExampleInput" placeholder="Enter Years " value="<?php echo $year; ?>">
                </div>
                <div class="form-group">
                  <input type="number" name="txtmonth" class="form-control" id="formGroupExampleInput" placeholder="Enter Months " value="<?php echo $month; ?>">
                </div>

                <button class="btnn" name="btnexp" type="submit">Submit </button>
                <button class="btnn" style="background-color:red" type="reset">Reset</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- begin Update Image -->
  <div id="id05" class="modal">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="card card-cover text-center">
            <div class="card-header card-head">
              <h2>Image Update</h2>
              <button class="btn" onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal"><i class="fa fa-close" aria-hidden="true"></i></button>
            </div>
            <div class="card-body ">
              <form>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Update Image -->

  <?php
  $phpVar =  $_COOKIE['p'];
  echo $phpVar;
  ?>
  <!-- End Experience -->
  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }


    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    var modal = document.getElementById('id03');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    var modal = document.getElementById('id04');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }


    var modal = document.getElementById('id05');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <!-- end personal info update -->
</body>
<?php
// Begin  Personal Information Update 
if (isset($_REQUEST['btnpersonal'])) {
  $query = "UPDATE tbl_faculty SET facultyName='" . $_REQUEST['txtname'] . "',facultyEmail='" . $_REQUEST['txtemail'] . "',facultyContact='" . $_REQUEST['txtnumber'] . "',facultyQulification='" . $_REQUEST['txtqualification'] . "',facultyPrice='" . $_REQUEST['txtprice'] . "' WHERE facultyId='" . $_SESSION['fid'] . "'";
  if (mysqli_query($conn, $query)) {
    echo "<script>window.location='profile.php';</script>";
  }
}
// End Personal Information Update
// Begin Professnal Information Update
if (isset($_REQUEST['btndes'])) {
  $queryDes = "UPDATE tbl_description SET  description='" . $_REQUEST['txtdes'] . "' WHERE  facultyId='" . $_SESSION['fid'] . "'";
  if (mysqli_query($conn, $queryDes)) {
    echo "<script>window.location='profile.php';</script>";
  }
}
// End Professnal Information Update
// Begin Experience Update
if (isset($_REQUEST['btnexp'])) {
  $queryExp = "UPDATE `tbl_experience` SET year='" . $_REQUEST['txtyear'] . "',month='" . $_REQUEST['txtmonth'] . "' WHERE facultyId='" . $_SESSION['fid'] . "'";
  if (mysqli_query($conn, $queryExp)) {
    echo "<script>window.location='profile.php';</script>";
  }
}
// End  Experience Update

?>

</html>