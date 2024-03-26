<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('weeksen_openapi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('http_method')->nullable();
            $table->string('url')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->json('params')->nullable();
            $table->json('response')->nullable();
            $table->json('errors')->nullable();
            $table->json('version')->nullable();
            $table->boolean('is_authorized')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }
};
