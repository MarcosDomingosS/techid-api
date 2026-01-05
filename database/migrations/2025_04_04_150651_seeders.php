<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Artisan::call("db:seed",[
            '--class'=>'SedSeeder',
            '--force' => true
        ]);
        Artisan::call("db:seed",[
            '--class'=>'PermissionSeeder',
            '--force' => true
        ]);
        Artisan::call("db:seed",[
            '--class' => 'PrincipalSeeder',
            '--force'=> true,
        ]);
        Artisan::call("db:seed",[
            '--class' => 'SupervisorSeeder',
            '--force'=> true,
        ]);
        Artisan::call("db:seed",[
            '--class' => 'ClassCourseSeeder',
            '--force' => true,
        ]);
        Artisan::call("db:seed",[
            '--class' => 'RoutineSeeder',
            '--force' => true,
        ]);
        Artisan::call("db:seed",[
            '--class' => 'StaffSeeder',
            '--force' => true,
        ]);
        Artisan::call("db:seed",[
            '--class' => 'RFIDSeeder',
            '--force' => true,
        ]);
        Artisan::call("db:seed",[
            '--class' => 'EventSeeder',
            '--force' => true,
        ]);
        Artisan::call("db:seed", [
            '--class' => 'StudentSeeder',
            '--force' => true,
        ]);
        Artisan::call("db:seed", [
            '--class' => 'ReportSeeder',
            '--force' => true,
        ]);
        Artisan::call("db:seed",[
            '--class'=>'ProceduresSeeder',
            '--force' => true
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
