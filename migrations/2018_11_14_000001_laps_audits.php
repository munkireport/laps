<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;


class LapsAudits extends Migration
{
    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->table('laps', function (Blueprint $table) {
            $table->longText('audit')->nullable();
        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table('laps', function (Blueprint $table) {
            $table->dropColumn('audit');
        });
    }
}
