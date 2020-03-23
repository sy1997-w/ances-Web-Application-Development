<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id');
			$table->char('patient_no',10)->unique();
			$table->char('nric',14)->index();
			$table->string('name',100)->index();
            $table->char('gender',1)->index();
            $table->string('phone', 20);
			$table->text('address')->nullable();
			$table->string('postcode',5)->index();
			$table->string('city',50)->index();
			$table->char('state', 2)->index();
            $table->timestamps();
        });

        DB::table('patients')->insert(
            array(
                ['id' => 1 ,
                'patient_no' => 'PID-00001',
                'name' => 'Adele Gonzalez',
                'nric' => '901213-11-8532',
                'gender' => '1',
                'phone' => '013-8055535',
                'postcode' => '43000',
                'city' => 'Kajang',
                'state' =>'14',
                'address'=>"No.10, Cypress Condominium",
                'created_at' => '2020-02-02 10:00:30',
                'updated_at' => '2020-02-02 10:00:30',
                ],
                ['id' => 2 ,
                'patient_no' => 'PID-00002',
                'name' => 'Dominik  Gonzalez',
                'nric' => '901213-11-8531',
                'gender' => '0',
                'phone' => '013-8155535',
                'postcode' => '43000',
                'city' => 'Kajang',
                'state' =>'14',
                'address'=>"No.10, Cypress Condominium",
                'created_at' => '2020-03-02 10:00:30',
                'updated_at' => '2020-03-02 10:00:30',
            ],        
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
