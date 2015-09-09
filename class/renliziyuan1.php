<?php
    
    require_once"HTML/Table.php";
    require('mysqli.inc.php');

    $attributes=array('border'=>'2');//创建表属性数组

    $table=new HTML_Table($attributes);//创建表对象
    
    $table->setHeaderContents(0,0,"ID");//设置表头，循环处理数组以生成表数据
    $table->setHeaderContents(0,1,"工号");
    $table->setHeaderContents(0,2,"姓名");
    $table->setHeaderContents(0,3,"性别");
    $table->setHeaderContents(0,4,"出生日期");
    $table->setHeaderContents(0,5,"年龄");
    $table->setHeaderContents(0,6,"身份证号");
    $table->setHeaderContents(0,7,"手机");
    $table->setHeaderContents(0,8,"固话");
    $table->setHeaderContents(0,9,"Email");
    $table->setHeaderContents(0,10,"婚否");
    $table->setHeaderContents(0,11,"籍贯");
    $table->setHeaderContents(0,12,"现居住地");
    $table->setHeaderContents(0,13,"特长");
    $table->setHeaderContents(0,14,"备注");

    
    
    $query="select id,number,name,sex,birthday,format((timestampdiff(day,birthday,now())/365),2),idno,cell,tel,email,marriage,hometown,livesite,feature,memo FROM yuangong ORDER BY id DESC";
    $stmt=$mysqli->prepare($query);
    $stmt->execute(); 
    $stmt->bind_result($id,$number,$name,$sex,$birthday,$age,$idno,$cell,$tel,$email,$marriage,$hometown,$livesite,$feature,$memo);  
    
    $rownum=1;//不是从第0行，而是从第1行开始，所以不会覆盖表头
     
    while ($stmt->fetch()) {
       $table->setCellContents($rownum,0,$id);
       $table->setCellContents($rownum,1,$number);
       $table->setCellContents($rownum,2,$name);
       $table->setCellContents($rownum,3,$sex); 
       $table->setCellContents($rownum,4,$birthday);
       $table->setCellContents($rownum,5,$age);
       $table->setCellContents($rownum,6,$idno);
       $table->setCellContents($rownum,7,$cell);
       $table->setCellContents($rownum,8,$tel);
       $table->setCellContents($rownum,9,$email);
       $table->setCellContents($rownum,10,$marriage);
       $table->setCellContents($rownum,11,$hometown);
       $table->setCellContents($rownum,12,$livesite);
       $table->setCellContents($rownum,13,$feature);
       $table->setCellContents($rownum,14,$memo);
       $table->altRowAttributes(1,null,array("class"=>"alt"));//隔行变色  
       $rownum++;
        

     }
     $tb= $table->toHTML();   
     $mysqli->close();

?>


