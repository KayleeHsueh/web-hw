<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>選擇申請項目</title>
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
        <h3>步驟：<span class="currStep">1.申請項目</span>→2.確認校友身分→3.確認應備文件→4.付款資訊</h3>
        <br>
        <table class="table table-hover"> 
            <thead> 
                <tr> 
                    <th>#</th> 
                    <th>申請項目（請打勾）</th> 
                    <th>加註選項</th> 
                    <th>數量</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <th scope="row">1</th> 
                    <td>
                    <div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1">中文成績單
                      </label>
                    </div>
                    </td> 
                    <td>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          排名
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          不排名
                        </label>
                      </div>    
                    </td> 
                    <td>
                      <div>
                      <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10(含以上)</option>
                      </select>
                      份
                      </div>  
                      <br>
                      <div>
                      <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10(含以上)</option>
                      </select>
                      份
                      </div>
                    </td>
                </tr> 
                <tr> 
                    <th scope="row">2</th> 
                    <td>
                    <div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2">英文成績單
                      </label>
                    </div>
                    </td>
                    <td>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          排名/彌封
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          排名/不需彌封
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          不排名/彌封
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          不排名/不需彌封
                        </label>
                      </div>    
                    </td> 
                    <td>
                      <div>
                      <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10(含以上)</option>
                      </select>
                      份
                      </div>
                      <br>
                      <div>
                      <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10(含以上)</option>
                      </select>
                      份
                      </div>
                      <br>
                      <div>
                      <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10(含以上)</option>
                      </select>
                      份
                      </div>
                      <br>
                      <div>
                      <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10(含以上)</option>
                      </select>
                      份
                      </div>
                    </td> 
                </tr> 
                <tr> 
                    <th scope="row">3</th> 
                    <td><div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3">中文畢業證書影本蓋印
                      </label>
                    </div></td> 
                    <td>
                      (過去曾向教務處申請過
                      <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10(含以上)</option>
                      </select>
                      份)
                    </td> 
                    <td></td> 
                </tr>
                <tr> 
                    <th scope="row">4</th> 
                    <td><div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox4" value="option4">英文畢業證書
                      </label>
                    </div></td> 
                    <td>

                    </td> 
                    <td></td> 
                </tr>
                 <tr> 
                    <th scope="row">5</th> 
                    <td><div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox5" value="option5">英文畢業證書印本
                      </label>
                    </div></td> 
                    <td>

                    </td> 
                    <td>
                      <br>
                      <div>
                      <select>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10(含以上)</option>
                      </select>
                      份
                      </div>
                    </td> 
                </tr>
                <tr> 
                    <th scope="row">6</th> 
                    <td><div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox6" value="option6">中文(或中英文對照版)畢業證書補發
                      </label>
                    </div></td> 
                    <td>

                    </td> 
                    <td></td> 
                </tr>
                <tr> 
                    <th scope="row">7</th> 
                    <td><div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox7" value="option7">畢業證書更名
                      </label>
                    </div></td> 
                    <td>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          中文
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          英文
                        </label>
                      </div> 
                    </td> 
                    <td></td> 
                </tr>
                <tr> 
                    <th scope="row">8</th> 
                    <td><div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox8" value="option8">校友證
                      </label>
                    </div></td> 
                    <td>
              
                    </td> 
                    <td></td> 
                </tr> 
            </tbody> 
        </table>
          <a href="step2.php" class="btn btn-primary" style="float: right">送出</a>
    </div>
  </div>
  <br><br>
  <?php include_once(__DIR__ . '/footer.php');?>
</body>
</html>