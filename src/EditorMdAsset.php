<?php

namespace yiier\editor;

use yii\web\AssetBundle;

class EditorMdAsset extends AssetBundle
{
    public $sourcePath = '@npm/editor.md';

    public $depends = [
        'yii\\web\\JqueryAsset'
    ];

    public function init()
    {
        $this->css = ['css/editormd.css', 'css/editormd.logo.css', 'css/editormd.preview.css'];
        $this->js = ['editormd.min.js', 'languages/en.js'];
    }

}
