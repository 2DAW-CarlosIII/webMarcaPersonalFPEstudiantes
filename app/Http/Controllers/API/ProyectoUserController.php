<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProyectoUser;
use Illuminate\Http\Request;

class ProyectoUserController extends Controller
{
    public function index(Request $request)
    {
        return response(ProyectoUser::all())->header('X-Total-Count', ProyectoUser::count());
    }

    public function show(ProyectoUser $ProyectoUser)
    {
        return response($ProyectoUser);
    }
    public function store(Request $request)
    {
        $ProyectoUser = json_decode($request->getContent(), true);

        $ProyectoUser = ProyectoUser::create($ProyectoUser);

        return $ProyectoUser;
    }

    public function destroy(ProyectoUser $ProyectoUser)
    {
        $ProyectoUser->delete();
    }

}
