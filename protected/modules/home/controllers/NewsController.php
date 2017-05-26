<?php
/**
 * 服务的控制器
 */
class NewsController extends HomeController{

	/**
	 * 服务项目
	 */
	public function actionList($cate='')
	{
		$this->banner='';
		$criteria = new CDbCriteria;
		$criteria->order = 'sort desc,updated desc';
		$criteria->addCondition('status=1 and deleted=0');
		if($cate){
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		$infos = ArticleExt::model()->normal()->common()->sorted()->getList($criteria,8);
		$data = $infos->data;
		$pager = $infos->pagination;
		$this->render('list',['news'=>$data,'pager'=>$pager,'cate'=>$cate,'cates'=>TagExt::getArticleCates()]);
	}

	/**
	 * 业务项目
	 */
	public function actionInfo($id='')
	{
		$infos = ArticleExt::model()->getYw()->normal()->findAll();
		$cates = $info = [];
		if($infos) {
			foreach ($infos as $key => $value) {
				$cates[$value->id] = $value->attributes;
			}
		}
		if($id && isset($cates[$id])) {
			$info = $cates[$id];
		} elseif($infos) {
			$info = $infos[0];
		}
		$this->render('info',['cates'=>$cates,'info'=>$info]);
	}
}