<!doctype html>
<html>
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login Page</title>  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/metro/easyui.css">  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/mobile.css">  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/icon.css">  
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.easyui.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.easyui.mobile.js"></script> 
</head>
<script type="text/javascript">
    submitlogin = () => {
        document.getElementById("formlogin").submit();
    }
</script>
<body>
    <div class="easyui-navpanel">
        <form action="<?php echo base_url();?>Login/ceklogin" method="post" id="formlogin">
            <header>
                <div class="m-toolbar">
                    <span class="m-title">Login to System</span>
                </div>
            </header>
            <div style="margin:20px auto;width:100px;height:100px;border-radius:100px;overflow:hidden">
                <img src="<?php echo base_url(); ?>assets/images/login1.jpg" style="margin:0;width:100%;height:100%;">
            </div>
            <div style="padding:0 20px">
                <div style="margin-bottom:10px">
                    <input id="username" name="username" class="easyui-textbox" data-options="prompt:'Type username',iconCls:'icon-man'" style="width:100%;height:38px">
                </div>
                <div>
                    <input id="password" name="password"  class="easyui-passwordbox" data-options="prompt:'Type password'" style="width:100%;height:38px">
                </div>
                <div style="text-align:center;margin-top:30px">
                    <a href="#" class="easyui-linkbutton" onclick="submitlogin()" style="width:100%;height:40px"><span style="font-size:16px">Login</span></a>
                </div>
                <div style="text-align:center;margin-top:30px">
                    <a href="#" class="easyui-linkbutton" plain="true" outline="true" style="width:100px;height:35px"><span style="font-size:16px">Register</span></a> 
                </div>
            </div>
        </form>
    </div>
</body>    
</html>