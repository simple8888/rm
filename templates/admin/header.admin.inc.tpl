<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="jy" /> <!--SEO搜索引擎优化用，可以添加多个-->
<meta name="Keywords" content="php,lamp" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" /><!--图标放在web根目录下，命名为favicon.ico-->
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../style/default/css/style.css" />
<script language="javascript" type="text/javascript" src="style/default/javascript/kaoqinpiliang.js"></script>
<script language="javascript" type="text/javascript" src="datepicker/WdatePicker.js"></script>
<title>{$title}</title>
<div style="float:right;">{$fa} {$bume} {$na}, 欢迎你！点击此处 <a href="logout.php">注销</a> 登录!</div>
</head>
<body>
<div id="container">
    <div id="header"> 
      <h1>上海罗麦<img style="vertical-align:middle;" src="../images/dian.png" />苏州博涵家居用品有限公司后台管理<h1>
         <p>信息化管理系统<small>REV:1.0</small></p>
    </div>

    <div id="navigation">
      <ul id="navlist">
         <li><a href="index.php?p=main">后台首页</a></li>
         <li><a href="index.php?p=user">用户表</a></li>
         <li><a href="index.php?p=role">角色表</a></li>
         <li><a href="index.php?p=permission">权限表</a></li> 
         <li><a href="index.php?p=contact">联系我们</a></li>
         <li><a href="index.php?p=admin">后台管理员表</a></li>  
                                                                                           {*用isset()函数判断变量是否被定义*} 
         <li style="font-size:12px;line-height:1.4em;"><strong style="letter-spacing:5px;">{if (!isset($biaoti))} {"信息发布栏"} {else} {$biaoti} {/if}</strong><br /><img src="../images/hehua.jpg" title="荷花" /><hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" /><b>{if (!isset($rolen))} {null} {else} {$rolen} {/if} {if (!isset($maohao))} {null} {else}{$maohao}{/if} {if (!isset($rolec))} {null} {else} {$rolec} {/if} </b><hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" />{if (!isset($rolex))} {$rol=null} {else} {$rol=$rolex} {/if} {section name=record loop=$rol}
{$rolex[record].rolename} {if (!isset($maohao))} {null} {else}{$maohao}{/if} {$rolex[record].rolecode}<hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" />
{sectionelse}
{/section}</li> 
         <li style="font-size:12px;line-height:1.4em;"><b>{if (!isset($permissionn))} {null} {else} {$permissionn} {/if} {if (!isset($maohao))} {null} {else}{$maohao}{/if} {if (!isset($permissionc))} {null} {else} {$permissionc} {/if}</b><hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" />{if (!isset($permissionx))} {$per=null} {else} {$per=$permissionx} {/if} {section name=record loop=$per}
{$permissionx[record].permissionname} {if (!isset($maohao))} {null} {else}{$maohao}{/if} {$permissionx[record].permissioncode}<hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" />
{sectionelse}
{/section}</li>    
      </ul>
    </div>
<div id="content">