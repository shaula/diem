<?php

/**
 * BaseDmCatalogue
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $source_lang
 * @property string $target_lang
 * @property Doctrine_Collection $Units
 * 
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getSourceLang()  Returns the current record's "source_lang" value
 * @method string              getTargetLang()  Returns the current record's "target_lang" value
 * @method Doctrine_Collection getUnits()       Returns the current record's "Units" collection
 * @method DmCatalogue         setName()        Sets the current record's "name" value
 * @method DmCatalogue         setSourceLang()  Sets the current record's "source_lang" value
 * @method DmCatalogue         setTargetLang()  Sets the current record's "target_lang" value
 * @method DmCatalogue         setUnits()       Sets the current record's "Units" collection
 * 
 * @package    retest
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7200 2010-02-21 09:37:37Z beberlei $
 */
abstract class BaseDmCatalogue extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dm_catalogue');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('source_lang', 'string', 15, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '15',
             ));
        $this->hasColumn('target_lang', 'string', 15, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '15',
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DmTransUnit as Units', array(
             'local' => 'id',
             'foreign' => 'dm_catalogue_id'));
    }
}