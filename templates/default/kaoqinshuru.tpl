{include file="default/header.inc.tpl"}
{include file="default/salary.header.inc.tpl" }
{include file="default/kaoqin.header.inc.tpl"}

    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入考勤&请假休假&福利&代扣款等数据:(带<span>*</span>的为必填项,带<img style="vertical-align:middle;" src="images/moon3.png" title="月数据" />为月度数据)</h2><br /><br />
    <form name="formkq" style="align:right;margin-top:25px;margin-left:160px;" method="POST">
    <input name="ygongID" type="hidden" value={$ygongID} />
    <input name="kaoqinID" type="hidden" value={$kaoqinID} />
    工号:<label> {$number}</label> <br />
    姓名:<label> {$name}</label> <br />
    日期:<input name="riqi" type="text" onClick="WdatePicker()" size=40 /><span>*</span> <- <input style="width:86px" class="button"  type="submit" name="kaoqinpiliang" value="批量输入日期" onClick="piliangshururiqi()" /> 　<- <input style="width:86px" class="button"  type="submit" name="kaoqinplriqishanchu" value="批量删除日期" onClick="piliangshanchuriqi()" />包括当日的数据,删除前筛选罗麦或博涵 <br />    
    法定出勤:<input name="fadingcq" type="text" size=35 /> <br />
    法定加班:<input name="fadingjb" type="text" size=35 /> <br />
    周末加班:<input name="zhoumojb" type="text" size=35 /> <br />  
    国定待薪:<input name="guodingdx" type="text" size=35  /><img style="vertical-align:middle;" src="images/moon3.png" title="月数据" /> <- <input style="width:86px" class="button"  type="submit" name="kaoqinplguoding" value="批量输入" onClick="piliangguoding()" />国定待薪假日期和金额<br />
    婚假:<input name="hunjia" type="text" size=40  /> <br />
    产婚:<input name="chanjia" type="text" size=40  /> <br />    
    丧假:<input name="sangjia" type="text" size=40  /> <br />
    病假:<input name="bingjia" type="text" size=40  /> <br />
    平时请假:<input name="pingshiqj" type="text" size=35  /> <br />
    周末请假:<input name="zhoumoqj" type="text" size=35  /> <br />
    全勤:<input name="quanqin" type="text" size=40  /><img style="vertical-align:middle;" src="images/moon3.png" title="月数据" /> <br />
    递增:<input name="dizeng" type="text" size=40  /><img style="vertical-align:middle;" src="images/moon3.png" title="月数据" /> <br />
    培训补贴:<input name="peixun" type="text" size=35  /><img style="vertical-align:middle;" src="images/moon3.png" title="月数据" /> <br /> 
    岗位津贴:<input name="jintie" type="text" size=35  /><img style="vertical-align:middle;" src="images/moon3.png" title="月数据" /> <br /> 
    生日红包:<input name="hongbao" type="text" size=35  /><img style="vertical-align:middle;" src="images/moon3.png" title="月数据" /> <br /> 
    发展奖:<input name="fazhan" type="text" size=37  /><img style="vertical-align:middle;" src="images/moon3.png" title="月数据" /> <br /> 
    高温费:<input name="gaowen" type="text" size=37  /><img style="vertical-align:middle;" src="images/moon3.png" title="月数据" /> <br /> 
    工伤:<input name="gongshang" type="text" size=40 /> <br /> 
    水电费:<input name="shuidian" type="text" size=38 /><img style="vertical-align:middle;" src="images/moon3.png" title="月数据" /> <- <input style="width:86px" class="button"  type="submit" name="kaoqinplshuidian" value="批量输入" onClick="piliangshuidian()" />水电费日期和金额，输入金额前筛选员工是否住厂<br /> 
    
    <div style="margin-left:100px;"> <input class="button" type="submit" name="submit" value="提交" onClick="tijiao()" />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

{include file="default/footer.inc.tpl"}
