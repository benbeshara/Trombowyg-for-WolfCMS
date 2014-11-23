<?php
/* Security measure */
if (!defined('IN_CMS')) {
    exit();
}

Plugin::setInfos(array(
        'id'          => 'trumbowyg',
        'title'       => 'WYSIWYG Editor',
        'description' => 'Provides an easy-to-use Trumbowyg WYSIWYG editor.',
        'version'     => '0.1b',
));

Filter::add('trumbowyg', 'trumbowyg/filter_trumbowyg.php');

Plugin::addStylesheet('trumbowyg', 'lib/ui/trumbowyg.min.css');
Plugin::addJavascript('trumbowyg', 'lib/trumbowyg.min.js');
Plugin::addJavascript('trumbowyg', 'lib/plugins/base64/trumbowyg.base64.min.js');
Plugin::addJavascript('trumbowyg', 'lib/plugins/colors/trumbowyg.colors.min.js');
Plugin::addStylesheet('trumbowyg', 'lib/plugins/colors/ui/trumbowyg.colors.min.css');
Plugin::addJavascript('trumbowyg', 'lib/plugins/upload/trumbowyg.upload.min.js');