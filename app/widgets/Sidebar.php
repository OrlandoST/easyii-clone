<?php
namespace app\widgets;

use Yii;
use yii\base\Widget;

class SidebarWidget extends Widget
{

    public function init()
    {

    }

    public function run()
    {
        return $this->render('sidebar');
    }

}
