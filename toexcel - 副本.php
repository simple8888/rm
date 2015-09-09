       
<?php       
       require_once './phpexcel/PHPExcel.php';          //路径根据自己实际项目的路径进行设置
       $objPHPExcel = new PHPExcel();  //创建PHPExcel实例
   //下面是对mysql数据库的连接
   require('mysqli.inc.php');//数据库连接    
 $result = $mysqli->query("select * from yuangong");    //查询sql语句
/*--------------设置表头信息------------------*/
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A2', '工号')
            ->setCellValue('B2', '姓名')
            ->setCellValue('C2', '日期')
            ->setCellValue('D2', '法定出勤')
            ->setCellValue('E2', '法定加班')
			->setCellValue('f2', '周末加班')
			->setCellValue('g2', '国定待薪')
		    ->setCellValue('h2', '婚假')
			->setCellValue('i2', '产假');
/*--------------开始从数据库提取信息插入Excel表中------------------*/
$i=3;                //定义一个i变量，目的是在循环输出数据是控制行数
 while($rs=$result->fetch_array()){

      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue("A".$i, $rs[0])
            ->setCellValue("B".$i, $rs[1])
            ->setCellValue("C".$i, $rs[2])
            ->setCellValue("D".$i, $rs[3])
            ->setCellValue("E".$i, $rs[4])
			->setCellValue("f".$i, $rs[5])
            ->setCellValue("g".$i, $rs[6])
            ->setCellValue("h".$i, $rs[7])
            ->setCellValue("i".$i, $rs[8]);          
            $i++;
 }
/*--------------下面是设置其他信息------------------*/
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('工资汇总表');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
ob_end_clean();//清除缓冲区,避免乱码
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="工资汇总表.xlsx"');//文件名
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;

?>