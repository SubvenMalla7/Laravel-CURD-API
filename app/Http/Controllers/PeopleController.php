<?php

namespace App\Http\Controllers;

use App\Http\Resources\PeopleResource;
use App\Http\Resources\PeopleResourceCollection;
use App\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function show(People $people): PeopleResource
    {
        /**
        * @param People $people
        * @return PeopleResource
        */
        
        return new PeopleResource($people);

    }
    //displaying all the records from the database
    public function index(): PeopleResourceCollection
    {
        /**
        
        * @return PeopleResourceCollection
        */
        return new PeopleResourceCollection(People::paginate());

    }

    //Creating a new record in the database

    public function store(Request $request)
    {
        $request ->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'Address' => 'required',
            'age' => 'required',
            'gender' => 'required',

        ]);

        $people = People::create($request->all());

        return new PeopleResource($people);
    }

    public function update(People $people, Request $request): PeopleResource
    {
        
        $people->update($request->all());


        return new PeopleResource($people);

    }

    public function destroy(People $people)
    {
        $people->delete();

        return response()->json();

    }

}
