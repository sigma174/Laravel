<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table)
        {
            $table->id();
            $table->string('number');
            $table->text('description');
            $table->timestamps();
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreingId('status_id')
                ->nullable()
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }   
}