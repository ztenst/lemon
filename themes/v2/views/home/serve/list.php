<?php $this->pageTitle = '资讯中心'?>

<div class="npagePage Pageanli" id="mproject">
            <div class="content">
                <div class="header" id="plheader">
                    <p class="title">资讯中心</p>
                    <p class="subtitle">静静装逼</p>
                </div>
                <ul id="category">
                 <li ><a  class="<?=!$cate?'active':''?>" href="<?=$this->createUrl('/home/news/list')?>"><?='不限'?></a></li>
                    <?php if($cates) foreach ($cates as $key => $value) { ?>
                <li><a  class="<?=$cate==$key?'active':''?>" href="<?=$this->createUrl('/home/news/list',['cate'=>$key])?>"><?=$value?></a></li>
           <?php } ?>
                </ul>
                <div id="projectlist" class="module-content">
                    <div class="wrapper">
                        <ul class="content_list">
                        <?php if($newss) foreach ($newss as $key => $value) {?>
                            <li class="projectitem">
                                <a href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>" target="_blank">
                                    <div class="project_img"><img src="<?=ImageTools::fixImage($value->image,500,320)?>" width="500" height="320" /></div>
                                    <div class="project_info">
                                        <div>
                                             <p class="title"><?=$value->name?></p>
                                                <p class="subtitle"><?=TagExt::getNameByTag($value->cid)?></p>
                                                <p class="description hide"><?=$value->desc?></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="his->createUrl('/home/news/info',['id'=>$value->id])?>" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="pages">
                    <?php $this->widget('HomeLinkPager',['pages'=>$pager])?>
                </div>
            </div>
        </div>