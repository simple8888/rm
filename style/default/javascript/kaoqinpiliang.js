function tijiao()//kaoqin
{
document.formkq.action="kaoqincharu.php";  
}
function piliangshururiqi()
{
document.formkq.action="kaoqinplriqishuru.php";
}
function piliangshanchuriqi()
{
document.formkq.action="kaoqinplriqishanchu.php";
}
function piliangguoding()
{
document.formkq.action="kaoqinplguoding.php";
}
function piliangshuidian()
{
document.formkq.action="kaoqinplshuidian.php";
}


function tijiaosb()//社保
{
document.formkq.action="kaoqinshebaocharumodify.php";  
}
function piliangshurubilisb()//批量输入社保缴纳比例
{
document.formkq.action="kaoqinshebaoplbilishuru.php";
}


function tijiaocl()//产量
{
document.formkq.action="chanlianggongzicharu.php";  
}
function piliangshururiqicl()
{
document.formkq.action="chanlianggongziplriqishuru.php";
}
function piliangshanchuriqicl()
{
document.formkq.action="chanlianggongziplriqishanchu.php";
}


function tijiaozl()//质量
{
document.formkq.action="zhilianggongzicharu.php";  
}
function piliangshururiqizl()
{
document.formkq.action="zhilianggongziplriqishuru.php";
}
function piliangshanchuriqizl()
{
document.formkq.action="zhilianggongziplriqishanchu.php";
}


function zhiliangchaxun()//质里工资里的 质量查询 和 质量汇总 切换
{
document.formzl.action="index.php";
document.getElementById("zhiliang").value="zhilianggongzicx";  
}
function zhilianghuizong()
{
document.formzl.action="index.php";
document.getElementById("zhiliang").value="zhilianghuizong";  
}



function gongzichaxun()//工资汇总里的 工资查询 和 导出Excel 切换
{
document.formhz.action="index.php";
document.getElementById("huizong").value="gongzihuizongcx";  
}
function toexcel()
{
document.formhz.action="index.php";
document.getElementById("huizong").value="toexcel";  
}


