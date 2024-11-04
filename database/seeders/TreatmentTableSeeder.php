<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TreatmentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('treatment')->delete();
        
        \DB::table('treatment')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Deep Cleansing Facial',
                'selling_price' => '300000',
                'description' => 'Perawatan ini membersihkan kulit secara mendalam, menghilangkan kotoran dan minyak berlebih, serta membuka pori-pori yang tersumbat.',
                'image' => 'images/frk6IeWYcVgDjPnvrtt3qpxmWLV4NnxZHGH8BrJX.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-11 09:00:30',
                'updated_at' => '2024-08-12 09:29:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Anti-Aging Facial',
                'selling_price' => '400000',
                'description' => 'Facial ini menggunakan produk anti-penuaan untuk mengurangi garis halus dan kerutan, serta meningkatkan elastisitas kulit.',
                'image' => 'images/Bf8qOTwKNadKczGveru3rMEvrBAUyAmXa0G2v3nF.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-11 09:32:59',
                'updated_at' => '2024-08-12 09:19:24',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Acne Treatment',
                'selling_price' => '350000',
                'description' => 'Perawatan khusus untuk kulit berjerawat, mengurangi peradangan dan mencegah timbulnya jerawat baru.',
                'image' => 'images/KNjt2GQIXGYjKkdCHDstf6ipRXWSSStUc7WUks71.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-12 02:54:38',
                'updated_at' => '2024-08-12 09:19:15',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Brightening Facial',
                'selling_price' => '320000',
                'description' => 'Facial yang diformulasikan untuk mencerahkan kulit kusam dan mengurangi noda hitam.',
                'image' => 'images/ulfqydxBxEDXuOBeLceb8duKhQGPiUiSEj3Rvfdo.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-12 08:49:31',
                'updated_at' => '2024-08-12 09:20:23',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Hydration Facial',
                'selling_price' => '300000',
                'description' => 'Perawatan ini memberikan kelembapan mendalam pada kulit, menjadikannya lembut dan kenyal.',
                'image' => 'images/dObrX3CmlC1p0YH82ukiz3Pro7gJFm6XKMi2t5KM.webp',
                'show_status' => 1,
                'created_at' => '2024-07-12 08:50:12',
                'updated_at' => '2024-08-12 09:45:03',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Body Scrub',
                'selling_price' => '250000',
                'description' => 'Lulur yang mengangkat sel-sel kulit mati dan meningkatkan sirkulasi darah, membuat kulit lebih halus dan bercahaya.',
                'image' => 'images/xbl0ov6ZKYIrSsq0EGsOv3GEwIpiPH8pPDhsaD3Y.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-12 08:56:44',
                'updated_at' => '2024-08-12 09:19:58',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'Body Wrap',
                'selling_price' => '350000',
                'description' => 'Perawatan pembungkus tubuh dengan bahan-bahan alami untuk detoksifikasi dan meningkatkan kelembapan kulit.',
                'image' => 'images/cqkUCFb3W6rMDXbyfu9enn55IsWfWzlEfjKBAAPZ.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-12 09:58:56',
                'updated_at' => '2024-08-12 09:20:09',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Massage Therapy',
                'selling_price' => '300000',
                'description' => 'Terapi pijat untuk meredakan ketegangan otot dan meningkatkan relaksasi tubuh.',
                'image' => 'images/jAEUzduLHUf89Aan39p1MYBYqIqOljxqHZbZj4pK.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 08:59:31',
                'updated_at' => '2024-08-12 09:47:56',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Cellulite Treatment',
                'selling_price' => '400000',
                'description' => 'Perawatan yang membantu mengurangi tampilan selulit dan mengencangkan kulit.',
                'image' => 'images/5OysH4XaLl5TPwxEMQhqcuX0xxcRjMGoTl42aemS.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:01:08',
                'updated_at' => '2024-08-12 09:20:38',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'Slimming Treatment',
                'selling_price' => '500000',
                'description' => 'Perawatan yang dirancang untuk membantu menurunkan berat badan dan mengencangkan kulit.',
                'image' => 'images/NTirtIprd8vfVBOtsrumdfCwU3MhCxHAxJ8VfAwn.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:03:29',
                'updated_at' => '2024-08-12 09:49:28',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'Hair Spa',
                'selling_price' => '200000',
                'description' => 'Perawatan rambut yang memberikan nutrisi mendalam, menjadikan rambut lebih lembut dan berkilau.',
                'image' => 'images/iz7JVRJH0cuRVuOH77Qi3GZcqRb41IKhaaQce0vY.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:05:28',
                'updated_at' => '2024-08-12 09:43:40',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'Hair Mask',
                'selling_price' => '150000',
                'description' => 'Masker rambut yang menutrisi dan memperbaiki rambut rusak.',
                'image' => 'images/dZQbMagHyG4Pvh8zTYlvey5GfvtBnuI25jUl2RHt.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:06:54',
                'updated_at' => '2024-08-12 09:43:32',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'Scalp Treatment',
                'selling_price' => '180000',
                'description' => 'Perawatan khusus untuk kesehatan kulit kepala, mengurangi ketombe dan gatal-gatal.',
                'image' => 'images/dwpovS4xjQsBNE1rme6ge53gxivcDQZNpA6HrP0B.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:08:05',
                'updated_at' => '2024-08-12 09:49:20',
            ),
            13 => 
            array (
                'id' => 16,
                'name' => 'Keratin Treatment',
                'selling_price' => '500000',
                'description' => 'Perawatan untuk menghaluskan rambut keriting dan mengurangi frizz, menjadikan rambut lebih mudah diatur.',
                'image' => 'images/AhnoBUn4L7AKtPbg1rbip1gdJWVeqqVd2G1EuzNU.webp',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:09:23',
                'updated_at' => '2024-08-12 09:45:26',
            ),
            14 => 
            array (
                'id' => 17,
                'name' => 'Anti-Dandruff Treatment',
                'selling_price' => '180000',
                'description' => 'Perawatan yang efektif untuk menghilangkan ketombe dan menenangkan kulit kepala.',
                'image' => 'images/EdykIKcls6Ra8ZOtBI9oh8KiGi0w30i0xTF2ponp.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:10:28',
                'updated_at' => '2024-08-12 09:19:34',
            ),
            15 => 
            array (
                'id' => 18,
                'name' => 'Manicure',
                'selling_price' => '150000',
                'description' => 'Perawatan kuku tangan yang mencakup pemotongan, penghalusan, dan pengecatan kuku.',
                'image' => 'images/OJdNi20l0DZlWjWUBosuuUQfbjxxJdL8VB83W97M.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:11:44',
                'updated_at' => '2024-08-12 09:46:00',
            ),
            16 => 
            array (
                'id' => 19,
                'name' => 'Pedicure',
                'selling_price' => '180000',
                'description' => 'Perawatan kuku kaki yang mencakup pemotongan, penghalusan, dan pengecatan kuku.',
                'image' => 'images/NCy7xhR2w0VPDJljvcITb09SoMpgzTxtFrsG2HuC.webp',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:13:38',
                'updated_at' => '2024-08-12 09:48:58',
            ),
            17 => 
            array (
                'id' => 20,
                'name' => 'Hand Spa',
                'selling_price' => '200000',
                'description' => 'Spa tangan yang memberikan kelembutan dan kelembapan pada kulit tangan.',
                'image' => 'images/TD5iGWo5diD4qw5sNbuRuFVZRAIv7TdAZFiM1tRQ.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:14:43',
                'updated_at' => '2024-08-12 09:44:15',
            ),
            18 => 
            array (
                'id' => 21,
                'name' => 'Foot Spa',
                'selling_price' => '220000',
                'description' => 'Spa kaki yang menghilangkan kelelahan dan membuat kaki lebih rileks.',
                'image' => 'images/xpqrZPqpGS5sijWJLDGzMbI5YlU7ceWM03rIca5I.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:16:01',
                'updated_at' => '2024-08-12 09:43:23',
            ),
            19 => 
            array (
                'id' => 22,
                'name' => 'Nail Art',
                'selling_price' => '100000',
                'description' => 'Layanan desain dan dekorasi kuku dengan berbagai motif dan warna.',
                'image' => 'images/ue6sEibUiPdeBug0CRy5Ffi9hX1aQPHUoLl0Rd12.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:18:40',
                'updated_at' => '2024-08-12 09:48:50',
            ),
            20 => 
            array (
                'id' => 23,
                'name' => 'Medical Aesthetic Treatments',
                'selling_price' => '1500000',
                'description' => 'Injeksi botoks untuk mengurangi kerutan dan garis halus pada wajah.',
                'image' => 'images/Mqs0AVgLrtJsgAeeZEnjAaaf09mBdffZEsqQhsOv.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:20:23',
                'updated_at' => '2024-08-12 09:46:46',
            ),
            21 => 
            array (
                'id' => 24,
                'name' => 'Dermal Fillers',
                'selling_price' => '2000000',
                'description' => 'Injeksi filler untuk mengisi volume yang hilang dan meningkatkan kontur wajah.',
                'image' => 'images/MWtegkY8WqOAlpVrOt7zE0r07Fixosvl8WIjSgdu.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:24:06',
                'updated_at' => '2024-08-12 09:40:44',
            ),
            22 => 
            array (
                'id' => 25,
                'name' => 'Laser Treatment',
                'selling_price' => '18000000',
                'description' => 'Perawatan laser untuk mengatasi berbagai masalah kulit seperti jerawat, pigmentasi, dan kerutan.',
                'image' => 'images/aUXeC2BgwzRblPsukxEnfh6sRbQjPwfDC7MAww8d.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:25:16',
                'updated_at' => '2024-08-12 09:45:50',
            ),
            23 => 
            array (
                'id' => 26,
                'name' => 'Chemical Peel',
                'selling_price' => '1000000',
                'description' => 'Prosedur pengelupasan kulit dengan bahan kimia untuk memperbaiki tekstur dan tampilan kulit.',
                'image' => 'images/w3O1ZHtnad1BdB6vALAlRNR7LSZYbhBeQWlz7ya2.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:26:27',
                'updated_at' => '2024-08-12 09:20:53',
            ),
            24 => 
            array (
                'id' => 27,
                'name' => 'Microneedling',
                'selling_price' => '1200000',
                'description' => 'Perawatan yang menggunakan jarum kecil untuk merangsang produksi kolagen dan memperbaiki tekstur kulit.',
                'image' => 'images/5xgr0LOeqkL4G2dii1ICwb6HyHuguNVA7KWBf0Nj.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:27:17',
                'updated_at' => '2024-08-12 09:47:00',
            ),
            25 => 
            array (
                'id' => 28,
                'name' => 'Aromatherapy',
                'selling_price' => '300000',
                'description' => 'Terapi menggunakan minyak esensial untuk relaksasi dan meningkatkan kesejahteraan.',
                'image' => 'images/rBcu0CEJusC6lZSIMd4Y4mCf2aev9I68GYXQVQZh.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:28:32',
                'updated_at' => '2024-08-12 09:19:44',
            ),
            26 => 
            array (
                'id' => 29,
                'name' => 'Reflexology',
                'selling_price' => '250000',
                'description' => 'Pijat refleksi yang menargetkan titik-titik tertentu pada kaki untuk meningkatkan kesehatan tubuh.',
                'image' => 'images/FyNzLlLNsWFjKGLAh9iXptXx4JKmOnafIM9pI1h7.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:31:09',
                'updated_at' => '2024-08-12 09:49:09',
            ),
            27 => 
            array (
                'id' => 30,
                'name' => 'Hot Stone Therapy',
                'selling_price' => '350000',
                'description' => 'Terapi pijat menggunakan batu panas untuk merilekskan otot dan meningkatkan sirkulasi darah.',
                'image' => 'images/Qnsa8PmF2nZYdMNNQiy70ktcFEJfrfwze3Ay9gGo.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:32:45',
                'updated_at' => '2024-08-12 09:44:31',
            ),
            28 => 
            array (
                'id' => 31,
                'name' => 'Herbal Therapy',
                'selling_price' => '400000',
                'description' => 'Terapi menggunakan bahan-bahan herbal untuk mendetoksifikasi dan meremajakan tubuh.',
                'image' => 'images/Vdw81tWTZ6Q7hxIS9iYFQM4LA6cCNCDIhY3chpmm.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:34:17',
                'updated_at' => '2024-08-12 09:44:23',
            ),
            29 => 
            array (
                'id' => 32,
                'name' => 'Detox Treatment',
                'selling_price' => '450000',
                'description' => 'Perawatan untuk membersihkan racun dari tubuh dan meningkatkan kesehatan secara keseluruhan.',
                'image' => 'images/NHnv5DZ0kuApEioM8beC1uSZj8Ro1T66DI9OQgar.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:35:19',
                'updated_at' => '2024-08-12 09:41:44',
            ),
            30 => 
            array (
                'id' => 33,
                'name' => 'Eyelash Extension',
                'selling_price' => '500000',
                'description' => 'Proses menambahkan bulu mata palsu untuk meningkatkan panjang dan volume bulu mata alami.',
                'image' => 'images/xwe7xFj6TRL5JS1s3Uce3En26J0EAqUP0wurw815.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:36:28',
                'updated_at' => '2024-08-12 09:42:17',
            ),
            31 => 
            array (
                'id' => 34,
                'name' => 'Eyelash Lifting',
                'selling_price' => '300000',
                'description' => 'Prosedur untuk mengangkat dan melentikkan bulu mata alami tanpa menggunakan ekstensi.',
                'image' => 'images/Ma343R2WwECwGfOzZ0fxvC8STLqp8xkZapzHLXd4.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:37:23',
                'updated_at' => '2024-08-12 09:42:25',
            ),
            32 => 
            array (
                'id' => 35,
                'name' => 'Eyebrow Tinting',
                'selling_price' => '200000',
                'description' => 'Pewarnaan alis untuk memberikan tampilan yang lebih penuh dan tegas.',
                'image' => 'images/oyzdgsGZPRLhDHPKV5itBcN9SsvTKxvhl243guaV.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:38:23',
                'updated_at' => '2024-08-12 09:42:09',
            ),
            33 => 
            array (
                'id' => 36,
                'name' => 'Dark Circle Treatment',
                'selling_price' => '400000',
                'description' => 'Perawatan untuk mengurangi lingkaran hitam di sekitar mata dan mencerahkan area tersebut.',
                'image' => 'images/z14IHBP247E17ROIKELFmGwAipKbInPCgr05EMqn.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:39:17',
                'updated_at' => '2024-08-12 09:21:04',
            ),
            34 => 
            array (
                'id' => 37,
                'name' => 'Moisturizing Treatment',
                'selling_price' => '300000',
                'description' => 'Perawatan untuk memberikan kelembapan mendalam pada kulit kering dan dehidrasi.',
                'image' => 'images/NW9qli9Ik4KY2HExWJVLbw0oADyXqGxcAgYSrljQ.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:41:43',
                'updated_at' => '2024-08-12 09:48:40',
            ),
            35 => 
            array (
                'id' => 38,
                'name' => 'Exfoliating Treatment',
                'selling_price' => '250000',
                'description' => 'Perawatan untuk mengangkat sel-sel kulit mati dan meningkatkan tekstur kulit.',
                'image' => 'images/QKHyRDWcYPj0itsrYpbGLzBh9UXp7SQTszqgzyk9.jpg',
                'show_status' => 1,
                'created_at' => '2024-07-15 09:43:55',
                'updated_at' => '2024-08-12 09:41:59',
            ),
        ));
        
        
    }
}