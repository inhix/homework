<?php

namespace App\Services;

use App\Models\Categories;

class CategoriesService
{
    private Categories $categoriesModel;

    function __construct()
    {
        $this->categoriesModel = new Categories();
    }

    public function getCategories()
    {
        return $this->categoriesModel->getCategories();
    }

    public function create($data)
    {
        {
            return $this->categoriesModel->create($data);
        }
    }

    public function update($data)
    {
        {
            return $this->categoriesModel->updateStore($data);
        }
    }

    public function delete()
    {
        {
            return $this->categoriesModel->delete();
        }
    }
}