<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>進度查詢</title>
  <script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./bootstrap.min.css"> -->
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.sandstone.css">
  <link rel="stylesheet" href="./style.css">
  <style>
  a ,a:hover, a:focus{
      color: #000;
  }
  .heading {
      padding:6px 16px;
      display: block;
      color: #fff;
      background: #4ab6e0; 
  }
  .padding{
      padding: 8px 30px;
  }
  .content{
      color: #000;
      line-height: 25px
  }
  .currStep{
    color: #4ab6e0;
  }
  .group{
      margin: 100px 150px 100px 0px;
  }

  </style>
</head>
<body>
  <?php include_once(__DIR__ . '/nav.php');?>
        <div class="row">
        <div class="col-md-2 padding">
        <div class="panel panel-primary">
          <div class="panel-heading">
            服務項目
          </div>
          <ul class="list-group">
            <li class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;<a href="step1.php">線上申請</a></span></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;<a target="_blank" href="http://www.pro.fju.edu.tw/alumni02.asp">書面申請</a></span></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true">&nbsp;<a href="check.php">進度查詢</a></span></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-info-sign" aria-hidden="true">&nbsp;<a target="_blank" href="http://www.academic.fju.edu.tw/#&panel1-1">教務處註冊組</a></span> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">   
        <h3><span class="glyphicon glyphicon-zoom-in" aria-hidden="true">&nbsp;查詢申請案件(欄位皆須填寫)</span></h3><br>
        <form class="form">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">中文姓名</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" id="example-text-input">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">出生年月日</label>
            <div class="col-10">
                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
            </div><br>
          <a href="#" class="btn btn-primary">送出</a>
          </div>
          
        </form>
    </div>
  </div>
  <br><br>
  <?php include_once(__DIR__ . '/footer.php');?>
</body>
</html>