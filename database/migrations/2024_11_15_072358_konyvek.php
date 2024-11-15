<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('konyvek', function (Blueprint $table) 
        {
            $table->id();
            $table->string('konyvnev');
            $table->string('szerzo');
            $table->string('mufajid');
            $table->string('kiadas');
            $table->softdeletes();
        });
        Schema::create('foglalasok', function (Blueprint $table) 
        {
            $table->id();
            $table->string('email');
            $table->string('konyvid');
            $table->date('kolcsonzes');
            $table->date('return');
            $table->softdeletes();
        });
        Schema::create('mufajok', function (Blueprint $table) 
        {
            $table->id();
            $table->string('mufaj');
            $table->softdeletes();
        });
    }
};
