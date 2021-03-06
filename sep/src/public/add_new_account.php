<?php
session_start();
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADD new acount</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <?php include 'bars2.php' ?>
        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Add New Account</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Enter details of new account holder
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="./submit_add_new_member" method="post">
                                        <div class="form-group">
                                            <label>Email-id / Username</label>
                                            <input class="form-control" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Type of Account</label>
                                            
                                            <select class="form-control" id="presuf3" name="type" required>
                                                <option>General User</option>
                                                <option>Approving Authority</option>
                                                <option>Recommending Authority</option>
                                                <option>Administrator</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Department</label>
                                            
                                            <select class="form-control" id="presuf3" name="department" >
                                                <?php
                                                    while($depr = mysqli_fetch_assoc($dep)){
                                                ?>
                                                <option>
                                                <?php echo $depr['department'];?>
                                                </option>
                                                <?php
                                                    } 
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Approving Authority</label>
                                            
                                        	<select class="form-control" id="presuf3" name="approving" >
                                                <?php
                                                    while($aprr = mysqli_fetch_assoc($apr)){
                                                ?>
                                                <option>
                                                <?php echo $aprr['name']?>
                                                </option>
                                                <?php
                                                    } 
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Preliminary CL</label>
                                            <input class="form-control" name="cl" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Preliminary HPL</label>
                                            <input class="form-control" name="hpl" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Preliminary Vacation</label>
                                            <input class="form-control" name="vacation" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Preliminary EL</label>
                                            <input class="form-control" name="el" required>
                                        </div>
                                        <!--div class="form-group">
                                            <label>Recommending Authority</label>
                                            <select class="form-control" name="recommending_auth" required>

                                                <option>cse150001001@iiti.ac.in</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div-->
                                      <input type="submit" class="btn btn-lg btn-success btn-block">  
                                        
                                   </form>     
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!--div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Period of Leave</label>
                                            <br><label>From: </label>
                                            <input type="date" id="some" class="form-control" name="period_from" required>
                                            <label>To: </label>
                                            <input type="date" class="form-control" name="period_to" required>
                                        </div>
                                            
                                            <div class="form-group">
                                                <label>Report to duty with effect from: </label>
                                                <select class="form-control" name="recommending_auth" required>

                                                <option>Forenoon</option>
                                                <option>Afternoon</option>
                                                </select>
                                            </div>
                                            
                                       <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                    
                                </div-->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
