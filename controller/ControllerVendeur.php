<?php
class ControlleurVendeur{
    private ModelVendeur $model;
    private ViewVendeur $view;

    public function __construct(ModelVendeur $newmodel, ViewVendeur $newview){
        $this->model = $newmodel;
        $this->view = $newview;
    }

    public function render(): void{
        $data = $this->model->findAll();
        $this->view->setData($data) -> display();
    }
        


}
?>