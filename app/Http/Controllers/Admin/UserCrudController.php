<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
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
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.


        CRUD::column('symptoms')
            ->type('select_multiple')
            ->label('Symptoms')
            ->entity('symptoms')
            ->attribute('name');

            
        CRUD::column('triggers')
            ->type('select_multiple')
            ->label('Triggers')
            ->entity('triggers')
            ->attribute('name');

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
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
        CRUD::setValidation(UserRequest::class);

            CRUD::field('name')->type('text')->label('Full Name');

            CRUD::field('email')->type('email')->label('Email Address');

            CRUD::field('phonenumber')->type('text')->label('Phone Number');

            CRUD::field('gender')->type('select_from_array')->options([
                'male' => 'Male',
                'female' => 'Female',
            ])->label('Gender');

            CRUD::field('address')->type('text')->label('Address');

            CRUD::field('password')
                ->type('password')
                ->label('Password')
                ->hint('Leave blank to keep current password');

            CRUD::field('is_admin')
                ->type('checkbox')
                ->label('Is Admin');

            CRUD::field('symptoms')
                ->type('select2_multiple')
                ->label('Symptoms')
                ->entity('symptoms')
                ->attribute('name')
                ->pivot('true');    

            CRUD::field('triggers')
                ->type('select2_multiple')
                ->label('Triggers')
                ->entity('triggers')
                ->attribute('name')
                ->pivot('true');  
        

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
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

    public function store()
{
    $this->crud->getRequest()->request->set(
        'password',
        bcrypt($this->crud->getRequest()->input('password'))
    );

    return parent::store();
}

public function update()
{
    if ($this->crud->getRequest()->filled('password')) {
        $this->crud->getRequest()->request->set(
            'password',
            bcrypt($this->crud->getRequest()->input('password'))
        );
    } else {
        $this->crud->getRequest()->request->remove('password');
    }

    return parent::update();
}
}
