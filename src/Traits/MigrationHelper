<?php

namespace Fytinnovations\LaravelTopping\Traits;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

trait MigrationHelper
{
    private function dropColumnsIfExists($table, $columns)
    {
        foreach ($columns as $column) {
            $this->dropColumnIfExists($table, $column);
        }
    }

    private function dropColumnIfExists($table, $column)
    {
        if (Schema::hasColumn($table, $column)) {
            Schema::table($table, function (Blueprint $table) use ($column) {
                $table->dropColumn($column);
            });
        }
    }
}
