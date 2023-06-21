<?php

use Illuminate\Contracts\Database\Eloquent\Builder;

function filterFrontParameters($modelClass) {
    $fieldsArray = $modelClass::filterFields;
    $query = searchByField($fieldsArray, $modelClass);
    $request = request();
    if(strtoupper($request->method()) == 'GET' && count($parameters = $request->query()) > 0 ) {
        //$query = DB::query();
        $query->orderBy($parameters['_sort'], $parameters['_order'])->limit($parameters['_end'])->offset($parameters['_start']);
        //$request->merge(['ra_query' => $query]);
    }
    return $query;
}

function searchByField($fieldsArray, $modelClass){
    $query = $modelClass::query();
    foreach ($fieldsArray as $key => $fieldName) {
        if($filtro = request()->input($fieldName)) {
            $query = $query
                ->where($fieldName, $filtro);
            unset($fieldsArray[$key]);
        }
    }
    $query->where(function(Builder $query) use ($fieldsArray) {
        $busquedaFiltroQ = request()->input('q');
        if($busquedaFiltroQ) {
            foreach ($fieldsArray as $fieldName) {
                $query = $query
                    ->orWhere($fieldName, 'like', '%' .$busquedaFiltroQ . '%');
            }
        }
    });
    return $query;
}
