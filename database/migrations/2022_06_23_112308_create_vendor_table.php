<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_table', function (Blueprint $table) {
        $table->bigIncrements('vendor_id');
        $table->string("company_name",200);
        $table->string("contact_person",200);
        $table->bigInteger("contact_number");
        $table->string("email_id",200);
        $table->text("description");
        $table->string("id_proof_type",200);
        $table->string("id_proof_number",200);
        $table->string('id_proof_file',300);
        $table->string("password",300);
        $table->integer("status")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_table');
    }
}
