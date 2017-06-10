<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>校友統計數據</title>
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

body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: hsla(197, 75%, 52%, 0.56);
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>
<?php include_once(__DIR__ . '/nav.php');?>
<div class="row">
<div class="col-md-1 padding"></div>
<div class="col-md-8">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'search6')" id="defaultOpen">校友狀態統計</button>
  <button class="tablinks" onclick="openCity(event, 'search7')">就業類別統計</button>
  <button class="tablinks" onclick="openCity(event, 'search8')">畢業生修改率</button>
</div>

<div id="search6" class="tabcontent">
  <h3>校友狀態 統計數據</h3>
  <form name="per_form">
    <table id="table_body" class="myTable w3-table w3-table-all">
	<tbody>
    <tr>
		<th class="w3-theme-d3">查詢系所</th>
        <td>
           &nbsp;<select name="department">
                <option value="%">所有系所</option><option value="文學院">文學院</option><option value="外語學院">外語學院</option><option value="民生學院">民生學院</option><option value="法律學院">法律學院</option><option value="社會科學學院">社會科學學院</option><option value="教育學院">教育學院</option><option value="理工學院">理工學院</option><option value="進修部">進修部</option><option value="管理學院">管理學院</option><option value="醫學院">醫學院</option><option value="藝術學院">藝術學院</option><option value="01">01-中國文學系</option><option value="016">016-中國文學系碩士班</option><option value="018">018-中國文學系博士班</option><option value="02">02-歷史學系</option><option value="026">026-歷史學系碩士班</option><option value="028">028-歷史學系博士班</option><option value="03">03-哲學系</option><option value="035">035-哲學系碩士在職專班</option><option value="036">036-哲學系碩士班</option><option value="038">038-哲學系博士班</option><option value="04">04-圖書館學系</option><option value="05">05-大眾傳播學系新聞組</option><option value="06">06-大眾傳播學系廣播電視組</option><option value="07">07-大眾傳播學系廣告組</option><option value="08">08-體育學系</option><option value="085">085-體育學系碩士在職專班</option><option value="086">086-體育學系碩士班</option><option value="09">09-大眾傳播學系</option><option value="095">095-大眾傳播學研究所碩士在職專班</option><option value="096">096-大眾傳播學研究所碩士班</option><option value="098">098-大眾傳播學研究所博士班</option><option value="0A6">0A6-跨文化研究所語言學碩士班</option><option value="0B5">0B5-跨文化研究所翻譯學碩士在職專班</option><option value="0B6">0B6-跨文化研究所翻譯學碩士班</option><option value="0C8">0C8-跨文化研究所比較文學博士班</option><option value="0D8">0D8-食品營養博士學位學程</option><option value="0E">0E-企業管理學系</option><option value="0E">0E-企業管理學系</option><option value="0E5">0E5-企業管理學系管理學碩士在職專班</option><option value="0E6">0E6-企業管理學系管理學碩士班</option><option value="0F">0F-金融與國際企業學系</option><option value="0F">0F-金融與國際企業學系</option><option value="0F5">0F5-金融與國際企業學系金融碩士在職專班</option><option value="0F6">0F6-金融與國際企業學系金融碩士班</option><option value="0G">0G-大眾傳播學士學位學程</option><option value="0H">0H-運動休閒管理學士學位學程</option><option value="0I">0I-商業管理學士學位學程</option><option value="0J">0J-藝術與文化創意學士學位學程</option><option value="0M5">0M5-非營利組織管理碩士學位學程在職專班</option><option value="0N6">0N6-國際經營管理碩士學位學程</option><option value="0R6">0R6-品牌與時尚經營管理碩士學位學程</option><option value="0S5">0S5-跨專業長期照護碩士學位學程在職專班</option><option value="10">10-圖書資訊學系</option><option value="106">106-圖書資訊學系碩士班</option><option value="11">11-影像傳播學系</option><option value="12">12-新聞傳播學系</option><option value="13">13-廣告傳播學系 </option><option value="145">145-教育領導與發展研究所碩士在職專班</option><option value="146">146-教育領導與發展研究所碩士班</option><option value="156">156-博物館學研究所碩士班 </option><option value="16">16-體育學系體育學組</option><option value="17">17-體育學系運動競技組</option><option value="18">18-體育學系運動健康管理組</option><option value="19">19-電機工程學系系統與晶片設計組</option><option value="20">20-英國語文學系</option><option value="206">206-英國語文學系碩士班</option><option value="208">208-英國語文學研究所博士班</option><option value="21">21-德國語文學系</option><option value="216">216-德國語文學系碩士班</option><option value="218">218-德國語文學研究所博士班</option><option value="22">22-法國語文學系 </option><option value="226">226-法國語文學系碩士班</option><option value="228">228-法國語文學研究所博士班</option><option value="23">23-西班牙語文學系</option><option value="236">236-西班牙語文學系碩士班</option><option value="238">238-西班牙語文學研究所博士班</option><option value="24">24-日本語文學系</option><option value="246">246-日本語文學系碩士班</option><option value="24B">24B-東方語文學系</option><option value="25">25-義大利語文學系</option><option value="26">26-德語語文學系</option><option value="266">266-德語語文學系碩士班</option><option value="278">278-比較文學研究所博士班</option><option value="286">286-語言學研究所碩士班</option><option value="288">288-語言學研究所博士班</option><option value="295">295-翻譯學研究所碩士在職專班</option><option value="296">296-翻譯學研究所碩士班</option><option value="298">298-翻譯學研究所博士班</option><option value="30">30-數學系純數學組</option><option value="31">31-數學系應用數學組</option><option value="32">32-物理學系</option><option value="326">326-物理學系碩士班</option><option value="328">328-物理學研究所博士班</option><option value="33">33-化學系</option><option value="336">336-化學系碩士班</option><option value="338">338-化學系博士班</option><option value="34">34-生物學系</option><option value="346">346-生物學系碩士班</option><option value="348">348-生物學研究所博士班</option><option value="35">35-應用心理學系</option><option value="356">356-應用心理學系碩士班</option><option value="358">358-應用心理學系博士班</option><option value="35B">35B-教育心理學系</option><option value="36">36-數學系</option><option value="366">366-數學系碩士班</option><option value="368">368-數學研究所博士班</option><option value="37">37-生活應用科學系餐飲管理組</option><option value="38">38-生活應用科學系兒童與家庭組</option><option value="39">39-心理學系</option><option value="395">395-心理學系碩士在職專班</option><option value="396">396-心理學系碩士班</option><option value="398">398-心理學系博士班</option><option value="40">40-生活應用科學系</option><option value="406">406-生活應用科學系碩士班</option><option value="41">41-食品營養學系食品科學組</option><option value="42">42-食品營養學系營養組</option><option value="43">43-織品服裝學系</option><option value="435">435-織品服裝學系碩士在職專班</option><option value="436">436-織品服裝學系碩士班</option><option value="438">438-織品服裝研究所博士班</option><option value="44">44-食品營養學系</option><option value="445">445-食品營養學系碩士在職專班</option><option value="446">446-食品營養學系碩士班</option><option value="448">448-食品營養學系博士班</option><option value="45">45-家政學系</option><option value="45B">45B-家政營養系 </option><option value="45T">45T-二年制流行設計經營系飾品設計組</option><option value="46">46-織品服裝學系織品設計組</option><option value="47">47-織品服裝學系服裝設計組</option><option value="48">48-織品服裝學系服飾行銷組</option><option value="49">49-二年制流行設計經營系零售經營組</option><option value="50">50-電子工程學系</option><option value="505">505-電子工程學系碩士在職專班</option><option value="506">506-電子工程學系碩士班</option><option value="51">51-資訊工程學系</option><option value="515">515-資訊工程學系碩士在職專班</option><option value="516">516-資訊工程學系碩士班</option><option value="525">525-織品服裝學系碩士在職設計文化組</option><option value="535">535-織品服裝學系碩士在職經營消費組</option><option value="54">54-生命科學系</option><option value="546">546-生命科學系碩士班</option><option value="55">55-物理學系物理組</option><option value="56">56-物理學系光電物理組</option><option value="57">57-餐旅管理學系</option><option value="575">575-餐旅管理學系碩士在職專班</option><option value="576">576-餐旅管理學系碩士班</option><option value="58">58-兒童與家庭學系</option><option value="585">585-兒童與家庭學系碩士在職專班</option><option value="586">586-兒童與家庭學系碩士班</option><option value="598">598-應用科學與工程研究所博士班</option><option value="60">60-法律學系法學組</option><option value="61">61-法律學系司法組</option><option value="62">62-法律學系財經法學組</option><option value="63">63-社會學系</option><option value="636">636-社會學系碩士班</option><option value="63B">63B-社會學系社會學組</option><option value="64">64-社會工作學系</option><option value="646">646-社會工作學系碩士班</option><option value="64B">64B-社會學系社會工作組 </option><option value="65">65-經濟學系</option><option value="656">656-經濟學系碩士班</option><option value="658">658-經濟學研究所博士班</option><option value="66">66-法律學系</option><option value="665">665-法律學系碩士在職專班</option><option value="666">666-法律學系碩士班</option><option value="668">668-法律學系博士班</option><option value="67">67-財經法律學系</option><option value="676">676-財經法律學系碩士班</option><option value="678">678-法律學公法研究所博士班</option><option value="68">68-學士後法律學系</option><option value="686">686-法律學民法研究所碩士班</option><option value="688">688-法律學民法研究所博士班</option><option value="69">69-織品服裝學系服飾設計組</option><option value="70">70-企業管理學系</option><option value="705">705-管理學研究所碩士在職專班</option><option value="706">706-管理學研究所碩士班</option><option value="708">708-管理學研究所博士班</option><option value="70B">70B-工商管理學系</option><option value="71">71-會計學系</option><option value="715">715-會計學系碩士在職專班</option><option value="716">716-會計學系碩士班</option><option value="71B">71B-會統系會計組</option><option value="72">72-統計資訊學系(統計系)</option><option value="725">725-應用統計研究所碩士在職專班</option><option value="726">726-應用統計研究所碩士班</option><option value="72B">72B-會計統計學系</option><option value="73">73-國際貿易學系</option><option value="74">74-資訊管理學系</option><option value="745">745-資訊管理學系碩士在職專班</option><option value="746">746-資訊管理學系碩士班</option><option value="75">75-國際貿易與金融學系</option><option value="755">755-金融研究所碩士在職專班</option><option value="756">756-金融研究所碩士班</option><option value="758">758-金融研究所博士班</option><option value="76">76-統計資訊學系</option><option value="765">765-統計資訊學系應用統計碩士在職專班</option><option value="766">766-統計資訊學系應用統計碩士班</option><option value="778">778-商學研究所博士班</option><option value="785">785-管理學院科技管理學程碩士在職專班</option><option value="795">795-國際創業與經營管理學程碩士在職專班</option><option value="80">80-音樂學系</option><option value="805">805-音樂學系碩士在職專班</option><option value="806">806-音樂學系碩士班</option><option value="808">808-音樂學系博士班</option><option value="81">81-應用美術學系</option><option value="816">816-應用美術學系碩士班</option><option value="82">82-景觀設計學系</option><option value="826">826-景觀設計學系碩士班</option><option value="838">838-音樂學系博士班音樂學組</option><option value="848">848-音樂學系博士班演奏組</option><option value="85">85-食品科學系</option><option value="855">855-食品科學系碩士在職專班</option><option value="856">856-食品科學系碩士班</option><option value="86">86-營養科學系</option><option value="865">865-營養科學系碩士在職專班</option><option value="866">866-營養科學系碩士班</option><option value="87">87-食品營養學研究所</option><option value="878">878-食品營養學研究所博士班</option><option value="886">886-經營管理碩士學程</option><option value="89">89-電機工程學系</option><option value="895">895-電機工程學系碩士在職專班</option><option value="896">896-電機工程學系碩士班</option><option value="90">90-宗教學系</option><option value="905">905-宗教學系碩士在職專班</option><option value="906">906-宗教學系碩士班</option><option value="908">908-宗教學系博士班</option><option value="91">91-護理學系 </option><option value="915">915-護理學系二年制在職專班</option><option value="916">916-護理學系碩士班</option><option value="91T">91T-二年制護理學系</option><option value="92">92-公共衛生學系</option><option value="926">926-公共衛生學系碩士班</option><option value="93">93-臨床心理學系(心理復健學系)</option><option value="936">936-心理復健學系碩士班</option><option value="94">94-醫學系</option><option value="95">95-臨床心理學系</option><option value="956">956-臨床心理學系碩士班</option><option value="96">96-職能治療學系</option><option value="976">976-基礎醫學所</option><option value="98">98-呼吸治療學系</option><option value="99">99-電機工程學系電腦與通訊工程組</option><option value="FG">FG-外語學院學程</option>
                </select>
        </td>
	</tr>
    <tr>
		<th class="w3-theme-d3">部別</th>
        <td>&nbsp;<select name="section">
                <option value="all">不拘<option value=D>D-日間部<option value=G>G-研究所<option value=T>T-二技<option value=C>C-進修部(含夜間部)<option value=W>W-婦女大學
                </select></td>
	</tr>
    <tr>
		<th class="w3-theme-d3">畢業年</th>
        <td>&nbsp;<input class=text1 type=text name=Gadyear value="" size=3 maxlength=3>~
	            <input class=text1 type=text name=Gadyear2 value="" size=3 maxlength=3></td>
	</tr>
    <br>
</tbody>
</table><br>
<a href="#" class="btn btn-primary btn-block button" style="width:100px;height:40px;" margin-left="5px;">查詢</a>
</form>
</div>

<div id="search7" class="tabcontent">
  <h3>就業類別 統計數據</h3>
  <form name="per_form">
    <table id="table_body" class="myTable w3-table w3-table-all">
	<tbody>
    <tr>
		<th class="w3-theme-d3">查詢系所</th>
        <td>
           &nbsp;<select name="department">
                <option value="%">所有系所</option><option value="文學院">文學院</option><option value="外語學院">外語學院</option><option value="民生學院">民生學院</option><option value="法律學院">法律學院</option><option value="社會科學學院">社會科學學院</option><option value="教育學院">教育學院</option><option value="理工學院">理工學院</option><option value="進修部">進修部</option><option value="管理學院">管理學院</option><option value="醫學院">醫學院</option><option value="藝術學院">藝術學院</option><option value="01">01-中國文學系</option><option value="016">016-中國文學系碩士班</option><option value="018">018-中國文學系博士班</option><option value="02">02-歷史學系</option><option value="026">026-歷史學系碩士班</option><option value="028">028-歷史學系博士班</option><option value="03">03-哲學系</option><option value="035">035-哲學系碩士在職專班</option><option value="036">036-哲學系碩士班</option><option value="038">038-哲學系博士班</option><option value="04">04-圖書館學系</option><option value="05">05-大眾傳播學系新聞組</option><option value="06">06-大眾傳播學系廣播電視組</option><option value="07">07-大眾傳播學系廣告組</option><option value="08">08-體育學系</option><option value="085">085-體育學系碩士在職專班</option><option value="086">086-體育學系碩士班</option><option value="09">09-大眾傳播學系</option><option value="095">095-大眾傳播學研究所碩士在職專班</option><option value="096">096-大眾傳播學研究所碩士班</option><option value="098">098-大眾傳播學研究所博士班</option><option value="0A6">0A6-跨文化研究所語言學碩士班</option><option value="0B5">0B5-跨文化研究所翻譯學碩士在職專班</option><option value="0B6">0B6-跨文化研究所翻譯學碩士班</option><option value="0C8">0C8-跨文化研究所比較文學博士班</option><option value="0D8">0D8-食品營養博士學位學程</option><option value="0E">0E-企業管理學系</option><option value="0E">0E-企業管理學系</option><option value="0E5">0E5-企業管理學系管理學碩士在職專班</option><option value="0E6">0E6-企業管理學系管理學碩士班</option><option value="0F">0F-金融與國際企業學系</option><option value="0F">0F-金融與國際企業學系</option><option value="0F5">0F5-金融與國際企業學系金融碩士在職專班</option><option value="0F6">0F6-金融與國際企業學系金融碩士班</option><option value="0G">0G-大眾傳播學士學位學程</option><option value="0H">0H-運動休閒管理學士學位學程</option><option value="0I">0I-商業管理學士學位學程</option><option value="0J">0J-藝術與文化創意學士學位學程</option><option value="0M5">0M5-非營利組織管理碩士學位學程在職專班</option><option value="0N6">0N6-國際經營管理碩士學位學程</option><option value="0R6">0R6-品牌與時尚經營管理碩士學位學程</option><option value="0S5">0S5-跨專業長期照護碩士學位學程在職專班</option><option value="10">10-圖書資訊學系</option><option value="106">106-圖書資訊學系碩士班</option><option value="11">11-影像傳播學系</option><option value="12">12-新聞傳播學系</option><option value="13">13-廣告傳播學系 </option><option value="145">145-教育領導與發展研究所碩士在職專班</option><option value="146">146-教育領導與發展研究所碩士班</option><option value="156">156-博物館學研究所碩士班 </option><option value="16">16-體育學系體育學組</option><option value="17">17-體育學系運動競技組</option><option value="18">18-體育學系運動健康管理組</option><option value="19">19-電機工程學系系統與晶片設計組</option><option value="20">20-英國語文學系</option><option value="206">206-英國語文學系碩士班</option><option value="208">208-英國語文學研究所博士班</option><option value="21">21-德國語文學系</option><option value="216">216-德國語文學系碩士班</option><option value="218">218-德國語文學研究所博士班</option><option value="22">22-法國語文學系 </option><option value="226">226-法國語文學系碩士班</option><option value="228">228-法國語文學研究所博士班</option><option value="23">23-西班牙語文學系</option><option value="236">236-西班牙語文學系碩士班</option><option value="238">238-西班牙語文學研究所博士班</option><option value="24">24-日本語文學系</option><option value="246">246-日本語文學系碩士班</option><option value="24B">24B-東方語文學系</option><option value="25">25-義大利語文學系</option><option value="26">26-德語語文學系</option><option value="266">266-德語語文學系碩士班</option><option value="278">278-比較文學研究所博士班</option><option value="286">286-語言學研究所碩士班</option><option value="288">288-語言學研究所博士班</option><option value="295">295-翻譯學研究所碩士在職專班</option><option value="296">296-翻譯學研究所碩士班</option><option value="298">298-翻譯學研究所博士班</option><option value="30">30-數學系純數學組</option><option value="31">31-數學系應用數學組</option><option value="32">32-物理學系</option><option value="326">326-物理學系碩士班</option><option value="328">328-物理學研究所博士班</option><option value="33">33-化學系</option><option value="336">336-化學系碩士班</option><option value="338">338-化學系博士班</option><option value="34">34-生物學系</option><option value="346">346-生物學系碩士班</option><option value="348">348-生物學研究所博士班</option><option value="35">35-應用心理學系</option><option value="356">356-應用心理學系碩士班</option><option value="358">358-應用心理學系博士班</option><option value="35B">35B-教育心理學系</option><option value="36">36-數學系</option><option value="366">366-數學系碩士班</option><option value="368">368-數學研究所博士班</option><option value="37">37-生活應用科學系餐飲管理組</option><option value="38">38-生活應用科學系兒童與家庭組</option><option value="39">39-心理學系</option><option value="395">395-心理學系碩士在職專班</option><option value="396">396-心理學系碩士班</option><option value="398">398-心理學系博士班</option><option value="40">40-生活應用科學系</option><option value="406">406-生活應用科學系碩士班</option><option value="41">41-食品營養學系食品科學組</option><option value="42">42-食品營養學系營養組</option><option value="43">43-織品服裝學系</option><option value="435">435-織品服裝學系碩士在職專班</option><option value="436">436-織品服裝學系碩士班</option><option value="438">438-織品服裝研究所博士班</option><option value="44">44-食品營養學系</option><option value="445">445-食品營養學系碩士在職專班</option><option value="446">446-食品營養學系碩士班</option><option value="448">448-食品營養學系博士班</option><option value="45">45-家政學系</option><option value="45B">45B-家政營養系 </option><option value="45T">45T-二年制流行設計經營系飾品設計組</option><option value="46">46-織品服裝學系織品設計組</option><option value="47">47-織品服裝學系服裝設計組</option><option value="48">48-織品服裝學系服飾行銷組</option><option value="49">49-二年制流行設計經營系零售經營組</option><option value="50">50-電子工程學系</option><option value="505">505-電子工程學系碩士在職專班</option><option value="506">506-電子工程學系碩士班</option><option value="51">51-資訊工程學系</option><option value="515">515-資訊工程學系碩士在職專班</option><option value="516">516-資訊工程學系碩士班</option><option value="525">525-織品服裝學系碩士在職設計文化組</option><option value="535">535-織品服裝學系碩士在職經營消費組</option><option value="54">54-生命科學系</option><option value="546">546-生命科學系碩士班</option><option value="55">55-物理學系物理組</option><option value="56">56-物理學系光電物理組</option><option value="57">57-餐旅管理學系</option><option value="575">575-餐旅管理學系碩士在職專班</option><option value="576">576-餐旅管理學系碩士班</option><option value="58">58-兒童與家庭學系</option><option value="585">585-兒童與家庭學系碩士在職專班</option><option value="586">586-兒童與家庭學系碩士班</option><option value="598">598-應用科學與工程研究所博士班</option><option value="60">60-法律學系法學組</option><option value="61">61-法律學系司法組</option><option value="62">62-法律學系財經法學組</option><option value="63">63-社會學系</option><option value="636">636-社會學系碩士班</option><option value="63B">63B-社會學系社會學組</option><option value="64">64-社會工作學系</option><option value="646">646-社會工作學系碩士班</option><option value="64B">64B-社會學系社會工作組 </option><option value="65">65-經濟學系</option><option value="656">656-經濟學系碩士班</option><option value="658">658-經濟學研究所博士班</option><option value="66">66-法律學系</option><option value="665">665-法律學系碩士在職專班</option><option value="666">666-法律學系碩士班</option><option value="668">668-法律學系博士班</option><option value="67">67-財經法律學系</option><option value="676">676-財經法律學系碩士班</option><option value="678">678-法律學公法研究所博士班</option><option value="68">68-學士後法律學系</option><option value="686">686-法律學民法研究所碩士班</option><option value="688">688-法律學民法研究所博士班</option><option value="69">69-織品服裝學系服飾設計組</option><option value="70">70-企業管理學系</option><option value="705">705-管理學研究所碩士在職專班</option><option value="706">706-管理學研究所碩士班</option><option value="708">708-管理學研究所博士班</option><option value="70B">70B-工商管理學系</option><option value="71">71-會計學系</option><option value="715">715-會計學系碩士在職專班</option><option value="716">716-會計學系碩士班</option><option value="71B">71B-會統系會計組</option><option value="72">72-統計資訊學系(統計系)</option><option value="725">725-應用統計研究所碩士在職專班</option><option value="726">726-應用統計研究所碩士班</option><option value="72B">72B-會計統計學系</option><option value="73">73-國際貿易學系</option><option value="74">74-資訊管理學系</option><option value="745">745-資訊管理學系碩士在職專班</option><option value="746">746-資訊管理學系碩士班</option><option value="75">75-國際貿易與金融學系</option><option value="755">755-金融研究所碩士在職專班</option><option value="756">756-金融研究所碩士班</option><option value="758">758-金融研究所博士班</option><option value="76">76-統計資訊學系</option><option value="765">765-統計資訊學系應用統計碩士在職專班</option><option value="766">766-統計資訊學系應用統計碩士班</option><option value="778">778-商學研究所博士班</option><option value="785">785-管理學院科技管理學程碩士在職專班</option><option value="795">795-國際創業與經營管理學程碩士在職專班</option><option value="80">80-音樂學系</option><option value="805">805-音樂學系碩士在職專班</option><option value="806">806-音樂學系碩士班</option><option value="808">808-音樂學系博士班</option><option value="81">81-應用美術學系</option><option value="816">816-應用美術學系碩士班</option><option value="82">82-景觀設計學系</option><option value="826">826-景觀設計學系碩士班</option><option value="838">838-音樂學系博士班音樂學組</option><option value="848">848-音樂學系博士班演奏組</option><option value="85">85-食品科學系</option><option value="855">855-食品科學系碩士在職專班</option><option value="856">856-食品科學系碩士班</option><option value="86">86-營養科學系</option><option value="865">865-營養科學系碩士在職專班</option><option value="866">866-營養科學系碩士班</option><option value="87">87-食品營養學研究所</option><option value="878">878-食品營養學研究所博士班</option><option value="886">886-經營管理碩士學程</option><option value="89">89-電機工程學系</option><option value="895">895-電機工程學系碩士在職專班</option><option value="896">896-電機工程學系碩士班</option><option value="90">90-宗教學系</option><option value="905">905-宗教學系碩士在職專班</option><option value="906">906-宗教學系碩士班</option><option value="908">908-宗教學系博士班</option><option value="91">91-護理學系 </option><option value="915">915-護理學系二年制在職專班</option><option value="916">916-護理學系碩士班</option><option value="91T">91T-二年制護理學系</option><option value="92">92-公共衛生學系</option><option value="926">926-公共衛生學系碩士班</option><option value="93">93-臨床心理學系(心理復健學系)</option><option value="936">936-心理復健學系碩士班</option><option value="94">94-醫學系</option><option value="95">95-臨床心理學系</option><option value="956">956-臨床心理學系碩士班</option><option value="96">96-職能治療學系</option><option value="976">976-基礎醫學所</option><option value="98">98-呼吸治療學系</option><option value="99">99-電機工程學系電腦與通訊工程組</option><option value="FG">FG-外語學院學程</option>
                </select>
        </td>
	</tr>
    <tr>
		<th class="w3-theme-d3">部別</th>
        <td>&nbsp;<select name="section">
                <option value="all">不拘<option value=D>D-日間部<option value=G>G-研究所<option value=T>T-二技<option value=C>C-進修部(含夜間部)<option value=W>W-婦女大學
                </select></td>
	</tr>
    <tr>
		<th class="w3-theme-d3">畢業年</th>
        <td>&nbsp;<input class=text1 type=text name=Gadyear value="" size=3 maxlength=3>~
	            <input class=text1 type=text name=Gadyear2 value="" size=3 maxlength=3></td>
	</tr>
    <br>
</tbody>
</table><br>
<a href="#" class="btn btn-primary btn-block button" style="width:100px;height:40px;" margin-left="5px;">查詢</a>
</form>
</div>

<div id="search8" class="tabcontent">
  <h3>各系所 93~97年畢業校友修改比率(%)</h3>
  <form name="per_form">
    <table id="table_body" class="myTable w3-table w3-table-all">
	<tbody>
    <tr>
		<th class="w3-theme-d3">系所</th>
        <td>
           &nbsp;<select name="dep">
    
		 <option value=""></option>
		
		 <option value="生物學系碩士班-研究所">生物學系碩士班-研究所</option>
		
		 <option value="應用心理學系-日間部">應用心理學系-日間部</option>
		
		 <option value="中國文學系-進修部">中國文學系-進修部</option>
		
		 <option value="中國文學系-日間部">中國文學系-日間部</option>
		
		 <option value="中國文學系碩士班-研究所">中國文學系碩士班-研究所</option>
		
		 <option value="中國文學系博士班-研究所">中國文學系博士班-研究所</option>
		
		 <option value="歷史學系-進修部">歷史學系-進修部</option>
		
		 <option value="歷史學系-日間部">歷史學系-日間部</option>
		
		 <option value="歷史學系碩士班-研究所">歷史學系碩士班-研究所</option>
		
		 <option value="哲學系-進修部">哲學系-進修部</option>
		
		 <option value="哲學系-日間部">哲學系-日間部</option>
		
		 <option value="哲學系碩士班-研究所">哲學系碩士班-研究所</option>
		
		 <option value="哲學系博士班-研究所">哲學系博士班-研究所</option>
		
		 <option value="體育學系-日間部">體育學系-日間部</option>
		
		 <option value="體育學系碩士在職專班-研究所">體育學系碩士在職專班-研究所</option>
		
		 <option value="體育學系碩士班-研究所">體育學系碩士班-研究所</option>
		
		 <option value="大眾傳播學系-進修部">大眾傳播學系-進修部</option>
		
		 <option value="大眾傳播學研究所碩士班-研究所">大眾傳播學研究所碩士班-研究所</option>
		
		 <option value="圖書資訊學系-進修部">圖書資訊學系-進修部</option>
		
		 <option value="圖書資訊學系-日間部">圖書資訊學系-日間部</option>
		
		 <option value="圖書資訊學系碩士班-研究所">圖書資訊學系碩士班-研究所</option>
		
		 <option value="影像傳播學系-日間部">影像傳播學系-日間部</option>
		
		 <option value="新聞傳播學系-日間部">新聞傳播學系-日間部</option>
		
		 <option value="廣告傳播學系-日間部">廣告傳播學系-日間部</option>
		
		 <option value="教育領導與發展研究所碩士在職專班-研究所">教育領導與發展研究所碩士在職專班-研究所</option>
		
		 <option value="教育領導與發展研究所碩士班-研究所">教育領導與發展研究所碩士班-研究所</option>
		
		 <option value="博物館學研究所碩士班-研究所">博物館學研究所碩士班-研究所</option>
		
		 <option value="體育學系體育學組-日間部">體育學系體育學組-日間部</option>
		
		 <option value="體育學系運動競技組-日間部">體育學系運動競技組-日間部</option>
		
		 <option value="體育學系運動健康管理組-日間部">體育學系運動健康管理組-日間部</option>
		
		 <option value="英國語文學系-進修部">英國語文學系-進修部</option>
		
		 <option value="英國語文學系-日間部">英國語文學系-日間部</option>
		
		 <option value="英國語文學系碩士班-研究所">英國語文學系碩士班-研究所</option>
		
		 <option value="德國語文學系-日間部">德國語文學系-日間部</option>
		
		 <option value="德國語文學系碩士班-研究所">德國語文學系碩士班-研究所</option>
		
		 <option value="法國語文學系-日間部">法國語文學系-日間部</option>
		
		 <option value="法國語文學系碩士班-研究所">法國語文學系碩士班-研究所</option>
		
		 <option value="西班牙語文學系-日間部">西班牙語文學系-日間部</option>
		
		 <option value="西班牙語文學系碩士班-研究所">西班牙語文學系碩士班-研究所</option>
		
		 <option value="日本語文學系-進修部">日本語文學系-進修部</option>
		
		 <option value="日本語文學系-日間部">日本語文學系-日間部</option>
		
		 <option value="日本語文學系碩士班-研究所">日本語文學系碩士班-研究所</option>
		
		 <option value="義大利語文學系-日間部">義大利語文學系-日間部</option>
		
		 <option value="比較文學研究所博士班-研究所">比較文學研究所博士班-研究所</option>
		
		 <option value="語言學研究所碩士班-研究所">語言學研究所碩士班-研究所</option>
		
		 <option value="翻譯學研究所碩士在職專班-研究所">翻譯學研究所碩士在職專班-研究所</option>
		
		 <option value="翻譯學研究所碩士班-研究所">翻譯學研究所碩士班-研究所</option>
		
		 <option value="數學系純數學組-日間部">數學系純數學組-日間部</option>
		
		 <option value="數學系應用數學組-日間部">數學系應用數學組-日間部</option>
		
		 <option value="物理學系-日間部">物理學系-日間部</option>
		
		 <option value="物理學系碩士班-研究所">物理學系碩士班-研究所</option>
		
		 <option value="化學系-日間部">化學系-日間部</option>
		
		 <option value="化學系-研究所">化學系-研究所</option>
		
		 <option value="化學系碩士班-研究所">化學系碩士班-研究所</option>
		
		 <option value="應用心理學系碩士班-研究所">應用心理學系碩士班-研究所</option>
		
		 <option value="數學系-進修部">數學系-進修部</option>
		
		 <option value="數學系碩士班-研究所">數學系碩士班-研究所</option>
		
		 <option value="生活應用科學系餐飲管理組-日間部">生活應用科學系餐飲管理組-日間部</option>
		
		 <option value="生活應用科學系兒童與家庭組-日間部">生活應用科學系兒童與家庭組-日間部</option>
		
		 <option value="心理學系-日間部">心理學系-日間部</option>
		
		 <option value="心理學系碩士在職專班-研究所">心理學系碩士在職專班-研究所</option>
		
		 <option value="心理學系碩士班-研究所">心理學系碩士班-研究所</option>
		
		 <option value="心理學系博士班-研究所">心理學系博士班-研究所</option>
		
		 <option value="食品營養學系食品科學組-日間部">食品營養學系食品科學組-日間部</option>
		
		 <option value="食品營養學系食品科學組-研究所">食品營養學系食品科學組-研究所</option>
		
		 <option value="食品營養學系營養組-日間部">食品營養學系營養組-日間部</option>
		
		 <option value="食品營養學系營養組-研究所">食品營養學系營養組-研究所</option>
		
		 <option value="織品服裝學系碩士在職專班-研究所">織品服裝學系碩士在職專班-研究所</option>
		
		 <option value="織品服裝學系碩士班-研究所">織品服裝學系碩士班-研究所</option>
		
		 <option value="食品營養學系-日間部">食品營養學系-日間部</option>
		
		 <option value="食品營養學系碩士在職專班-研究所">食品營養學系碩士在職專班-研究所</option>
		
		 <option value="食品營養學系碩士班-研究所">食品營養學系碩士班-研究所</option>
		
		 <option value="食品營養學系博士班-研究所">食品營養學系博士班-研究所</option>
		
		 <option value="家政學系-二技制">家政學系-二技制</option>
		
		 <option value="二年制流行設計經營系飾品設計組-二技制">二年制流行設計經營系飾品設計組-二技制</option>
		
		 <option value="織品服裝學系織品設計組-日間部">織品服裝學系織品設計組-日間部</option>
		
		 <option value="織品服裝學系服裝設計組-日間部">織品服裝學系服裝設計組-日間部</option>
		
		 <option value="織品服裝學系服飾行銷組-日間部">織品服裝學系服飾行銷組-日間部</option>
		
		 <option value="二年制流行設計經營系零售經營組-二技制">二年制流行設計經營系零售經營組-二技制</option>
		
		 <option value="電子工程學系-日間部">電子工程學系-日間部</option>
		
		 <option value="電子工程學系碩士在職專班-研究所">電子工程學系碩士在職專班-研究所</option>
		
		 <option value="電子工程學系碩士班-研究所">電子工程學系碩士班-研究所</option>
		
		 <option value="資訊工程學系-日間部">資訊工程學系-日間部</option>
		
		 <option value="資訊工程學系碩士在職專班-研究所">資訊工程學系碩士在職專班-研究所</option>
		
		 <option value="資訊工程學系碩士班-研究所">資訊工程學系碩士班-研究所</option>
		
		 <option value="織品服裝學系碩士在職經營消費組-研究所">織品服裝學系碩士在職經營消費組-研究所</option>
		
		 <option value="生命科學系-日間部">生命科學系-日間部</option>
		
		 <option value="生命科學系碩士班-研究所">生命科學系碩士班-研究所</option>
		
		 <option value="物理學系物理組-日間部">物理學系物理組-日間部</option>
		
		 <option value="物理學系光電物理組-日間部">物理學系光電物理組-日間部</option>
		
		 <option value="餐旅管理學系-日間部">餐旅管理學系-日間部</option>
		
		 <option value="餐旅管理學系碩士班-研究所">餐旅管理學系碩士班-研究所</option>
		
		 <option value="兒童與家庭學系-日間部">兒童與家庭學系-日間部</option>
		
		 <option value="兒童與家庭學系碩士在職專班-研究所">兒童與家庭學系碩士在職專班-研究所</option>
		
		 <option value="兒童與家庭學系碩士班-研究所">兒童與家庭學系碩士班-研究所</option>
		
		 <option value="法律學系法學組-日間部">法律學系法學組-日間部</option>
		
		 <option value="法律學系司法組-日間部">法律學系司法組-日間部</option>
		
		 <option value="社會學系-日間部">社會學系-日間部</option>
		
		 <option value="社會工作學系-日間部">社會工作學系-日間部</option>
		
		 <option value="社會工作學系碩士班-研究所">社會工作學系碩士班-研究所</option>
		
		 <option value="經濟學系-進修部">經濟學系-進修部</option>
		
		 <option value="經濟學系-日間部">經濟學系-日間部</option>
		
		 <option value="經濟學系碩士班-研究所">經濟學系碩士班-研究所</option>
		
		 <option value="法律學系-進修部">法律學系-進修部</option>
		
		 <option value="法律學系碩士在職專班-研究所">法律學系碩士在職專班-研究所</option>
		
		 <option value="法律學系碩士班-研究所">法律學系碩士班-研究所</option>
		
		 <option value="法律學系博士班-研究所">法律學系博士班-研究所</option>
		
		 <option value="財經法律學系-日間部">財經法律學系-日間部</option>
		
		 <option value="財經法律學系碩士班-研究所">財經法律學系碩士班-研究所</option>
		
		 <option value="學士後法律學系-日間部">學士後法律學系-日間部</option>
		
		 <option value="企業管理學系-進修部">企業管理學系-進修部</option>
		
		 <option value="企業管理學系-日間部">企業管理學系-日間部</option>
		
		 <option value="管理學研究所碩士在職專班-研究所">管理學研究所碩士在職專班-研究所</option>
		
		 <option value="管理學研究所碩士班-研究所">管理學研究所碩士班-研究所</option>
		
		 <option value="會計學系-進修部">會計學系-進修部</option>
		
		 <option value="會計學系-日間部">會計學系-日間部</option>
		
		 <option value="會計學系碩士在職專班-研究所">會計學系碩士在職專班-研究所</option>
		
		 <option value="會計學系碩士班-日間部">會計學系碩士班-日間部</option>
		
		 <option value="會計學系碩士班-研究所">會計學系碩士班-研究所</option>
		
		 <option value="統計資訊學系(統計系)-進修部">統計資訊學系(統計系)-進修部</option>
		
		 <option value="應用統計研究所碩士在職專班-研究所">應用統計研究所碩士在職專班-研究所</option>
		
		 <option value="應用統計研究所碩士班-研究所">應用統計研究所碩士班-研究所</option>
		
		 <option value="資訊管理學系-日間部">資訊管理學系-日間部</option>
		
		 <option value="資訊管理學系碩士在職專班-研究所">資訊管理學系碩士在職專班-研究所</option>
		
		 <option value="資訊管理學系碩士班-研究所">資訊管理學系碩士班-研究所</option>
		
		 <option value="國際貿易與金融學系-進修部">國際貿易與金融學系-進修部</option>
		
		 <option value="國際貿易與金融學系-日間部">國際貿易與金融學系-日間部</option>
		
		 <option value="金融研究所碩士在職專班-研究所">金融研究所碩士在職專班-研究所</option>
		
		 <option value="金融研究所碩士班-研究所">金融研究所碩士班-研究所</option>
		
		 <option value="統計資訊學系-日間部">統計資訊學系-日間部</option>
		
		 <option value="商學研究所博士班-研究所">商學研究所博士班-研究所</option>
		
		 <option value="管理學院科技管理學程碩士在職專班-研究所">管理學院科技管理學程碩士在職專班-研究所</option>
		
		 <option value="國際創業與經營管理學程碩士在職專班-研究所">國際創業與經營管理學程碩士在職專班-研究所</option>
		
		 <option value="音樂學系-日間部">音樂學系-日間部</option>
		
		 <option value="音樂學系碩士在職專班-研究所">音樂學系碩士在職專班-研究所</option>
		
		 <option value="音樂學系碩士班-研究所">音樂學系碩士班-研究所</option>
		
		 <option value="應用美術學系-日間部">應用美術學系-日間部</option>
		
		 <option value="應用美術學系碩士班-研究所">應用美術學系碩士班-研究所</option>
		
		 <option value="景觀設計學系-日間部">景觀設計學系-日間部</option>
		
		 <option value="景觀設計學系碩士班-研究所">景觀設計學系碩士班-研究所</option>
		
		 <option value="食品科學系-日間部">食品科學系-日間部</option>
		
		 <option value="營養科學系-日間部">營養科學系-日間部</option>
		
		 <option value="宗教學系-日間部">宗教學系-日間部</option>
		
		 <option value="宗教學系碩士在職專班-研究所">宗教學系碩士在職專班-研究所</option>
		
		 <option value="宗教學系碩士班-研究所">宗教學系碩士班-研究所</option>
		
		 <option value="護理學系-日間部">護理學系-日間部</option>
		
		 <option value="護理學系-二技制">護理學系-二技制</option>
		
		 <option value="護理學系二年制在職專班-二技制">護理學系二年制在職專班-二技制</option>
		
		 <option value="護理學系碩士班-研究所">護理學系碩士班-研究所</option>
		
		 <option value="二年制護理學系-二技制">二年制護理學系-二技制</option>
		
		 <option value="公共衛生學系-日間部">公共衛生學系-日間部</option>
		
		 <option value="公共衛生學系碩士班-研究所">公共衛生學系碩士班-研究所</option>
		
		 <option value="臨床心理學系(心理復健學系)-日間部">臨床心理學系(心理復健學系)-日間部</option>
		
		 <option value="心理復健學系碩士班-研究所">心理復健學系碩士班-研究所</option>
		
		 <option value="醫學系-日間部">醫學系-日間部</option>
		
		 <option value="臨床心理學系-日間部">臨床心理學系-日間部</option>
		
		 <option value="基礎醫學所-研究所">基礎醫學所-研究所</option>
		
	</select>
        </td>
	</tr>
    <br>
</tbody>
</table><br>
<a href="#" class="btn btn-primary btn-block button" style="width:100px;height:40px;" margin-left="5px;">查詢</a>
</form>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<br><br>
</div>
</div> 
<br><br><br><br><br>
<?php include_once(__DIR__ . '/footer.php');?>   
</body>
</html> 
