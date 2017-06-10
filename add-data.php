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
            <li class="list-group-item"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true">&nbsp;<a href="#">進度查詢</a></span></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-info-sign" aria-hidden="true">&nbsp;<a target="_blank" href="http://www.academic.fju.edu.tw/#&panel1-1">教務處註冊組</a></span> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-10">   
        <h3>步驟：1.申請項目→<span class="currStep">2.確認校友身分</span>→3.確認應備文件→4.付款資訊</h3>
        <br>
        <p>*請核對一下您的基本資料(若有異動，請回校友資料庫做修正)</p>
            <form name="per_form">
    <table id="table_body" class="myTable w3-table w3-table-all">
	<tbody><tr>
		<th class="w3-theme-d3">姓名</th>
	</tr>
	<tr>
		<th class="w3-theme-d3">部別</th>
        <td></td>
	</tr>
	<tr>
		<th class="w3-theme-d3">學號</th>
	</tr>
	<tr>
		<th class="w3-theme-d3">E-Mail</th>
        <td></td>
	</tr>
	<tr>
		<th class="w3-theme-d3">聯絡電話</th>
	</tr>
	<tr>
		<th class="w3-theme-d3">聯絡地址</th>
		<td>郵遞區號：
        	<br><br>
            詳細地址：
        </td>
	</tr>
	<tr>
		<th class="w3-theme-d3">選擇郵寄方式</th>
		<td>
        <div class="w3-padding">
        <p>
        </p>
        <div class="w3-container"> 
            <div class="postway w3-card-2 w3-hover-khaki w3-theme-l2 w3-tooltip">
            
                <p class="w3-theme-d2">國內</p>
                <label class="rLabel" title="申請證書、證明書類文件，恕無法以平信寄送">
                <input type="radio" class="getWay" name="DOC_RECEIVE" value="1">平信</label>
                <label class="rLabel"><input type="radio" class="getWay" name="DOC_RECEIVE" value="3">掛號</label>
                <label class="rLabel"><input type="radio" class="getWay" name="DOC_RECEIVE" value="4">限掛</label>
            </div>
    
            <div class="postway w3-card-2 w3-hover-amber w3-theme-l2 w3-tooltip">
                <p class="w3-theme-d2">國外</p>
                <label class="rLabel"><input type="radio" class="getWay" name="DOC_RECEIVE" value="5">國際航掛</label>
                <label class="rLabel"><input type="radio" class="getWay" name="DOC_RECEIVE" value="6">國際EMS</label>
                <label class="rLabel"><input type="radio" class="getWay" name="DOC_RECEIVE" value="7">國際FedEx</label>
            </div>
         </div>
		 </div>
         </td>
	    </tr>
	    <tr class="">
		<th class="w3-theme-d3">選擇收件地址</th>
		<td>
        <br>
        <label><input type="radio" name="EN_REPORT_RECEIVE" value="0" checked="checked">同上聯絡地址</label><br>
        <label><input type="radio" name="EN_REPORT_RECEIVE" title="直接寄出" value="3">寄至</label>
        <input type="text" class="w3-input w3-border" name="postaddr" id="postaddr" maxlength="200" placeholder="請同時填寫詳細地址與收件人">
	</td>
	<tr>
		<th class="w3-theme-d3">留言<br>(250字內)</th>
		<td>如有其他未盡事宜，請留言於此：
        <textarea style="display:block" name="MESSAGE" rows="3" cols="60"></textarea>
	    </td>
	</tr>
    <br>
</tbody>
</table>
</form>
<br> 
<a href="step2.php" class="btn btn-primary btn-block" style="width:100px;height:50px;">送出</a>
<br>
    </div>
  </div>
  <?php include_once(__DIR__ . '/footer.php');?>
</body>
</html>
