<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PacotevipRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PacotevipCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PacotevipCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;
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
        CRUD::setModel(\App\Models\Pacotevip::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/pacotevip');
        CRUD::setEntityNameStrings('pacotevip', 'pacotevips');
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
        
         CRUD::column('Nome')->type('text');
         CRUD::column('Tipo')->type('text');
         CRUD::column('Valor')->type('text');
         CRUD::column('Novidade')->type('boolean');
        
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PacotevipRequest::class);

        crud::addfield(
        [
            'name'  => 'Nome', // The db column name
            'label' => 'Nome do pacote', // Table column heading
            'type'  => 'text'
        ]);
        crud::addfield([
            // select_from_array
            'name'      => 'Tipo',// The db column name
            'label'     => 'Tipo de pacote', // Table column heading
            'type'    => 'select_from_array',
            'options' => ['Individuais'=>'Individuais', 'Organizações'=>'Organizações','Extras'=>'Extras'],
        ]); // fields
        crud::addfield(
            [
                'name'  => 'Valor', // The db column name
                'label' => 'Preço do pacote', // Table column heading
                'type'  => 'text'
            ]);
        crud::addfield(
            [
                'name'  => 'Novidade', // The db column name
                'label' => 'Este artigo é novidade', // Table column heading
                'type'  => 'boolean',
                'options' => [0 => 'Inactive', 1 => 'Active']
            ]);
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
        $this->setupCreateOperation();
    }
}
