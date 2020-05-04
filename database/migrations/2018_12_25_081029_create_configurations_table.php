<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(config('ofc-configuration.connection', 'default'))
            ->create('configurations', function (Blueprint $table) {
                $table->increments('id');
                $table->string('scope');
                $table->string('key');
                $table->string('value')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schemaconnection(config('ofc-configuration.connection', 'default'))
            ->dropIfExists('configurations');
    }
}
