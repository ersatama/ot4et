<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Contracts\NewsContract;
use App\Http\Requests\NewsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Domain\Contracts\FaqContract;

class NewsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('Новости', 'новость');
    }

    protected function setupListOperation()
    {
        CRUD::column(NewsContract::NAME);
        CRUD::column(NewsContract::MAIN_IMAGE);
        CRUD::column(NewsContract::ORDER);
        CRUD::column(NewsContract::TEXT);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(NewsRequest::class);

        CRUD::field(NewsContract::NAME);
        CRUD::field(NewsContract::MAIN_IMAGE);
        CRUD::field(NewsContract::ORDER);
        CRUD::field(NewsContract::TEXT);

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
