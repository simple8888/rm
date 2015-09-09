<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
     //require"common.php";   
       
    $gonghao=$_POST['gonghao'];
    $xingming=$_POST['xingming'];
    $xingbie=$_POST['xingbie'];
    $chushengriqi=($_POST['chushengriqi']==null?'0000-00-00':$_POST['chushengriqi']);
    @$nianling=round(((strtotime(date("Y-m-d"))-strtotime($chushengriqi))/(60*60*24)/365),2);
    $sfzh=$_POST['shenfenzhenghao'];
    $shouji=$_POST['shouji'];
    $guhua=$_POST['guhua'];
    $email=$_POST['email'];
    $hunfou=$_POST['hunfou'];
    $jiguan=$_POST['jiguan'];
    $xianjuzhudi=$_POST['xianjuzhudi'];

    $zhiwu=$_POST['zhiwu'];
    $ruzhiriqi=($_POST['ruzhiriqi']==null?'0000-00-00':$_POST['ruzhiriqi']); 
    $hetongqixian=$_POST['hetongqixian'];
    $gongzuodidian=$_POST['gongzuodidian'];
    $shifouzhuchang=$_POST['shifouzhuchang'];
    $shifouzaizhi=$_POST['shifouzaizhi'];
    $lizhiriqi=($_POST['lizhiriqi']==null?'0000-00-00':$_POST['lizhiriqi']);  

    $techang=$_POST['techang'];
    $beizhu=$_POST['beizhu'];
    
    if(!$gonghao||!$xingming||!$xingbie||!$chushengriqi||!$sfzh||!$shouji){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='index.php?p=renliziyuanshuru' ></center>";
      exit;}     

      require('mysqli.inc.php ');//数据库连接

      $query="insert into yuangong (number,name,sex,birthday,age,idno,cell,tel,email,marriage,hometown,livesite,zhiwu,ruzhiriqi,hetongqixian,gongzuodidian,shifouzhuchang,shifouzaizhi,lizhiriqi,feature,memo) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('sssssssssssssssssssss',$gonghao,$xingming,$xingbie,$chushengriqi,$nianling,$sfzh,$shouji,$guhua,$email,$hunfou,$jiguan,$xianjuzhudi,$zhiwu,$ruzhiriqi,$hetongqixian,$gongzuodidian,$shifouzhuchang,$shifouzaizhi,$lizhiriqi,$techang,$beizhu); 
      $stmt->execute();
      
      $yuangID=$mysqli->insert_id;//mysql_insert_id -- 取得上一步 INSERT 操作产生的 ID
      $mysqli->query("INSERT INTO kaoqin (ygongID) values($yuangID)"); //把yuangongID同进插入到kaoqin表里的ygongID字段 
      $mysqli->query("INSERT INTO chanliang (ygongID) values($yuangID)"); //把yuangongID同进插入到chanliang表里的ygongID字段
      $mysqli->query("INSERT INTO zhiliang (ygongID) values($yuangID)"); //把yuangongID同进插入到zhiliang表里的ygongID字段
      $mysqli->query("INSERT INTO shebao (ygongID) values($yuangID)"); //把yuangongID同进插入到shebao表里的ygongID字段
       
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
      

include('renliziyuan.php');

?>
 

