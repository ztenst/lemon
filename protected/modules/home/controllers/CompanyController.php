<?php
class CompanyController extends HomeController{

	public function actionIndex(){
		$criteria = new CDbCriteria;
		$criteria ->addcondition('cid=:cid');
		$criteria ->params[':cid'] = 60;
		$infos = ArticleExt::model()->normal()->find($criteria);
		$this->render('index',['infos'=>$infos]);

	}

	public function actionHistory(){
		$criteria = new CDbCriteria;
		$criteria ->addcondition('cid=:cid');
		$criteria ->params[':cid'] = 61;
		$infos = ArticleExt::model()->normal()->find($criteria);
		$this->render('index',['infos'=>$infos]);

	}
}

