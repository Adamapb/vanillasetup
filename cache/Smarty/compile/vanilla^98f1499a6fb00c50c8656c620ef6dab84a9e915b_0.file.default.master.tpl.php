<?php
/* Smarty version 3.1.39, created on 2021-09-20 18:34:11
  from '/var/www/vanilla/addons/themes/theme-boilerplate/views/default.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6148d423aab136_98846555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f1499a6fb00c50c8656c620ef6dab84a9e915b' => 
    array (
      0 => '/var/www/vanilla/addons/themes/theme-boilerplate/views/default.master.tpl',
      1 => 1620339398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_6148d423aab136_98846555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.module.php','function'=>'smarty_function_module',),2=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.activity_link.php','function'=>'smarty_function_activity_link',),3=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.categories_link.php','function'=>'smarty_function_categories_link',),4=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.discussions_link.php','function'=>'smarty_function_discussions_link',),5=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.knowledge_link.php','function'=>'smarty_function_knowledge_link',),6=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.custom_menu.php','function'=>'smarty_function_custom_menu',),7=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.t.php','function'=>'smarty_function_t',),8=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.home_link.php','function'=>'smarty_function_home_link',),9=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.logo.php','function'=>'smarty_function_logo',),10=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.mobile_logo.php','function'=>'smarty_function_mobile_logo',),11=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.community_chooser.php','function'=>'smarty_function_community_chooser',),12=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),13=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.searchbox.php','function'=>'smarty_function_searchbox',),14=>array('file'=>'/var/www/vanilla/library/SmartyPlugins/function.event.php','function'=>'smarty_function_event',),));
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['CurrentLocale']->value['Key'];?>
">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php echo smarty_function_asset(array('name'=>"Head"),$_smarty_tpl);?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i" rel="stylesheet">
</head>

<?php $_smarty_tpl->_assignInScope('linkFormat', "<div class='Navigation-linkContainer'>
        <a href='%url' class='Navigation-link %class'>
            %text
        </a>
    </div>");?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "menu", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?>
        <div class="Navigation-row NewDiscussion">
            <div class="NewDiscussion mobile">
                <?php echo smarty_function_module(array('name'=>"NewDiscussionModule",'reorder'=>$_smarty_tpl->tpl_vars['DataDrivenTitleBar']->value),$_smarty_tpl);?>

            </div>
        </div>
    <?php } else { ?>
        <?php if (!$_smarty_tpl->tpl_vars['DataDrivenTitleBar']->value) {?>
            <div class="Navigation-row">
                <div class="SignIn mobile">
                    <?php echo smarty_function_module(array('name'=>"MeModule"),$_smarty_tpl);?>

                </div>
            </div>
        <?php }?>
    <?php }?>
    
    <?php if (!$_smarty_tpl->tpl_vars['DataDrivenTitleBar']->value) {?>
        <?php echo smarty_function_activity_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

        <?php echo smarty_function_categories_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

        <?php echo smarty_function_discussions_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

        <?php echo smarty_function_knowledge_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

        <?php echo smarty_function_custom_menu(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

          
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "navLinks", null, null);?>
    <?php if (!$_smarty_tpl->tpl_vars['DataDrivenTitleBar']->value) {?>
        <?php echo smarty_function_activity_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

        <?php echo smarty_function_categories_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

        <?php echo smarty_function_discussions_link(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

        <?php echo smarty_function_custom_menu(array('format'=>$_smarty_tpl->tpl_vars['linkFormat']->value),$_smarty_tpl);?>

       
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('SectionGroups', ((isset($_smarty_tpl->tpl_vars['Groups']->value)) || (isset($_smarty_tpl->tpl_vars['Group']->value))));
ob_start();
if ($_smarty_tpl->tpl_vars['User']->value['SignedIn']) {
echo "
        UserLoggedIn
    ";
} else {
echo "
        UserLoggedOut
    ";
}
$_prefixVariable1=ob_get_clean();
ob_start();
if (inSection('Discussion') && $_smarty_tpl->tpl_vars['Page']->value > 1) {
echo "
        isNotFirstPage
    ";
}
$_prefixVariable2=ob_get_clean();
ob_start();
if (inSection('Group') && !(isset($_smarty_tpl->tpl_vars['Group']->value['Icon']))) {
echo "
        noGroupIcon
    ";
}
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('TemplateCss', "
    ".$_prefixVariable1."

    ".$_prefixVariable2."

    ".$_prefixVariable3."

    locale-".((string)$_smarty_tpl->tpl_vars['CurrentLocale']->value['Lang'])."
");?>
<body id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;
echo preg_replace('!\s+!u', " ",$_smarty_tpl->tpl_vars['TemplateCss']->value);?>
">
<a href="#MainContent" class="Button Primary btn button-skipToContent sr-only SrOnly"><?php echo smarty_function_t(array('c'=>"Skip to content"),$_smarty_tpl);?>
</a>

    <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="Frame" id="page">
        <div class="Frame-top">
            <?php if ($_smarty_tpl->tpl_vars['DataDrivenTitleBar']->value) {?>
                <header id="titleBar" data-react="title-bar-hamburger" style="display: none!important;" data-unhide="true">
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'menu');?>

                </header>
            <?php } else { ?>
                <div class="Frame-header">
                    <header id="MainHeader" class="Header">
                        <div class="Container">
                            <div class="row">
                                <div class="Hamburger">
                                    <button class="Hamburger Hamburger-menuXcross" id="menu-button" aria-label="toggle menu">
                                        <span class="Hamburger-menuLines" aria-hidden="true"/>
                                        <span class="Hamburger-visuallyHidden sr-only">
                                            <?php echo smarty_function_t(array('c'=>"toggle menu"),$_smarty_tpl);?>

                                        </span>
                                    </button>
                                </div>
                                <a href="<?php echo smarty_function_home_link(array('format'=>"%url"),$_smarty_tpl);?>
" class="Header-logo">
                                    <?php echo smarty_function_logo(array(),$_smarty_tpl);?>

                                </a>
                                <a href="<?php echo smarty_function_home_link(array('format'=>"%url"),$_smarty_tpl);?>
" class="Header-logo mobile">
                                    <?php echo smarty_function_mobile_logo(array(),$_smarty_tpl);?>

                                </a>
                                <nav class="Header-desktopNav">
                                   <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'navLinks');?>

                                </nav>
                                <div class="Header-flexSpacer"></div>
                                <div class="Header-right">
                                    <?php echo smarty_function_community_chooser(array('buttonType'=>'titleBarLink','buttonClass'=>'Header-desktopCommunityChooser'),$_smarty_tpl);?>

                                    <div class="MeBox-header">
                                        <?php echo smarty_function_module(array('name'=>"MeModule",'CssClass'=>"FlyoutRight"),$_smarty_tpl);?>

                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?>
                                        <button class="mobileMeBox-button">
                                            <span class="Photo PhotoWrap">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['User']->value['Photo'], ENT_QUOTES, 'UTF-8', true);?>
" class="ProfilePhotoSmall" alt="<?php echo smarty_function_t(array('c'=>'Avatar'),$_smarty_tpl);?>
">
                                            </span>
                                        </button>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <nav class="Navigation needsInitialization js-nav">
                            <div class="Container">
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'navLinks');?>

                                <div class='Navigation-linkContainer'>
                                    <?php echo smarty_function_community_chooser(array('buttonType'=>'reset','fullWidth'=>true,'buttonClass'=>'Navigation-link'),$_smarty_tpl);?>

                                </div>
                            </div>
                        </nav>
                        <nav class="mobileMebox js-mobileMebox needsInitialization">
                            <div class="Container">
                                <?php echo smarty_function_module(array('name'=>"MeModule"),$_smarty_tpl);?>

                                <button class="mobileMebox-buttonClose Close">
                                    <span>×</span>
                                </button>
                            </div>
                        </nav>
                    </header>
                </div>
            <?php }?>
            <div class="Frame-body">
                <div class="Frame-content">
                    <div class="Container">
                        <div class="Frame-contentWrap">
                            <div class="Frame-details">
                                <?php if (!$_smarty_tpl->tpl_vars['isHomepage']->value) {?>
                                    <div class="Frame-row">
                                        <nav class="BreadcrumbsBox">
                                            <?php echo smarty_function_breadcrumbs(array(),$_smarty_tpl);?>

                                        </nav>
                                    </div>
                                <?php }?>
                                <?php if (!$_smarty_tpl->tpl_vars['DataDrivenTitleBar']->value) {?>
                                    <div class="Frame-row SearchBoxMobile">
                                        <?php if (!$_smarty_tpl->tpl_vars['SectionGroups']->value && !inSection(array("SearchResults"))) {?>
                                            <div class="SearchBox js-sphinxAutoComplete" role="search">
                                                <?php if ($_smarty_tpl->tpl_vars['hasAdvancedSearch']->value === true) {?>
                                                    <?php echo smarty_function_module(array('name'=>"AdvancedSearchModule"),$_smarty_tpl);?>

                                                <?php } else { ?>
                                                    <?php echo smarty_function_searchbox(array(),$_smarty_tpl);?>

                                                <?php }?>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                                <div class="Frame-row">
                                    <main id="MainContent" class="Content MainContent">
                                        <?php if (inSection("Profile")) {?>
                                            <div class="Profile-header">
                                                <div class="Profile-photo">
                                                    <div class="PhotoLarge">
                                                        <?php echo smarty_function_module(array('name'=>"UserPhotoModule"),$_smarty_tpl);?>

                                                    </div>
                                                </div>
                                                <div class="Profile-name">
                                                    <h1 class="Profile-username">
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Profile']->value['Name'], ENT_QUOTES, 'UTF-8', true);?>

                                                    </h1>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['Rank']->value))) {?>
                                                        <span class="Profile-rank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Rank']->value['Label'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <?php echo smarty_function_asset(array('name'=>"Content"),$_smarty_tpl);?>

                                    </main>
                                    <aside class="Panel Panel-main">
                                        <?php if (!$_smarty_tpl->tpl_vars['SectionGroups']->value && !$_smarty_tpl->tpl_vars['DataDrivenTitleBar']->value) {?>
                                            <div class="SearchBox js-sphinxAutoComplete" role="search">
                                                <?php echo smarty_function_searchbox(array(),$_smarty_tpl);?>

                                            </div>
                                        <?php }?>
                                        <?php echo smarty_function_asset(array('name'=>"Panel"),$_smarty_tpl);?>

                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Frame-footer">
            <?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
    <div id="modals"></div>
    <?php echo smarty_function_event(array('name'=>"AfterBody"),$_smarty_tpl);?>

</body>

</html>
<?php }
}
