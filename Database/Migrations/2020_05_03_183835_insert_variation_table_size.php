<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Variation\Repositories\VariationRepository;

class InsertVariationTableSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        VariationRepository::create(['alias' => 'Tamanho', 'table' => 'size', 'field' => 'size']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        VariationRepository::deleteByAlias('Tamanho');
    }
}
