<?php
	class MyDB{
		private $mysqli; //����mysqli��չ�е�mysqli����   
              
                 
         	/* ����Ĺ��췽������������mysqli�������ӵ����ݿ⣬�ͳ�ʹ��һЩ��Ա���� */
		public function __construct() {
			$this->mysqli=new mysqli("localhost", "root", "20541297", "roman");  
			if(mysqli_connect_errno()) {       	//�������ʧ�ܴ�ӡ������Ϣ���˳�����
				echo "����ʧ�ܣ�ԭ��Ϊ��".mysqli_connect_error();
				$this->mysqli=FALSE;      	//��mysqli������falseֵ
				exit();                    	//�˳�����
			}		
			$this->showError="����ʧ��";    	//Ϊ��Ա����showError����ֵ
		}
		public function __destruct() {          	//�������������
			$this->close();                 	//�����󲻿���ʱ�Զ����ñ����е�close()����
		}
		public function close() {             		//���ø÷����ر������ݿ�����Ӳ��ͷ���Դ
			if($this->mysqli)              		//���mysqli������������ɹ�
				$this->mysqli->close();    	//����mysqli�����е�class()�����ر����ݿ�
			$this->mysqli=FALSE;         		//����Ա����mysqli����FALSEֵ
		}
		public function getRowTotal(){       		//���ø÷�������Ա����yuangong�м�¼����
			$result=$this->mysqli->query("select yuangongID from yuangong");  //ִ��Select���
			return $result->num_rows;	                        //���ؽ�����еļ�¼����
		}
		public function getPageRows($offset, $num){   	//��ȡָ��һ�εļ�¼
			$yuangong=array();
                        $query="SELECT * FROM yuangong ORDER BY yuangongID DESC LIMIT $offset, $num";
			if($result=$this->mysqli->query($query)){   	//ִ��Select����ȡָ��һ�μ�¼
				while($row=$result->fetch_assoc())    	//�ӽ�����б�����ÿһ�м�¼
					$yuangong[]=$row;             //��ÿ�м�¼����ӵ�$allYuangong������
				$result->close();                    	//�رս����
				return $yuangong;                  	//����ָ��һҳ�������м�¼
			}else{                                 		//�����ѯ���ɹ�
				return FALSE;                      	//����falseֵ
			}
		}
	}
?>
