<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 05.09.2018
 * Time: 19:06
 */

namespace App\Models;

use App\Services\CategoriesService;
use PDO;

class Categories extends AbstractModel
{
    private CategoriesService $categoriesService;

    public function __construct()
    {
        parent::__construct();
        $this->categoryList = new CategoriesService();
    }

    public function getCategoryId()
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $id = substr($actual_link, strrpos($actual_link, '/') + 1);
        return $id;
    }

    public function getCategories()
    {
        $sql = $this->connection->prepare("SELECT * FROM category");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = $this->connection->prepare("INSERT INTO `category`(`cat_code`, `cat_name`) VALUES (:cat_code, :cat_name)");

        $sql->bindParam(':cat_code', $data['cat_code'], PDO::PARAM_STR);
        $sql->bindParam(':cat_name', $data['cat_name'], PDO::PARAM_STR);

        return $sql->execute();
    }

    public function updateStore($data)
    {
        {
            $id = $this->getCategoryId();

            $sql = $this->connection->prepare("UPDATE `category` SET `cat_code` = :cat_code, `cat_name` = :cat_name WHERE `category` . `cat_id` = :cat_id");

            $sql->bindParam(':cat_id', $id, PDO::PARAM_STR);
            $sql->bindParam(':cat_code', $data['cat_code'], PDO::PARAM_STR);
            $sql->bindParam(':cat_name', $data['cat_name'], PDO::PARAM_STR);

            return $sql->execute();
        }
    }

    public function delete()
    {
        {
            $id = $this->getCategoryId();

            $sql = $this->connection->prepare("DELETE FROM `category` WHERE `category`.`cat_id` = :cat_id");

            $sql->bindParam(':cat_id', $id, PDO::PARAM_STR);

            return $sql->execute();
        }
    }

}