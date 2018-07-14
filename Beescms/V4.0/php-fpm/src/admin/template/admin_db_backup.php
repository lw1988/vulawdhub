<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数据备份</title>
<link rel="stylesheet" type="text/css" href="template/admin.css"/>
<script type="text/javascript" src="template/images/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$('tbody').find('tr').hover(function(){
		//$(this).css('background','#ccc');
	},function(){
		//$(this).css('background','none');
	});
	$('#show_list').find('tr').hover(function(){
		$(this).find('td').css('background','#ccffcc');
	},function(){
		$(this).find('td').css('background','');
	});
});

function all_sl(str){
		$ck=$('#'+str).attr('checked');
		if($ck){
			$('td#'+str).find('input').attr('checked','checked');
		}else{
			$('td#'+str).find('input').attr('checked','');
		}
	}

</script>
</head>

<body>
<div class="admin_head">
	<div class="admin_logo"><img src="template/images/admin_logo.gif" border="0"/></div>
	<div class="admin_head_rigt">
		<div class="admin_info">
		管理员<label><?php echo $rel_admin[0]['admin_name'];?></label>欢迎回来</span><span>上次登陆时间:<label style="font-weight:normal"><?php echo empty($rel_admin[0]['admin_time'])?'':date('Y-m-d H:m:s',$rel_admin[0]['admin_time']);?></label></span><span>上次登陆IP:<label style="font-weight:normal"><?php echo $rel_admin[0]['admin_ip']; unset($rel_admin);?></label></span><span>本次登陆IP:<label style="font-weight:normal"><?php echo get_ip();?></label><label style="font-weight:bold; padding-left:8px;"><a href="http://www.beescms.com/alone/alone.php?id=7" target="_blank" style="padding-right:5px; color:#fff">网站建设</a><a href="http://www.beescms.com/article/article.php?id=23" target="_blank" style="padding-right:5px; color:#fff">模板下载</a><a href="http://www.beescms.com/alone/alone.php?id=7" target="_blank" style="padding-right:5px; color:#fff">授权服务</a><a href="http://www.169host.com" target="_blank" style="padding-right:5px; color:#fff">域名空间</a></label>
		</div><!--登录的一些信息-->
		<div class="admin_head_nav">
			
			<ul class="out_nav">
				<li><a href="admin_cache.php?action=del_cache_file">清除缓存</a></li>
				<li><a href="../index.php" target="_blank">网站主页</a></li>
				<li><a href="http://www.beescms.com" target="_blank">官网首页</a></li>
				<li><a href="http://www.beescms.com/help" target="_blank">帮助手册</a></li>
				<li><a href="login.php?action=out">退出登录</a></li>
			</ul>
			<div class="clear"></div>
		</div><!--主导航-->
	</div>
	<div class="clear"></div>	
</div>

<div class="bees_admin_main">
	
	<div class="bees_admin_left_nav">
		<div class="admin_contain_left">
		
		<div class="admin_small_nav">
			
			<?php include('admin_nav.php')?>
			
			
		</div>
	</div><!--左边-->
	</div><!--nav-->
	
	<div class="bees_main_right">
		<div class="bees_main_content">
		
		<div class="admin_position">
		<span>数据备份</span>
			
		</div><!--位置-->
		
	<!--内容区-->	

<div class="order_contain">
<form name="maininfo" method="post" action="?action=save_back&nav=<?php echo $admin_nav;?>&admin_p_nav=<?php echo $admin_p_nav;?>" class="form">	
<div class="order_main">
 <table cellpadding="0" cellspacing="0" width="100%">
 	<thead>
		<tr><th style="width:10%">选择</th><th style="width:25%">表名</th><th style="width:20%;">记录数</th><th style="width:20%;">使用空间</th><th style="width:25%;">更新时间</th></tr>
	</thead>

	<tbody id="show_list">
	
	<?php
	if(!empty($rel)){
	 foreach($rel as $k=>$v){
	?>
		<tr>
			<td style="width:10%; text-align:center"><input type="checkbox" style="border:0" checked="checked" value="<?php echo $v['Name'];?>" name="db[]" /></td><td style="width:25%; text-align:center"><?php echo $v['Name'];?></td><td style="width:20%;text-align:center"><?php echo $v['Rows'];?></td><td style="width:20%;text-align:center"><?php echo round($v['Data_length']/1024,2).'K';?></td><td style="width:25%;text-align:center"><?php echo $v['Update_time'];?></td>
		</tr>
		<?php
		}
		}
		?>
		
	</tbody>
 </table>
 </div>
 
<div class="order_btn">
<input type="hidden" name="init" value="1"/>
  <input type="submit" value="确定" class="go" name="submit"/><input type="reset" class="go" value="重置" name="reset"/>
 </div>
  </form>
 </div>

<!--内容区-->

		</div>	
	</div><!--main-->
	<div class="clear"></div>
</div>
<div class="bees_admin_foot">
	<p>版权所有 © 2009-2013 beescms.com，并保留所有权利。</p>
</div>	

</body>
</html>