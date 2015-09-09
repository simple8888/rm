<?php

	class YuangongModel extends MyDB {
		public function addYuangong($yuangong){
			$query="INSERT INTO yuangong(number,name,sex,birthday,idno,cell,tel,email,marriage,hometown,livesite,zhiwu,ruzhiriqi,hetongqixian,gongzuodidian,shifouzhuchang,shifouzaizhi,lizhiriqi,feature,memo) values (?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$stmt = $this->mysqli->prepare($query); 
			$stmt->bind_param('ssssssssssssdssssdss', $number,$name,$sex,$birthday,$idno,$cell,$tel,$email,$marriage,$hometown,$livesite,$zhiwu,$ruzhiriqi,$hetongqixian,$gongzuodidian,$shifouzhuchang,$shifouzaizhi,$lizhiriqi,$feature,$memo);
			
                        $number=$yuangong->getNumber();
                        $name=$yuangong->getName();			           
                        $sex=$yuangong->getSex();
                        $birthday=$yuangong->getBirthday();
                        $idno=$yuangong->getIdno();
                        $cell=$yuangong->getCell();
                        $tel=$yuangong->getTel();
                        $email=$yuangong->getEmail();
                        $marriage=$yuangong->getMarriage();
                        $hometown=$yuangong->getHometown();
                        $livesite=$yuangong->getLivesite();
                        $zhiwu=$yuangong->getZhiwu();
                        $ruzhiriqi=$yuangong->getRuzhiriqi();
                        $hetongqixian=$yuangong->getHetongqixian();
                        $gongzuodidian=$yuangong->getGongzuodidian();
                        $shifouzhuchang=$yuangong->getShifouzhuchang();
                        $shifouzaizhi=$yuangong->getShifouzaizhi();
                        $lizhiriqi=$yuangong->getLizhiriqi();
                        $feature=$yuangong->getFeature();
                        $memo=$yuangong->getMemo();

			$stmt->execute(); 

			if($stmt->affected_rows!=1){
				$this->printError("数据插入失败：".$stmt->error);
				return FALSE;
			}else{
				return $this->mysqli->insert_id;
			}
		}

		public function deleteYuangong($yuangongID){
			$query="DELETE FROM yuangong WHERE yuangongID='".$yuangongID."'";
			if($this->mysqli->query($query)){
				return TRUE;
			}else{
				$this->printError("数据删除失败：".$this->mysqli->error);
				return FALSE;
			}
		}

		public function modifyYuangong($yuangong){
			$query="UPDATE yuangong set number=?,name=?,sex=?,birthday=?,idno=?,cell=?,tel=?,email=?,marriage=?,hometown=?,livesite=?,zhiwu=?,ruzhiriqi=?,hetongqixian=?,gongzuodidian=?,shifouzhuchang=?,shifouzaizhi=?,lizhiriqi=?,feature=?,memo=? WHERE yuangongID=?";
			$stmt = $this->mysqli->prepare($query); 
			$stmt->bind_param('ssssssssssssssssssssi',$number,$name,$sex,$birthday,$idno,$cell,$tel,$email,$marriage,$hometown,$livesite,$zhiwu,$ruzhiriqi,$hetongqixian,$gongzuodidian,$shifouzhuchang,$shifouzaizhi,$lizhiriqi,$feature,$memo ,$yuangongID);
			$number=$yuangong->getNumber();
                        $name=$yuangong->getName();			           
                        $sex=$yuangong->getSex();
                        $birthday=$yuangong->getBirthday();
                        $idno=$yuangong->getIdno();
                        $cell=$yuangong->getCell();
                        $tel=$yuangong->getTel();
                        $email=$yuangong->getEmail();
                        $marriage=$yuangong->getMarriage();
                        $hometown=$yuangong->getHometown();
                        $livesite=$yuangong->getLivesite();
                        $zhiwu=$yuangong->getZhiwu();
                        $ruzhiriqi=$yuangong->getRuzhiriqi();
                        $hetongqixian=$yuangong->getHetongqixian();
                        $gongzuodidian=$yuangong->getGongzuodidian();
                        $shifouzhuchang=$yuangong->getShifouzhuchang();
                        $shifouzaizhi=$yuangong->getShifouzaizhi();
                        $lizhiriqi=$yuangong->getLizhiriqi();
                        $feature=$yuangong->getFeature();
                        $memo=$yuangong->getMemo();
			$yuangongID=$yuangong->getId();
			$stmt->execute(); 

			if($stmt->affected_rows!=1){
				$this->printError("数据更新失败：".$stmt->error);
				return FALSE;
			}else{
				return TRUE;
			}
		}
		public function selectSingleYuangong($yuangongId) {
			$query="SELECT * FROM yuangong WHERE yuangongID='".$yuangongId."'";
			if($result=$this->mysqli->query($query)){
				if($row=$result->fetch_assoc()){     //fetch_assoc() 函数从结果集中取得一行作为关联数组
					$yuangong=new Yuangong($row);
					$result->close();
					return $yuangong;
				}else{
					$result->close();
					$this->printError("获取单行数据失败！");
					return FALSE;
				}
			}else{
				$this->printError("数据查询失败：".$this->mysqli->error);
				return FALSE;
			}
		}

		public function selectAllYuangong() {
			$query="SELECT * FROM yuangong ORDER BY yuangongID";
			if($result=$this->mysqli->query($query)){
				if($result->num_rows){
					while($row=$result->fetch_assoc())  //fetch_assoc() 函数从结果集中取得一行作为关联数组
						$allYuangong[]=new Yuangong($row);
					$result->close();
					return $allYuangong;
						
				}else{
					$result->close();
					$this->printError("没有获取到任何记录");
					return FALSE;
				
				}
			}else{
				$this->printError("数据查询失败：".$this->mysqli->error);
				return FALSE;
			}
		}
	}
?>