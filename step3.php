<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>確認校友身分</title>
  <script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./bootstrap.min.css"> -->
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.sandstone.css">
  <link rel="stylesheet" href="./style.css">
  <script>
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <style>
  
  a ,a:hover, a:focus,p{
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
  .myTable tr th {
    text-align: right;
    vertical-align: central;
}
table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
.w3-theme-d3 {
    color: #fff;
    background-color: #2aa9db;
    padding:6px 16px;
}
.w3-table-all tr:nth-child(even) {
    background-color: #f1f1f1;
}
.w3-table-all {
    border: 1px solid #ccc;
}
.w3-bordered tr, .w3-table-all tr {
    border-bottom: 1px solid #ddd;
}
.w3-theme-d2 {
    color: #fff;
    background-color: #4ab6e0;
    padding: 7px 10px;
    width: 60px;
}
.w3-border {
    border: 1px solid #808080;
}
.w3-input {
    padding: 5px;
    display: block;
    border-bottom: 1px solid #808080;
    width: 100%;
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
      <div class="col-md-10">   
        <h3>步驟：1.申請項目→2.確認校友身分→<span class="currStep">3.確認應備文件</span>→4.付款資訊</h3>
        <br>
        <p>*請核對一下您的基本資料(若有異動，請回校友資料庫做修正)</p>
            <form name="per_form">
    <table id="table_body" class="myTable w3-table w3-table-all">
	<tbody><tr>
		<th class="w3-theme-d3">您申請的項目：</th>
        <td>中文成績單(排名：1;不排名：0)</td>
	</tr>
	<tr>
		<th class="w3-theme-d3">郵寄地址</th>
        <td>24205新北市新莊區中正路510號</td>
	</tr>
	<tr>
		<th class="w3-theme-d3">郵寄方式</th>
        <td>國內郵件(掛號)</td>
	</tr>
	<tr>
		<th class="w3-theme-d3">備註</th>
        <td>
        <ol>
        <li>應繳金額：新台幣50 元</li><br><br>
        <li>應填表格(請以「另存目標」方式下載表格)：</li><br>
        無<br><br> 
        <li>應備文件：</li><br>
        無
        </ol>
        </td>
	</tr>
    <br>
</tbody>
</table>
</form>
<br> 
<a href="step3.php" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="left" title="確定申請的代辦資料無誤，並向系統送出申請？" style="width:100px;height:50px;">確認</a>
<br>
    </div>
  </div>
  <?php include_once(__DIR__ . '/footer.php');?>
</body>
</html>