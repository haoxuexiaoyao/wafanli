<?php 
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}

include(ADMINTPL.'/header.tpl.php');
?>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td width="115px" align="right">主标题：</td>
    <td>&nbsp;<a href="<?=u('ddzhidemai','addedi',array('id'=>$comment['data_id']))?>"><?=$comment["title"]?></a></td>
  </tr>
  <tr>
    <td width="115px" align="right">评论人：</td>
    <td>&nbsp;<?=$comment['username']?></td>
  </tr>
  <tr>
    <td width="115px" align="right">评论内容：</td>
    <td>&nbsp;<textarea name="content" style="width:400px; height:200px"><?=$comment['content']?></textarea></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;<input type="hidden" name="id" value="<?=$comment['id']?>" /><input type="submit" class="sub" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>