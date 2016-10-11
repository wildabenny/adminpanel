<?php
/**
 * Created by PhpStorm.
 * User: marcin
 * Date: 11.10.16
 * Time: 11:48
 */

namespace App\Http\Middleware;

use Closure;

class Ajax
{

    public function handle($request, Closure $next)
    {
        if ($request->ajax()) {

            $routeAction = $request->route()->getAction();
            $ajaxValue = studly_case($request->input("ajax"));
            $routeAction['uses'] = str_replace("@index", "@ajax" . $ajaxValue, $routeAction['uses']);
            $routeAction['controller'] = str_replace("@index", "@ajax" . $ajaxValue, $routeAction['controller']);
            $request->route()->setAction($routeAction);
        }

        return $next($request);
    }

}