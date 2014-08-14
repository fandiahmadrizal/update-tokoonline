<?php

Yii::import('zii.widgets.CPortlet');

class Submenu extends CPortlet
{
        public function init()
        {
                parent::init();
        }

        protected function renderContent()
        {
                $menu=Kategoritbl::model()->findAll();
                $this->render('index',array('menu'=>$menu));
        }
}