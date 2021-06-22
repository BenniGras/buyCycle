<?php
namespace Website\Highlight;

use PDO;
use Website\Core\AbstractRepository;

class HighlightRepository extends AbstractRepository
{
    public function getTableName()
    {
        return "wishlist";
    }

    public function getModelName()
    {
        return "Website\\Wishlist\\WishlistModel";
    }
}
?>