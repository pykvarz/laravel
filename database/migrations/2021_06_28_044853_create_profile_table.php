<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('iin')->nullable();
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic');
            $table->date('DOB');
            $table->string('floor')->default('Не указано');
            $table->string('citizenship');
            $table->string('nationality');
            $table->date('arrival_check-in_date');
            $table->integer('order_number');
            $table->string('arrived');
            $table->string('e-mail')->nullable();
            $table->string('attended_preschool_organizations');
            $table->string('parallel');
            $table->string('letter');
            $table->boolean('class_kit')->default(true);
            $table->string('language_of_instruction');
            $table->string('change_of_training');
            $table->string('form_of_study')->default('очная');
            $table->string('availability_of_computer_other_devices_at_home');
            $table->boolean('internet')->default(true);
            $table->string('provided');
            $table->string('homeschooling_child')->default('Нет');
            $table->boolean('distance_learning_child')->default(false);
            $table->string('provided_with_a_set_of_textbooks')->default('обеспечен данной школой');
            $table->string('hot_food_coverage');
            $table->string('buffet_coverage');
            $table->string('academic_level');
            $table->string('retained_for_a_second_course')->default('Нет');
            $table->integer('mathematics');
            $table->integer('computer_science');
            $table->integer('natural_science');
            $table->integer('physics');
            $table->integer('chemistry');
            $table->integer('biology');
            $table->integer('geography');
            $table->string('learned_foreign_language_1')->default('Англииский язык');
            $table->string('learned_foreign_language_2')->default('Не изучает');
            $table->string('native_language_as_a_subject')->default('Нет');
            $table->boolean('rukhanyi_zhangyru')->default(true);
            $table->boolean('summer_vacation')->default(false);
            $table->string('is_registered')->default('Не состоит');
            $table->boolean('with_deviant_behavior')->default(false);
            $table->boolean('orphan_child')->default(false);
            $table->boolean('child_without_parental_care')->default(false);
            $table->boolean('invalid')->default(false);
            $table->string('types_of_violations')->default('нет');



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
        Schema::dropIfExists('profile');
    }
}
