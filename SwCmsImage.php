<?php

if (!defined('_PS_VERSION_'))
    exit;

class SwCmsImage extends ObjectModel {

    public $id;
    public $id_cms;
    public $url;
    public $src;
    public $alt;
    public $date_add;
    public $date_update;

    public static $definition = array(
        'table' => 'swcmsimage',
        'primary' => 'id_image',
        'fields' => array(
            'id_cms' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'url' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'src' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'alt' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_update' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        )
    );

    public function __construct($id = null) {
        parent::__construct($id);
    }

    public static function getAll() {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'swcmsimage';
        $result = DB::getInstance()->executeS($sql);
        return $result;
    }

    public static function getByCmsId($id_cms) {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'swcmsimage WHERE id_cms = ' . $id_cms;
        $result = DB::getInstance()->getRow($sql);
        return $result;
    }

}
