<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
 header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
 header('location:dash.php?q=0');
}
else{}
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Trắc nghiệm tiếng anh  </title>

  <link rel="stylesheet" href="css/main.css">
  <link  rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <link  rel="stylesheet" href="css/bootstrap.min.css"/>
  <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <?php
  if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value; 
      if (y == null || y == "") {
        document.getElementById("errormsg").innerHTML="Tên không được bỏ trống";
        return false;
      }
      var br = document.forms["form"]["branch"].value;
      if (br == "") {
        document.getElementById("errormsg").innerHTML="Chưa chọn địa chỉ";
        return false;
      }
      var g = document.forms["form"]["gender"].value;
      if (g=="") {
        document.getElementById("errormsg").innerHTML="Chưa chọn giới tính";
        return false;
      }
      var x = document.forms["form"]["username"].value;
      if (x.length == 0) {
        document.getElementById("errormsg").innerHTML="Tên đăng nhập kgoon được bỏ trống";
        return false;
      }
      var m = document.forms["form"]["phno"].value;
      if (m.length != 10) {
        document.getElementById("errormsg").innerHTML="Số điện thoại không hợp lệ";
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if(a == null || a == ""){
        document.getElementById("errormsg").innerHTML="Mật khẩu không được bỏ trống";
        return false;
      }
      
      var b = document.forms["form"]["cpassword"].value;
      if (a!=b){
        document.getElementById("errormsg").innerHTML="Không được bỏ trống hoặc không khớp";
        return false;
      }
    }
  </script>
</head>
<body>
  <div class="header">
    <div class="row">
      <div class="col-lg-6">
        <span class="logo">Trắc nghiệm</span></div>
        <div class="col-md-2 col-md-offset-4">
          <a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b> Đăng nhập </b> </span></a></div>
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content title1">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Đăng nhập</span></h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                    <fieldset>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="username"></label>  
                        <div class="col-md-6">
                          <input id="username" name="username" placeholder="Tên đăng nhập" class="form-control input-md" type="username">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="password"></label>
                        <div class="col-md-6">
                          <input id="password" name="password" placeholder="Mật khẩu" class="form-control input-md" type="password">

                        </div>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                      <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg1">
        <div class="row">

          <div class="col-md-7"></div>
          <div class="col-md-4 panel"> 
            <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
              <fieldset>
                <div class="form-group">
                  <label class="col-md-12 control-label" for="name"></label>  
                  <div class="col-md-12">
                    <h3 align="center">Đăng ký</h3>

                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-12 control-label" for="name"></label>  
                  <div class="col-md-12">
                    <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
                    if (@$_GET['q7']) {
                      echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
                    }
                    ?></div>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12 control-label" for="name"></label>  
                  <div class="col-md-12">
                    <input id="name" name="name" placeholder="Họ và tên" class="form-control input-md" type="text" value="<?php
                    if (isset($_GET['name']))
                    {
                      echo $_GET['name'];
                    }?>">

                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-12 control-label" for="gender"></label>
                  <div class="col-md-12">
                    <select id="gender" name="gender" placeholder="Giới tính" class="form-control input-md" >
                     <option value="" <?php
                     if (!isset($_GET['gender']))
                      echo "selected";
                    ?>>Chọn giới tính</option>
                    <option value="Nam" <?php
                    if (isset($_GET['gender']))
                    {
                      if ($_GET['gender'] == "Nam")
                        echo "selected";
                    }
                    ?>>Nam</option>
                    <option value="Nữ" <?php
                    if (isset($_GET['gender']))
                    {
                      if ($_GET['gender'] == "Nữ")
                        echo "selected";
                    }
                    ?>>Nữ</option> </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12 control-label" for="branch"></label>
                  <div class="col-md-12">
                    <select id="branch" name="branch" placeholder="Địa chỉ" class="form-control input-md" >
                     <option value="" <?php
                     if (!isset($_GET['branch']))
                      echo "selected";
                    ?>>Chọn nghề nghiệp</option>
                    <option value="Kĩ sư" <?php
                    if (isset($_GET['branch']))
                    {
                      if ($_GET['branch'] == "Kĩ sư")
                        echo "selected";
                    }
                    ?>>Kỹ sư IT </option>
                    <option value="Ca sĩ" <?php
                    if (isset($_GET['branch']))
                    {
                      if ($_GET['branch'] == "Ca sĩ")
                        echo "selected";
                    }
                    ?>>Kỹ sư điện tử</option>
                    <option value="Bác sĩ" <?php
                    if (isset($_GET['branch']))
                    {
                      if ($_GET['branch'] == "Bác sĩ")
                        echo "selected";
                    }
                    ?>>Giáo viên</option>
                    <option value="Học sinh" <?php
                    if (isset($_GET['branch']))
                    {
                      if ($_GET['branch'] == "Học sinh")
                        echo "selected";
                    }
                    ?>>CNTT</option>
                    <option value="Sinh viên" <?php
                    if (isset($_GET['branch']))
                    {
                      if ($_GET['branch'] == "Sinh viên")
                        echo "selected";
                    }
                    ?>>Học sinh</option>
                    <option value="Giáo viên" <?php
                    if (isset($_GET['branch']))
                    {
                      if ($_GET['branch'] == "Giáo viên")
                        echo "selected";
                    }
                    ?>>Sinh viên</option> 
                    <option value="Nội trợ" <?php
                    if (isset($_GET['branch']))
                    {
                      if ($_GET['branch'] == "Nội trợ")
                        echo "selected";
                    }
                    ?>>Nội trợ</option> 
                    
                  </input>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12 control-label title1" for="username"></label>
                <div class="col-md-12">
                  <input id="username" name="username" placeholder="Tên đăng nhập" class="form-control input-md" type="username" style="margin-top: 22px" value="<?php
                  if (isset($_GET['username']))
                  {
                    echo $_GET['username'];
                  };
                  ?>" style="<?php
                  if (isset($_GET['q7']))
                    echo "border-color:red";
                  ?>">

                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12 control-label" for="phno"></label>  
                <div class="col-md-12">
                  <input id="phno" name="phno" placeholder="Số điện thoại" class="form-control input-md" type="number" value="<?php
                  if (isset($_GET['phno']))
                  {
                    echo $_GET['phno'];
                  }
                  ?>">

                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12 control-label" for="password"></label>
                <div class="col-md-12">
                  <input id="password" name="password" placeholder="Mật khẩu" class="form-control input-md" type="password">

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-12control-label" for="cpassword"></label>
                <div class="col-md-12">
                  <input id="cpassword" name="cpassword" placeholder="Nhập lại mật khẩu" class="form-control input-md" type="password">

                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12 control-label" for=""></label>
                <div class="col-md-12" style="text-align: center"> 
                  <input  type="submit" value=" Đăng ký " class="btn btn-primary" style="text-align:center" />
                </div>
              </div>

            </fieldset>
          </form>
        </div>
      </div></div>
    </div>
    <div class="row footer">
      <div class="col-md-3 box">
        <a href="#" data-toggle="modal" data-target="#login" style="color:lightyellow">Đăng nhập trang admin</a></div>
        <div class="col-md-3 box">
          <span href="#" data-target="#login" style="color:lightyellow">Copyright 2020 by ABC<br><br></span>
        </div>


        <div class="col-md-2 box">
          <a href="feedback.php" style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Phản hồi</a></div>

          <div class="modal fade" id="login">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
                  <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Đăng nhập</span></h4>
                </div>
                <div class="modal-body title1">
                  <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                      <form role="form" method="post" action="admin.php?q=index.php">
                        <div class="form-group">
                          <input type="text" name="uname" maxlength="20"  placeholder="Username" class="form-control"/> 
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>
                        </div>
                        <div class="form-group" align="center">
                          <input type="submit" name="login" value="Đăng nhập" class="btn btn-primary" />
                        </div>
                      </form>
                    </div><div class="col-md-3"></div></div>
                  </div>
                </div>
              </div>
            </div>
          </body>
          </html>
