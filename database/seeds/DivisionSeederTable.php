<?php

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
            'id' => 1,
            'name' => 'Chattagram',
            'bn_name' => 'চট্টগ্রাম',
            'url' => 'www.chittagongdiv.gov.bd',
        ]);

        Division::create([
            'id' => 2,
            'name' => 'Rajshahi',
            'bn_name' => 'রাজশাহী',
            'url' => 'www.rajshahidiv.gov.bd',
        ]);

        Division::create([
            'id' => 3,
            'name' => 'Khulna',
            'bn_name' => 'খুলনা',
            'url' => 'www.khulnadiv.gov.bd',
        ]);

        Division::create([
            'id' => 4,
            'name' => 'Barisal',
            'bn_name' => 'বরিশাল',
            'url' => 'www.barisaldiv.gov.bd',
        ]);

        Division::create([
            'id' => 5,
            'name' => 'Sylhet',
            'bn_name' => 'সিলেট',
            'url' => 'www.sylhetdiv.gov.bd',
        ]);

        Division::create([
            'id' => 6,
            'name' => 'Dhaka',
            'bn_name' => 'ঢাকা',
            'url' => 'www.dhakadiv.gov.bd',
        ]);

        Division::create([
            'id' => 7,
            'name' => 'Rangpur',
            'bn_name' => 'রংপুর',
            'url' => 'www.rangpurdiv.gov.bd',
        ]);

        Division::create([
            'id' => 8,
            'name' => 'Mymensingh',
            'bn_name' => 'ময়মনসিংহ',
            'url' => 'www.mymensinghdiv.gov.bd',
        ]);
    }
}
