<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ListapacoteRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use DB;

/**
 * Class ListapacoteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ListapacoteCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Listapacote::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/listapacote');
        CRUD::setEntityNameStrings('Lista das Ofertas', 'Lista das Ofertas');
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
            'name'    => 'pacote_id',
            'label'   => 'Nome do Pacote',
            'type'    => 'text',
            'options' => [DB::table('pacotevip')->where('nome', '%pacote_id%')->value('nome')],
    ]);
    CRUD::addColumn([ // select2_from_ajax: 1-n relationship
        'name'    => 'oferta',
        'label'   => 'Oferta',
        'type'    => 'text',
        
    'allows_multiple' => true,
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
        CRUD::setValidation(ListapacoteRequest::class);

        //CRUD::setFromDb(); // fields
        crud::addfield(

            [
                'label'     => "Nome do Pacote",
                'type'      => 'select2_from_array',
                'name'      => 'pacote_id', // the db column for the foreign key
                'options'   =>  DB::table('pacotevip')->pluck('nome','nome')->toArray()
             ]);
        crud::addfield(
            [
                'name'  => 'oferta', // The db column name
                'label' => 'Oferta', // Table column heading
                'type'  => 'text'
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
