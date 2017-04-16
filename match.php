<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
<script>
$(function(){
	//先点击姓名，再点击图片
	var all_var_name = all_var_img = 0;
	$("button").click(function(){
		all_var_name=$(this).attr("name");
	});
	$("img").click(function(){
		all_var_img=$(this).attr("data");
		if(all_var_name == all_var_img){//如果匹配成功，则重新开始，变量清空
			alert("恭喜你，选择正确！^_^,重新开始吧！");
			all_var_name = all_var_img = 0;
		}else{//否则继续
			alert("不对哟~--_-,继续吧！");
		}
	});
});
</script>
<?php 
	/* 
	 * 时间:2017-01-06
	 * 作者：Don
	 * 功能：实现姓名与照片的对应查，使用Jquery获取元素属性进一步处理数据
	 */
	//连接数据库
	$conn = mysql_connect("localhost","root","root");
	if(!$conn) exit("连接失败~");
	mysql_query('set names utf8');
	if(!mysql_select_db("test",$conn)) exit("数据库选择失败~");
	$sql = "select * from stu_info order by id asc";
	$rs = mysql_query($sql,$conn);
	$save_array = array();//保存结果集
	$compare = array();//去重
	//数组随机化处理
	function getRandom($var){
		$arr1 = $arr2 = $arr3 = array();
		$count = count($var)-1;
		foreach ($var as $v){
			$rand = rand(0,$count);
			if($rand%3 == 0){
				$arr1[] = $v;
			}elseif ($rand%3 == 1){
				$arr2[] = $v;
			}else{
				$arr3[] = $v;
			}
		}
		return array_merge($arr1,$arr2,$arr3);
	}
?>
<body>
	<div class="container">
		<div class="row" name="stu_name">
			<label>点击选择姓名</label>：<br/>
			<?php while ($v = mysql_fetch_assoc($rs)){?>
			<button id="<?php echo $v['stu_id']?>" name="<?php echo $v['stu_name'];?>" class="btn btn-sm btn-default"><?php echo $v['stu_name'];?></button>	
			<?php $save_array[] = $v;}?>	
		</div>
		<div class="row" name="stu_img">
			<label>点击选择照片</label>：<br/>
			<?php  
				$count = count($save_array);
				$save_array = getRandom($save_array);
				//print_r($save_array);exit();
				//echo $count;exit();
				//print_r($save_array);
				foreach ($save_array as $v){
			?>
			<div class="thumbnail col-lg-1 text-center">
	           <a href="javascript::"><img src="<?php echo $v['stu_img'];?>"  data='<?php echo $v['stu_name'];?>'  alt="<?php echo $v['stu_name'];?>的照片"></a>
	            <div calss="caption"><small>学号:<?php echo $v['stu_id'];?></small></div>
			</div>
			<?php }?>
	</div>
</body>