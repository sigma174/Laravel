<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Report extends Model{
    protected $guarded = [];

    public function edit(Report $report){
        return view('reports.edit', compact('report'));
    }
}


    // public function up(): void
    // {
    //     Schema::create('reports', function (Blueprint $table)
    //     {
           
    //             $table->id();
    //             $table->string('number');
    //             $table->text('description');
    //             $table->timestamps();
    //             $table->foreignId('user_id')
    //                 ->nullable()
    //                 ->constrained()
    //                 ->cascadeOnUpdate()
    //                 ->nullOnDelete();
    //             $table->foreingId('status_id')
    //                 ->nullable()
    //                 ->constrained()
    //                 ->cascadeOnUpdate()
    //                 ->nullOnDelete();
            
            
    //     });
    // }  