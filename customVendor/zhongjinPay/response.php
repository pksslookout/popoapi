<html>
<head id="Head1" runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>模拟商户</title>
<link rel="stylesheet" type="text/css" href="css/Common.css"/>
<link rel="stylesheet" type="text/css" href="css/Form.css"/>
<link rel="stylesheet" type="text/css" href="css/Table.css"/>
</head>


<body>
<p class="title">模拟商户</p>
<table width="100%" cellpadding="2" cellspacing="1" border="0" align="center" bgcolor="#DDDDDD">
		
    <td  class="head" height="24" colspan="2"> <?php echo $txName?>(<?php echo $txCode?>)</td>
    </tr>
      <tr class="mouseout">
        <td width="120" class="label" height="400">响应报文</td>
        <td width="*" class="content" >            
            <textarea id="test" name="RequestPlainText" cols="100" rows="20" wrap="off"><?php echo $plainText?></textarea>
        </td>
    </tr>
	
</table>

<div id="weChat" style="display:none">
      <br />
      <font color="#FF0000" size="3"><b>点击下面按钮跳转到二维码页面：</b></font><br />  
      <br />     
      <input type="button"  style="width: 83px" value="二维码页面" onclick="javascript:window.location.href='<?php echo $imageUrl ?>'"></input>
</div>
<div id="appWeChat" style="display:none">
      <br />
      <font color="#FF0000" size="3"><b>点击下面按钮跳转到APP页面：</b></font><br />  
      <br />     
<input type="button"  style="width: 83px" value="APP跳转" onclick="runApp()"></input></div>
<div id="h5WeChat" style="display:none">
      <br />
      <font color="#FF0000" size="3"><b>点击下面按钮跳转到手机网银H5页面：</b></font><br />  
      <br />     
        <input type="button"  style="width: 83px" value="网银H5跳转" onclick="runH5()"></input>
</div>


</body>
</html>
<form action="" name="form" method="post">
<input type="hidden" name="content" value="<?php echo $content ?>">
<input type="hidden" name="status" value="<?php echo $status ?>">
<input type="hidden" name="txCode" value="<?php echo $txcode  ?>">
</form>

<form  method='post' action='https://test.cpcn.com.cn/BankSimulator/InterfaceI' name="form1" id="form1" >
<input type='hidden' name='message' value="<%=value%>"></input>
</form>


<script language="JavaScript" type=" /JavaScript">   
      //$simpleXML= new SimpleXMLElement($plainText);
   

  $null= document.getElementById('test').value;
  alert($null);

    if((($null.txcode == "2811") || ($null.val($txcode) == "1401")) && ($RequestPlainText.val($status) == "10")) {
        
        document.getElementById('weChat').style.display="";
    }
    if(((txCode == "2814") || (txCode == "1411")) && (status == "10")) {
        if($paymentWay == "24" || $paymentWay == "44"){
            document.getElementById('h5WeChat').style.display="";
        }else if($paymentWay == "13" || $paymentWay == "23" || $paymentWay == "25" || $paymentWay == "33" || $paymentWay == "36"){
            document.getElementById('appWeChat').style.display="";
        }       
    }
    if(txCode == "2903"||txCode == "2904"||txCode == "2911") {
        document.getElementById('file').style.display="";
    }
    function runH5(){
        document.getElementById("form1").submit();
    }
        function runApp(){
        this.location.href="https://test.cpcn.com.cn/BankSimulator/WeChatApp?"+<?php echo $authCode?>;
    }

</script>