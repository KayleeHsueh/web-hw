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
        <ul id="navigation" class="list-group">
          <li class="list-group-item">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;
              基本資料
            </span>
          </li>
          <li class="list-group-item">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;
              聯絡資訊
            </span>
          </li>
          <li class="list-group-item">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;
              就業發展
            </span>
          </li>
          <li class="list-group-item">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;
              訂閱
            </span>
          </li>
          <li class="list-group-item">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;
              進階欄位
            </span>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-10">   
      <h1>校友資料</h1>
      <p>
        新增資料時，請先確定資料是否已存在(首頁可查詢)。待公共事務室確認無誤後，才能進入真實資料庫。(七個工作天以內處理完畢)
      </p>
      <form class="form" name="per_form">
        <div class="panel panel-default">
          <div class="panel-heading" id="basic">
            基本資料
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="column-1">照片</label>
              <input type="file" class="form-control" id="column-1" placeholder="姓名">
            </div>
            <div class="form-group">
              <label for="column-2">姓名</label>
              <input type="text" class="form-control" id="column-2" placeholder="姓名">
            </div>
            <div class="form-group">
              <label for="column-3">生日</label>
              <input type="date" class="form-control" id="column-3" placeholder="生日">
            </div>
            <div class="form-group">
              <label for="column-4">屆數</label>
              <input type="text" class="form-control" id="column-4" placeholder="屆數">
            </div>
            <div class="form-group">
              <label for="column-4">國籍</label>
              <select name="" id="" class="form-control">
                <option value="中華民國" selected>中華民國</option> <option value="緬甸">緬甸</option> <option value="印度">印度</option> <option value="印尼">印尼</option> <option value="伊朗">伊朗</option> <option value="日本">日本</option> <option value="約旦">約旦</option> <option value="韓國">韓國</option> <option value="馬來西亞">馬來西亞</option> <option value="中國">中國</option> <option value="菲律賓">菲律賓</option> <option value="澳門">澳門</option> <option value="斯里蘭卡">斯里蘭卡</option> <option value="新加坡">新加坡</option> <option value="沙烏地阿拉伯">沙烏地阿拉伯</option> <option value="泰國">泰國</option> <option value="土耳其">土耳其</option> <option value="越南">越南</option> <option value="汶萊">汶萊</option> <option value="敘利亞">敘利亞</option> <option value="巴基斯坦">巴基斯坦</option> <option value="香港">香港</option> <option value="帛琉">帛琉</option> <option value="以色列">以色列</option> <option value="尼泊爾">尼泊爾</option> <option value="高棉">高棉</option> <option value="寮國">寮國</option> <option value="琉球">琉球</option> <option value="帝汶">帝汶</option> <option value="巴西">巴西</option> <option value="加拿大">加拿大</option> <option value="智利">智利</option> <option value="哥斯達黎加">哥斯達黎加</option> <option value="厄瓜多爾">厄瓜多爾</option> <option value="尼加拉瓜">尼加拉瓜</option> <option value="巴拿馬">巴拿馬</option> <option value="巴拉圭">巴拉圭</option> <option value="聖克里斯多福">聖克里斯多福</option> <option value="秘魯">秘魯</option> <option value="瓜地馬拉">瓜地馬拉</option> <option value="薩爾瓦多">薩爾瓦多</option> <option value="墨西哥">墨西哥</option> <option value="美國">美國</option> <option value="多明尼加">多明尼加</option> <option value="海地">海地</option> <option value="阿根廷">阿根廷</option> <option value="玻琍維亞">玻琍維亞</option> <option value="委內瑞拉">委內瑞拉</option> <option value="德國">德國</option> <option value="法國">法國</option> <option value="英國">英國</option> <option value="比利時">比利時</option> <option value="義大利">義大利</option> <option value="芬蘭">芬蘭</option> <option value="奧地利">奧地利</option> <option value="丹麥">丹麥</option> <option value="斯洛伐克">斯洛伐克</option> <option value="荷蘭">荷蘭</option> <option value="瑞士">瑞士</option> <option value="西班牙">西班牙</option> <option value="瑞典">瑞典</option> <option value="愛爾蘭">愛爾蘭</option> <option value="挪威">挪威</option> <option value="羅馬利亞">羅馬利亞</option> <option value="葡萄牙">葡萄牙</option> <option value="波蘭">波蘭</option> <option value="奈及利亞">奈及利亞</option> <option value="模里西斯">模里西斯</option> <option value="莫三鼻給">莫三鼻給</option> <option value="南非">南非</option> <option value="摩洛哥">摩洛哥</option> <option value="千里達">千里達</option> <option value="埃及">埃及</option> <option value="突尼西亞">突尼西亞</option> <option value="利比亞">利比亞</option> <option value="布吉納法索">布吉納法索</option> <option value="馬達加斯加">馬達加斯加</option> <option value="宏都拉斯">宏都拉斯</option> <option value="捷克">捷克</option> <option value="斐濟">斐濟</option> <option value="剛果">剛果</option> <option value="所羅門">所羅門</option> <option value="澳洲">澳洲</option> <option value="紐西蘭">紐西蘭</option> <option value="薩摩西">薩摩西</option> <option value="象牙海岸">象牙海岸</option> <option value="馬拉威">馬拉威</option> <option value="多哥">多哥</option> <option value="史瓦濟蘭">史瓦濟蘭</option> <option value="貝里斯">貝里斯</option> <option value="俄羅斯">俄羅斯</option> <option value="匈牙利">匈牙利</option> <option value="其他">其他</option> </select>
            </div>
            <div class="form-group">
              <label for="column-6">身份證字號</label>
              <input type="text" class="form-control" id="column-6" placeholder="身份證字號">
            </div>
            <div class="form-group">
              <label for="column-6">部別</label>
              <select name="section" class=form-control>
                <option value=D>
                  D-日間部
                <option value=G>
                  G-研究所
                <option value=T>
                  T-二技
                <option value=C>
                  C-進修部(含夜間部)
                <option value=W>
                  W-婦女大學
                </option>
              </select> 
            </div>
            <div class="form-group">
              <label for="column-7">學號</label>
              <input type="text" class="form-control" id="column-7" placeholder="學號">
            </div>
            <div class="form-group">
              <label for="column-8">英文姓名</label>
              <input type="text" class="form-control" id="column-8" placeholder="英文姓名">
            </div>
            <div class="form-group">
              <label for="column-9">性別 </label>
              <label for="male">
                &nbsp;
                <input type="radio" name="gender" id="male" value="male"> 男
              </label>
              <label for="female">
                &nbsp;
                <input type="radio" name="gender" id="female" value="female"> 女
              </label>
            </div>
            <div class="form-group">
              <label for="column-10">入學年/畢業年</label>
              <input type="text" class="form-control" id="column-10" placeholder="102/106">
            </div>
          </div>
          <div class="panel-heading" id="contact">
            聯絡資訊
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="column-11">永久地址</label>
              <input type="text" class="form-control" id="column-11" placeholder="新北市新莊區...">
            </div>
            <div class="form-group">
              <label for="column-10">郵遞地址</label>
              <input type="text" class="form-control" id="column-10" placeholder="同上請留白">
            </div>
            <div class="form-group">
              <label for="column-10">電話</label>
              <input type="text" class="form-control" id="column-10" placeholder="0222228282">
            </div>
            <div class="form-group">
              <label for="column-10">手機</label>
              <input type="text" class="form-control" id="column-10" placeholder="0933373737">
            </div>
            <div class="form-group">
              <label for="column-10">Email</label>
              <input type="email" class="form-control" id="column-10" placeholder="user@fju.edu.tw">
            </div>
            <div class="form-group">
              <label for="column-10">校友狀態</label>
              <select class="form-control" name="">
                <option value="">服役中</option>
                <option value="">準備考試</option>
                <option value="">就學中</option>
                <option value="">待業</option>
                <option value="">工作中</option>
                <option value="">退休</option>
                <option value="">歿</option>
                <option value="">其他</option>
              </select>
            </div>
            
          </div>
          <div class="panel-heading">
            就業發展
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="column-10">公司名稱及部門/學校名稱及系所</label>
              <input type="text" class="form-control" id="column-10" placeholder="公司名稱及部門/學校名稱及系所">
            </div>
            <div class="form-group">
              <label for="column-10">就業類別</label>
              <input type="text" class="form-control" id="column-10" placeholder="就業類別">
            </div>
            <div class="form-group">
              <label for="column-10">行業別</label>
              <input type="text" class="form-control" id="column-10" placeholder="行業別">
            </div>
            <div class="form-group">
              <label for="column-10">公司地址</label>
              <input type="address" class="form-control" id="column-10" placeholder="公司地址">
            </div>
            <div class="form-group">
              <label for="column-10">職稱</label>
              <input type="address" class="form-control" id="column-10" placeholder="董事長">
            </div>
            <div class="form-group">
              <label for="column-10">公司電話</label>
              <input type="tel" class="form-control" id="column-10" placeholder="公司電話">
            </div>
          </div>
          <div class="panel-heading">
            訂閱
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="column-10">是否願意收到輔大寄給您的郵寄刊物？</label>
              <label for="column-14-y">
                <input type="radio" name="column-14" id="column-14-y"> 是
              </label>
              <label for="column-14-n">
                <input type="radio" name="column-14" id="column-14-n"> 否
              </label>
              <span class="badge" data-toggle="tooltip" title="每年校方將寄送輔仁刊物給校友，如：輔大紀事報" >details</span>
            </div>
            <div class="form-group">
              <label for="column-10">是否願意收到輔大寄給您的電子郵件？</label>
              <label for="column-15-y">
                <input type="radio" name="column-15" id="column-15-y"> 是
              </label>
              <label for="column-15-n">
                <input type="radio" name="column-15" id="column-15-n"> 否
              </label>
              <span class="badge" data-toggle="tooltip" title="每個月校方將寄發輔仁大學最新相關消息的電子郵件給校友，如：推廣部課程" >details</span>
            </div>
            <div class="form-group">
              <label for="column-10">是否願意收到輔大寄給您的郵寄刊物？</label>
              <label for="column-16-y">
                <input type="radio" name="column-16" id="column-16-y"> 是
              </label>
              <label for="column-16-n">
                <input type="radio" name="column-16" id="column-16-n"> 否
              </label>
            </div>
            

          </div>
          <div class="panel-heading">
            <a data-toggle="collapse" href="#advance">
              進階欄位+(點此填寫)
            </a>
          </div>
          <div class="panel-body collapse" id="advance">
            <?php 
              $columns = [
                '血型',
                '輔系',
                '雙主修',
                '參與學程',
                '休閒嗜好',
                '系友活動喜好',
                '婚姻狀況',
                '子女數',
                '配偶姓名',
                '配偶畢業學校',
                '傑出事蹟',
                '參與的系(所)友會',
                '宗教信仰',
                '永久電話2',
                '同屆聯絡人',
                '緊急聯絡人',
                'Skype帳號',
                '是否有與校方聯絡',
                '是否有意願進修',
                '檔案異動日期',
                '通訊電話最終異動日期',
                '個人專長',
                '工作性質',
              ];
             ?>
            <?php foreach ($columns as $column): ?>
            <div class="form-group">
              <label for="column-10"><?php echo $column; ?></label>
              <input type="tel" class="form-control" id="column-10" placeholder="<?php echo $column; ?>">
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        
      </form>
      <br> 
      <a href="step2.php" class="btn btn-primary">送出</a>
      <br>
      <br>
    </div>
  </div>
  <?php include_once(__DIR__ . '/footer.php');?>
  <script type="text/javascript">
  $('html').scrollspy({
    target: '#navigation'
  });
  $('[data-toggle="tooltip"]').tooltip();
  </script>
</body>
</html>
