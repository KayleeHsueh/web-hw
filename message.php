<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>聯絡我們</title>
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
        </div>
      <div class="col-md-10">
      <h3>為了網站符合您的需求，誠摯希望您寫下對我們的建議 </h3>      
    <form name="per_form">
    <table id="table_body" class="myTable w3-table w3-table-all">
	<tbody>
    <tr>
		<th class="w3-theme-d3">問題類型</th>
        <td>
            &nbsp;<label class="rLabel"><input checked="" type="radio" name="Receiver" value="1">進度查詢</label>
            &nbsp;<label class="rLabel"><input type="radio" name="Receiver" value="2">繳費問題</label>
            &nbsp;<label class="rLabel"><input type="radio" name="Receiver" value="3">其他疑問</label>
        </td>
	</tr>
    <tr>
		<th class="w3-theme-d3">姓名</th>
        &nbsp;<td><input type="text" name="user_name" id="user_name" size="20" maxlength="10" placeholder="請輸入真實姓名"></td>
	</tr>
    <tr>
		<th class="w3-theme-d3">連絡電話</th>
        &nbsp;<td><input type="tel" name="title" id="title" size="20" maxlength="10" ></td>
	</tr>
    <tr>
		<th class="w3-theme-d3">Email</th>
        &nbsp;<td><input type="email" name="title" id="title" size="20" maxlength="10" ></td>
	</tr>
	<tr>
		<th class="w3-theme-d3">詢問主旨</th>
        &nbsp;<td><input type="text" name="title" id="title" size="20" maxlength="10" placeholder="請輸入簡易主旨"></td>
	</tr>
	<tr>
		<th class="w3-theme-d3">內容</th>
        <td>
            <textarea class="ckeditor" id="MessageBody" name="MessageBody" cols="40" rows="5"></textarea>
        </td>
	</tr>
    <br>
</tbody>
</table>
</form>
<br> 
<a href="#" class="btn btn-primary btn-block" style="width:100px;height:50px;">送出</a>
<br>
    </div>
  </div>
  <?php include_once(__DIR__ . '/footer.php');?>
</body>
</html>