<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Description;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'name' => 'PC DREAM II Core i5-10400F 8GB RTX 2060 6G 120GB SSD',
            'price' => 24990000,
            'supplier' => 'Intel',
            'image' => 'pc-gaming-1.jpg',
            'category_id' => 1,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i5-10400F',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'Kingston HyperX Fury Black  8GB (1 X 8GB) 2666 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Gigabyte RTX 2060 6GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'Samsung 24" LC24F390FHEXXV (24" FHD/ 60Hz/ màn hình cong)',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'SSD Lexar 128GB SATA III 2.5"',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);
        
        $product = Product::create([
            'name' => 'PC CYBER INTEL CORE I5-10400F 16GB RAM RTX3060 12G 240GB SSD',
            'price' => 31490000,
            'supplier' => 'Intel',
            'image' => 'pc-gaming-4.jpg',
            'category_id' => 1, // ID của danh mục sản phẩm
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i5-10400F',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'Kingston HyperX Fury Black  16GB (2 X 8GB) 2666 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Gigabyte RTX 3060 12GB Eagle OC',
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'Philips 272E2F 27" (Màn hình IPS/ FullHD/ 75Hz/ Full Viền)',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'SSD Kingston A400 240GB SATA III 2.5"',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);

        $product = Product::create([
            'name' => 'PC GIRY1 RYZEN 5 3500 8GB GTX 1660 SUPER 6G 128GB SSD',
            'price' => 21490000,
            'supplier' => 'Ryzen',
            'image' => 'pc-gaming-7.jpg',
            'category_id' => 1, // ID của danh mục sản phẩm
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'AMD Ryzen 5 3500',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'Kingston HyperX Fury Black  8GB (1 X 8GB) 2666 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Gigabyte GTX 1660 Super 6GB OC',
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'Samsung 22" LF22T350FHEXXV (22" FHD/ 75Hz/ IPS/Full viền)',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'SSD Lexar 128GB SATA III 2.5"',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);

        $product = Product::create([
            'name' => 'PC X-OFFICE INTEL CORE I5-10400 8GB 120GB SSD',
            'price' => 10290000,
            'supplier' => 'Intel',
            'image' => 'pc-gaming-10.jpg',
            'category_id' => 1, // ID của danh mục sản phẩm
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i5-10400',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'Kingston HyperX Fury Black  8GB (1 X 8GB) 2666 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Không', // Nếu không có GPU cụ thể
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'Samsung 24" LC24F390FHEXXV (24" FHD/ 60Hz/ màn hình cong)',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'SSD Gigabyte 120GB SATA III 2.5"',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);

        $product = Product::create([
            'name' => 'PC STRIKE PENTIUM G6400 8GB GTX 1050TI 128GB SSD',
            'price' => 11990000,
            'supplier' => 'Intel',
            'image' => 'pc-gaming-13.jpg',
            'category_id' => 1, // ID của danh mục sản phẩm
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Pentium G6400',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'Kingston HyperX Fury Black  8GB (1 X 8GB) 2666 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Gigabyte GTX 1050Ti OC 4GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'Philips 241E1C 24″ (Màn hình cong/ VA/ FullHD/ 75Hz/ Full Viền)',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'SSD Lexar 128GB SATA III 2.5"',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);

        $product = Product::create([
            'name' => 'PC X-VISION STARTER INTEL CORE I5-10400 16GB RAM 240GB SSD',
            'price' => 17480000,
            'supplier' => 'Intel',
            'image' => 'pc-gaming-17.jpg',
            'category_id' => 1, // ID của danh mục sản phẩm
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i5-10400',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'Kingston HyperX Fury Black  16GB (2 X 8GB) 2666 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Không', // Nếu không có thông tin về GPU cụ thể
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'Samsung 27" LC27F390FHEXXV (27" FHD/ 60Hz/ màn hình cong)',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'SSD Kingston A400 240GB SATA III 2.5"',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);

        $product = Product::create([
            'name' => 'PC X-VISION BEGINER INTEL I3-10100F 16GB RAM GTX 1050TI 4G 240GB SSD',
            'price' => 18880000,
            'supplier' => 'Intel',
            'image' => 'pc-gaming-18.jpg',
            'category_id' => 1, // ID của danh mục sản phẩm
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i3-10100F',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'Kingston HyperX Fury Black  16GB (2 X 8GB) 2666 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Gigabyte GTX 1050Ti OC 4GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'ASUS VA279EHE IPS 24" 75Hz FullHD Eye Care',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'SSD Kingston A400 240GB SATA III 2.5"',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);

        $product = Product::create([
            'name' => 'PC X-VISION ULTIMATE I7-10700K 16GB RAM RTX 3070 500GB NVME SSD',
            'price' => 54980000,
            'supplier' => 'Intel',
            'image' => 'pc-gaming-21.jpg',
            'category_id' => 1, // ID của danh mục sản phẩm
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i7-10700K',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'Kingston HyperX Fury Black  16GB (2 X 8GB) 2666 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Gigabyte RTX 3070 8GB Eagle OC',
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'ASUS TUF Gaming VG249Q 24" FullHD 144hz IPS 1ms FreeSync',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'SSD Kingston A2000 500GB M.2 NVMe PCIe Gen3 x4 (Read 2200 MB/s, Write 2000 MB/s)',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);

        $product = Product::create([
            'name' => 'PC X-AORUS I7-10700F 16GB RTX 3070 256GB AORUS SSD',
            'price' => 59980000,
            'supplier' => 'Intel',
            'image' => 'pc-gaming-24.jpg',
            'category_id' => 1, // ID của danh mục sản phẩm
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i7-10700F',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'AORUS RGB 16GB (2 x 8GB) 3200 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Gigabyte RTX 3070 8GB Eagle OC',
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'ASUS TUF Gaming VG249Q 24" FullHD 144hz IPS 1ms FreeSync',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'Gigabyte AORUS M.2 PCIe SSD 256GB',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);

        $product = Product::create([
            'name' => 'PC XGEAR WIN INTEL CORE I5-10400F 8GB GTX1660 SUPER 6GB 120GB SSD',
            'price' => 25180000,
            'supplier' => 'Intel',
            'image' => 'pc-gaming-25.jpg',
            'category_id' => 1, // ID của danh mục sản phẩm
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i5-10400F',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'Kingston HyperX Fury Black  8GB (1 X 8GB) 2666 MHz DDR4',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Gigabyte GTX 1660 Super 6GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => 'Samsung 24" LC24F390FHEXXV (24" FHD/ 60Hz/ màn hình cong)',
            ]),
            new Description([
                'name' => 'disk',
                'value' => 'SSD Lexar 128GB SATA III 2.5"',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop Asus ROG Strix G17 G713QR-HG072T Geforce RTX 3070 8GB Ryzen 7 5800H 16GB 1TB 17.3" 300Hz IPS Perkey RGB Win 10 Eclipse Gray',
            'price' => 49990000,
            'supplier' => 'Asus',
            'image' => 'laptop-1.jpg',
            'category_id' => 2,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'AMD Ryzen 7 5800H',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 16GB (2 x 8GB) 3200MHz; 2 slots, up to 32GB',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Geforce RTX 3070 8GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '17.3" FHD (1920×1080) IPS, Non-Glare, 300Hz',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '1TB SSD NVMe M.2 PCIe Gen 3 x 4',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '2.7 kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop ASUS ROG Zephyrus G14 GA401II-HE019T Geforce GTX 1650Ti 4GB Ryzen 7-4800HS 16GB 512GB 14" 120Hz IPS Eclipse Gray Win 10',
            'price' => 29990000,
            'supplier' => 'Asus',
            'image' => 'laptop-2.jpg',
            'category_id' => 2, // ID của danh mục laptop
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'AMD Ryzen 7 – 4800HS',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 16GB (8GB Onboard, 1 slot 8GB 3200MHz)',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Geforce GTX 1650Ti MaxQ',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '14" Full HD (1920×1080) IPS 120Hz',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '512GB SSD NVMe M.2 PCIe Gen 3 x 4',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '1.7kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop Gaming MSI GF65 Thin 10UE 241VN Geforce RTX 3060 6GB Intel Core i5 10300H 16GB 512GB 15.6" IPS 144Hz Backlight Keyboard Win 10',
            'price' => 26990000,
            'supplier' => 'MSI',
            'image' => 'laptop-3.jpg',
            'category_id' => 2, // ID của danh mục laptop
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i5 10300H',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 16GB (2 x 8GB) 3200MHz; 2 slots, up to 32GB',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Geforce RTX 3060 MaxQ 6GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '15.6" FullHD (1920 x 1080). 144Hz, IPS Panel',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '1 slot SSD NVMe M.2 PCIe',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '1.8 kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop Gaming MSI Bravo 15 A4DCR 270VN Radeon RX5300M Ryzen 5 4600H 8GB 256GB 15.6” IPS 144Hz Backlight Keyboard Win 10',
            'price' => 17990000,
            'supplier' => 'MSI',
            'image' => 'laptop-4.jpg',
            'category_id' => 2, // ID của danh mục laptop
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'AMD Ryzen 5 – 4600H',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 8GB (1 x 8GB) 3200MHz; 2 slots, up to 32GB',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Radeon RX5300M 3GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '15.6" FullHD (1920 x 1080). 144Hz, IPS Panel',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '256GB SSD NVMe M.2 PCIe Gen 3×2',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '1.8 kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop Lenovo Ideapad Gaming 3 15ARH05 (82EY00LBVN) Geforce GTX1650 4GB Ryzen 5 4600H 8GB 512GB 15.6” IPS 120Hz Backlight Keyboard Win 10',
            'price' => 18490000,
            'supplier' => 'Lenovo',
            'image' => 'laptop-5.jpg',
            'category_id' => 2, // ID của danh mục laptop
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'AMD Ryzen 5 – 4600H',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 8GB (1 x 8GB) 3200MHz; 2 slots, up to 32GB',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Geforce GTX 1650 4GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '15.6" Full HD ( 1920 x 1080 ), 120Hz, IPS Panel',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '512GB SSD NVMe M.2 PCIe Gen 3 x 2',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '2.4kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop Dell G5 5590 (70225484) Geforce RTX 2070 8GB Intel Core i7 10750H 1TB 16GB 15.6 FHD IPS 300Hz 4-Zones RGB Win 10',
            'price' => 37990000,
            'supplier' => 'Dell',
            'image' => 'laptop-6.jpg',
            'category_id' => 2, // ID của danh mục laptop
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i7 10750H',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 16GB (2 x 8GB) 3200MHz; 2 slots, up to 32GB',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Geforce RTX 2070 8GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '15.6" FHD (1920×1080) IPS, 300Hz',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '1TB SSD NVMe M.2 PCIe Gen 3 x 4',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '2.5 kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop Dell G5 5590 (70225485) Geforce GTX 1660Ti 6GB Intel Core i7 10750H 512GB 8GB 15.6 FHD IPS 120Hz 4-Zones RGB Win 10',
            'price' => 27990000,
            'supplier' => 'Dell',
            'image' => 'laptop-7.jpg',
            'category_id' => 2, // ID của danh mục laptop
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i7 10750H',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 8GB (2x4GB) 3200MHz, 2 slots, up to 32GB',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Geforce GTX 1660Ti',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '15.6" Full HD ( 1920 x 1080 ), 120Hz, IPS Panel',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '512GB SSD NVMe M.2 PCIe Gen 3 x 4',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '2.5 kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop Lenovo Legion 5 15ARH05 (82B500GUVN) Geforce GTX1650Ti 4GB Ryzen 5 4600H 8GB 512GB 15.6″ 144Hz IPS RGB Win 10',
            'price' => 23990000,
            'supplier' => 'Lenovo',
            'image' => 'laptop-8.jpg',
            'category_id' => 2, // ID của danh mục laptop
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'AMD Ryzen 5 – 4600H',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 8GB (1 x 8GB) 3200MHz; 2 slots, up to 32GB',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Geforce GTX 1650Ti 4GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '15.6" FullHD (1920 x 1080). 144Hz, IPS Panel',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '512GB SSD NVMe M.2 PCIe Gen 3 x 4',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '2.4kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop Asus ROG Zephyrus Duo 15 SE GX551QR-HF103T RTX 3080 16GB AMD Ryzen 9 5900HX 32GB 2TB SSD 15.6” IPS FHD 300Hz Perkey Win 10',
            'price' => 109990000,
            'supplier' => 'Asus',
            'image' => 'laptop-9.jpg',
            'category_id' => 2, // ID của danh mục laptop
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'AMD Ryzen 9 5900HX',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 32GB (16GB 2933Hz, 16GB Onboard)',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Geforce RTX 3080 16GB',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '15.6" FHD (1920×1080) IPS, 300Hz',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '2TB SSD NVMe M.2 PCIe Gen 3×4',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '2.5 kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Laptop LG Gram 14ZD980-G.AX52A5 (14" FHD/i5-8250U/8GB/UHD 620/Free DOS/1 kg)',
            'price' => 19990000,
            'supplier' => 'LG',
            'image' => 'laptop-10.jpg',
            'category_id' => 2, // ID của danh mục laptop
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'cpu',
                'value' => 'Intel Core i5-8250U',
            ]),
            new Description([
                'name' => 'ram',
                'value' => 'DDR4 8GB (1 x 8GB) 2400MHz',
            ]),
            new Description([
                'name' => 'gpu',
                'value' => 'Intel UHD Graphics 620',
            ]),
            new Description([
                'name' => 'screen',
                'value' => '14" IPS ( 1920 x 1080 ) , không cảm ứng',
            ]),
            new Description([
                'name' => 'disk',
                'value' => '256GB SSD M.2 SATA',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '1 kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Bàn phím Logitech K400 Plus không dây (Trắng)',
            'price' => 830000,
            'supplier' => 'Logitech',
            'image' => 'ban-phim-1.jpg',
            'category_id' => 4, // ID của danh mục phụ kiện
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'type',
                'value' => 'Thường', 
            ]),
            new Description([
                'name' => 'switches',
                'value' => 'Không', 
            ]),
            new Description([
                'name' => 'reliability',
                'value' => '70 triệu lần nhấn',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '1.1kg',
            ]),
        ]);
        
        $product = Product::create([
            'name' => 'Bàn phím cơ Logitech G413 Carbon Backlit Mechanical Gaming',
            'price' => 1590000,
            'supplier' => 'Logitech',
            'image' => 'ban-phim-2.jpg',
            'category_id' => 4,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'type',
                'value' => 'Phím cơ',
            ]),
            new Description([
                'name' => 'switches',
                'value' => 'Romer-G™',
            ]),
            new Description([
                'name' => 'reliability',
                'value' => '70 triệu lần nhấn',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '1.1kg',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Bàn phím cơ không dây Akko 3061S Neon RGB (Gateron Pink Switch)',
            'price' => 1699000,
            'supplier' => 'Akko',
            'image' => 'ban-phim-5.jpg',
            'category_id' => 4,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'type',
                'value' => 'Phím cơ',
            ]),
            new Description([
                'name' => 'switches',
                'value' => 'Led RGB',
            ]),
            new Description([
                'name' => 'reliability',
                'value' => '100 triệu lần nhấn',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '1.1kg',
            ]),
        ]);
        
        $product = Product::create([
            'name' => 'Bàn phím giả cơ Dareu LK145 Gaming',
            'price' => 360000,
            'supplier' => 'Dareu',
            'image' => 'ban-phim-8.jpg',
            'category_id' => 4,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'type',
                'value' => 'Giả cơ',
            ]),
            new Description([
                'name' => 'switches',
                'value' => 'RGB',
            ]),
            new Description([
                'name' => 'reliability',
                'value' => '50 triệu lần nhấn',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '1.3kg',
            ]),
        ]);
        
        $product = Product::create([
            'name' => 'Bàn phím cơ Dareu EK87 Mutiled Blue Switch',
            'price' => 499000,
            'supplier' => 'Dareu',
            'image' => 'ban-phim-10.jpg',
            'category_id' => 4,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'type',
                'value' => 'Phím cơ',
            ]),
            new Description([
                'name' => 'switches',
                'value' => 'Blue D switch',
            ]),
            new Description([
                'name' => 'reliability',
                'value' => '100 triệu lần nhấn',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '1.0 kg',
            ]),
        ]);
        
        $product = Product::create([
            'name' => 'Chuột chơi game ASUS ROG Pugio (Đen)',
            'price' => 1590000,
            'supplier' => 'Asus',
            'image' => 'chuot-3.jpg',
            'category_id' => 3,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'dpi',
                'value' => '7200 DPI',
            ]),
            new Description([
                'name' => 'led',
                'value' => 'Aura RGB',
            ]),
            new Description([
                'name' => 'reliability',
                'value' => '30 triệu lần nhấn',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '85g',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Chuột máy tính Dell MS116 (Đen)',
            'price' => 105000,
            'supplier' => 'Dell',
            'image' => 'chuot-6.jpg',
            'category_id' => 3,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'dpi',
                'value' => '1000 DPI',
            ]),
            new Description([
                'name' => 'led',
                'value' => 'Không',
            ]),
            new Description([
                'name' => 'reliability',
                'value' => '10 triệu lần nhấn',
            ]),
            new Description([
                'name' => 'weight',
                'value' => '90g',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Tai Nghe Corsair Void Pro Red Surround 7.1 Gaming',
            'price' => 1490000,
            'supplier' => 'Corsair',
            'image' => 'tai-nghe-4.jpg',
            'category_id' => 5,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'type',
                'value' => 'Over-ear',
            ]),
            new Description([
                'name' => 'connect',
                'value' => 'Tai nghe có dây',
            ]),
            new Description([
                'name' => 'gate',
                'value' => 'USB 3.0',
            ]),
            new Description([
                'name' => 'led',
                'value' => 'Không',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Tai nghe Logitech G431 7.1 Surround',
            'price' => 1590000,
            'supplier' => 'Logitech',
            'image' => 'tai-nghe-7.jpg',
            'category_id' => 5,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'type',
                'value' => 'Over-ear',
            ]),
            new Description([
                'name' => 'connect',
                'value' => 'Tai nghe có dây',
            ]),
            new Description([
                'name' => 'gate',
                'value' => 'USB 3.0 2.0',
            ]),
            new Description([
                'name' => 'led',
                'value' => 'RGB',
            ]),
        ]);

        $product = Product::create([
            'name' => 'Tai nghe over-ear Asus ROG Theta 7.1 (Đen)',
            'price' => 7090000,
            'supplier' => 'Asus',
            'image' => 'tai-nghe-9.jpg',
            'category_id' => 5,
        ]);
        
        $product->descriptions()->saveMany([
            new Description([
                'name' => 'type',
                'value' => 'Over-ear',
            ]),
            new Description([
                'name' => 'connect',
                'value' => 'Tai nghe có dây',
            ]),
            new Description([
                'name' => 'gate',
                'value' => 'USB, USB Type-C',
            ]),
            new Description([
                'name' => 'led',
                'value' => 'RGB',
            ]),
        ]);
    }
}
