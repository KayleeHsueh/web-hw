<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>申請文件注意事項</title>
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
        <table class="table table-hover"> 
            <thead> 
                <tr> 
                    <th>#</th> 
                    <th>證件類別</th> 
                    <th>辦理項目</th> 
                    <th>計費方式</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <th scope="row">1</th> 
                    <td>成績單(皆為正本)</td> 
                    <td>
                        <ul>
                            <li>中文版/英文版</li>
                            <li>排名/不排名</li>
                            <li>彌封/不彌封</li>
                        </ul>
                    </td> 
                    <td>每份50元</td> 
                </tr> 
                <tr> 
                    <th scope="row">2</th> 
                    <td>畢業證書</td> 
                    <td>
                        <ul>
                            <li>中文版/英文版</li>
                            <li>遺失補發(補發為中英文對照版)</li>
                            <li>影本蓋印(或中英文對照版影印)</li>
                            <li>更改姓名</li>
                        </ul>
                    </td> 
                    <td>每份50元</td> 
                </tr> 
                <tr> 
                    <th scope="row">3</th> 
                    <td>校友證</td> 
                    <td>
                        <ul>
                            <li>中文版</li>
                            <li>初次申請/遺失補發</li>
                        </ul>
                    </td> 
                    <td>每份50元</td> 
                </tr> 
            </tbody> 
        </table>
        <h4 class="heading">公告</h4>
        <div class="content">
        各位敬愛的學長姐，您好！<br><br>
        本校105年寒假作息暨春節休假時間如下：<br>
        自106年1月25日(星期三)起至2月3日(星期五)止，星期一至星期四上班；上班時間為上午8時至12時，下午1時至4時30分。<br>
        如需代辦證件服務，請即早申請以免延誤，造成您的不便，敬請見諒！<br><br> 
        任何疑問歡迎來電洽詢(02-29052211)，或email：Alumni@mail.fju.edu.tw，我們將竭誠為學長姐服務！<br><br> 
        敬祝 平安喜樂<br>
        公共事務室　敬啟<br><br>
        </div>
        <h4 class="heading">注意事項：</h4>
        <div class="content">
        公共事務室將在收到劃撥收據(或信用卡刷卡單)與應備文件收齊後，<br>
        代為送件至教務處註冊組，需三個工作天以上(不含郵寄時間)協助完成代辦手續，<br>
        並以國內掛號(可申請快捷或航空等郵寄方式)寄出證件，<br>
        郵遞所需時間請查閱郵局網頁 - 【國內普通、限時郵件郵遞時效表】。<br><br>
        </div>
    </div>
  </div>
  <?php include_once(__DIR__ . '/footer.php');?>
</body>
</html>