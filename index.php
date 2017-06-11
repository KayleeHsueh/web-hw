<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>輔仁大學校友資料庫</title>
  <script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./bootstrap.min.css"> -->
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.sandstone.css">
  <link rel="stylesheet" href="./style.css">
  <style media="screen">
    .brick-container {
      position: relative;
      display: block;
      width: 100%;
    }
    
    .brick-container .brick {
      border-radius: 4px;
      float: left;
      display: block;
      width: 207px;
      height: 194px;
      background-color: #93c54b;
      margin-right: 2%;
      margin-bottom: 2%;
      text-align: center;
      line-height:200px;
      vertical-align: middle;
    }
    .brick-container .brick a {
      display: inline-block;
      vertical-align: middle;
      color: #fff;
      font-size: 21px;
      height: 180px;
      margin: auto 0;
    }
  </style>
</head>
<body>
  <?php include_once(__DIR__ . '/nav.php');?>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            相關連結
          </div>
          <ul class="list-group">
            <li class="list-group-item"> <a target="_blank" href="http://www.academic.fju.edu.tw/#&panel1-1">教務處</a> </li>
            <li class="list-group-item"> <a target="_blank" href="http://fjwaa.fju.edu.tw/">校友會</a> </li>
            <li class="list-group-item"> <a target="_blank" href="http://www.pro.fju.edu.tw/index.asp">公共事務室</a> </li>
            <li class="list-group-item"> <a target="_blank" href="http://www.fju.edu.tw/index.jsp#&panel1-1">輔仁大學</a> </li>
            <li class="list-group-item"> <a target="_blank" href="http://www.pro.fju.edu.tw/services03.asp">捐款輔大</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <form action="" class="form-inline">
            <div class="form-group">
              <label for="search">
                校友搜尋（輸入學號或姓名）
              </label>
              <input type="text" id="search" class="form-control">
            </div>
            <input type="submit" value="Go" class="btn btn-success btn-md">
          </form><br>
        </div>
        <div class="row">
          <div class="brick-container">
            <div class="brick">
              <a href="file/輔仁大學校友資料庫使用單位申請表.doc">
                使用單位申請表
              </a>
            </div>
            <div class="brick">
              <a href="file/校友資料庫系統_畢業生更新步驟.doc">
                校友資料更新步驟說明
              </a>
            </div>
            <div class="brick">
              <a href="./petition.php">
                成績單及各項申請
              </a>
            </div>
            <div class="brick">
              <a target="_blank" href="file/校友資料庫使用手冊.PDF">
                網站使用手冊
              </a>
            </div>
            <div class="brick">
              <a target="_blank" href="http://questionary.dsa.fju.edu.tw/gradsurvey/">
                畢業生流向調查
              </a>
            </div>
            <div class="brick">
              <a target="_blank" href="http://www.pro.fju.edu.tw/services03.asp">
                捐款輔大
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once(__DIR__ . '/footer.php');?>
</body>
</html>