<?php
/**
 * 服务的控制器
 */
class ServeController extends HomeController{
	/**
	 * 服务项目
	 */
	public function actionIndex()
	{
		$this->banner = '';
		$criteria = new CDbCriteria;
		$criteria->addcondition('cid=:cid');
		$criteria->params[':cid']='44';
		$infos = ArticleExt::model()->normal()->getList($criteria);
		//var_dump($infos);exit;
		$data = $infos->data;
		//var_dump($data);exit;
		$this->render('index',['infos'=>$data]);
	}
	/**
	 * 业务项目
	 */
	public function actionInfo($id='')
	{
		$info = ArticleExt::model()->findByPk($id);
		if(!$info) {
			$this->redirect('list');
		}
		$this->render('info',['info'=>$info]);
	}
}