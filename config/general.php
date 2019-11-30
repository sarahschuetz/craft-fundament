<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

return [
    '*' => [
        'defaultCpLanguage' => 'en',
        'defaultSearchTermOptions' => [
            'attribute' => null,
            'exact' => false,
            'exclude' => false,
            'subLeft' => true,
            'subRight' => true,
        ],
        'defaultWeekStartDay' => 1,
        'enableTemplateCaching' => false,
        'headlessMode' => true,
        'limitAutoSlugsToAscii' => true,
        'maxUploadFileSize' => 67108864,
        'omitScriptNameInUrls' => true,
        'postCpLoginRedirect' => 'entries',
        'securityKey' => getenv('SECURITY_KEY'),
        'siteName' => 'Fundament',
        'timezone' => 'Europe/Vienna',
        'transformGifs' => false,
        'useProjectConfigFile' => false,
        'userSessionDuration' => 'P1W',
        'rememberedUserSessionDuration' => 'P4W',
    ],

    'production' => [
        'allowUpdates' => false,
        'backupOnUpdate' => false,
        'devMode' => false,
        'enableTemplateCaching' => false,
        'isSystemLive' => true,
        'allowAdminChanges' => true,
    ],

    'staging' => [
        'allowUpdates' => false,
        'backupOnUpdate' => false,
        'devMode' => true,
        'enableTemplateCaching' => false,
        'isSystemLive' => false,
        'allowAdminChanges' => true,
    ],

    'dev' => [
        'allowUpdates' => true,
        'backupOnUpdate' => false,
        'devMode' => true,
        'enableTemplateCaching' => false,
        'isSystemLive' => false,
        'allowAdminChanges' => true,
        'testToEmailAddress' => 'sarah@fredmansky.at',
    ],
];
