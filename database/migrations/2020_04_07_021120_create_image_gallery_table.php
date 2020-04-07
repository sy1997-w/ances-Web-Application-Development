<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_gallery', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 100)->index();
            $table->string('image');
            $table->timestamps();
        });

        DB::table('image_gallery')->insert(
            array(
                ['title' => 'Teeth Whitening',
                'image' => '1585917460.jpg',
                ],
                ['title' => 'Teeth Whitening',
                'image' => '1585917529.jpg',
                ],
                ['title' => 'Teeth Whitening',
                'image' => '1586226149.jpg',
                ],
                ['title' => 'Crown',
                'image' => '1586225900.jpg',
                ],
                ['title' => 'Gum Surgery',
                'image' => '1586226137.jpg',
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
        Schema::dropIfExists('image_gallery');
    }
}
