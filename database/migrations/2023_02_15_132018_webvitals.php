<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webvitals', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->float('value');
            $table->string('rating');
            $table->float('delta');
            $table->string('metric_id');
            $table->string('navigationType');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webvitals');
    }
};
