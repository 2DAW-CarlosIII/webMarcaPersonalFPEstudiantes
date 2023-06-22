<?php

use Illuminate\Contracts\Database\Eloquent\Builder;

function filterFrontParameters($modelClass) {
    // inicializamos una nueva consulta QueryBuilder
    $query = $modelClass::query();

    // uso del cuadro de búsqueda de React-Admin
    $query = searchByField($modelClass, $query);

    // Gestión de la paginación
    addPaginate($query);

    // Selección de registros relacionados
    selectByIds($query);

    //retorno de la consulta resultante
    return $query;
}

function searchByField($modelClass, &$query){
    $fieldsArray = $modelClass::filterFields ?? [];
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

function addPaginate(&$query) {
    $request = request();
    if(strtoupper($request->method()) == 'GET' && count($parameters = $request->query()) > 0 ) {
        if(array_key_exists('_sort', $parameters)) {
            $order = $parameters['_order'] ?? 'ASC';
            $query->orderBy($parameters['_sort'], $order);
        }
        if(array_key_exists('_end', $parameters)) {
            $query->limit($parameters['_end']);
        }
        if(array_key_exists('_start', $parameters)) {
            $query->offset($parameters['_start']);
        }
    }
}

function selectByIds(&$query) {
    $queryString = request()->server->all()['QUERY_STRING'];
    $parameters = proper_parse_str($queryString);
    if(array_key_exists('id', $parameters)) {
        $query->whereIn('id', is_array($parameters['id']) ? $parameters['id'] : array($parameters['id']));
    }
    return $query;
}

// https://www.php.net/manual/en/function.parse-str.php#76792
function proper_parse_str($str) {
    # result array
    $arr = array();

    # split on outer delimiter
    $pairs = explode('&', $str);

    # loop through each pair
    foreach ($pairs as $i) {
      # split into name and value
      list($name,$value) = explode('=', $i, 2);

      # if name already exists
      if( isset($arr[$name]) ) {
        # stick multiple values into an array
        if( is_array($arr[$name]) ) {
          $arr[$name][] = $value;
        }
        else {
          $arr[$name] = array($arr[$name], $value);
        }
      }
      # otherwise, simply stick it in a scalar
      else {
        $arr[$name] = $value;
      }
    }

    # return result array
    return $arr;
  }
