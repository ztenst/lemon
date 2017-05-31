<?php
class NewsController extends HomeController{
	public function actionList($cate=''){
		$criteria = new CDbCriteria;
        $criteria->order = 'sort desc,updated desc';
        $criteria->addCondition('status=1 and deleted=0');
		if($cate){
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		$infos = ArticleExt::model()->normal()->common()->sorted()->getList($criteria,8);
		$data = $infos->data;
		//var_dump($data);
		$pager = $infos->pagination;
		$this->render('list',['news'=>$data,'pager'=>$pager,'cate'=>$cate,'cates'=>TagExt::getArticleCate()]);
	}

	public function actionInfo($id=''){
		$info = ArticleExt::model()->findByPk($id);
		if(!$info){
			$this->redirect('list');
		}
		$this->render('info',['info'=>$info]);
	}
}