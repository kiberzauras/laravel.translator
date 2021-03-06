<?php
use Kiberzauras\Translator\Path;
use Kiberzauras\Translator\Translator;

if (!function_exists('_t')) {
    /**
     * @param string $string
     * @param array|string $arguments
     * @param string $domain
     * @param string $locale
     * @return string
     * @author Rytis Grincevičius <rytis.grincevicius@gmail.com>
     */
   function _t($string = '', $arguments = array(), $domain = 'default', $locale = '') {
       return Translator::translate($string, $arguments, $domain, $locale);
   }
}

if (!function_exists('translations_path')) {
    /**
     * @param string $path
     * @return string
     * @author Rytis Grincevičius <rytis.grincevicius@gmail.com>
     */
   function translations_path($path = '') {
       return Path::translations_path($path);
   }
}

if (!function_exists('translation_path')) {
    /**
     * @param string $path
     * @param string $locale Uses current locale if not set
     * @return string
     * @author Rytis Grincevičius <rytis.grincevicius@gmail.com>
     */
    function translation_path($path = '', $locale = '') {
        return Path::translation_path($path, $locale);
    }
}
