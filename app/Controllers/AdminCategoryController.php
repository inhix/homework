<?php


namespace App\Controllers;

use App\Services\CategoriesService;
use App\Services\NewsService;

class AdminCategoryController extends Controller
{
    private CategoriesService $categoriesService;

    function __construct()
    {
        parent::__construct();
        $this->categoriesService = new CategoriesService();
    }

    public function index()
    {
        $this->view->categoryList = $this->categoriesService->getCategories();
        $this->view->generate('admin_template_view.phtml', 'category/index.phtml');
    }

    public function create()
    {
        $this->view->generate('admin_template_view.phtml', 'category/create.phtml');
    }

    public function store()
    {
        if ($this->categoriesService->create($_POST)) {
            header('Location: /admin/category');
            exit();
        }
        echo 'Ошибка создания категории';
        exit(500);
    }

    public function update($id)
    {
        $this->view->generate('admin_template_view.phtml', 'category/update.phtml');
    }

    public function updateStore()
    {
        if ($this->categoriesService->update($_POST)) {
            header('Location: /admin/category');
            exit();
        }
        echo 'Ошибка создания категории';
        exit(500);
    }

    function delete()
    {
        if ($this->categoriesService->delete()) {
            header('Location: /admin/category');
            exit();
        }
        echo 'Ошибка удаления категории';
        exit(500);
    }

}