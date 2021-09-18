<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attachments')->delete();
        $attachments = array(
            array('id' => 1, 'attachable_id' =>1, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 2, 'attachable_id' =>2, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 3, 'attachable_id' =>3, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 4, 'attachable_id' =>4, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 5, 'attachable_id' =>5, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 6, 'attachable_id' =>6, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 7, 'attachable_id' =>7, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 8, 'attachable_id' =>8, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 9, 'attachable_id' => 9, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 10, 'attachable_id' =>10, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 11, 'attachable_id' =>11, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 12, 'attachable_id' =>12, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 13, 'attachable_id' =>13, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 14, 'attachable_id' =>14, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 15, 'attachable_id' =>15, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 16, 'attachable_id' =>16, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 17, 'attachable_id' =>17, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 18, 'attachable_id' =>18, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 19, 'attachable_id' =>19, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 20, 'attachable_id' =>20, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 21, 'attachable_id' =>21, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 22, 'attachable_id' =>22, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 23, 'attachable_id' =>23, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 24, 'attachable_id' =>24, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 25, 'attachable_id' =>25, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 26, 'attachable_id' =>26, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 27, 'attachable_id' =>27, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 28, 'attachable_id' =>28, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 29, 'attachable_id' =>29, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 30, 'attachable_id' =>30, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 31, 'attachable_id' =>31, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 32, 'attachable_id' =>32, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 33, 'attachable_id' =>33, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 34, 'attachable_id' =>34, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 35, 'attachable_id' =>35, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 36, 'attachable_id' =>36, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 37, 'attachable_id' =>37, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 38, 'attachable_id' =>38, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 39, 'attachable_id' =>39, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 40, 'attachable_id' =>40, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 41, 'attachable_id' =>41, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 42, 'attachable_id' =>42, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 43, 'attachable_id' =>43, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 44, 'attachable_id' =>44, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 45, 'attachable_id' =>45, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 46, 'attachable_id' =>46, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 47, 'attachable_id' =>47, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 48, 'attachable_id' =>48, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 49, 'attachable_id' =>49, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 50, 'attachable_id' =>50, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 51, 'attachable_id' =>51, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 52, 'attachable_id' =>52, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 53, 'attachable_id' =>53, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 54, 'attachable_id' =>54, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 55, 'attachable_id' =>55, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 56, 'attachable_id' =>56, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 57, 'attachable_id' =>57, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 58, 'attachable_id' =>58, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 59, 'attachable_id' =>59, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 60, 'attachable_id' =>60, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            array('id' => 61, 'attachable_id' =>61, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1),
            
            
            
            
            
            
            
            
            
     
            
         );
         DB::table('attachments')->insert($attachments);

    }
}
