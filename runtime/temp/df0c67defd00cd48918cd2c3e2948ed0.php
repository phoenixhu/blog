<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"/www/wwwroot/blog/public/../application/index/view/article/article.html";i:1507819069;s:69:"/www/wwwroot/blog/public/../application/index/view/common/header.html";i:1507809656;s:68:"/www/wwwroot/blog/public/../application/index/view/common/right.html";i:1507722252;s:67:"/www/wwwroot/blog/public/../application/index/view/common/foot.html";i:1507764332;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>EG-Blog管理系统</title>
        <meta name="keywords" content="EG-Blog管理系统" />
        <meta name="description" content="EG-Blog管理系统" />
        <meta name="mobile-agent" content="format=html5; url=http://m.zx.wed114.cn/shenghuo/20160920156214.html" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link href="__PUBLIC__/style/lady.css" type="text/css" rel="stylesheet" />
		<script type='text/javascript' src='__PUBLIC__/style/ismobile.js'></script>
    </head>

    <body>
        <!--引入头部-->
        <!--头部分离-->
<div class="ladytop">
    <div class="nav">
        <div class="left"><a href="<?php echo url('index/index'); ?>"><img src="__PUBLIC__/images/logo.png" ></a></div>
        <div class="right">
            <div class="box">
                <a href="<?php echo url('index/index'); ?>"  rel='dropmenu209'>首页</a>
                <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('cate/index', array('cateid'=>$vo['id'])); ?>"  rel='dropmenu209'><?php echo $vo['catename']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="hotmenu">
    <div class="con">热门标签：<?php if(is_array($tagres) || $tagres instanceof \think\Collection || $tagres instanceof \think\Paginator): $i = 0; $__LIST__ = $tagres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href='/index.php/index/search/index?keywords=<?php echo $vo['tagname']; ?>'><?php echo $vo['tagname']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div>
</div>
        <!--顶部通栏-->
        <script src='/jiehun/goto/my-65547.js' language='javascript'></script>

        <div class="position"><a href='<?php echo url('index/index'); ?>'>主页</a> > <a href='<?php echo url('cate/index', array('cateid'=>$cates['id'])); ?>'><?php echo $cates['catename']; ?></a> >  </div>

        <div class="overall">
            <div class="left">
                <div class="scrap">
                    <h1><?php echo $articles['title']; ?></h1>
                    <div class="spread">
                        <span class="writor">发布时间：<?php echo date("Y-m-d",$articles['time']); ?></span>
                        <span class="writor">编辑：<?php echo $articles['author']; ?></span>
                        <span class="writor">标签：
                            <?php
                                $arr = explode(',', $articles['keywords']);
                                foreach ($arr as $k=>$v) {
                                    echo "<a href='#'>$v</a>";
                                }
                            ?>
                        </span>
                        <span class="writor">热度：<?php echo $articles['click']; ?></span>
                    </div>
                </div>

                <!-- 分享 -->
                <div class="jiathis_style"><span class="jiathis_txt">分享到：</span>
                    <a class="jiathis_button_cqq"></a>
                    <a class="jiathis_button_weixin"></a>
                    <a class="jiathis_button_qzone"></a>
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_googleplus"></a>
                    <a class="jiathis_button_fb"></a>
                    <a href="http://www.jiathis.com/share?uid=1716894" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
                    <a class="jiathis_counter_style"></a>
                </div>
                <script type="text/javascript" >
                    var jiathis_config={
                        data_track_clickback:true,
                        summary:"",
                        shortUrl:false,
                        hideMore:false
                    }
                </script>
                <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1716894" charset="utf-8"></script>
                <!-- 分享 END -->

                <div class="takeaway">
                    <span class="btn arr-left"></span>
                    <p class="jjxq"><?php echo $articles['desc']; ?></p>
                    <span class="btn arr-right"></span>
                </div>

                  <script src='/jiehun/goto/my-65541.js' language='javascript'></script>

                <div class="substance">
                    <?php echo $articles['content']; ?>
                </div>


                <div class="biaoqian">
                   
                </div>

                <!--PC版-->
                <div id="SOHUCS" ></div>
                <script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
                <script type="text/javascript">
                window.changyan.api.config({
                appid: 'cyt4EkQqY',
                conf: 'prod_a939e4848c3b0220f06bc560355719da'
                });
                </script>

                <!--相关阅读 -->
                <div class="xgread">
                    <div class="til"><h4>相关阅读</h4></div>
                    <div class="lef"><!--相关阅读主题链接--><script src='/jiehun/goto/my-65540.js' language='javascript'></script></div>
                    <div class="rig">
                        <ul>
                            <?php if(is_array($ralateres) || $ralateres instanceof \think\Collection || $ralateres instanceof \think\Paginator): $i = 0; $__LIST__ = $ralateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li><a href='<?php echo url('article/index', array('arid'=>$vo[0])); ?>' target="_blank"><?php echo $vo['1']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
                
                <!--频道推荐-->
                <div class="hotsnew">
                    <div class="til"><h4>频道推荐</h4></div>
                    <ul>
                        <?php if(is_array($recres) || $recres instanceof \think\Collection || $recres instanceof \think\Paginator): $i = 0; $__LIST__ = $recres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><div class="tu"><a href='<?php echo url('article/index', array('arid'=>$vo['id'])); ?>' target="_blank"><img src="<?php if($vo['pic'] != ''): ?>__IMG__<?php echo $vo['pic']; else: ?>__PUBLIC__/images/error.png<?php endif; ?>" alt=""/></a></div><p><a href='<?php echo url('article/index', array('arid'=>$vo['id'])); ?>'><?php echo $vo['title']; ?></a></p></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>		
            </div>
            <!--引入右侧-->
            <div class="right">
    <!--右侧各种广告-->
    <!--猜你喜欢-->
    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div class="hm-t-container" style="width: 298px;">
                <div class="hm-t-main">
                    <div class="hm-t-header">热门点击</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img">
                            <?php if(is_array($clickres) || $clickres instanceof \think\Collection || $clickres instanceof \think\Paginator): $i = 0; $__LIST__ = $clickres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li class="hm-t-item hm-t-item-img"><a data-pos="0" title="<?php echo $vo['title']; ?>" target="_blank"
                                                                   href="<?php echo url('article/index', array('arid'=>$vo['id'])); ?>"
                                                                   class="hm-t-img-title"
                                                                   style="visibility: visible;"><span><?php echo $vo['title']; ?></span></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height:15px"></div>
    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div style="width: 298px;" class="hm-t-container">
                <div class="hm-t-main">
                    <div class="hm-t-header">推荐阅读</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img">
                            <?php if(is_array($tjres) || $tjres instanceof \think\Collection || $tjres instanceof \think\Paginator): $i = 0; $__LIST__ = $tjres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title"
                                                                   href="<?php echo url('article/index', array('arid'=>$vo['id'])); ?>"
                                                                   target="_blank" title="<?php echo $vo['title']; ?>"
                                                                   data-pos="0"><span><?php echo $vo['title']; ?></span></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height:15px"></div>

    <div id="bdcs">
        <div class="bdcs-container">
            <meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->
            <div id="default-searchbox" class="bdcs-main bdcs-clearfix">
                <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">
                    <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get"
                          action="<?php echo url('Search/index'); ?>">
                        <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="keywords" autocomplete="off" style="line-height: 30px; width:220px;">
                        <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">
                    </form>
                </div>
                <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">
                    <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>
                </div>
            </div>
        </div>
    </div>

    <div style="height:15px"></div>


</div>
</div>
        <!--引入尾部-->
        <!--底部分离-->
<div class="footerd">
    <ul>
        <li>Copyright &#169; 2017-<?php echo date('Y');?> all rights reserved 版权所有<a href="https://github.com/phoenixhu/blog" target="_blank" rel="nofollow">开源地址</a></li>
    </ul>
</div>
    </body>
</html>