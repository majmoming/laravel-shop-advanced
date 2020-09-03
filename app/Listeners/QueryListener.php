<?php

namespace App\Listeners;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\Log;

class QueryListener
{
    /*******************************************该类用于监听本地sql禁止线上使用********************************************/
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * @author Demi<992392919@qq.com>
     * @param QueryExecuted $event
     * @return void
     */
    public function handle(QueryExecuted $event)
    {
        if (env('APP_ENV', 'production') == 'local') {
            $sql = str_replace("?", "'%s'", $event->sql);
            $bindings = $event->bindings;
            foreach ($bindings as $k => $bind) {
                if (is_object($bind)) {
                    $bindings[$k] = date_format($bind, "Y-m-d H:i:s");
                }
            }
            $log = vsprintf($sql, $bindings);
            Log::info($log);
        }
    }
}
