<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id');
			$table->char('doctor_no',10)->unique();
			$table->char('nric',14)->index();
			$table->string('name',100)->index();
            $table->char('gender',1)->index();
            $table->string('phone', 20);
            $table->string('education');
			$table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('doctors')->insert(
            array(
                ['id' => 1 ,
                'doctor_no' => 'DID-00001',
                'name' => 'Jacky Teo',
                'nric' => '911213-12-8532',
                'gender' => '0',
                'phone' => '013-8955535',
                'education' => 'University Of Malaya',
                'description' => 'Dr. Jacky Teo is our General dentist who is always happy to share knowledge with our clients. This is because Dr. Jacky believes that a beautiful, confident smile is the most natural beauty that a person possesses.',
                'created_at' => '2020-02-02 10:10:30',
                'updated_at' => '2020-02-02 10:10:30',
                ],
                ['id' => 2 ,
                'doctor_no' => 'DID-00002',
                'name' => 'Rebecca Tiew Siok Tuan',
                'nric' => '791213-11-8532',
                'gender' => '1',
                'phone' => '013-8765535',
                'education' => 'University Of Malaya',
                'description' => 'Dr Rebecca attained her Bachelor in Dental Surgery from University of Malaya in 1987. Once graduated, she ventured into private practice, thus, born the first Klinik Pergigian Tiew. In 27 years of God’s blessing, Tiew dental clinics had grew and was placed under management of ST Tiew Dental Group.',
                'created_at' => '2020-02-02 10:00:30',
                'updated_at' => '2020-02-02 10:00:30',
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
        Schema::dropIfExists('doctors');
    }
}
