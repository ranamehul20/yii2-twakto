<?php

namespace ranamehul20\twak;

use yii\base\Widget;
use yii\helpers\Html;

class TwakWidget extends Widget {

    public $key;

    public function init() {
        parent::init();
        if ($this->key === null) {
            $this->key = '';
        }
    }

    public function run() {
        $js = <<<JS
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/$this->key';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
JS;
        return Html::script($js, ['type' => "text/javascript"]);
    }

}
