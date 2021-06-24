<?php
namespace Website\Item;

use PDO;
use Website\Core\AbstractRepository;

class ItemRepository extends AbstractRepository
{
    public function getTableName()
    {
        return "items";
    }

    public function getModelName()
    {
        return "Website\\Item\\ItemModel";
    }

    // adds item to database, returns item id
    public function insertItem($post, $picture)
    {
        $table = $this->getTableName();

        if(!isset($post['negotiation'])) {
            $post['negotiation'] = "nein";
        }

        $stmt = $this->pdo->prepare("INSERT INTO `$table`
        (`title`, `description`, `price`, `negotiation`, `status`, `picture`, `category`, `subcategory`, `brand`, `model`, `sex`, `gear`, 
        `frame_material`, `frame_shape`, `frame_height`, `wheel_size`, `spring_travel`, `spring`, `weight`, `color`, `brake`, `engine`,`user_id`)
        VALUES (:title, :description, :price, :negotiation, :status, :picture, :category, :subcategory, :brand, :model, :sex, :gear,
        :frame_material, :frame_shape, :frame_height, :wheel_size, :spring_travel, :spring, :weight, :color, :brake, :engine, :user_id)"
        );

        $stmt->execute([
            'title' => $post["title"],
            'description' => $post["description"],
            'price' => $post["price"],
            'negotiation' => $post["negotiation"],
            'status' => $post["status"],
            'picture' => $picture,
            'category' => $post["category"],
            'subcategory' => $post["subcategory"],
            'brand' => $post["brand"],
            'model' => $post["model"],
            'sex' => $post["sex"],
            'gear' => $post["gear"],
            'frame_material' => $post["frame_material"],
            'frame_shape' => $post["frame_shape"],
            'frame_height' => $post["frame_height"],
            'wheel_size' => $post["wheel_size"],
            'spring_travel' => $post["spring_travel"],
            'spring' => $post["spring"],
            'weight' => $post["weight"],
            'color' => $post["color"],
            'brake' => $post["brake"],
            'engine' => $post["engine"],
            'user_id' => $_SESSION['id'],
        ]);

        return $this->pdo->lastInsertId();
    }

    // updates data of item
    public function updateItem(ItemModel $model)
    {
        $table = $this->getTableName();
        
        $stmt = $this->pdo->prepare("UPDATE `{$table}` SET 
        `title` = :title, `description` = :description, `price` = :price, `negotiation` = :negotiation, `status` = :status, `pictures` = :pictures, `category` = :category,
        `subcategory` = :subcategory, `brand` = :brand, `model` = :model, `sex` = :sex, `gear` = :gear, `frame_material` = :frame_material, `frame_shape` = :frame_shape,
        `frame_height` = :frame_height, `wheel_size` = :wheel_size, `spring_travel` = :spring_travel, `spring` = :spring, `weight` = :weight, `color` = :color, `brake` = :brake,
        `engine` = :engine WHERE `id` = :id");

        $stmt->execute([
            'title' => $model->title,
            'description' => $model->description,
            'price' => $model->price,
            'negotiation' => $model->negotiation,
            'status' => $model->status,
            'pictures' => $model->pictures,
            'category' => $model->category,
            'subcategory' => $model->subcategory,
            'brand' => $model->brand,
            'model' => $model->model,
            'sex' => $model->sex,
            'gear' => $model->gear,
            'frame_material' => $model->frame_material,
            'frame_shape' => $model->frame_shape,
            'frame_height' => $model->frame_height,
            'wheel_size' => $model->wheel_size,
            'spring_travel' => $model->spring_travel,
            'spring' => $model->spring,
            'weight' => $model->weight,
            'color' => $model->color,
            'brake' => $model->brake,
            'engine' => $model->engine,
            'id' => $model->id
        ]);
    }

    // gets all items by user_id
    public function allItemsByUser($user_id)
    {
        $table = $this->getTableName();
        $model = $this->getModelName();

        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE user_id = :user_id");
        $stmt->execute(['user_id' => $user_id]);

        $items = $stmt->fetchAll(PDO::FETCH_CLASS, $model);
        return($items);
        
    }

    public function getWishlist($user_id)
    {
        $table = $this->getTableName();
        $model = $this->getModelName();

        $stmt = $this->pdo->prepare(
            "SELECT * FROM items 
            LEFT JOIN wishlist ON wishlist.item_id = items.id 
            WHERE wishlist.user_id = :user_id ");
        $stmt->execute([
            'user_id' => $user_id,
        ]);

        $items = $stmt->fetchAll(PDO::FETCH_CLASS, $model);
        return($items);
    }

    // gets all items by serach
    public function searchByFilter($get)
    {
        $table = $this->getTableName();
        $model = $this->getModelName();

        $pre = "SELECT * FROM `{$table}`";
        $condition = [];
        $array = [];

        if($get){
            if($get['category'] AND $get['category'] !== "beliebig" AND $get['category'] !== "---"){
                $condition[] = " `category` = :category";
                $array['category'] = $get['category'];
            }

            if($get['price'] AND $get['price'] !== "beliebig"){
                $condition[] = " `price` <= :price";
                $array['price'] = $get['price'];
            }

            /* if($get['city'] AND $get['city'] !== "beliebig"){
                $condition[] = " `city` = :city";
                $array['city'] = $get['city'];
            } */

            if($get['brand'] AND $get['brand'] !== "beliebig" AND $get['brand'] !== "---"){
                $condition[] = " `brand` = :brand";
                $array['brand'] = $get['brand'];
            }

            if($get['model'] AND $get['model'] !== "beliebig" AND $get['model'] !== "---"){
                $condition[] = " `model` = :model";
                $array['model'] = $get['model'];
            }

            if ($condition) {
                $pre = $pre." WHERE";
                $con = implode(" AND ", $condition);
                $pre = $pre.$con;
            }
        }
        $stmt = $this->pdo->prepare($pre);
        $stmt->execute($array);

        $items = $stmt->fetchAll(PDO::FETCH_CLASS, $model);
        return($items);
    }
}
?>