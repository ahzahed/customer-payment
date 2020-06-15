<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('invoice_date');
            $table->string('name');
            $table->string('email');
            $table->text('address');
            $table->text('description');
            $table->integer('unit');
            $table->integer('amount');

            $table->text('description2')->nullable();
            $table->integer('unit2')->nullable();
            $table->integer('amount2')->nullable();

            $table->text('description3')->nullable();
            $table->integer('unit3')->nullable();
            $table->integer('amount3')->nullable();

            $table->text('description4')->nullable();
            $table->integer('unit4')->nullable();
            $table->integer('amount4')->nullable();

            $table->text('description5')->nullable();
            $table->integer('unit5')->nullable();
            $table->integer('amount5')->nullable();

            $table->text('description6')->nullable();
            $table->integer('unit6')->nullable();
            $table->integer('amount6')->nullable();

            $table->text('description7')->nullable();
            $table->integer('unit7')->nullable();
            $table->integer('amount7')->nullable();

            $table->integer('total');
            $table->string('total_words');
            $table->text('signeture');
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
        Schema::dropIfExists('invoices');
    }
}
