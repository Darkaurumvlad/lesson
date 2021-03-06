<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('norm_azot', 8, 2);
            $table->double('norm_fosfor', 8, 2);
            $table->double('norm_kaliy', 8, 2);
            $table->foreignId('culture_id')->index()->constrained('cultures');
            $table->string('district');
            $table->double('price', 8, 2);
            $table->string('description');
            $table->string('function');
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
        Schema::dropIfExists('products');
    }
}
