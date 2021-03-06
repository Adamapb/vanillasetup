<?php use Vanilla\Theme\BoxThemeShim;if (!defined('APPLICATION')) exit();
$dataDriven = \Gdn::themeFeatures()->useDataDrivenTheme();
$User = val('User', Gdn::controller());
if (!$User && Gdn::session()->isValid()) {
    $User = Gdn::session()->User;
}

if (!$User) {
    return;
}

$Photo = $User->Photo;
if ($Photo) {
    $Photo = (isUrl($Photo)) ? $Photo : Gdn_Upload::url(changeBasename($Photo, 'p%s'));
    $PhotoAlt = t('Avatar');
} else {
    $Photo = UserModel::getDefaultAvatarUrl($User, 'profile');
    $PhotoAlt = t('Default Avatar');
}

if ($User->Banned) {
    $BannedPhoto = c('Garden.BannedPhoto', 'https://images.v-cdn.net/banned_large.png');
    if ($BannedPhoto) {
        $Photo = Gdn_Upload::url($BannedPhoto);
    }
}

if ($Photo) : ?>
    <div class="Photo PhotoWrap PhotoWrapLarge widget-dontUseCssOnMe <?php echo val('_CssClass', $User); ?>">
        <?php
        $canEditPhotos = Gdn::session()->checkRankedPermission(c('Garden.Profile.EditPhotos', true)) || checkPermission('Garden.Users.Edit');

        if (!$User->Banned && $canEditPhotos && (Gdn::session()->UserID == $User->UserID || checkPermission('Garden.Users.Edit'))) {
            $contents = ($dataDriven ? '<span class="icon icon-camera"></span>' : '').t('Change Icon');
            echo anchor(wrap($contents, "span", ["class" => "ChangePicture-Text"]), '/profile/picture?userid='.$User->UserID, 'ChangePicture Popup', ["aria-label" => t("Change Picture")]);
        }

        echo img($Photo, ['class' => 'ProfilePhotoLarge', 'alt' => $PhotoAlt]);
        ?>
    </div>
<?php elseif ($User->UserID == Gdn::session()->UserID || Gdn::session()->checkPermission('Garden.Users.Edit')) : ?>
    <div class="Photo">
        <?php echo anchor(t('Add a Profile Picture'), '/profile/picture?userid='.$User->UserID, 'AddPicture BigButton'); ?>
    </div>
<?php
endif;
