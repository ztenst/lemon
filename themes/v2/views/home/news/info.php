<?php $this->pageTitle = $info->title?>


        <div class="npagePage newsl">
            <div class="content">
                <div class="header fw">
                    <p class="title"><?=$info->title?></p>
                    <p class="subtitle"><?=date('Y-m-d')?></p>
                </div>
                <div class="fw postbody">
                    <table>
                        <tbody>
                            <tr class="firstRow">
                                <td valign="top" width="569"><img src="<?=ImageTools::fixImage($info->image)?>" title="undefined" alt="undefined" /></td>
                                <td style="word-break: break-all;" valign="top" width="569">
                                    
                                    <p><?=$info->content?></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
          
            </div>
        </div>