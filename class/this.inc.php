<link href="./css/style.css" rel="stylesheet" type="text/css" />

<?php

    require_once"HTML/Table.php";
    $salesreport=array(
    '0'=>array("12309","45633","2010-12-19 01:13:42","$22.04","$5.67","$27.71"),
    '1'=>array("12310","942","2010-12-19 01:15:12","$11.50","$3.40","$14.90"),
    '2'=>array("12311","7879","2010-12-19 01:15:22","$95.99","$15.00","$110.99"),
    '3'=>array("12312","55521","2010-12-19 01:30:45","$10.75","$3.00","$13.75"),
    );
    $attributes=array('border'=>'1');

    $table=new HTML_Table($attributes);
    
    $table->setHeaderContents(0,0,"Order ID");
    $table->setHeaderContents(0,1,"Client ID");
    $table->setHeaderContents(0,2,"Order Time");
    $table->setHeaderContents(0,3,"Sub Total");
    $table->setHeaderContents(0,4,"Shipping Cost");
    $table->setHeaderContents(0,5,"Total Cost");

    for($rownum=0;$rownum < count($salesreport); $rownum++){
        for($colnum=0;$colnum<6;$colnum++){
            $table->setCellcontents($rownum+1,$colnum,$salesreport[$rownum][$colnum]);
                $table->altRowAttributes(1,null,array("class"=>"alt"));
        }
    }

    echo $table->toHTML();
?>

