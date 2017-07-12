<?
return [
    'datetimeFormat' => 'm/d/Y g:i A',
    'quality' => 90,
    'defaultPermission' => 0775,

    'sources' => [
        'default' => [],
    ],

    'createThumb' => true,
    'thumbFolderName' => '_thumbs',
    'excludeDirectoryNames' => ['.tmb', '.quarantine'],
    'maxFileSize' => '8mb',

    'allowCrossOrigin' => false,

    'baseurl' => ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . '/',
    'root' => __DIR__,
    'extensions' => ['jpg', 'png', 'gif', 'jpeg'],
];