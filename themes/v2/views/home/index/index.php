<?php
  $this->pageTitle = '常州青柠环保科技有限公司-首页';
?>
<?php 
    // Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/1400.css");
    // Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/match-common.css");
?>
<style>
    .module.mcounter ul.content_list li p {
    text-align: center;
    font-size: 14px;
    color: #b3b3b3;
}
.module.mcounter ul.content_list li p.number {
    margin-top: 15px;
}
.module.mcounter ul.content_list li div {
    border-right: #e9e9e9 1px solid;
}
.module.mcounter ul.content_list li {
    width: 25%;
    height: 108px;
    float: left;
    text-align: center;
}
.module.mcounter ul.content_list {
    width: 100%;
    height: auto;
}
.module.mcounter .module_container {
    padding: 20px 0;
}
style.1400.css:1
.module .module_container {
    max-width: 1170px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 50px;
    margin: 0 auto;
}
.module.mcounter ul.content_list li p.number .counterDX {
    font-size: 54px;
    color: #666;
    font-family: HELVETICANEUELTPRO-THEX,Arial;
    text-align: center;
    margin-top: 15px;
}
</style>
<div id="indexPage">
    <div id="mslider" class="module">
        <script type="text/javascript">
        $(function() {
            $("#mslider li video").each(function(index, element) {
                element.play();
            });
        })
        </script>
        <ul class="slider" data-options-height="600" data-options-auto="1" data-options-mode="1" data-options-pause="5" data-options-ease="ease-out">
            <!-- <li style="background-image:url(http://resources.jsmo.xin/templates/upload/1124/201611/1479196936105.jpg)" class="active">
                <div id="tempImage_0"></div><img style="display:none" src="http://resources.jsmo.xin/templates/upload/1124/201611/1479196936105.jpg" />
                <div class="mask"></div>
                <a target="_blank" href="http://mo004_1124.mo4.line1.jsmo.xin/project/">
                    <div>
                        <p class="title ellipsis">建筑DESIGN-产品</p>
                        <p class="subtitle">architectural design;building design </p>
                    </div>
                    <div class="sliderArrow fa fa-angle-down"></div>
                </a>
            </li>
            <li style="background-image:url(http://resources.jsmo.xin/templates/upload/1124/201611/1479203150577.jpg)">
                <div id="tempImage_1"></div><img style="display:none" src="http://resources.jsmo.xin/templates/upload/1124/201611/1479203150577.jpg" />
                <div class="mask"></div>
                <a target="_blank">
                    <div>
                        <p class="title ellipsis"></p>
                    </div>
                    <div class="sliderArrow fa fa-angle-down"></div>
                </a>
            </li> -->
            <?php if($imgs) foreach ($imgs as $key => $value) {?>
                <li style="background-image:url(<?=ImageTools::fixImage($value)?>)"  class="<?=$key==0?'active':''?>">
                <div id="tempImage_1"></div><img style="display:none" src="<?=ImageTools::fixImage($value)?>" />
                <div class="mask"></div>
                <a target="_blank">
                    <div>
                        <p class="title ellipsis"><?=SiteExt::getAttr('qjpz','pcIndexImageWords')?></p>
                    </div>
                    <div class="sliderArrow fa fa-angle-down"></div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div id="mindex" data-options-ease="Expo.easeInOut" data-options-speed="1" data-options-sscreen="0"></div>
    <!-- <div id="mservice" class="module">
        <div class="bgmask"></div>
        <div class="content layoutslider">
            <div class="header wow fw" data-wow-delay=".1s">
                <p class="title">服务范围</p>
                <p class="subtitle">—— SERVICE ——</p>
            </div>
            <div class="module-content fw" id="servicelist">
                <div class="wrapper">
                    <ul class="content_list" data-options-sliders="4" data-options-margin="50" data-options-ease="u65e0" data-options-speed="0">
                        <li id="serviceitem_0" class="serviceitem wow">
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4251/" target="_blank">
                                <p class="service_img"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479215822711.png" width="320" height="120" /></p>
                                <div class="service_info">
                                    <p class="title">科技 science</p>
                                    <p class="description">社会上习惯于把科学和技术联在一起，统称为“科技”。实际二者既有密切联系，又有重要区别。</p>
                                </div>
                            </a>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4251/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                        <li id="serviceitem_1" class="serviceitem wow">
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4250/" target="_blank">
                                <p class="service_img"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479215891915.png" width="320" height="120" /></p>
                                <div class="service_info">
                                    <p class="title">建设 Factory</p>
                                    <p class="description">建筑是建筑物与构筑物的总称，是人们为了满足社会生活需要，利用所掌握的物质技术手段...</p>
                                </div>
                            </a>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4250/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                        <li id="serviceitem_2" class="serviceitem wow">
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4249/" target="_blank">
                                <p class="service_img"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479215970107.png" width="320" height="120" /></p>
                                <div class="service_info">
                                    <p class="title">信息 Information</p>
                                    <p class="description">信息，指音讯、消息、通讯系统传输和处理的对象，泛指人类社会传播的一切内容。</p>
                                </div>
                            </a>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4249/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                        <li id="serviceitem_3" class="serviceitem wow">
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4248/" target="_blank">
                                <p class="service_img"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479218041538.png" width="320" height="120" /></p>
                                <div class="service_info">
                                    <p class="title">网络资源 Network resources</p>
                                    <p class="description">网络资源，是利用计算机系统通过通信设备传播和网络软件管理的信息资源。</p>
                                </div>
                            </a>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4248/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                        <li id="serviceitem_4" class="serviceitem wow">
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4247/" target="_blank">
                                <p class="service_img"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479218052105.png" width="320" height="120" /></p>
                                <div class="service_info">
                                    <p class="title">广告 Advertising</p>
                                    <p class="description">广告是为了某种特定的需要，通过一定形式的媒体，公开而广泛地向公众传递信息的宣传手段。</p>
                                </div>
                            </a>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4247/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                        <li id="serviceitem_5" class="serviceitem wow">
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4246/" target="_blank">
                                <p class="service_img"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479218115361.png" width="320" height="120" /></p>
                                <div class="service_info">
                                    <p class="title">资产管理 Assets</p>
                                    <p class="description">Now on three integrated deployment modelspublic dedicated and local</p>
                                </div>
                            </a>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/service/post/4246/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <a href="http://mo004_1124.mo4.line1.uemo.net/service/" class="more wow">MORE<i class="fa fa-angle-right"></i></a></div>
    </div> -->
    <div id="mproject" class="module">
        <div class="bgmask"></div>
        <div class="content layoutslider">
            <div class="header wow">
                <p class="title">项目案例</p>
                <p class="subtitle"><?=SiteExt::getAttr('qjpz','productWords')?></p>
            </div>
            <div id="category" class="hide wow">
            <?php if($cates) foreach ($cates as $key => $value) { ?>
                <a href="<?=$this->createUrl('/home/product/list',['cate'=>$key])?>"><?=$value?></a>
           <?php } ?>
            </div>
            <!--yyLayout masonry-->
            <div class="module-content" id="projectlist">
                <div class="projectSubList" id="projectSubList_">
                    <div class="projectSubHeader">
                        <p class="title"></p>
                        <p class="subtitle"></p>
                    </div>
                    <div class="wrapper">
                        <ul class="content_list" data-options-sliders="4" data-options-margin="10" data-options-ease="u65e0" data-options-speed="0">
                        <?php if($products) foreach ($products as $key => $value) {?>
                            <li id="projectitem_<?=$key?>" class="projectitem wow">
                                <a href="<?=$this->createUrl('/home/product/info',['id'=>$value->id])?>" class="projectitem_content" target="_blank">
                                    <div class="projectitem_wrapper">
                                        <div class="project_img"><img src="<?=ImageTools::fixImage($value->image,500,320)?>" width="650" height="385" /></div>
                                        <div class="project_info">
                                            <div>
                                                <p class="title"><?=$value->name?></p>
                                                <p class="subtitle"><?=TagExt::getNameByTag($value->cid)?></p>
                                                <p class="description hide"><?=$value->desc?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                    <!--wrapper-->
                </div>
                <!--projectSubList-->
                <a href="<?=$this->createUrl('/home/product/list')?>" class="more wow">MORE<i class="fa fa-angle-right"></i></a>
            </div>
            <!--projectlist-->
            <div class="clear"></div>
        </div>
    </div>
    <div class="mcounter module" style="">
                <div class="bgmask"></div>
                <div id="counterBgdx" style="position:absolute; width:100%; height:100%; "></div>
                <div class="module_container" style="background-color:white">
                    <div class="container_content">
                        <ul class="content_list">
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="<?=SiteExt::getAttr('qjpz','clnf')?>"><?=SiteExt::getAttr('qjpz','clnf')?></span><span class="unit">年</span></p>
                                    <p class="title">成立</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="<?=SiteExt::getAttr('qjpz','fwgs')?>"><?=SiteExt::getAttr('qjpz','fwgs')?></span><span class="unit">+</span></p>
                                    <p class="title">服务</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="<?=SiteExt::getAttr('qjpz','xmgs')?>"><?=SiteExt::getAttr('qjpz','xmgs')?></span><span class="unit">+</span></p>
                                    <p class="title">项目</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="<?=SiteExt::getAttr('qjpz','khs')?>"><?=SiteExt::getAttr('qjpz','khs')?></span><span class="unit">+</span></p>
                                    <p class="title">客户</p>
                                </div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
    <!--project-->
    <div id="mpage" class="module">
        <div class="bgmask"></div>
        <div class="content">
            <div class="module-content">
                <div class="wrapper">
                    <ul class="slider one">
                        <li>
                            <div class="header wow" data-wow-delay=".2s">
                                <p class="title">公司简介</p>
                                <p class="subtitle">ABOUT US</p>
                            </div>
                            <div class="des-wrap">
                                <p class="description wow" data-wow-delay=".3s"><?=SiteExt::getAttr('qjpz','gongsijianjieWords')?></p>
                            </div>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/page/17596/" class="more wow" data-wow-delay=".5s">MORE<i class="fa fa-angle-right"></i></a>
                            <div class="fimg wow" style="background-image:url(http://resources.jsmo.xin/templates/upload/1124/201611/1479282576383.jpg)"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="mteam" class="module bgShow" style="background-image:url(http://resources.jsmo.xin/templates/upload/1124/201611/1479285011891.jpg);">
        <div class="bgmask"></div>
        <div class="content layoutslider">
            <div class="header wow">
                <p class="title">精英团队</p>
                <p class="subtitle">—— ELITE TEAM ——</p>
            </div>
            <div class="module-content fw">
                <div class="wrapper">
                    <ul class="content_list" data-options-sliders="3" data-options-margin="30" data-options-ease="u65e0" data-options-speed="0">
                        <li id="teamitem_0" class="wow">
                            <div class="header wow" data-wow-delay=".2s">
                                <a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5382/" target="_blank"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479712863529.jpg" width="180" height="180" /></a>
                            </div>
                            <div class="summary wow">
                                <p class="title"><a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5382/">罗尼索尔斯</a></p>
                                <p class="subtitle">建筑师艺术名家</p>
                                <p class="description wow">他是一个嗅觉很灵敏的人，他会在下一个猎物出现的一瞬间，就嗅到它的味道，然后牢牢地抓住它不撒手，不管它挣扎得有多厉害。</p>
                            </div>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5382/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                        <li id="teamitem_1" class="wow">
                            <div class="header wow" data-wow-delay=".2s">
                                <a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5381/" target="_blank"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479710836600.jpg" width="180" height="180" /></a>
                            </div>
                            <div class="summary wow">
                                <p class="title"><a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5381/">弗兰克阿布西朗</a></p>
                                <p class="subtitle">空间处理独具匠心</p>
                                <p class="description wow">用最新的材料、最先进的技术表达传统的思想、哲学、美学、信仰和生活方式，将不同的文化的同一性和当代建筑结合起来，这也得到了新世界的理解和公认。</p>
                            </div>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5381/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                        <li id="teamitem_2" class="wow">
                            <div class="header wow" data-wow-delay=".2s">
                                <a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5383/" target="_blank"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479373787180.jpg" width="180" height="180" /></a>
                            </div>
                            <div class="summary wow">
                                <p class="title"><a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5383/">扎哈劳研世</a></p>
                                <p class="subtitle">他总是太狂妄，太执着于真实</p>
                                <p class="description wow">他追求精致、洗炼的造型达到极致。不只是建筑本身，其它如对美术品的安放、收藏环境等，他都下了相当的功夫。</p>
                            </div>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5383/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                        <li id="teamitem_3" class="wow">
                            <div class="header wow" data-wow-delay=".2s">
                                <a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5384/" target="_blank"><img src="http://resources.jsmo.xin/templates/upload/1124/201611/1479715578151.jpg" width="180" height="180" /></a>
                            </div>
                            <div class="summary wow">
                                <p class="title"><a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5384/">尹布艾罗</a></p>
                                <p class="subtitle">为现代都市增添了光辉</p>
                                <p class="description wow">他重视民族文化与西方现代文化的结合，为建筑的地方性多种多样，不同的地方性相互渗透，成为现代建筑不可缺少的内容。</p>
                            </div>
                            <a href="http://mo004_1124.mo4.line1.uemo.net/team/post/5384/" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <a href="http://mo004_1124.mo4.line1.uemo.net/team/" class="more wow">MORE<i class="fa fa-angle-right"></i></a>
        </div>
    </div> -->
    <div id="mnews" class="module">
        <div class="bgmask"></div>
        <div class="content layoutslider">
            <div class="header wow">
                <p class="title">资讯中心</p>
                <p class="subtitle">—— NEWS —— </p>
            </div>
            <div class="module-content" id="newslist">
                <div class="wrapper">
                    <ul class="content_list" data-options-sliders="2" data-options-margin="50" data-options-ease="u65e0" data-options-speed="0" data-options-mode="horizontal" data-options-wheel="0">
                    <?php if($news) foreach ($news as $key => $value) {?>
                        <li id="newsitem_<?=$key?>" class="wow newstitem <?=$key%2==0?'left':'right'?>">
                            <a class="newscontent" target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>">
                                <div class="news_wrapper">
                                    <div class="newsbody">
                                    <p class="date"><span class="md"><?=date('Y',$value->updated)?><span>-</span></span><span class="year"><?=date('m-d',$value->updated)?></span></p>
                                        <p class="title"><?=$value->title?></p>
                                        <div class="separator"></div>
                                        <p class="description"><?=$value->desc?></p>
                                    </div>
                                </div>
                                <div class="newsimg" style="background-image:url()"></div>
                            </a>
                            <a href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>" target="_blank" class="details">more<i class="fa fa-angle-right"></i></a>
                        </li>
                    <?php  } ?>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <a href="<?=$this->createUrl('/home/news/list')?>" class="more wow">MORE<i class="fa fa-angle-right"></i></a>
            <div style="height:0">&nbsp;</div>
        </div>
    </div>
    <!-- 下面的写死就好 -->
    <div id="mcontact" class="module">
        <div class="bgmask"></div>
        <div class="content">
            <div class="header wow fadeInUp fw" data-wow-delay=".1s">
                <p class="title">联系</p>
                <p class="subtitle">Contact</p>
            </div>
            <div id="contactlist" class="fw">
                <div id="contactinfo" class="fl wow" data-wow-delay=".2s">
                    <h3 class="ellipsis name">常州青柠环保科技有限公司</h3>
                    <p class="ellipsis add"><span>地点：</span><?=SiteExt::getAttr('qjpz','address')?></p>
                    <p class="ellipsis zip"><span>邮编：</span><?=SiteExt::getAttr('qjpz','yb')?></p>
                    <p class="ellipsis tel"><span>电话：</span><?=SiteExt::getAttr('qjpz','tel')?></p>
                    <p class="ellipsis mobile"><span>手机：</span><?=SiteExt::getAttr('qjpz','sitePhone')?></p>
                    <!-- <p class="ellipsis fax"><span>传真：</span>000-66668888</p> -->
                    <p class="ellipsis email"><span>邮箱：</span><?=SiteExt::getAttr('qjpz','mail')?></p>
                    <div><a class="fl" target="_blank" href="http://weibo.com/web"><i class="fa fa-weibo"></i></a><a class="fl" target="_blank" href="tencent://message/?uin=<?=SiteExt::getAttr('qjpz','qq')?>&Site=uemo&Menu=yes"><i class="fa fa-qq"></i></a> <a id="mpbtn" class="fl" href="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','wxQr'))?>"><i class="fa fa-weixin"></i></a></div>
                </div>
               <!--  <div id="contactform" class="fr wow" data-wow-delay=".2s">
                    <form action="http://mo004_1124.mo4.line1.uemo.net/message/" method="post">
                        <p>
                            <input type="text" class="inputtxt name" name="name" placeholder="姓名" autocomplete="off" />
                        </p>
                        <p>
                            <input type="text" class="inputtxt email" name="email" placeholder="邮箱" autocomplete="off" />
                        </p>    
                        <p>
                            <input type="text" class="inputtxt tel" name="tel" placeholder="电话" autocomplete="off" />
                        </p>
                        <p>
                            <textarea class="inputtxt cont" name="content" placeholder="内容" autocomplete="off"></textarea>
                        </p>
                        <p>
                            <input class="inputsub" type="submit" value="提交" />
                        </p>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
</div>
