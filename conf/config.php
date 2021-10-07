<?php if (!defined('APPLICATION')) exit();

// Context
$Configuration['Context']['Secret'] = 'XPk2ICe5fesvNYdpIzxMwBhP1Cf6qQ6m';

// Database
$Configuration['Database']['Name'] = 'vanilla';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'src2';
$Configuration['Database']['Password'] = '12345';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['recaptcha'] = false;
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['stubcontent'] = true;
$Configuration['EnabledPlugins']['swagger-ui'] = true;
$Configuration['EnabledPlugins']['Quotes'] = false;
$Configuration['EnabledPlugins']['rich-editor'] = true;
$Configuration['EnabledPlugins']['googlesignin'] = true;
$Configuration['EnabledPlugins']['Twitter'] = true;

// Feature
$Configuration['Feature']['DeferredLegacyScripts']['Enabled'] = true;

// Garden
$Configuration['Garden']['Title'] = 'Reddit';
$Configuration['Garden']['Cookie']['Salt'] = 'dvR7oSKLzLVtbmcq';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Basic';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['InviteTarget'] = '';
$Configuration['Garden']['Registration']['InviteRoles'][3] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][4] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][8] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][32] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][16] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'NCRCU Forum';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['UpdateToken'] = '2c3257c54546a89cc8497eee6c03532f2bc7adc5';
$Configuration['Garden']['InputFormatter'] = 'rich';
$Configuration['Garden']['Themes']['Visible'] = 'theme-foundation';
$Configuration['Garden']['Version'] = 'Undefined';
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['MobileInputFormatter'] = 'rich';
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['HomepageTitle'] = 'Reddit';
$Configuration['Garden']['Description'] = '';
$Configuration['Garden']['OrgName'] = '';
$Configuration['Garden']['Logo'] = '';
$Configuration['Garden']['MobileLogo'] = '';
$Configuration['Garden']['BannerImage'] = '';
$Configuration['Garden']['FavIcon'] = 'favicon_8aafa10a4ed3400da60d17c9c8c6b6bf.ico';
$Configuration['Garden']['TouchIcon'] = '';
$Configuration['Garden']['ShareImage'] = '';
$Configuration['Garden']['MobileAddressBarColor'] = '#ef2929';
$Configuration['Garden']['Theme'] = 'lavendermoon';

// OAuth2
$Configuration['OAuth2']['Flags']['SendScopeOnTokenRequest'] = true;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';

// Recaptcha
$Configuration['Recaptcha']['PrivateKey'] = '';
$Configuration['Recaptcha']['PublicKey'] = '';

// RecaptchaV3
$Configuration['RecaptchaV3']['PublicKey'] = '';
$Configuration['RecaptchaV3']['PrivateKey'] = '';

// RichEditor
$Configuration['RichEditor']['Quote']['Enable'] = true;

// Routes
$Configuration['Routes']['YXBwbGUtdG91Y2gtaWNvbi5wbmc='] = array (
  0 => 'utility/showtouchicon',
  1 => 'Internal',
);
$Configuration['Routes']['cm9ib3RzLnR4dA=='] = array (
  0 => '/robots',
  1 => 'Internal',
);
$Configuration['Routes']['dXRpbGl0eS9yb2JvdHM='] = array (
  0 => '/robots',
  1 => 'Internal',
);
$Configuration['Routes']['Y29udGFpbmVyLmh0bWw='] = array (
  0 => 'staticcontent/container',
  1 => 'Internal',
);
$Configuration['Routes']['DefaultController'] = 'discussions';