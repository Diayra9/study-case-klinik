<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product')->delete();
        
        \DB::table('product')->insert(array (
            0 => 
            array (
                'id' => 2,
                'code' => 1114,
                'name' => 'Whitelab Brightening Facial Wash',
                'description' => 'Facial wash ini mengandung zat aktif Niacinamide yang berperan untuk mencerahkan kulit, melembabkan kulit, menyamarkan noda hitam, serta membantu mengatasi jerawat. Serta, Collagen untuk meningkatkan elastisitas kulit dan mencegah tanda penuaan kulitmu. Facial wash ini didesain untuk kulit berminyak dan kusam, dan akan membantu mengatasi jerawat dan mengurangi sebum berlebih. Dengan isi 100gram.',
                'selling_price' => '50000',
                'stock' => '2',
                'image' => 'images/HPiszKoaCSR7fx8pClWnFgUIZdx34YrDCwds282k.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-11 04:35:08',
                'updated_at' => '2024-08-09 09:34:18',
            ),
            1 => 
            array (
                'id' => 3,
                'code' => 2212,
                'name' => 'Nivea Body Serum Extra Night',
                'description' => 'Body serum ini mencerahkan & menyamarkan noda hitam, serta membuat kulit glowing, samarkan dark spot dalam 7 hari. Mengandung 6 vitamin: B3, C, B9, E, A, Pro B5, dan mengandung 4 skin foods: Goji Berry, Pomegranate, Lemon dan Avocado. Mengandung Niacinamide sebagai bahan aktif dan mencerahkan kulit, menyamarkan node hitam. SPF 15 untuk melindungi dari sinar UV matahari. Dengan isi 180ml.',
                'selling_price' => '28000',
                'stock' => '5',
                'image' => 'images/Kv4b9xS4vwCGvIaSPEQHX51YlsABuRHkHsFy0e9z.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-12 03:15:59',
                'updated_at' => '2024-08-09 09:19:34',
            ),
            2 => 
            array (
                'id' => 4,
                'code' => 3318,
                'name' => 'MS Glow Whitening Night Cream',
                'description' => 'Cream malam yang diperuntukkan bagi wajah dengan tipe kulit normal. Kombinasi Kojic Acid, Arbutin dan Deoxyarbutin yang terkandung dalam night cream mampu mencerahkan kulit. Dilengkapi Collagen yang mampu membantu proses regenerasi sel kulit lebih cepat sehingga kulit tampak lebih cerah dan kencang. Extract Aloe Vera dapat mengembalikan kelembapan kulit wajah sehingga kulitmu tampak lebih cerah bersinar. Isi bersih 12 gram.',
                'selling_price' => '85000',
                'stock' => '1',
                'image' => 'images/VphJOzWNBHZ8v0k2wlFtbiv36k1dBVtqXfAUcvdT.png',
                'show_status' => 0,
                'bpom_status' => 0,
                'halal_status' => 1,
                'created_at' => '2024-07-12 07:36:51',
                'updated_at' => '2024-08-09 09:19:54',
            ),
            3 => 
            array (
                'id' => 5,
                'code' => 4112,
                'name' => 'Whitelab Hydrating Sleeping Mask',
                'description' => '97% Kulit Lebih Kenyal, Lembab dan Sehat Dalam 1x Pemakaian. Dengan komponen Hyalucomplex-10, Panthenol, dan Grape Fruit Extract. Dengan isi 20gr. Berfungsi untuk merawat dan meningkatkan fungsi skin-barrier serta membantu menghidrasi kulit wajah secara maksimal. Membantu menutrisi kulit sehingga kulit tampak lebih cerah dan sehat. Serta membantu meningkatkan kekenyalan dan kelembapan kulit dalam semalam.',
                'selling_price' => '20900',
                'stock' => '5',
                'image' => 'images/IRSDWl9JhIQAYFXWgl34f8RuJbWbvkam8CdNK5zl.png',
                'show_status' => 0,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-15 08:06:53',
                'updated_at' => '2024-08-09 10:08:58',
            ),
            4 => 
            array (
                'id' => 6,
                'code' => 3416,
                'name' => 'Daviena Day Cream Acne',
                'description' => 'Cream yang digunakan pada pagi hari atau sebelum beraktifitas di luar ruangan. Kandungan Niacinamide sebagai vitamin B3 yang dapat memperkuat lapisan kulit. Kandungan Tea Tree Oil dapat mengurangi produksi minyak berlebih dan bersifat anti-bakteri. Memiliki kandungan Octyl Methoxycinnamate untuk melindungi kulit dari sinar matahari. Dengan isi 90gr',
                'selling_price' => '70000',
                'stock' => '1',
                'image' => 'images/HL6VQz3vBBnBoZVhbOtUNGPAIlYbfbfbEqfUMt2U.png',
                'show_status' => 0,
                'bpom_status' => 1,
                'halal_status' => 0,
                'created_at' => '2024-07-15 08:47:03',
                'updated_at' => '2024-07-17 05:04:17',
            ),
            5 => 
            array (
                'id' => 7,
                'code' => 5117,
                'name' => 'Whitelab Brightening Face Serum',
                'description' => 'Untuk kulit sensitif dengan Niacinamide 5%, HyaluComplex-10, Marine Collagen, dan Cybright. Berguna untuk mencerahkan kulit dan menyamarkan noda hitam secara maksimal, meningkatkan level oksigen yang dapat membantu proses pembentukan sel kulit baru, melembabkan dan merawat kehalusan kulit. Dengan isi bersih 20ml.',
                'selling_price' => '76000',
                'stock' => '3',
                'image' => 'images/GDryvtHS97ZQiEEbu2AuAWjAbzsL9gBjPsTK8gUb.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-15 08:53:09',
                'updated_at' => '2024-08-09 09:34:07',
            ),
            6 => 
            array (
                'id' => 8,
                'code' => 6512,
                'name' => 'Makarizo Fibertheraphy Shampoo',
                'description' => 'Conditioning Shampoo cocok banget untuk yang sering gonti-ganti warna rambut / sering melakukan styling rambut. Mengandung Kiwi Extract yang membantu merawat rambutmu, serta melindungi dari kerusakan akibat terkena proses kimia. Kandungan Passiflora dan Asam Aminonya, mampu memperbaiki sekaligus merawat rambut. Selain itu, diformulasikan pH-Balanced sehingga bebas dari iritasi. Dengan isi bersih 170ml.',
                'selling_price' => '21500',
                'stock' => '5',
                'image' => 'images/I8fHBqpmzAHixOy5qxiMuUameOWPGwAxb9uEq0qa.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 0,
                'created_at' => '2024-07-15 09:01:38',
                'updated_at' => '2024-07-17 08:38:27',
            ),
            7 => 
            array (
                'id' => 9,
                'code' => 7511,
                'name' => 'Makarizo Vitaglitz 2 in 1 Hair Serum',
                'description' => 'Heat Protector Serum / Vitamin rambut untuk membantu melindungi rambut dari kerusakan akibat panas alat penata rambut, dan membantu menutrisi rambut hingga kutikula sehingga rambut menjadi tahan panas. Diperkaya dengan Kiwi Extract, Honey, Soya Oil, Slik Protein, dan Multivitamin A, C, E yang memperkaya nutrisi rambut agar tampak halus dan berkilau. Dengan isi bersih 8ml.',
                'selling_price' => '14500',
                'stock' => '2',
                'image' => 'images/cWP2cXBmSt4bkCGNZMzXIsFTU8cYmamUbPPaXMD3.png',
                'show_status' => 0,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-15 09:07:10',
                'updated_at' => '2024-08-09 09:23:04',
            ),
            8 => 
            array (
                'id' => 11,
                'code' => 9618,
                'name' => 'TBB Foot Protector',
                'description' => 'Cream pelembab untuk merawat area kaki yang kering, pecah-pecah, dan kapalan. Diperkaya dengan kandungan Ceramides AP, NP, & Phytosphingosine untuk memperkuat skin barrier pada kulit dan mengurangi inflamasi. Serta Shea Butter, Jojoba Oil, dan 10% Natural AHA untuk memberikan nutrisi dan kelembaban extra pada kulit kaki yang kering dan mengangkat sel kulit mati.',
                'selling_price' => '89400',
                'stock' => '1',
                'image' => 'images/hBpdGVOzgsKZXWUlaZAyuYjV9bNb3KNI5VnxKRIj.png',
                'show_status' => 1,
                'bpom_status' => 0,
                'halal_status' => 0,
                'created_at' => '2024-07-17 06:52:03',
                'updated_at' => '2024-08-09 09:32:53',
            ),
            9 => 
            array (
                'id' => 13,
                'code' => 8619,
                'name' => 'TBB Goats Geranium Soap',
                'description' => 'Sabun ini multifungsi 100% natural yang diproses secara tradisional. Liquid Soap ini mampu membuat kulit menjadi lebih bersih, sehat, lembut, dan ternutrisi. Dengan isi bersih 300ml, sabun ini 100% natural terbuat dari susu kambing asli. Dapat digunakan sebagai hand wash dan face was, 100% aman tanpa mengikis skin barrier kulit.',
                'selling_price' => '132800',
                'stock' => '1',
                'image' => 'images/UbspAL0zyzyb055cWx5SZ58Y0XRp1PvJx8c7dtD6.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-17 06:58:30',
                'updated_at' => '2024-08-09 09:33:48',
            ),
            10 => 
            array (
                'id' => 14,
                'code' => 7719,
                'name' => 'Ellips Hair Vitamin Silky Black',
                'description' => 'Ellips Vitamin Rambut Silky Black, diperkaya dengan Pro-Keratin Complex, Kemiri dan Aloe Vera Oil, menutrisi dan merawat kemilau sehat rambut hitam, serta melindungi rambut dari sinar matahari dan kerusakan akibat panas alat pengering/pelurus/pengeriting rambut. Rambut tampak lebih hitam, sehat, lembut, bercahaya, dan mudah diatur. Isi 1 jar: 1 ml x 50 capsule',
                'selling_price' => '97500',
                'stock' => '5',
                'image' => 'images/x4QprLxkW5aetPutDxGmd0m736DsQIqX8DvG4kGj.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-17 07:15:09',
                'updated_at' => '2024-08-09 09:17:52',
            ),
            11 => 
            array (
                'id' => 15,
                'code' => 7711,
                'name' => 'Ellips Vitamin Hair Mask',
                'description' => 'Masker rambut yang diperkaya dengan Vitamin A, C, E, Pro Vit B5 & Aloe Vera Oil yang dapat merawat rambut hingga terasa lebih lembut, menutrisi dan menjaga kelembaban rambut tanpa membuatnya jadi berminyak. Rambut semakin sehat, lembut dan bercahaya. Kemasan Sachet Memudahkan untuk dibawa kemana saja dan praktis digunakan.',
                'selling_price' => '3000',
                'stock' => '10',
                'image' => 'images/JmWB490NmP7rpQKw1DiFYWBcBM3IsXqYizYAMxCm.png',
                'show_status' => 1,
                'bpom_status' => 0,
                'halal_status' => 0,
                'created_at' => '2024-07-17 07:18:33',
                'updated_at' => '2024-08-09 09:18:01',
            ),
            12 => 
            array (
                'id' => 16,
                'code' => 5614,
                'name' => 'TBB Barrier Fit',
                'description' => 'Toner dengan kandungan cream moisturizer yang diperkaya dengan Macadamia Oil, Argan Oil, Sunflower Oil, Meadow Oil, dan 7 Herbs Extracts yang efektif memberikan kelembapan lebih untuk kulit kering, iritasi, dan dehidrasi. Diperkaya dengan Lactose, Inulin, dan Milk Protein untuk menjaga skin barrier, mengurangi iritasi, dan kemerahan pada kulit wajah.',
                'selling_price' => '50000',
                'stock' => '7',
                'image' => 'images/0afsSHxATY6bfpSijr5gtvo4ZJfz9qXzOa74KhMk.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 0,
                'created_at' => '2024-07-17 07:22:27',
                'updated_at' => '2024-08-09 09:32:43',
            ),
            13 => 
            array (
                'id' => 17,
                'code' => 1214,
                'name' => 'Nivea Men Bright Oil Clear',
                'description' => 'Mencerahkan kulit wajah, bebas minyak seharian. Serta membantu proses detox wajah dari kotoran & memberikan sensasi extra segar. Formula NIVEA MEN tidak membuat kulit wajah kering. Pembersih wajah dengan kandungan karbon aktif dan Whitinat Complex menyerap kotoran dan minyak berlebih hingga ke pori-pori, mengangkat komedo, serta mencerahkan kulit 10x lebih baik.',
                'selling_price' => '46350',
                'stock' => '8',
                'image' => 'images/yMbDHoX9y0LaiewHoqsA7UmUHZD4rUhRwhYwRALS.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-17 07:29:18',
                'updated_at' => '2024-08-09 09:22:52',
            ),
            14 => 
            array (
                'id' => 18,
                'code' => 9814,
                'name' => 'Purbasari Lulur Mandi Pengantin',
                'description' => 'Purbasari Lulur Mandi Pengantin Brightening + Susu merupakan scrub dengan Ekstrak Natural Whitening dapat merawat kelembapan dan keremajaan kulit. Butiran scrub halus berfungsi untuk mengangkat sel-sel kulit mati, sehingga membuat kulit Anda halus dan tampak cerah bersinar. Suitable untuk semua jenis kulit.',
                'selling_price' => '41000',
                'stock' => '9',
                'image' => 'images/a8Yi3S3RcvhfNvmvC5PoCwgZtJiE7IncByX0qPWm.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 0,
                'created_at' => '2024-07-17 07:44:18',
                'updated_at' => '2024-08-09 09:25:12',
            ),
            15 => 
            array (
                'id' => 19,
                'code' => 5628,
                'name' => 'TBB Rose Petals',
                'description' => 'Deep hydrating toner yang mengkombinasikan kekuatan dari 91.7% Bulgarian Rose Water, French Rose Petals, Xerophyte Clary Sage, dan Hyaluronic Acid untuk memberikan efek hidrasi langsung setelah pemakaian, bertahan hingga 24 jam dan efek menenangkan yang manjur. Aman untuk digunakan ibu hamil dan menyusui. Aman untuk remaja dan kulit sensitif.',
                'selling_price' => '87225',
                'stock' => '4',
                'image' => 'images/2SGaFIWjwiecF4U1Q4DvSMly5nM72Urn0w4M3yYf.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-17 07:52:09',
                'updated_at' => '2024-08-09 09:33:58',
            ),
            16 => 
            array (
                'id' => 20,
                'code' => 9419,
                'name' => 'Daviena Skincare Hand Body Dosting',
                'description' => 'Handbody Daviena Skincare Kemasan 100ml. Bright & Glow Body Lotion. Dengan kandungan kualitas premium didalamnya. Centela Asiatica Ext,  NiacinamideI, Raphanus Sativus Root , Hyaluronate dan banyak lagi kandungan lainya, sehingga ampuh mencerahkan kulit, melindungi kulit dari paparan sinar matahari, melembabkan kulit, menjaga elastisitas kulit dan banyak manfaat lainnya.',
                'selling_price' => '169320',
                'stock' => '1',
                'image' => 'images/dmqkFApJwYLpXhRwueoMz3imJ8CwdXb1tluUEzTl.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-17 08:00:16',
                'updated_at' => '2024-08-09 09:17:45',
            ),
            17 => 
            array (
                'id' => 21,
                'code' => 1223,
                'name' => 'Nivea Men Acne Oil Clear',
                'description' => 'Nivea Men Acne Oil Clear Acne Defense Foam dengan formula Magnolia Power & Carnitine yang bekerja efektif melawan bakteri penyebab jerawat, mengangkat minyak berlebih, & kotoran. Wajah jadi sehat, bersih, & terhindar dari masalah kulit akibat timbulnya jerawat. Cocok digunakan sehari-hari & untuk semua jenis kulit terutama untuk pria dengan wajah mudah berminyak & mudah berjerawat. Formula NIVEA MEN tidak membuat kulit wajah kering.',
                'selling_price' => '32900',
                'stock' => '4',
                'image' => 'images/V8DXzavsqqjaXg5sIGPZXdbn1RAkIrxSKKA9RlbC.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-17 08:08:20',
                'updated_at' => '2024-08-09 09:22:34',
            ),
            18 => 
            array (
                'id' => 22,
                'code' => 7527,
                'name' => 'Makarizo Hair Fibertherapy & Scalp',
            'description' => 'Kombinasi Melon dengan kandungan Vitamin B, Aloe (Lidah Buaya) dan Omega 6 dari Minyak Nabati Passiflora yang dapat membantu mengurangi kerontokan rambut dan memperkuat akar rambutmu. Selain itu, diformulasikan dengan pH-Balanced sehingga bebas dari iritasi, karena kadar pH sesuai dengan kulit kepalamu. Creambath Aloe & Melon cocok untuk digunakan kamu yang memiliki masalah rambut rontok.',
                'selling_price' => '77400',
                'stock' => '5',
                'image' => 'images/4fqFFp4dxIN3zuZjUyMiWgOLiZBCMX3DEPhwq8au.png',
                'show_status' => 1,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-17 08:17:24',
                'updated_at' => '2024-08-09 09:18:27',
            ),
            19 => 
            array (
                'id' => 23,
                'code' => 9821,
                'name' => 'Purbasari Lulur Mandi',
                'description' => 'Lulur Mandi Purbasari dapat digunakan setiap hari sebagai pengganti sabun karena mengandung butiran scrub bulat sempurna yang menutrisi & tidak menyebabkan iritasi, sehingga dapat digunakan setiap hari sebagai pengganti sabun. Tersedia dalam ukuran 100gr dan 200gr. Cocok untuk semua jenis kulit.',
                'selling_price' => '19000',
                'stock' => '10',
                'image' => 'images/aFElNZu2t5hmEVyhbjN81p6c9TQtuq9LtaWlcjSx.png',
                'show_status' => 0,
                'bpom_status' => 1,
                'halal_status' => 1,
                'created_at' => '2024-07-17 08:22:59',
                'updated_at' => '2024-08-09 09:24:50',
            ),
        ));
        
        
    }
}