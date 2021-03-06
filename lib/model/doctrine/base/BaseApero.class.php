<?php

/**
 * BaseApero
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $description
 * @property string $location_name
 * @property string $location_address
 * @property string $location_city
 * @property string $location_zipcode
 * @property date $date_at
 * @property time $time_at
 * @property float $price
 * @property integer $max_people
 * @property boolean $is_active
 * @property Doctrine_Collection $AperoUser
 * 
 * @method string              getDescription()      Returns the current record's "description" value
 * @method string              getLocationName()     Returns the current record's "location_name" value
 * @method string              getLocationAddress()  Returns the current record's "location_address" value
 * @method string              getLocationCity()     Returns the current record's "location_city" value
 * @method string              getLocationZipcode()  Returns the current record's "location_zipcode" value
 * @method date                getDateAt()           Returns the current record's "date_at" value
 * @method time                getTimeAt()           Returns the current record's "time_at" value
 * @method float               getPrice()            Returns the current record's "price" value
 * @method integer             getMaxPeople()        Returns the current record's "max_people" value
 * @method boolean             getIsActive()         Returns the current record's "is_active" value
 * @method Doctrine_Collection getAperoUser()        Returns the current record's "AperoUser" collection
 * @method Apero               setDescription()      Sets the current record's "description" value
 * @method Apero               setLocationName()     Sets the current record's "location_name" value
 * @method Apero               setLocationAddress()  Sets the current record's "location_address" value
 * @method Apero               setLocationCity()     Sets the current record's "location_city" value
 * @method Apero               setLocationZipcode()  Sets the current record's "location_zipcode" value
 * @method Apero               setDateAt()           Sets the current record's "date_at" value
 * @method Apero               setTimeAt()           Sets the current record's "time_at" value
 * @method Apero               setPrice()            Sets the current record's "price" value
 * @method Apero               setMaxPeople()        Sets the current record's "max_people" value
 * @method Apero               setIsActive()         Sets the current record's "is_active" value
 * @method Apero               setAperoUser()        Sets the current record's "AperoUser" collection
 * 
 * @package    aperosymfony
 * @subpackage model
 * @author     Benjamin Laugueux <b.laugueux@yzalis.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseApero extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('apero');
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('location_name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('location_address', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('location_city', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('location_zipcode', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('date_at', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('time_at', 'time', null, array(
             'type' => 'time',
             'notnull' => true,
             ));
        $this->hasColumn('price', 'float', null, array(
             'type' => 'float',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('max_people', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));

        $this->option('collation', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AperoUser', array(
             'local' => 'id',
             'foreign' => 'apero_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'location_city',
              1 => 'location_name',
             ),
             'canUpdate' => true,
             ));
        $this->actAs($sluggable0);
    }
}