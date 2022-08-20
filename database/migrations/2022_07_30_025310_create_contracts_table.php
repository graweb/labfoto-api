<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enterprise_id')->constrained('enterprises')->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->bigInteger('package_id')->unsigned()->nullable();
            $table->smallInteger('service_type')->nullable();
            $table->smallInteger('professionals_total')->nullable();
            $table->smallInteger('event_type')->nullable();
            $table->string('event_address')->nullable();
            $table->date('event_date')->nullable();
            $table->time('event_time')->nullable();
            $table->string('registry', 80)->nullable();
            $table->string('registry_address')->nullable();
            $table->date('registry_date')->nullable();
            $table->time('registry_time')->nullable();
            $table->string('church', 80)->nullable();
            $table->string('church_address')->nullable();
            $table->date('church_date')->nullable();
            $table->time('church_time')->nullable();
            $table->string('reception', 80)->nullable();
            $table->string('reception_address')->nullable();
            $table->date('reception_date')->nullable();
            $table->time('reception_time')->nullable();
            $table->string('making_of', 80)->nullable();
            $table->string('making_of_address')->nullable();
            $table->date('making_of_date')->nullable();
            $table->time('making_of_time')->nullable();
            $table->smallInteger('album_size')->nullable();
            $table->smallInteger('album_type')->nullable();
            $table->smallInteger('album_blade')->nullable();
            $table->smallInteger('delivery_type')->nullable();
            $table->boolean('example_photos')->nullable();
            $table->boolean('album_case')->nullable();
            $table->smallInteger('box_case')->nullable();
            $table->boolean('trial_photos')->nullable();
            $table->boolean('woman_day')->nullable();
            $table->boolean('man_day')->nullable();
            $table->boolean('debutante_day')->nullable();
            $table->boolean('drone_photos')->nullable();
            $table->boolean('external_team')->nullable();
            $table->smallInteger('status_board')->default(1);
            $table->boolean('signed')->default(0);
            $table->timestamp('signed_at')->nullable();
            $table->timestamps();

            $table->foreign('package_id')->references('id')->on('packages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};
