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


    <link rel="stylesheet" type="text/css" href="./css/home.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



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

        .cover {

            width: 85px;
            height: 85px;
            border-radius: 50%;
            position: absolute;
            top: 100px;
            left: 20px;
            z-index: 2;
            /* background-color: rgba(0, 0, 0, 0.77); */
            background-image: url('./image/im.jpg');
        }
        
    </style>
    <script>
      
        function changeClass(){
            document.getElementById("imgIcon").className="cover";
            
        }
    </script>
</head>

<body>
    <!-- begin Header -->
    <?php include('header.php'); ?>
    <!-- End Header -->

    <!--  begin cover Image -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="width:100%">
                <img class="card-img-top" src="./image/f1.jpeg" height="200px" alt="Card image">
                <div>
                <img src="./image/f1.jpeg" id="imgIcon" onmouseover="changeClass()" class="image-icon"   alt="">
                </div>
               
                <h3>Proff Mohit Tejwani</h3>
                <h3 style="top: 135px;">Banglore</h3>
            </div>
        </div>
    </div>
    <!-- End Cover image -->
    <!-- Begin Main  -->

    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-group btn-group-lg" style="width:100%">
                    <button type="button" name="btnpending" class="btn btn-primary" style="width:33%">Pending</button>
                    <button type="button" name="btnaccpet" class="btn btn-primary" style="width:34%">Accpet</button>
                    <button type="button" name="btnreject" class="btn btn-primary" style="width:33%">Reject</button>
                </div>

                <!-- Begin Table -->
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Preiod</th>
                            <th>Payment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $pending = "Pending";
                        $sqlpen = "select * from tbl_booking  where facultyId='" . $_SESSION['fid'] . "' and stautes='" . $pending . "' ";
                        $resultpen = mysqli_query($conn, $sqlpen);
                        while ($rpen = mysqli_fetch_assoc($resultpen)) {
                            ?>
                            <tr>
                                <td>Acharya College</td>
                                <td>Soldevanhalli</td>
                                <td>Banglore</td>
                                <td><?php echo $rpen['fromDate']; ?></td>
                                <td><?php echo $rpen['toDate']; ?></td>
                                <td><?php echo $rpen['hours'] . " Hours"; ?></td>
                                <td>500</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            Pending
                                        </button>
                                        <div class="dropdown-menu">
                                            <button type="button" name="btnacc" class="btn btn-primary">Accept</button>
                                            <button type="button" name="btnrej" class="btn btn-danger">Rejcet</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php }

                    ?>

                        <?php
                        if (isset($_REQUEST['btnaccpet'])) {
                            $accpet = "Accpet";
                            $sqlpen = "select * from tbl_booking  where facultyId='" . $_SESSION['fid'] . "' and stautes='" . $accpet . "' ";
                            $resultpen = mysqli_query($conn, $sqlpen);
                            while ($rpen = mysqli_fetch_assoc($resultpen)) {
                                ?>
                                <tr>
                                    <td>Acharya College</td>
                                    <td>Soldevanhalli</td>
                                    <td>Banglore</td>
                                    <td><?php echo $rpen['fromDate']; ?></td>
                                    <td><?php echo $rpen['toDate']; ?></td>
                                    <td><?php echo $rpen['hours'] . " Hours"; ?></td>
                                    <td>2000</td>
                                    <td>
                                        <div class="btn-group">

                                            <div class="dropdown-menu">
                                                <button type="button" class="btn btn-primary">Accept</button>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                    } ?>

                        <?php
                        if (isset($_REQUEST['btnreject'])) {
                            $reject = "Reject";
                            $sqlpen = "select * from tbl_booking  where facultyId='" . $_SESSION['fid'] . "' and stautes='" . $reject . "' ";
                            $resultpen = mysqli_query($conn, $sqlpen);
                            while ($rpen = mysqli_fetch_assoc($resultpen)) {
                                ?>
                                <tr>
                                    <td>Acharya College</td>
                                    <td>Soldevanhalli</td>
                                    <td>Banglore</td>
                                    <td><?php echo $rpen['fromDate']; ?></td>
                                    <td><?php echo $rpen['toDate']; ?></td>
                                    <td><?php echo $rpen['hours'] . " Hours"; ?></td>
                                    <td>2000</td>
                                    <td> <button type="button" class="btn btn-danger">Rejcet</button>

                                    </td>
                                </tr>
                            <?php }
                    }
                    ?>
                    </tbody>
                </table>
                <!-- End Table  -->
            </div>
        </div>

    </div>

    <!-- End Main -->
</body>
<?php
if (isset($_REQUEST['btnacc'])) {
    $acc = "Accpet";
    $id = " a5ea0ad9260b1550a14cc58d2c39b03d";
    $sqlacc = "UPDATE tbl_booking SET stautes='" . $acc . "' where bookingId='" . $id . "'";
    if (mysqli_query($conn, $sqlacc)) {
        echo "<script>window.location='./dashboad.php';</script>";
    } else {
        echo $sqlacc . "eror" . mysqli_connect_error($conn);
    }
}
if (isset($_REQUEST['btnrej'])) {
    $rej = "Rejcet";
    $id = " a5ea0ad9260b1550a14cc58d2c39b03d";
    $sqlacc = "UPDATE tbl_booking SET stautes='" . $rej . "' where bookingId='" . $id . "'";
    if (mysqli_query($conn, $sqlacc)) {
        echo "<script>window.location='./dashboad.php';</script>";
    } else {
        echo $sqlacc . "eror" . mysqli_connect_error($conn);
    }
}
?>

</html>