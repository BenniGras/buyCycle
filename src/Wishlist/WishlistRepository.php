<?php
namespace Website\Wishlist;

use PDO;
use Website\Core\AbstractRepository;

class WishlistRepository extends AbstractRepository
{
    public function getTableName()
    {
        return "wishlist";
    }

    public function getModelName()
    {
        return "Website\\Wishlist\\WishlistModel";
    }

    public function addWishlist()
    {

    }

    public function deleteWishlist()
    {

    }
}
?>