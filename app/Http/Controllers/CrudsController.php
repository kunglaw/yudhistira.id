<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Faker\Generator;

class CrudsController extends Controller
{
    function index() {
        return response(Crud::all()->jsonSerialize(), Response::HTTP_OK);
    }

    //
    public function create(Generator $faker){

        $crud = new Crud();
        $crud->name = $faker->lexify("??????");
        $crud->color = $faker->boolean ? "red" : "green";
        $crud->save();

        return response($crud->jsonSerialize(), Response::HTTP_CREATED);

    }
}
