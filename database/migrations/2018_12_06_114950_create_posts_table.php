<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nama');
			$table->string('nik');
			$table->string('notelpon');
			$table->string('email');
			$table->integer('jumlahBangunan');
			$table->integer('jumlahInfrastruktur');
			$table->string('infrastruktur1');
			// $table->binary('upload');
			$table->string('original');
			$table->string('kota');
			$table->string('mime');
			$table->string('lokasi');
			$table->mediumText('keterangan')->nullable();
			$table->string('status')->nullable();
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
		Schema::dropIfExists('posts');
	}
}
