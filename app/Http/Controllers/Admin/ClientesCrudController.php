<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClientesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ClientesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ClientesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Clientes::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/clientes');
        CRUD::setEntityNameStrings('clientes', 'clientes');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('nombre_comercial');
        CRUD::column('razon_social');
        CRUD::column('email');
        CRUD::column('pais_id');
        CRUD::column('estado_id');
        CRUD::column('municipio_id');
        CRUD::column('calle');
        CRUD::column('numero_exterior');
        CRUD::column('numero_interior');
        CRUD::column('colonia');
        CRUD::column('codigo_postal');
        CRUD::column('cliente_grupos_id');
        CRUD::column('estatus');
        CRUD::column('deleted_at');
        CRUD::column('created_at');
        CRUD::column('updated_at');

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
        CRUD::setValidation(ClientesRequest::class);

        CRUD::field('id');
        CRUD::field('nombre_comercial');
        CRUD::field('razon_social');
        CRUD::field('email');
        CRUD::field('pais_id');
        CRUD::field('estado_id');
        CRUD::field('municipio_id');
        CRUD::field('calle');
        CRUD::field('numero_exterior');
        CRUD::field('numero_interior');
        CRUD::field('colonia');
        CRUD::field('codigo_postal');
        CRUD::field('cliente_grupos_id');
        CRUD::field('estatus');
        CRUD::field('deleted_at');
        CRUD::field('created_at');
        CRUD::field('updated_at');

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
