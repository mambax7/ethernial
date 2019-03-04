<?php

class EthernialThemeXthemesPreload
{
    public function eventXthemeSaveSettings($settings)
    {
        $settings = (object) $settings;

        $less_path = XOOPS_THEME_PATH . '/ethernial/less';
        $css_path = XOOPS_CACHE_PATH . '/ethernial';
        if (!is_dir($css_path)) {
            mkdir($css_path, 0777);
        }

        $files = [];

        if ($settings->bootstrap) {
            $files[] = 'bootstrap.less';
        }

        if ($settings->ethernial) {
            $files[] = 'styles.less';
        }

        if ($settings->mywords) {
            $files[] = 'mywords.less';
            $files[] = 'mywords-blocks.less';
        }

        if ($settings->qpages) {
            $files[] = 'qpages.less';
        }

        if ($settings->docs) {
            $files[] = 'docs.less';
        }

        if (empty($files)) {
            return;
        }

        ob_start();
        include $less_path . '/variables.less';
        $variables = ob_get_clean();
        require_once XOOPS_THEME_PATH . '/ethernial/assemble/compiler/Less.php';

        foreach ($files as $file) {
            $less = new Less_Parser([ 'compress' => true ]);
            $less->SetImportDirs([
                $less_path => '/ethernial/',
                $less_path . '/mixins' => '/ethernial/',
            ]);
            $file_content = str_replace('@import "variables.less";', '', file_get_contents($less_path . '/' . $file));

            if ($settings->ethernial && 'styles.less' == $file) {
                $file_content .= $settings->css;
            }

            $less->parse($variables . "\n" . $file_content);
            $css = $less->getCss();
            file_put_contents($css_path . '/' . str_replace(['less', '/'], ['css', '-'], $file), $css);
            $css = '';
        }
    }
}
