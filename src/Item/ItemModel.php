<?php
namespace Website\Item;

use Website\Core\AbstractModel;

class ItemModel extends AbstractModel
{
    public $id;
    public $title;
    public $description;
    public $price;
    public $negotiation;
    public $status;
    public $picture;
    public $category;
    public $subcategory;
    public $brand;
    public $model;
    public $sex;
    public $gear;
    public $frame_material;
    public $frame_shape;
    public $wheel_size;
    public $spring_travel;
    public $spring;
    public $weight;
    public $color;
    public $brake;
    public $engine;
    public $user_id;

    public function short_description($value){
        $pos =  strpos($value, " ", 400);
        return substr($value, 0, $pos);
    } 
}

?>