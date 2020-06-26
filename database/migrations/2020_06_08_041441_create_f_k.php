<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFK extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->foreign('user_subscribe')->references('id')->on('users');
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->foreign('video_type_id')->references('id')->on('video_types');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('video_id')->references('id')->on('videos');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('comment_id')->references('id')->on('comments');
        });

        Schema::table('playlists', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('playlist_details', function (Blueprint $table) {
            $table->foreign('playlist_id')->references('id')->on('playlists');
        });

        Schema::table('playlist_details', function (Blueprint $table) {
            $table->foreign('video_id')->references('id')->on('videos');
        });
    }
}