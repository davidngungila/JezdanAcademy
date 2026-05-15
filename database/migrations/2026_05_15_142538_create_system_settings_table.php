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
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('group')->default('general'); // general, contact, social, platform
            $table->timestamps();
        });

        // Seed initial settings
        \DB::table('system_settings')->insert([
            ['key' => 'site_name', 'value' => 'Jezdan Digital Academy', 'group' => 'general'],
            ['key' => 'site_email', 'value' => 'info@jezdan.co.tz', 'group' => 'contact'],
            ['key' => 'site_phone', 'value' => '+255 712 345 678', 'group' => 'contact'],
            ['key' => 'site_address', 'value' => 'Dar es Salaam, Tanzania', 'group' => 'contact'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/jezdan', 'group' => 'social'],
            ['key' => 'facebook_url', 'value' => 'https://facebook.com/jezdan', 'group' => 'social'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com/company/jezdan', 'group' => 'social'],
            ['key' => 'maintenance_mode', 'value' => '0', 'group' => 'platform'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_settings');
    }
};
