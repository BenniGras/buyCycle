<?php
namespace Website\Picture;

use PDO;
use Website\Core\AbstractRepository;

class PictureRepository extends AbstractRepository
{
    public function getTableName()
    {
        return "pictures";
    }

    public function getModelName()
    {
        return "Website\\Picture\\PictureModel";
    }

    // saves pictures in folder, adds picturename to database
    public function uploadPicture($files, $item_id, $filename)
    {
        foreach ($files AS $file) {

            // moves from temporary location to folder
            move_uploaded_file($file['tmp_name'], "../pictures/".$filename);

            // adds assignment to database
            $table = $this->getTableName();
            
            $stmt = $this->pdo->prepare("INSERT INTO `$table`
            (`name`, `item_id`) VALUES (:name, :item_id)"
            );

            $stmt->execute([
                'name' => $filename,
                'item_id' => $item_id,
            ]);
        }
        
    }

    // gets pictures by item_id
    public function getPictures()
    {

    }

    // creates filename 
    public function createFileName($filename)
    {
        $fileExt = explode('.', $filename);
        $fileActualExt = strtolower(end($fileExt));
        $filename = uniqid('', true).".".$fileActualExt;
        
        return $filename;
    }
}
?>