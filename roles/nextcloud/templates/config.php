<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'datadirectory' => '/data',
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'instanceid' => 'oczcr44lmvpp',
  'passwordsalt' => '{{ nextcloud_powersalt }}',
  'secret' => '{{ nextcloud_secret }}', 
  'trusted_domains' => 
  array (
    0 => '{{ nextcloud_domain }}',
    1 => '{{ local_ip }}',
  ),
  'dbtype' => 'mysql',
  'version' => '23.0.2.1',
  // 'overwrite.cli.url' => 'https://{{ nextcloud_domain }}',
  'dbname' => '{{ nextcloud_db_name }}',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => '{{ nextcloud_db_user }}',
  'dbpassword' => '{{ nextcloud_db_password }}',
  'installed' => false,
  'app_install_overwrite' => 
  array (
    0 => 'user_saml',
  ),
  'default_phone_region' => 'AR',
  'trusted_proxies' => 
  array (
    0 => 'swag',
  ),
  'overwritehost' => '{{ nextcloud_domain }}',
  'overwriteprotocol' => 'https',
  'maintenance' => false,
  'enabledPreviewProviders' =>
  array (
    0 => 'OC\\Preview\\PNG',
    1 => 'OC\\Preview\\JPEG',
    2 => 'OC\\Preview\\GIF',
    3 => 'OC\\Preview\\HEIC',
    4 => 'OC\\Preview\\BMP',
    5 => 'OC\\Preview\\XBitmap',
    6 => 'OC\\Preview\\MP3',
    7 => 'OC\\Preview\\TXT',
    8 => 'OC\\Preview\\MarkDown',
    9 => 'OC\\Preview\\OpenDocument',
    10 => 'OC\\Preview\\Krita',
  ),
);
