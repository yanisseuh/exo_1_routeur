
<?php

require_once '../model/ModelProduit.php';
require_once '../view/ViewProduit.php';

class ControllerProduit
{
    private ModelProduit $model;
    private ViewProduit $view;

    public function __construct(
        ModelProduit $newModel,
        ViewProduit $newView
    ) {
        $this->model = $newModel;
        $this->view = $newView;
    }

    public function render(): void
    {
        $data = $this->model->findAll();

        $this->view->setData($data)->display();
    }
}
