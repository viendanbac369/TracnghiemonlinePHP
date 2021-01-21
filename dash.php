<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Admin || Trắc nghiệm tiếng anh</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/main.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <script>
        $(function () {
            $(document).on( 'scroll', function(){
                console.log('scroll top : ' + $(window).scrollTop());
                if($(window).scrollTop()>=$(".logo").height())
                {
                   $(".navbar").addClass("navbar-fixed-top");
               }

               if($(window).scrollTop()<$(".logo").height())
               {
                   $(".navbar").removeClass("navbar-fixed-top");
               }
           });
       });</script>
   </head>

   <body  style="background:#eee;">
    <body  style="background:#eee;">
        <div class="header">
            <div class="row">
                <div class="col-lg-6">
                    <span class="logo">Trắc nghiệm</span></div>
                    <?php
                    include_once 'dbConnection.php';
                    session_start();
                    if (!(isset($_SESSION['username']))  || ($_SESSION['key']) != '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
                        session_destroy();
                        header("location:index.php");
                    } else {
                        $name     = $_SESSION['name'];
                        $username = $_SESSION['username'];

                        include_once 'dbConnection.php';
                        echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Chào,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Đăng xuất</button></a></span>';
                    }
                    ?>

                </div></div>
                <nav class="navbar navbar-default title1">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="dash.php?q=0"><b>Trắc nghiệm tiếng anh</b></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li <?php
                    if (@$_GET['q'] == 0)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=0">Trang chủ<span class="sr-only"></span></a></li>
                    <li <?php
                    if (@$_GET['q'] == 1)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=1">Quản lý người dùng</a></li>
                    <li <?php
                    if (@$_GET['q'] == 2)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=2">Quản lý xếp hạng</a></li>
                    <li <?php
                    if (@$_GET['q'] == 3)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=3">Phản hồi</a></li>
                    <li <?php
                    if (@$_GET['q'] == 4)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=4">Thêm câu hỏi</a></li>
                    <li <?php
                    if (@$_GET['q'] == 5)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=5">Xóa câu hỏi</a></li>
                    <li <?php
                    if (@$_GET['q'] == 6)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=6">Tài liệu</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (@$_GET['q'] == 0) {

                    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1"  style="vertical-align:middle">
                    <tr><td style="vertical-align:middle"><b>STT</b></td><td style="vertical-align:middle"><b>Loại câu hỏi</b></td><td style="vertical-align:middle"><b>Tổng số câu hỏi</b></td><td style="vertical-align:middle"><b>Điểm tối đa</b></td><td style="vertical-align:middle"><b>Thời gian</b></td><td style="vertical-align:middle"><b>Trạng thái</b></td><td style="vertical-align:middle"><b>Tùy chỉnh</b></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $title   = $row['title'];
                        $total   = $row['total'];
                        $correct = $row['correct'];
                        $time    = $row['time'];
                        $eid     = $row['eid'];
                        $status  = $row['status'];
                        if ($status == "enabled") {
                            echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;phút</td><td style="vertical-align:middle">Kích hoạt</td>
                            <td style="vertical-align:middle"><b><a href="update.php?deidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:#ff0000;font-size:12px;padding:5px;">&nbsp;<span><b>Đóng bài thi</b></span></a></b></td></tr>';
                        } else {
                            echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;phút</td><td style="vertical-align:middle">Chưa kích hoạt</td>
                            <td style="vertical-align:middle"><b><a href="update.php?eeidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:darkgreen;font-size:12px;padding:5px;">&nbsp;<span><b>Mở bài thi</b></span></a></b></td></tr>';

                        }
                    }
                }
                if (@$_GET['q'] == 2) {
                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                        $showfrom = (($show-1)*10) + 1;
                        $showtill = $showfrom + 9;
                    }
                    else{
                        $show = 1;
                        $showfrom = 1;
                        $showtill = 10;
                    }
                    $q = mysqli_query($con, "SELECT * FROM rank") or die('Error223');
                    echo '<div class="panel title">
                    <table class="table table-striped title1" >
                    <tr><td style="vertical-align:middle"><b>Thứ bậc</b></td><td style="vertical-align:middle"><b>Tên</b></td><td style="vertical-align:middle"><b>Nghề nghiệp</b></td><td style="vertical-align:middle"><b>Tên đăng nhập</b></td><td style="vertical-align:middle"><b>ID</b></td><td style="vertical-align:middle"><b>Giới tính</b></td><td style="vertical-align:middle"><b>Điểm số</b></td></tr>';
                    $c = $showfrom-1;
                    $total = mysqli_num_rows($q);
                    if($total >= $showfrom){
                        $q = mysqli_query($con, "SELECT * FROM rank ORDER BY score DESC, time ASC LIMIT ".($showfrom-1).",10") or die('Error223');
                        while ($row = mysqli_fetch_array($q)) {
                            $e = $row['username'];
                            $s = $row['score'];
                            $q12 = mysqli_query($con, "SELECT * FROM user WHERE username='$e' ") or die('Error231');
                            while ($row = mysqli_fetch_array($q12)) {
                                $name     = $row['name'];
                                $branch   = $row['branch'];
                                $username = $row['username'];
                                $rollno     = $row['rollno'];
                                $gender   = $row['gender'];
                            }
                            $c++;
                            echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td style="vertical-align:middle">' . $name . '</td><td style="vertical-align:middle">' . $branch . '</td><td style="vertical-align:middle">' . $username . '</td><td style="vertical-align:middle">' . $rollno . '</td><td style="vertical-align:middle">' . $gender . '</td><td style="vertical-align:middle">' . $s . '</td><td style="vertical-align:middle">';
                        }
                    }
                    else{
                    }
                    echo '</table></div>';
                    echo '<div class="panel title"><table class="table table-striped title1" ><tr>';
                    $total = round($total/10) + 1;
                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                    }
                    else{
                        $show = 1;
                    }
                    if($show == 1 && $total==1){
                    }
                    else if($show == 1 && $total!=1){
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    else if($show != 1 && $show==$total){
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';

                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                    }
                    else{
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    echo '</tr></table></div>';
                }
                if (@$_GET['q'] == 1) {

                    $result = mysqli_query($con, "SELECT * FROM user") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
                    <tr><td style="vertical-align:middle"><b>STT</b></td><td style="vertical-align:middle"><b>Tên</b></td><td style="vertical-align:middle"><b>Giới tính</b></td><td style="vertical-align:middle"><b>ID</b></td><td style="vertical-align:middle"><b>Địa chỉ</b></td><td style="vertical-align:middle"><b>Tên đăng nhập</b></td><td style="vertical-align:middle"><b>SĐT</b></td><td style="vertical-align:middle"><b>Xóa</b></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $name      = $row['name'];
                        $phno      = $row['phno'];
                        $gender    = $row['gender'];
                        $rollno    = $row['rollno'];
                        $branch    = $row['branch'];
                        $username1 = $row['username'];

                        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $name . '</td><td style="vertical-align:middle">' . $gender . '</td><td style="vertical-align:middle">' . $rollno . '</td><td style="vertical-align:middle">' . $branch . '</td><td style="vertical-align:middle">' . $username1 . '</td><td style="vertical-align:middle">' . $phno . '</td>
                        <td style="vertical-align:middle"><a title="Xóa tài khoản" href="update.php?dusername=' . $username1 . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
                    }
                    $c = 0;
                    echo '</table></div>';

                }
                if (@$_GET['q'] == 3) {
                    $result = mysqli_query($con, "SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
                    <tr><td style="vertical-align:middle"><b>STT</b></td><td style="vertical-align:middle"><b>Nội dung</b></td><td style="vertical-align:middle"><b>Tài khoản</b></td><td style="vertical-align:middle"><b>Ngày</b></td><td style="vertical-align:middle"><b>Giờ</b></td><td style="vertical-align:middle"><b>Tác giả</b></td><td style="vertical-align:middle"></td><td style="vertical-align:middle"><b>Tùy chỉnh</b></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $date      = $row['date'];
                        $date      = date("d-m-Y", strtotime($date));
                        $time      = $row['time'];
                        $subject   = $row['subject'];
                        $name      = $row['name'];
                        $username1 = $row['username'];
                        $id        = $row['id'];
                        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td>';
                        echo '<td style="vertical-align:middle"><a title="Click to open feedback" href="dash.php?q=3&fid=' . $id . '">' . $subject . '</a></td><td style="vertical-align:middle">' . $username1 . '</td><td style="vertical-align:middle">' . $date . '</td><td style="vertical-align:middle">' . $time . '</td><td style="vertical-align:middle">' . $name . '</td>
                        <td style="vertical-align:middle"><a title="Mở phản hồi" href="dash.php?q=3&fid=' . $id . '"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
                        echo '<td style="vertical-align:middle"><a title="Xóa phản hồi" href="update.php?fdid=' . $id . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

                        </tr>';
                    }
                    echo '</table></div>';
                }
                if (@$_GET['fid']) {
                    echo '<br />';
                    $id = @$_GET['fid'];
                    $result = mysqli_query($con, "SELECT * FROM feedback WHERE id='$id' ") or die('Error');
                    while ($row = mysqli_fetch_array($result)) {
                        $name     = $row['name'];
                        $subject  = $row['subject'];
                        $date     = $row['date'];
                        $date     = date("d-m-Y", strtotime($date));
                        $time     = $row['time'];
                        $feedback = $row['feedback'];

                        echo '<div class="panel"<a title="Quay lại" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>' . $subject . '</b></h1>';
                        echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>Ngày:</b>&nbsp;' . $date . '</span>
                        <span style="line-height:35px;padding:5px;">&nbsp;<b>Giờ:</b>&nbsp;' . $time . '</span><span style="line-height:35px;padding:5px;">&nbsp;<b>Tác giả:</b>&nbsp;' . $name . '</span><br />' . $feedback . '</div></div>';
                    }
                }
                if (@$_GET['q'] == 4 && !(@$_GET['step'])) {
                    echo ' 
                    <div class="row">
                    <span class="title1" style="margin-left:40%;font-size:30px;"><b>Thêm câu hỏi</b></span><br /><br />
                    <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
                    <fieldset>
                    <div class="form-group">
                    <label class="col-md-12 control-label" for="name"></label>  
                    <div class="col-md-12">
                    <input id="name" name="name" placeholder="Loại đề" class="form-control input-md" type="text">

                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-12 control-label" for="total"></label>  
                    <div class="col-md-12">
                    <input id="total" name="total" placeholder="Tổng số câu hỏi" class="form-control input-md" type="number">

                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-12 control-label" for="right"></label>  
                    <div class="col-md-12">
                    <input id="right" name="right" placeholder="Số điểm nếu trả lời đúng" class="form-control input-md" min="0" type="number">

                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-12 control-label" for="wrong"></label>  
                    <div class="col-md-12">
                    <input id="wrong" name="wrong" placeholder="Số điểm nếu trả lời sai hoặc bỏ trống" class="form-control input-md" min="0" type="number">

                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-12 control-label" for="time"></label>  
                    <div class="col-md-12">
                    <input id="time" name="time" placeholder="Thời gian của bài thi" class="form-control input-md" min="1" type="number">

                    </div>
                    </div>


                    <div class="form-group">
                    <label class="col-md-12 control-label" for=""></label>
                    <div class="col-md-12"> 
                    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Tạo bài thi" class="btn btn-primary"/>
                    </div>
                    </div>

                    </fieldset>
                    </form></div>';



                }
                if (@$_GET['q'] == 4 && (@$_GET['step']) == 2) {
                    echo ' 
                    <div class="row">
                    <span class="title1" style="margin-left:40%;font-size:30px;"><b>Tạo câu hỏi</b></span><br /><br />
                    <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n=' . @$_GET['n'] . '&eid=' . @$_GET['eid'] . '&ch=4 "  method="POST">
                    <fieldset>
                    ';

                    for ($i = 1; $i <= @$_GET['n']; $i++) {
                        echo '<b>Câu hỏi&nbsp;' . $i . '&nbsp;:</><br />
                        <div class="form-group">
                        <label class="col-md-12 control-label" for="qns' . $i . ' "></label>  
                        <div class="col-md-12">
                        <textarea rows="3" cols="5" name="qns' . $i . '" class="form-control" placeholder="Điền câu hỏi số ' . $i . ' ở đây..."></textarea>  
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-12 control-label" for="' . $i . '1"></label>  
                        <div class="col-md-12">
                        <input id="' . $i . '1" name="' . $i . '1" placeholder="Đáp án A" class="form-control input-md" type="text">

                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-12 control-label" for="' . $i . '2"></label>  
                        <div class="col-md-12">
                        <input id="' . $i . '2" name="' . $i . '2" placeholder="Đáp án B" class="form-control input-md" type="text">

                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-12 control-label" for="' . $i . '3"></label>  
                        <div class="col-md-12">
                        <input id="' . $i . '3" name="' . $i . '3" placeholder="Đáp án C" class="form-control input-md" type="text">

                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-12 control-label" for="' . $i . '4"></label>  
                        <div class="col-md-12">
                        <input id="' . $i . '4" name="' . $i . '4" placeholder="Đáp án D" class="form-control input-md" type="text">

                        </div>
                        </div>
                        <br />
                        <b>Đáp án đúng</b>:<br />
                        <select id="ans' . $i . '" name="ans' . $i . '" placeholder="Đáp án đúng " class="form-control input-md" >
                        <option value="a">Chọn câu trả lời cho câu hỏi ' . $i . '</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option> </select><br /><br />';
                    }

                    echo '<div class="form-group">
                    <label class="col-md-12 control-label" for=""></label>
                    <div class="col-md-12"> 
                    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Tạo đề" class="btn btn-primary"/>
                    </div>
                    </div>

                    </fieldset>
                    </form></div>';



                }
                if (@$_GET['q'] == 5) {

                    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
                    <tr><td style="vertical-align:middle"><b>STT</b></td><td style="vertical-align:middle"><b>Đề</b></td><td style="vertical-align:middle"><b>Tổng số câu hỏi</b></td><td style="vertical-align:middle"><b>Điểm tối đa</b></td><td style="vertical-align:middle"><b>Thời gian</b></td><td style="vertical-align:middle"><b>Trạng thái</b></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $title   = $row['title'];
                        $total   = $row['total'];
                        $correct = $row['correct'];
                        $time    = $row['time'];
                        $eid     = $row['eid'];
                        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle">' . $time . '&nbsp;phút</td>
                        <td style="vertical-align:middle"><b><a href="update.php?q=rmquiz&eid=' . $eid . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Xóa</b></span></a></b></td></tr>';
                    }
                    $c = 0;
                    echo '</table></div>';

                }
                if (@$_GET['q'] == 6) {


                    $q = mysqli_query($con,"select * from upload order by id desc" )or die('Error231');
                    echo '<div class="panel"><table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
                    <tr><td><form enctype="multipart/form-data"  action="upload.php" id="wb_Form1" name="form" method="post">
                    <input type="file" name="photo" id="photo"  required="required"></td>
                    <td><input type="submit" class="btn btn-danger" value="Tải lên" name="submit">
                    </form> <strong>Tải file</strong></tr></td></table>
                    <div class="animated fadeIn"><table class="table table-striped title1">
                    <tr><td style="vertical-align:middle"><b>STT</b></td><td style="vertical-align:middle"><b> Tên file</b></td><td style="vertical-align:middle"><b>Thời gian</b></td><td style="vertical-align:middle"><b>Kích cỡ<b></td><td style="vertical-align:middle"><b>Loại file<b></td><td style="vertical-align:middle"><b>Tải xuống<b></td><td style="vertical-align:middle"><b>Xóa<b></td></tr>';
                    $c = 0;
                    while ($row = mysqli_fetch_array($q)) {
                        $id=$row['id'];
                        $name=$row['name'];
                        $date=$row['date'];
                        $size=$row['size'];
                        $txt=$row['txt'];

                        $c++;
                        echo '<tr><td style="vertical-align:middle">' . $c . '</td><td style="vertical-align:middle">' . $name . '</td><td style="vertical-align:middle">' .  $date . '</td><td style="vertical-align:middle">' . $size . '</td><td style="vertical-align:middle">' . $txt . '</td><td style="vertical-align:middle"><b><a href="download.php?filename='.$row['name'].'" title="click to download" class="btn" style="margin:0px;background:#BFFF00;color:white">&nbsp;<span class="title1"><b>Tải xuống</b></td><td style="vertical-align:middle"><b><a href="delete.php?del='.$row['id'].'" title="click to delete" class="btn" style="margin:0px;background:#FA5858;color:white">&nbsp;<span class="title1"><b>Xóa file</b></td><td>
                        </tr>';
                    }

                    echo '</table></div></div>';
                }              
                ?>
            </div>
        </div></div>
    </body>
    </html>
