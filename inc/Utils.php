<?php
namespace WP_Starter_Theme;
if (!defined('ABSPATH')) {
  exit;
}

final class Utils
{
  public static function register()
  {
    add_filter('excerpt_length', [self::class, 'excerpt_length_fn']);
  }
  public static function excerpt_length_fn($length)
  {
    return 20;
  }
}