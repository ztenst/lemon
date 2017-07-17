<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="360-site-verification" content="431ffcf9c88d250c969166caa9ed4e31" />
    <meta name="baidu-site-verification" content="N81pqVFXV4" />
    <meta name="keywords" content="常州青柠环保科技有限公司，青柠，常州青柠，环境检测，室内环境监测，环保">
    <meta name="description" content="常州青柠环保科技有限公司">
    <meta name="author" content="YY-MO">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/lib.css">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/style.css">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/home/style/1124.css">
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/home/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/home/js/org1480746227.js" data-main="<?=$this->jsObj?>"></script>
    <style>
        a[href="http://www.uemo.net"]{display:none}
    </style>
    <title><?=$this->pageTitle?></title>
</head>

<body class="<?=$this->banner?>">
    <div id="header" class="index_nav">
        <div class="content">
            <a href="<?=$this->createUrl('/home/index/index')?>" id="logo"><img src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLogo'))?>" height="40" /></a>
            <?php 
            $path = Yii::app()->request->getUrl();
            ?>
            <ul id="nav">
                <li class="navitem"><a class="nav-a <?=$path=='/'?'active':''?>" href="<?=$this->createUrl('/home/index/index')?>" target="_blank"><span  data-title="首页">首页</span></a></li>
                <li class="navitem"><a class="nav-a <?=$path=='/home/product/list'?'active':''?>" href="<?=$this->createUrl('/home/product/list')?>" target="_blank"><span data-title="项目案例">项目案例</span></a></li>
                <li class="navitem"><a class="nav-a <?=$path=='/home/serve/index'?'active':''?>" href="<?=$this->createUrl('/home/serve/index')?>" target="_blank"><span data-title="服务范围">服务范围</span></a></li>
                <li class="navitem"><a class="nav-a <?=$path=='/home/company/index'||$path=='/home/company/history'?'active':''?>" href="javascript:;" target=""><span data-title="集团概况">集团概况</span><i class="fa fa-angle-down"></i></a>
                    <ul class="subnav">
                        <li><a href="<?=$this->createUrl('/home/company/index')?>" target="_blank"><span data-title="公司简介">公司简介</span><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="<?=$this->createUrl('/home/company/history')?>" target="_blank"><span data-title="发展历程">发展历程</span><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </li>
                <li class="navitem"><a class="nav-a <?=$path=='/home/news/list'?'active':''?>" href="<?=$this->createUrl('/home/news/list')?>" target="_blank"><span data-title="资讯中心">资讯中心</span></a></li>
                <li class="navitem"><a class="nav-a <?=$path=='/home/index/contact'?'active':''?>" href="<?=$this->createUrl('/home/index/contact')?>" target="_blank"><span data-title="联系我们">联系我们</span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <a id="headSHBtn" href="javascript:;"><i class="fa fa-bars"></i></a></div>
    <div id="sitecontent">
        <?=$content?>
    </div>
    <div id="footer">
        <p>COPYRIGHT (©) 2017 常州青柠环保科技有限公司.
            <a class="beian" href="http://www.miitbeian.gov.cn/" style="display:inline; width:auto; color:#8e8e8e" target="_blank"></a>
        </p>
    </div>
    <div id="shares"><a id="sshare"><i class="fa fa-share-alt"></i></a><a href="http://service.weibo.com/share/share.php?appkey=3206975293&" target="_blank" id="sweibo"><i class="fa fa-weibo"></i></a><a href="javascript:;" id="sweixin"><i class="fa fa-weixin"></i></a><a href="javascript:;" id="gotop"><i class="fa fa-angle-up"></i></a></div>
    <div class="fixed" id="fixed_weixin">
        <div class="fixed-container">
            <div id="qrcode"></div>
            <p>扫描二维码分享到微信</p>
        </div>
    </div>
</body>

</html>
