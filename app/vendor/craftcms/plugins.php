<?php

$vendorDir = dirname(__DIR__);

return array (
  'craftcms/contact-form-honeypot' => 
  array (
    'class' => 'craft\\contactform\\honeypot\\Plugin',
    'basePath' => $vendorDir . '/craftcms/contact-form-honeypot/src',
    'handle' => 'contact-form-honeypot',
    'aliases' => 
    array (
      '@craft/contactform/honeypot' => $vendorDir . '/craftcms/contact-form-honeypot/src',
    ),
    'name' => 'Contact Form Honeypot',
    'version' => '1.0.2',
    'description' => 'Add a honeypot captcha to your Craft CMS contact form',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/contact-form-honeypot/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/contact-form-honeypot/archive/master.zip',
  ),
  'imarc/craft-googlecustomsearch' => 
  array (
    'class' => 'imarc\\googlecustomsearch\\Plugin',
    'basePath' => $vendorDir . '/imarc/craft-googlecustomsearch/src',
    'handle' => 'googlecustomsearch',
    'aliases' => 
    array (
      '@imarc/googlecustomsearch' => $vendorDir . '/imarc/craft-googlecustomsearch/src',
    ),
    'name' => 'Google Custom Search',
    'version' => '2.0.1',
    'description' => 'A Craft plugin for integrating with Google\'s Custom Search (and Google\'s Site Search.)',
    'developer' => 'Imarc',
    'developerUrl' => 'https://www.imarc.com',
    'changelogUrl' => 'https://github.com/imarc/craft-googlecustomsearch/blob/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
  ),
  'luwes/craft3-codemirror' => 
  array (
    'class' => 'luwes\\codemirror\\CodeMirror',
    'basePath' => $vendorDir . '/luwes/craft3-codemirror/src',
    'handle' => 'code-mirror',
    'aliases' => 
    array (
      '@luwes/codemirror' => $vendorDir . '/luwes/craft3-codemirror/src',
    ),
    'name' => 'CodeMirror',
    'version' => '1.0.1',
    'description' => 'Add the awesome in-browser code editor CodeMirror as a field type.',
    'developer' => 'Wesley Luyten',
    'developerUrl' => 'https://wesleyluyten.com',
    'changelogUrl' => 'https://raw.githubusercontent.com/luwes/craft3-codemirror/master/CHANGELOG.md',
  ),
  'misterbk/mix' => 
  array (
    'class' => 'misterbk\\mix\\Mix',
    'basePath' => $vendorDir . '/misterbk/mix/src',
    'handle' => 'mix',
    'aliases' => 
    array (
      '@misterbk/mix' => $vendorDir . '/misterbk/mix/src',
    ),
    'name' => 'Mix',
    'version' => '1.5.2',
    'schemaVersion' => '1.0.0',
    'description' => 'Helper plugin for Laravel Mix in Craft CMS templates',
    'developer' => 'mister bk! GmbH',
    'developerUrl' => 'https://www.mister-bk.de/',
    'developerEmail' => 'dev@mister-bk.de',
    'documentationUrl' => 'https://github.com/mister-bk/craft-plugin-mix/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/mister-bk/craft-plugin-mix/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/mister-bk/craft-plugin-mix/archive/master.zip',
    'hasCpSettings' => true,
    'hasCpSection' => false,
    'components' => 
    array (
      'mix' => 'misterbk\\mix\\services\\MixService',
    ),
  ),
  'rias/craft-position-fieldtype' => 
  array (
    'class' => 'rias\\positionfieldtype\\PositionFieldtype',
    'basePath' => $vendorDir . '/rias/craft-position-fieldtype/src',
    'handle' => 'position-fieldtype',
    'aliases' => 
    array (
      '@rias/positionfieldtype' => $vendorDir . '/rias/craft-position-fieldtype/src',
    ),
    'name' => 'Position Fieldtype',
    'version' => '1.0.14',
    'schemaVersion' => '1.0.0',
    'description' => 'Brings back the Position fieldtype from Craft 2',
    'developer' => 'Rias',
    'developerUrl' => 'https://rias.be',
    'changelogUrl' => 'https://raw.githubusercontent.com/Rias500/craft-position-fieldtype/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'verbb/expanded-singles' => 
  array (
    'class' => 'verbb\\expandedsingles\\ExpandedSingles',
    'basePath' => $vendorDir . '/verbb/expanded-singles/src',
    'handle' => 'expanded-singles',
    'aliases' => 
    array (
      '@verbb/expandedsingles' => $vendorDir . '/verbb/expanded-singles/src',
    ),
    'name' => 'Expanded Singles',
    'version' => '1.0.7',
    'schemaVersion' => '1.0.0',
    'description' => 'Alters the Entries Index sidebar to list all Singles, rather than grouping them under a \'Singles\' link.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'documentationUrl' => 'https://github.com/verbb/expanded-singles',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/expanded-singles/craft-3/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
  ),
  'dolphiq/redirect' => 
  array (
    'class' => 'dolphiq\\redirect\\RedirectPlugin',
    'basePath' => $vendorDir . '/dolphiq/redirect/src',
    'handle' => 'redirect',
    'aliases' => 
    array (
      '@dolphiq/redirect' => $vendorDir . '/dolphiq/redirect/src',
    ),
    'name' => 'Redirect plugin for Craft 3',
    'version' => '1.0.23',
    'schemaVersion' => '1.0.5',
    'description' => 'Craft redirect plugin provides an easy way to enter and maintain 301 and 302 redirects and 404 error pages.',
    'developer' => 'Dolphiq',
    'developerUrl' => 'https://dolphiq.nl/',
    'documentationUrl' => 'https://github.com/Dolphiq/craft3-plugin-redirect/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/Dolphiq/craft3-plugin-redirect/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
  ),
  'sebastianlenz/linkfield' => 
  array (
    'class' => 'typedlinkfield\\Plugin',
    'basePath' => $vendorDir . '/sebastianlenz/linkfield/src',
    'handle' => 'typedlinkfield',
    'aliases' => 
    array (
      '@typedlinkfield' => $vendorDir . '/sebastianlenz/linkfield/src',
    ),
    'name' => 'Typed link field',
    'version' => '1.0.19',
    'description' => 'A Craft field type for selecting links',
    'developer' => 'Sebastian Lenz',
    'developerUrl' => 'https://github.com/sebastian-lenz/',
  ),
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.3.3.2',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'wbrowar/adminbar' => 
  array (
    'class' => 'wbrowar\\adminbar\\AdminBar',
    'basePath' => $vendorDir . '/wbrowar/adminbar/src',
    'handle' => 'admin-bar',
    'aliases' => 
    array (
      '@wbrowar/adminbar' => $vendorDir . '/wbrowar/adminbar/src',
    ),
    'name' => 'Admin Bar',
    'version' => '3.1.9',
    'schemaVersion' => '3.1.0',
    'description' => 'Front-end shortcuts for clients logged into Craft CMS.',
    'developer' => 'Will Browar',
    'developerUrl' => 'https://wbrowar.com/plugins/adminbar',
    'changelogUrl' => 'https://raw.githubusercontent.com/wbrowar/craft-3-adminbar/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
    'components' => 
    array (
      'bar' => 'wbrowar\\adminbar\\services\\Bar',
      'editLinks' => 'wbrowar\\adminbar\\services\\EditLinks',
    ),
  ),
  'craftcms/contact-form' => 
  array (
    'class' => 'craft\\contactform\\Plugin',
    'basePath' => $vendorDir . '/craftcms/contact-form/src',
    'handle' => 'contact-form',
    'aliases' => 
    array (
      '@craft/contactform' => $vendorDir . '/craftcms/contact-form/src',
    ),
    'name' => 'Contact Form',
    'version' => '2.2.5',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'documentationUrl' => 'https://github.com/craftcms/contact-form/blob/v2/README.md',
    'components' => 
    array (
      'mailer' => 'craft\\contactform\\Mailer',
    ),
  ),
  'verbb/field-manager' => 
  array (
    'class' => 'verbb\\fieldmanager\\FieldManager',
    'basePath' => $vendorDir . '/verbb/field-manager/src',
    'handle' => 'field-manager',
    'aliases' => 
    array (
      '@verbb/fieldmanager' => $vendorDir . '/verbb/field-manager/src',
    ),
    'name' => 'Field Manager',
    'version' => '2.1.1',
    'description' => 'Manage your fields and field groups with ease with simple field or group cloning and quicker overall management.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/field-manager/craft-3/CHANGELOG.md',
  ),
  'imarc/craft-kindling' => 
  array (
    'class' => 'Imarc\\Craft\\Kindling\\Plugin',
    'basePath' => $vendorDir . '/imarc/craft-kindling/src',
    'handle' => 'craft-kindling',
    'aliases' => 
    array (
      '@Imarc/Craft/Kindling' => $vendorDir . '/imarc/craft-kindling/src',
    ),
    'name' => 'Craft Kindling',
    'version' => '2.05',
    'description' => 'A Craft plugin and Twig Extension providing some convienences.',
    'developer' => 'Imarc',
    'developerUrl' => 'https://www.imarc.com',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'ether/tags' => 
  array (
    'class' => 'ether\\tagManager\\TagManager',
    'basePath' => $vendorDir . '/ether/tags/src',
    'handle' => 'tag-manager',
    'aliases' => 
    array (
      '@ether/tagManager' => $vendorDir . '/ether/tags/src',
    ),
    'name' => 'Tags',
    'version' => '1.0.5',
    'description' => 'A tag manager for Craft 3',
    'developer' => 'Ether Creative',
    'developerUrl' => 'https://ethercreative.co.uk',
    'changelogUrl' => 'https://raw.githubusercontent.com/ethercreative/tags/master/CHANGELOG.md',
  ),
);
