<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RProleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use DB;
use App\Models\Tag;

/**
 * Class RProleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RProleCrudController extends CrudController
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
        CRUD::setModel(\App\Models\RProle::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/rprole');
        CRUD::setEntityNameStrings('RP Roles', 'RP Roles');
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
        CRUD::column('Nome_ingame')->type('text');
        CRUD::column('Discord')->type('text');
        
        CRUD::addColumn([ // select2_from_ajax: 1-n relationship
                'name'    => 'Tags',
                'label'   => 'Tags',
                'type'    => 'text',
                'options' => [DB::table('Tags')->where('id', '%name%')->value('name')],
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
        CRUD::setValidation(RProleRequest::class);

        //CRUD::setFromDb(); // fields
        crud::addfield(
            [
                'name'  => 'Nome_ingame', // The db column name
                'label' => 'Nome no Jogo', // Table column heading
                'type'  => 'text'
            ]);
        crud::addfield(
            [
                    'name'  => 'Discord', // The db column name
                    'label' => 'Discord', // Table column heading
                    'type'  => 'text'
            ]);
        crud::addfield(

            [
                'label'     => "Tags",
                'type'      => 'select2_from_array',
                'name'      => 'Tags', // the db column for the foreign key
                'options'   =>  DB::table('tags')->pluck('name','name')->toArray()
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
