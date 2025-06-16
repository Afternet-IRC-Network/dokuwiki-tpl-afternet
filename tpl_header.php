<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<div class="curlies">
                <div class="banner">
                    <!-- USER TOOLS -->
                    <?php if ($conf['useacl']): ?>
                        <div id="dokuwiki__usertools">
                                <?php
                                    if (!empty($_SERVER['REMOTE_USER'])) {
                                        echo '<div class="user">';
                                        tpl_userinfo(); /* 'Logged in as ...' */
                                        echo '</div>';
                                    }
                                ?>
                            <ul class="usertools">
                            <?php
                                    tpl_toolsevent('usertools', array(
                                        tpl_action('admin', true, 'li', true),
                                        tpl_action('profile', true, 'li', true),
                                        tpl_action('register', true, 'li', true),
                                        tpl_action('login', true, 'li', true)
                                    ));
                                ?>
                            </ul>
                        </div>
                    <?php endif ?>
                    <div class="menu_lt"><b>
                        <a class="menu" href="/">Home</a>&nbsp;| 
                        <a href="/servers" class="menu">Servers</a>&nbsp;| 
                        <!--<a href="/channels" class="menu">Channels</a>&nbsp;|  -->
                        <a href="/news" class="menu">News</a></b>
                    </div>
                    <div class="menu_lb"><b>
                      <a href="/help" class="menu">Help</a>&nbsp;| 
                      <a href="/policies" class="menu">Policies</a>&nbsp;| 
                        <a href="/sponsors" class="menu">Sponsors</a>&nbsp;
                        </b>
                    </div>
                    <div class="menu_rt"><b>
                      <a href="/chat" class="menu">Chat Now</a>&nbsp;| 
                        <a href="/junkies" class="menu">Junkies</a>&nbsp;| 
                        <a href="/shop" class="menu">Swag</a>&nbsp; 
                        </b>
                       <!-- <a href="http://groups.google.com/group/afternet/" class="menu">Forum</a></b>-->
                    </div>
                    <div class="menu_rb">
                      <form style="display: inline;" action="/" method="get"><p style="padding:0px; margin: 0px; font-weight: bold;">
                      <a href="/contact" class="menu">Contact</a>&nbsp;<b>|</b>
                      <!-- Register&nbsp;<b>| </b> -->
                      <input type="hidden" name="do" value="search" />
                        Search: <input type="text" name="id" value="" style="width: 4em; font-size: 14px; line-height: 0.5em; padding-top: 0px; margin-top: 0px; height: 1.0em;" />
                        <input type="submit" value="Go" />
                      </p></form>
                    </div>
                    <a href="/"><img src="<?php echo DOKU_TPL?>images/logo.png" width="173" height="164" alt="AfterNET Logo" border="none" class="anetlogo"/></a>
                    <!-- BREADCRUMBS -->
                    <?php if($conf['breadcrumbs'] || $conf['youarehere']): ?>
                        <div class="breadcrumbs">
                            <?php if($conf['youarehere']): ?>
                                <div class="youarehere"><?php tpl_youarehere() ?></div>
                            <?php endif ?>
                            <?php if($conf['breadcrumbs']): ?>
                                <div class="trace"><?php tpl_breadcrumbs() ?></div>
                            <?php endif ?>
                        </div>
                    <?php endif ?>

                </div>
        </div><!-- curlies --> 
