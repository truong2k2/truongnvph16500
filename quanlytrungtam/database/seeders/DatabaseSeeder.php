<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        {
            $danhmuckhachhang =[];
            for($i=1; $i <11; $i++){
                $danhmuckhachhang[]=
                [
                    "ten_danh_muc"=>"du an".$i,
                    "created_at"=> date("Y-m-d H:i:s"),
                    "updated_at"=> date("Y-m-d H:i:s"),
                ];
            }

            DB::table('danhmuckhachhang')->insert($danhmuckhachhang);
        }
        {
            $khoahoc =[];
            for($i=1; $i <11; $i++){
                $khoahoc[]=
            [
                "ten_kH"=>"php".$i,
                "thoi_gian_hoc"=>"2022-07-01",
                "id_danh_muc"=>"1",
                "mo_ta_KH"=>"khach hang rat la hu",
                "created_at"=> date("Y-m-d H:i:s"),
                "updated_at"=> date("Y-m-d H:i:s"),
            ];
            }
            DB::table('khoahoc')->insert($khoahoc);
        }
        {
            $lop =[];
            for($i=1; $i <11; $i++){
                $lop[]=
            [
                "ten_lop"=>"php".$i,
                "ngay_KG"=>"2022-07-01",
                "id_khoa_hoc"=>"1",
                "created_at"=> date("Y-m-d H:i:s"),
                "updated_at"=> date("Y-m-d H:i:s"),
            ];
            }
            DB::table('lop')->insert($lop);
        }
        {
            $dangky =[];
            for($i=1; $i <11; $i++){
                $dangky[]=
            [
                "id_lop"=>"".$i,
                "id_sv"=>"".$i,
                "tong_tien"=>"1000000",
                "created_at"=> date("Y-m-d H:i:s"),
                "updated_at"=> date("Y-m-d H:i:s"),
            ];
            }
            DB::table('dangky')->insert($dangky);
        }
        {
            $sinhvien =[];
            for($i=1; $i <11; $i++){
                $sinhvien[]=
            [
                "ten_sv"=>"thinh".$i,
                "dia_chi"=>"Hà nội",
                "sdt"=>"01922812938",
                "email"=>"thinh@gamil.com",
                "created_at"=> date("Y-m-d H:i:s"),
                "updated_at"=> date("Y-m-d H:i:s"),
            ];
            }
            DB::table('sinhvien')->insert($sinhvien);
        }
    }
}
