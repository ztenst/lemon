<?php
/**
 * 问答提交的api
 * @author weibaqiu
 * @date 2015-11-10
 */
class WxController extends ApiController
{
	public function actionCheck()
	{
		if($_GET['echostr']) {
			echo json_encode(['echostr'=>$_GET['echostr']]);
		}
	}
}