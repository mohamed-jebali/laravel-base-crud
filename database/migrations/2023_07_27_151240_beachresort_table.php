<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\BeachResort;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beach_resorts', function(Blueprint $table){
            $table->id();
            $table->string('name', 100);
            $table->string('location', 150);
            $table->unsignedInteger('num_umbrellas');
            $table->unsignedInteger('num_sunbeds');
            $table->decimal('umbrella_price', 8, 2);
            $table->date('opening_date');
            $table->date('closing_date');
            $table->boolean('has_beach_volley')->default(false);
            $table->boolean('has_soccer_field')->default(false);

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
        Schema::dropifExist('beach_resorts');
    }
};
