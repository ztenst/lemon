<?php $this->pageTitle = '资讯列表'?>
<div id="newsPage" class="npagePage Pagenews">
    <div id="banner">
        <div style="background-image:url(http://resources.jsmo.xin/templates/upload/1124/201611/1479716881333.jpg);"></div>
    </div>
    <div class="content">
        <div class="header">
            <p class="title">资讯中心</p>
              <p class="subtitle">—— NEWS —— </p>
        </div>

        <div id="category">
        <a href="<?=$this->createUrl('/home/news/list')?>" class="<?=$cate?'active':''?>">全部</a>
            <?php if($cates) foreach($cates as $key=>$value){?>
            <li><a  class="<?=$cate==$key?'active':''?>" href="<?=$this->createUrl('/home/news/list',['cate'=>$key])?>"><?=$value?></a></li>
            <?php }?>
        </div>
        <div id="newslist">
            <div class="wrapper">
                <?php foreach ($news as $key => $value) {?>
                    <div id="newsitem_0" class="wow newstitem left">
                        <a class="newscontent" target="_blank" href="http://mo004_1124.mo4.line1.uemo.net/news/post/7068/">
                            <div class="news_wrapper">
                                <div class="newsbody">
                                    <p class="date"><span class="md"><?=date('Y',$value->updated)?><span>-</span></span><span class="year    "><?=date('m-d',$value->updated)?></span></p>
                                    <p class="title"><?=$value->title?></p>
                                    <div class="separator"></div>
                                    <p class="description"><?=$value->desc?></p>
                                </div>
                            </div>
                            <div class="newsimg" style="background-image:url(http://resources.jsmo.xin)"></div>
                        </a>
                        <a href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>" target="_blank" class="details">more<i     class="fa fa-angle-right"></i></a>
                    </div>
                    <?php }?>
            </div>
        </div>
        <div class="clear"></div>
        <div id="pages"><a href="http://mo004_1124.mo4.line1.uemo.net/news/page/1/" class="active">1</a></div>
    </div>
</div>

        