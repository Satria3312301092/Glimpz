<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('user', function (Blueprint $table) {
            $table->increments('Id_User'); // Primary key, auto-increment
            $table->string('Picture', 100)->nullable();
            $table->string('Number_Phone', 100);
            $table->string('Email', 100);
            $table->string('Name', 100);
            $table->date('Date_Of_Birth');
            $table->string('Username', 100);
            $table->string('Password', 100);
            $table->enum('Role', ['Buyer', 'Admin', 'Seller']) -> default('Buyer');
            // Optional: Add timestamps if needed
            // $table->timestamps();
        });

        // Create the 'seller' table first since 'service' depends on it
        Schema::create('seller', function (Blueprint $table) {
            $table->increments('Id_Seller'); // Primary key, auto-increment
            $table->unsignedInteger('Id_User'); // Foreign key or a regular integer column
            $table->string('Identity_Card', 100);
            $table->string('Account_Number', 100);
            // Optional: Add timestamps if needed
            // $table->timestamps();

            $table->foreign('Id_User')->references('Id_User')->on('user')->onDelete('cascade');
        });

        Schema::create('administrator', function (Blueprint $table) {
            $table->increments('Id_Admin'); // Primary key, auto-increment
            $table->unsignedInteger('Id_User'); // Foreign key or a regular integer column
            $table->string('Username', 100);
            $table->string('Password', 100);
            // Optional: Add timestamps if needed
            // $table->timestamps();

            $table->foreign('Id_User')->references('Id_User')->on('user')->onDelete('cascade');
        });

        Schema::create('banned', function (Blueprint $table) {
            $table->increments('Id_Ban'); // Primary key, auto-increment
            $table->unsignedInteger('Id_User'); // Foreign key or a regular integer column
            $table->string('Number_Phone', 100);
            $table->string('Name', 100);
            $table->string('Email', 100);
            // Optional: Add timestamps if needed
            // $table->timestamps();

            $table->foreign('Id_User')->references('Id_User')->on('user')->onDelete('cascade');
        });

        // Create the 'service' table
        Schema::create('service', function (Blueprint $table) {
            $table->increments('Id_Service'); // Primary key, auto-increment
            $table->unsignedInteger('Id_Seller'); // Foreign key
            $table->string('Title', 100);
            $table->string('Description', 100);
            $table->string('Category', 100);
            $table->string('Thumbnail', 100);

            // Define the foreign key constraint
            $table->foreign('Id_Seller')->references('Id_Seller')->on('seller')->onDelete('cascade');

            // Optional: Add timestamps if needed
            // $table->timestamps();
        });

        Schema::create('type', function (Blueprint $table) {
            $table->increments('Id_Type'); // Primary key, auto-increment
            $table->unsignedInteger('Id_Service'); // Foreign key
            $table->string('Type_Name', 100);

            // Define the foreign key constraint
            $table->foreign('Id_Service')->references('Id_Service')->on('service')->onDelete('cascade');

            // Optional: Add timestamps if needed
            // $table->timestamps();
        });

        Schema::create('detail', function (Blueprint $table) {
            $table->increments('Id_Detail'); // Primary key, auto-increment
            $table->unsignedInteger('Id_Service'); // Foreign key
            $table->unsignedInteger('Id_Type'); // Foreign key
            $table->string('Day', 100);
            $table->string('Revision', 100);
            $table->string('Price', 100);
            $table->string('Descriptions', 100);

            // Define the foreign key constraints
            $table->foreign('Id_Service')->references('Id_Service')->on('service')->onDelete('cascade');
            $table->foreign('Id_Type')->references('Id_Type')->on('type')->onDelete('cascade');

        });

        Schema::create('order', function (Blueprint $table) {
            $table->increments('Id_Order'); // Primary key, auto-increment
            $table->unsignedInteger('Id_User'); // Foreign key
            $table->unsignedInteger('Id_Service'); // Foreign key
            $table->unsignedInteger('Id_Type'); // Foreign key
            $table->unsignedInteger('Id_Detail'); // Foreign key
            $table->enum('Status', ['Waiting', 'Proses', 'Finish', 'Cancel','Payment']);
            $table->timestamp('Date');

            // Define the foreign key constraints
            $table->foreign('Id_User')->references('Id_User')->on('user')->onDelete('cascade');
            $table->foreign('Id_Service')->references('Id_Service')->on('service')->onDelete('cascade');
            $table->foreign('Id_Type')->references('Id_Type')->on('type')->onDelete('cascade');
            $table->foreign('Id_Detail')->references('Id_Detail')->on('detail')->onDelete('cascade');

            // Optional: Add timestamps if needed
            // $table->timestamps();
        });

        Schema::create('payment', function (Blueprint $table) {
            $table->increments('Id_Payment'); // Primary key, auto-increment
            $table->unsignedInteger('Id_User'); // Foreign key
            $table->unsignedInteger('Id_Order'); // Foreign key
            $table->string('Methode', 100);
            $table->string('Proof', 100);
            $table->timestamp('Date');
            $table->unsignedInteger('Total'); // Total amount

            // Define the foreign key constraints
            $table->foreign('Id_User')->references('Id_User')->on('user')->onDelete('cascade');
            $table->foreign('Id_Order')->references('Id_Order')->on('order')->onDelete('cascade');

            // Optional: Add timestamps if needed
            // $table->timestamps();
        });

        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('Id_Invoice'); // Primary key, auto-increment
            $table->unsignedInteger('Id_User'); // Foreign key
            $table->unsignedInteger('Id_Payment'); // Foreign key
            $table->unsignedInteger('Id_Order'); // Foreign key
            $table->unsignedInteger('Id_Service'); // Foreign key
            $table->string('Name', 100);
            $table->string('Email', 100);
            $table->string('Number_Phone', 100);
            $table->string('Description', 100);
            $table->string('Title', 100);
            $table->string('Category', 100);
            $table->unsignedInteger('Price'); 
            $table->string('Day', 100);
            $table->string('Revision', 100);
            $table->unsignedInteger('Total'); 
            $table->string('Proof', 100);
            $table->string('Methode', 100);
            $table->string('Thumbnail', 100);
            $table->enum('Status', ['finish']);

            // Define the foreign key constraints
            $table->foreign('Id_User')->references('Id_User')->on('user')->onDelete('cascade');
            $table->foreign('Id_Payment')->references('Id_Payment')->on('payment')->onDelete('cascade');
            $table->foreign('Id_Order')->references('Id_Order')->on('order')->onDelete('cascade');
            $table->foreign('Id_Service')->references('Id_Service')->on('service')->onDelete('cascade');

            // Optional: Add timestamps if needed
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
        Schema::dropIfExists('payment');
        Schema::dropIfExists('order');
        Schema::dropIfExists('detail'); 
        Schema::dropIfExists('type');
        Schema::dropIfExists('service');
        Schema::dropIfExists('seller');
        Schema::dropIfExists('administrator');
        Schema::dropIfExists('banned');

        Schema::dropIfExists('user');
    }
};
