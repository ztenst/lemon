<?php $this->pageTitle = '常州青柠环保科技有限公司-服务范围'?>

        <div class="npagePage Pageservice">
            <div id="banner">
                <img src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','fuwufanweiImages'))?>">
            </div>
            <div class="content">
                <div class="header">
                    <p class="title">服务范围</p>
                    <p class="subtitle">—— SERVICE ——</p>
                </div>

                <div id="servicelist">
                    <ul class="wrap">
                    <?php foreach($infos as $key=>$value) {?>
                        <li class="serviceitem">                        
                            <a href="<?=$this->createUrl('/home/serve/info',['id'=>$value->id])?>" target="_blank">
                                <p class="service_img"><img src="<?=ImageTools::fixImage($value->image,320,120)?>" width="320" height="120" /></p>
                                <div class="service_info">
                                    <p class="title"><?=$value->title?></p>
                                    <p class="description"><?=$value->desc?></p>
                                </div>
                            </a>                            
                        </li>
                    <?php }?>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div id="pages"></div>
            </div>
        </div>