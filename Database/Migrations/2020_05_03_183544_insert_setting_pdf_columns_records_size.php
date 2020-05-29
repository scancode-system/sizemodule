<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Pdf\Repositories\SettingPdfColumnRepository;

class InsertSettingPdfColumnsRecordsSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        SettingPdfColumnRepository::create(['name' => 'size', 'alias' => 'Tamanho']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        SettingPdfColumnRepository::deleteByName('size');
    }
}
 