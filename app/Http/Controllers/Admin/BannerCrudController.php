<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BannerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BannerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BannerCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Banner::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/banner');
        CRUD::setEntityNameStrings('banner', 'banners');
        
     CRUD::operation('list', function() {
        CRUD::removeButton('create');
    });
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns
        CRUD::addColumn([ // select2_from_ajax: 1-n relationship
            'name'    => 'texto1',
            'label'   => 'Texto Azul',
            'type'    => 'text',
        ]);
        CRUD::addColumn([ // select2_from_ajax: 1-n relationship
            'name'    => 'texto2',
            'label'   => 'Texto Branco',
            'type'    => 'text',
        ]);
        CRUD::addColumn([ // select2_from_ajax: 1-n relationship
            'name'    => 'botao',
            'label'   => 'Botao Ativo?',
            'type'    => 'text',
        ]);
        CRUD::addColumn([ // select2_from_ajax: 1-n relationship
            'name'    => 'link',
            'label'   => 'Link',
            'type'    => 'text',
        ]);
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(BannerRequest::class);

        //CRUD::setFromDb(); // fields
        /* */
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        crud::addfield(

            [
                'name'    => 'texto1',
                'label'   => 'Texto Azul',
                'type'    => 'text',
            ]);
        crud::addfield(

        [
            'name'    => 'texto2',
            'label'   => 'Texto Branco',
            'type'    => 'text',
        ]);  
        crud::addfield([   // select2_from_array
            'name'        => 'botao',
            'label'       => "Tem botao?",
            'type'        => 'select2_from_array',
            'options'     => ['Sim' => 'Sim', 'Nao' => 'Nao'],
            'allows_null' => false,
            'default'     => 'Nao',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        crud::addfield(

            [
                'name'    => 'link',
                'label'   => 'link',
                'type'    => 'text',
            ]);
    }
}
