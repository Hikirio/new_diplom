<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('vacacies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vacancy_id')->unsigned();
            $table->integer('user_id')->unsigned();


            $table->string('title');
            $table->text('description');
            $table->text('excerpt')->nullable()->comment('кусок описания, для вывода всех');

            $table->boolean('is_published')->default(false);

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('employers');
            $table->foreign('vacancy_id')->references('emp_id')->on('employers');
            $table->index('is_published');

        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('vacacies');
        Schema::enableForeignKeyConstraints();
    }
}
