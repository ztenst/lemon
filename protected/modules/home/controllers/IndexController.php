<?php
class IndexController extends HomeController
{
    public function actionIndex()
    {
        $this->banner = '';
    	$this->layout = '/layouts/base';
    	// 两篇文章
    	$serves = ArticleExt::model()->normal()->findAll(['condition'=>'cid=56','limit'=>2]);
    	// 八个案例
    	$products = ProductExt::model()->normal()->findAll(['limit'=>8]);
        //案例类型
        $cates = TagExt::getTagArrayByCate('hjlx');
        if(Yii::app()->request->getIsPostRequest()) {

            $data['name'] = Yii::app()->request->getPost('name');
            $data['mail'] = Yii::app()->request->getPost('email');
            $data['phone'] = Yii::app()->request->getPost('tel');
            $data['msg'] = Yii::app()->request->getPost('content');
            $guest = new GuestExt;
            $guest->attributes = $data;
            $guest->save();
            echo json_encode(['code'=>0,'data'=>'']);
            Yii::app()->end();
        }
        //封面图
        $imgs = SiteExt::getAttr('qjpz','pcIndexImages');
        // var_dump($cates);exit;
        $this->render('index',['news'=>$serves,'products'=>$products,'imgs'=>$imgs,'cates'=>$cates]);
    }

    public function actionAbout()
    {
        $info = ArticleExt::model()->getJs()->normal()->find();
        // var_dump($info->attributes);exit;
        $this->render('about',['info'=>$info]);
    }

    public function actionContact()
    {
        $info = ArticleExt::model()->getLx()->normal()->find();
        // var_dump($info->attributes);exit;
        $this->render('contact',['info'=>$info]);
    }
}
