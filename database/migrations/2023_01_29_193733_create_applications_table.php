<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('APL_ID');
            $table->string('APL_FName', 50);
            $table->string('APL_MName', 60)->nullable();
            $table->string('APL_LName', 60);
            $table->string('APL_Title', 5);
            $table->string('APL_Address1', 90)->nullable();
            $table->string('APL_Address2', 90)->nullable();
            $table->string('APL_Address3', 60)->nullable();
            $table->string('APL_Municipality',8)->references('Board')->on('areas');
            $table->string('APL_Gender', 3);
            $table->date('APL_DOB');
            $table->string('APL_PPhone', 60);
            $table->string('APL_APhone', 60)->nullable();
            $table->string('APL_Email', 80);
            $table->string('APL_Marital', 3)->references('MAR_Code')->on('maritals');
            $table->string('APL_NID', 4);
            $table->string('APL_NID_Number', 80);
            $table->string('APL_BPN', 80)->unique(); // Handle unique() similar to email
            $table->string('APL_HLOE',2)->references('Hloe_Code')->on('hloes');
            $table->string('APL_HLOE_Other', 60)->nullable();
            $table->string('APL_Passes', 3);
            $table->string('APL_Qualifications', 3);
            $table->string('APL_Training', 3);
            $table->string('APL_Enrolled', 3);
            $table->string('APL_Family_Enrolled', 3);
            $table->string('APL_Income', 8);
            $table->string('APL_Dependent', 3);
            $table->string('APL_Employ', 4)->references('Employ_Code')->on('employs');
            $table->string('APL_Employ_Other', 60)->nullable();
            $table->string('APL_Housing', 5)->references('HOU_Code')->on('housings');
            $table->string('APL_Living', 5)->references('LIV_Code')->on('livings');
            $table->string('APL_Own', 3);
            $table->string('APL_Family_Own', 3);
            $table->string('APL_Interest', 3);
            $table->text('APL_Interest_Details');
            $table->text('APL_Expectation');
            $table->text('APL_Justification');
            $table->string('APL_Obligations', 3);
            $table->text('APL_Obligations_Details')->nullable();
            $table->string('APL_Attend', 3);
            $table->string('APL_First_Apl', 3);
            $table->string('APL_Source', 5)->references('SRC_Code')->on('sources');
            $table->string('APL_Source_Other', 80)->nullable();
            $table->string('APL_Emg_FName', 60);
            $table->string('APL_Emg_LName', 60);
            $table->string('APL_Emg_Address1', 90)->nullable();
            $table->string('APL_Emg_Address2', 90)->nullable();
            $table->string('APL_Emg_Address3', 60)->nullable();
            $table->string('APL_Emg_Phone', 60);
            $table->string('APL_Emg_Relation', 60);
            $table->string('APL_Rec_FName', 60);
            $table->string('APL_Rec_LName', 60);
            $table->string('APL_Rec_Address1', 90)->nullable();
            $table->string('APL_Rec_Address2', 90)->nullable();
            $table->string('APL_Rec_Address3', 60)->nullable();
            $table->string('APL_Rec_Designation', 60);
            $table->string('APL_Rec_Phone', 60);
            $table->string('APL_Permission', 5);
            $table->string('APL_Subscribe', 5);
            $table->string('APL_Character_Selection', 5)->nullable();
            $table->string('APL_CRN', 60)->nullable();
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
        Schema::dropIfExists('applications');
    }
}
