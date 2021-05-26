<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Contracts\FaqContract;
use App\Http\Requests\FaqRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FaqCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FaqCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Faq::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/faq');
        CRUD::setEntityNameStrings('faq', 'faqs');
    }

    protected function setupShowOperation()
    {
        CRUD::column(FaqContract::TITLE)->label('Вопрос');
        CRUD::column(FaqContract::DESC)->label('Ответ');
        CRUD::column(FaqContract::STATUS)->label('Статус');
    }

    protected function setupListOperation()
    {
        CRUD::column(FaqContract::TITLE)->label('Вопрос');
        CRUD::column(FaqContract::DESC)->label('Ответ');
        CRUD::column(FaqContract::STATUS)->label('Статус');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(FaqRequest::class);

        CRUD::field(FaqContract::TITLE)->label('Вопрос')->attributes([
            'required'  =>  'required'
        ]);
        CRUD::field(FaqContract::DESC)->label('Ответ')->attributes([
            'required'  =>  'required'
        ]);
        CRUD::field(FaqContract::STATUS)->label('Статус')->type('select_from_array')->options([
            FaqContract::ON    =>  'Включен ',
            FaqContract::OFF   =>  'Отключен',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
