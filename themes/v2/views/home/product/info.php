<?php $this->pageTitle = $info->name?>

        <div class="npagePage " id="npagePage">
            <div class="content">
                <div id="projectwrap" class="fw">
                    <div id="projectbody">
                        <ul id="projectimages">
                        </ul>
                        <div class="clear"></div>
                        <div class="postbody">
                            <p><img src="<?=ImageTools::fixImage($info->image)?>" /></p>
                            <br>
                            <?=$info->content?>
                        </div>
                    </div>
                    <div id="projectinfo">
                        <div id="projectih">
                            <div class="header">
                                <p class="title"><?=$info->name?></p>
                                <p class="subtitle"><?=TagExt::getNameByTag($info->cid)?></p>
                                <div class="description">
                                    <p><?=$info->desc?></p>
                                    <p>
                                        <br />
                                    </p>
                                    <p><a href="<?=$this->createUrl('/home/product/list')?>"  title="返回列表" textvalue="←&nbsp; 返回列表"><strong>←</strong>&nbsp; 返回列表</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="projectshow">
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- <div id="pages"></div>
                <div id="pageswitch">
                    <a href="http://mo004_1124.mo4.line1.uemo.net/project/post/18881/" class="next">
                        <div>
                            <h3 class="title">室内建筑</h3>
                            <p class="subtitle">产品是艺术的体现</p>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div> -->
            </div>
        </div>