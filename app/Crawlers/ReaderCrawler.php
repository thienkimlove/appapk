<?php
/**
 * Created by PhpStorm.
 * User: MANHQUAN
 * Date: 3/9/2015
 * Time: 11:31 PM
 */

namespace App\Crawlers;


use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ReaderCrawler extends MainCrawler
{

    public function createPackages()
    {
        DB::table('stores')->truncate();
        $packages = [];
        $handle = fopen(public_path('com.txt'), "r") or die("Couldn't get handle");
        if ($handle) {
            while (!feof($handle)) {
                $buffer = fgets($handle, 4096);
                if (strpos($buffer, '?id=') !== false) {
                    $temp =  explode('?id=', $buffer)[1];
                    $packages[] = str_replace('",', '', $temp);
                }
            }
            fclose($handle);
        }
        foreach ($packages as $package) {
            DB::table('stores')->insert([
                'name' => $package,
                'status' => 'not'
            ]);
        }
    }
}