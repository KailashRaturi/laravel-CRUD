<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTasksTable extends Migration
{
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('title')->after('id'); // Add title column
            $table->text('description')->nullable()->after('title'); // Add description column
            $table->boolean('completed')->default(false)->after('description'); // Add completed column
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn(['title', 'description', 'completed']);
        });
    }
}

