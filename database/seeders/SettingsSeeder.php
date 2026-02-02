<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Delivery settings
            ['key' => 'delivery_base_fee', 'value' => '500', 'group' => 'delivery'],
            ['key' => 'delivery_fee_per_km', 'value' => '100', 'group' => 'delivery'],
            ['key' => 'delivery_max_distance_km', 'value' => '20', 'group' => 'delivery'],
            ['key' => 'delivery_timeout_minutes', 'value' => '30', 'group' => 'delivery'],
            
            // Commission settings
            ['key' => 'platform_commission_rate', 'value' => '0.10', 'group' => 'commission'],
            ['key' => 'pharmacy_default_commission_rate', 'value' => '0.05', 'group' => 'commission'],
            ['key' => 'courier_commission_rate', 'value' => '0.80', 'group' => 'commission'],
            
            // Payment settings
            ['key' => 'minimum_order_amount', 'value' => '1000', 'group' => 'payment'],
            ['key' => 'minimum_withdrawal_amount', 'value' => '5000', 'group' => 'payment'],
            ['key' => 'payment_timeout_minutes', 'value' => '15', 'group' => 'payment'],
            
            // App settings
            ['key' => 'app_name', 'value' => 'DR-PHARMA', 'group' => 'app'],
            ['key' => 'app_version', 'value' => '1.0.0', 'group' => 'app'],
            ['key' => 'support_email', 'value' => 'support@drpharma.ci', 'group' => 'app'],
            ['key' => 'support_phone', 'value' => '+2250700000000', 'group' => 'app'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
