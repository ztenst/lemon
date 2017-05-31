<?php $this->pageTitle = $info->title?>


        <div class="npagePage default">
            <div class="content">
                <div class="header">
                    <p class="title"><?=$info->title?></p>
                </div>
                <div class="fw postbody">
                    <table style="width: 1060px;" width="-412" border="0">
                        <tbody>
                            <tr class="firstRow">
                                <td style="width: 40%; word-break: break-all;" valign="top">
                                    <p style="text-align: left;">
                                        <br />
                                    </p>
                                    <p class="ordinary-output target-output"><span style="color: rgb(38, 38, 38);"><strong><span style="font-size: 16px;"><?=$info->content?></span></strong>
                                        </span>
                                    </p>
                                    
                                </td>
                                <td style="width: 5%; word-break: break-all; text-align: left;">&nbsp;</td>
                                <td style="width: 55%; word-break: break-all;" valign="top">
                                    <p style="text-align: left;"><span style="font-size: 16px;"></span><img alt="undefined" title="undefined" src="<?=ImageTools::fixImage($info->image,520,300)?>" /></p>
                                    <p>
                                        <br />
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 1060px;">
                        <tbody>
                            <tr class="firstRow"></tr>
                        </tbody>
                    </table>
                    <hr />
                    
                    
                    
                   
                </div>
                <div id="pages"></div>
                <div id="pageswitch">
                    
                    <div class="clear"></div>
                </div>
            </div>
        </div>