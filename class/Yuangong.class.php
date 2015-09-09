<?php
    /*员工类与数据库中的员工作完全对应*/
    class Yuangong{
          private $yuangongID;
          private $number;
          private $name;
          private $sex;
          private $birthday;
          private $idno;
          private $cell;
          private $tel;
          private $email;
          private $marriage;
          private $hometown;
          private $livesite;
          private $zhiwu;
          private $ruzhiriqi;
          private $hetongqixian;
          private $gongzuodidian;
          private $shifouzhuchang;
          private $shifouzaizhi;
          private $lizhiriqi;
          private $feature;
          private $memo; 

          public function __construct($yuangong=array()){
              foreach($yuangong as $property=>$value){
                       $this->$property=$value;
                       }
             }

         public function getId(){
               if(!empty($this->yuangongID))
                     return $this->yuangongID;
                   else
                     return FALSE;
          }

         public function getNumber(){
               if(!empty($this->number))    
                     return $this->html2text($this->number);
                    else
                     return"未知工号";
          } 

         public function getName(){
               if(!empty($this->name))    
                     return $this->html2text($this->name);
                    else
                     return"未知姓名";
          }                                 
      
         public function getSex(){
               if(!empty($this->sex))    
                     return $this->html2text($this->sex);
                    else
                     return"未知性别";
          } 

         public function getBirthday(){
               if(!empty($this->birthday))    
                     return $this->html2text($this->birthday);
                    else
                     return"未知出生日期";
          } 

         public function getIdno(){
               if(!empty($this->idno))    
                     return $this->html2text($this->idno);
                    else
                     return"未知身份证号";
          } 

         public function getCell(){
               if(!empty($this->cell))    
                     return $this->html2text($this->cell);
                    else
                     return"未知手机";
          } 

         public function getTel(){
               if(!empty($this->tel))    
                     return $this->html2text($this->tel);
                    else
                     return"未知固话";
          } 

         public function getEmail(){
               if(!empty($this->email))    
                     return $this->html2text($this->email);
                    else
                     return"未知电子邮件";
          } 

         public function getMarriage(){
               if(!empty($this->marriage))    
                     return $this->html2text($this->marriage);
                    else
                     return"未知婚否";
          } 

         public function getHometown(){
               if(!empty($this->hometown))    
                     return $this->html2text($this->hometown);
                    else
                     return"未知籍贯";
          } 

         public function getLivesite(){
               if(!empty($this->livesite))    
                     return $this->html2text($this->livesite);
                    else
                     return"未知现居住地";
          } 

         public function getZhiwu(){
               if(!empty($this->zhiwu))    
                     return $this->html2text($this->zhiwu);
                    else
                     return"未知职务";
          } 

         public function getRuzhiriqi(){
               if(!empty($this->ruzhiriqi))    
                     return $this->html2text($this->ruzhiriqi);
                    else
                     return"未知入职日期";
          } 

         public function getHetongqixian(){
               if(!empty($this->hetongqixian))    
                     return $this->html2text($this->hetongqixian);
                    else
                     return"合同期限";
          } 

         public function getGongzuodidian(){
               if(!empty($this->gongzuodidian))    
                     return $this->html2text($this->gongzuodidian);
                    else
                     return"未知工作地点";
          } 

         public function getShifouzhuchang(){
               if(!empty($this->shifouzhuchang))    
                     return $this->html2text($this->shifouzhuchang);
                    else
                     return"未知是否住厂";
          } 

         public function getShifouzaizhi(){
               if(!empty($this->shifouzaizhi))    
                     return $this->html2text($this->shifouzaizhi);
                    else
                     return"未知是否在职";
          } 

         public function getLizhiriqi(){
               if(!empty($this->lizhiriqi))    
                     return $this->html2text($this->lizhiriqi);
                    else
                     return"未知离职日期";
          } 

         public function getFeature(){
               if(!empty($this->feature))    
                     return $this->html2text($this->feature);
                    else
                     return"未知特长";
          } 

         public function getMemo(){
               if(!empty($this->memo))    
                     return $this->html2text($this->memo);
                    else
                     return"未知备注";
          } 

         private function htmltotext($html){
               return htmlspecialchars(stripslashes($html));
          }
    }
?>    






        











