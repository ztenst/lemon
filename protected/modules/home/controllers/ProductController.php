<?php
/**
 * 产品前台控制器
 */
class ProductController extends HomeController{
	/**
	 * [actionList 产品列表]
	 * @param  string $cate  [description]
	 * @param  string $ptpz  [description]
	 * @param  string $house [description]
	 * @return [type]        [description]
	 */
	public function actionList($cate='')
	{
		$criteria = new CDbCriteria;
		$criteria->order = 'sort desc,updated desc';
		$criteria->addCondition('status=1 and deleted=0');
		if($cate){
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		$infos = ProductExt::model()->normal()->sorted()->getList($criteria,8);
		//var_dump($infos);exit;
		$data = $infos->data;
		$pager = $infos->pagination;
		$this->render('list',['products'=>$data,'pager'=>$pager,'cate'=>$cate,'cates'=>TagExt::getTagArrayByCate('hjlx')]);
	}
	/**
	 * [actionInfo 产品详情]
	 * @param  string $id [description]
	 * @return [type]     [description]
	 */
	public function actionInfo($id='')
	{
		$info = ProductExt::model()->findByPk($id);
		if(!$info) {
			$this->redirect('list');
		}
		if(Yii::app()->request->getIsPostRequest()) {

            $data['name'] = Yii::app()->request->getPost('name');
            $data['pid'] = Yii::app()->request->getPost('pid');
            $data['mail'] = Yii::app()->request->getPost('email');
            $data['phone'] = Yii::app()->request->getPost('tel');
            $data['msg'] = Yii::app()->request->getPost('content');
            $guest = new GuestExt;
            $guest->attributes = $data;
            $guest->save();
            $this->redirect('list');
            // echo json_encode(['code'=>0,'data'=>'']);
            Yii::app()->end();
        }
		$this->render('info',['info'=>$info]);
	}

	public function actionAlbum($id='')
	{
		$info = ProductExt::model()->findByPk($id);
		$this->render('album',['images'=>$info->images]);
	}
}