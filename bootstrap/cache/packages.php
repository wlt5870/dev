<?php return array (
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'folklore/graphql' => 
  array (
    'providers' => 
    array (
      0 => 'Folklore\\GraphQL\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'GraphQL' => 'Folklore\\GraphQL\\Support\\Facades\\GraphQL',
    ),
  ),
  'itsgoingd/clockwork' => 
  array (
    'providers' => 
    array (
      0 => 'Clockwork\\Support\\Laravel\\ClockworkServiceProvider',
    ),
    'aliases' => 
    array (
      'Clockwork' => 'Clockwork\\Support\\Laravel\\Facade',
    ),
  ),
  'encore/laravel-admin' => 
  array (
    'providers' => 
    array (
      0 => 'Encore\\Admin\\AdminServiceProvider',
    ),
    'aliases' => 
    array (
      'Admin' => 'Encore\\Admin\\Facades\\Admin',
    ),
  ),
  'laravel-admin-ext/helpers' => 
  array (
    'providers' => 
    array (
      0 => 'Encore\\Admin\\Helpers\\HelpersServiceProvider',
    ),
  ),
  'laravel-admin-ext/log-viewer' => 
  array (
    'providers' => 
    array (
      0 => 'Encore\\Admin\\LogViewer\\LogViewerServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'pack-wlt2/pack-wlt' => 
  array (
    'providers' => 
    array (
      0 => 'PackWlt\\PackWltServiceProvider',
    ),
  ),
  'wangju/ding-notice' => 
  array (
    'providers' => 
    array (
      0 => 'DingNotice\\DingNoticeServiceProvider',
    ),
  ),
  'barryvdh/laravel-ide-helper' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    ),
  ),
  'laravel/socialite' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'socialiteproviders/manager' => 
  array (
    'providers' => 
    array (
      0 => 'SocialiteProviders\\Manager\\ServiceProvider',
    ),
  ),
  'spatie/laravel-permission' => 
  array (
    'providers' => 
    array (
      0 => 'Spatie\\Permission\\PermissionServiceProvider',
    ),
  ),
);