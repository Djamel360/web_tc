<?php  

namespace Database\Factories;  

use Illuminate\Database\Eloquent\Factories\Factory;  

/**  
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>  
     */  
class ProductFactory extends Factory  
{  
    /**  
     * Define the model's default state.  
     *  
     * @return array<string, mixed>  
     */  
    public function definition(): array  
    {  
        // Example clothing products
        $products = [
            [
                'name' => 'Levi’s 501 Original Jeans',
                'description' => 'Classic straight-leg jeans with timeless style and comfort.',
                'price' => 69.50,
                'stock_quantity' => 120,
                'category' => 'Jeans',
                'image_url' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.countryoutfitter.com%2Fon%2Fdemandware.static%2F-%2FSites-master-product-catalog-shp%2Fdefault%2Fdw5b8fce43%2Fimages%2F955%2F1000020955_400_P1.JPG&f=1&nofb=1&ipt=8c37d15204f4491719240cac2afa753582bdf47f64ea7d78186a30ac8f673179',
            ],
            [
                'name' => 'Nike Air Force 1',
                'description' => 'Iconic sneakers that blend comfort and street style.',
                'price' => 110.00,
                'stock_quantity' => 80,
                'category' => 'Shoes',
                'image_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F1sneaker.vn%2Fwp-content%2Fuploads%2F2020%2F07%2FNike-Air-Force-1-3.jpg&f=1&nofb=1&ipt=71c2806f2d15f3636a397b7fcb8018c18e5af4bb0a17149599fed5c878051635',
            ],
            [
                'name' => 'The North Face Puffer Jacket',
                'description' => 'Stay warm and stylish with this insulated puffer jacket.',
                'price' => 199.00,
                'stock_quantity' => 60,
                'category' => 'Jackets',
                'image_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdna.lystit.com%2Fphotos%2Fsimons%2F657a4f7c%2Fthe-north-face-Amber-Bronze-Nuptse-Retro-Puffer-Jacket.jpeg&f=1&nofb=1&ipt=a2dd8b440b6c0fd5ebb36d65802b9dc35bd0717658761deb771b79c8bbf5d552',
            ],
            [
                'name' => 'Adidas Essentials Hoodie',
                'description' => 'A soft, comfortable hoodie for everyday wear.',
                'price' => 55.00,
                'stock_quantity' => 100,
                'category' => 'Hoodies',
                'image_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.tennisnuts.com%2Fimages%2Fproduct%2Ffull%2Fg_X13264_33508.jpg&f=1&nofb=1&ipt=e35702a8fa29cf21cf6163de1adc088768f012ad8b74f0beb82442512819aff3',
            ],
            [
                'name' => 'Champion Classic T-Shirt',
                'description' => 'A comfortable cotton t-shirt for everyday use.',
                'price' => 25.00,
                'stock_quantity' => 150,
                'category' => 'T-Shirts',
                'image_url' => 'https://i5.walmartimages.com/asr/f0ccba78-356f-42d0-8b25-3495428ea0a1_1.fec3df6422ae4cbdde4e5122f8b3e339.jpeg',
            ],
            [
                'name' => 'Nike Dri-FIT Shorts',
                'description' => 'Lightweight athletic shorts for training and casual wear.',
                'price' => 35.00,
                'stock_quantity' => 90,
                'category' => 'Shorts',
                'image_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.nike.com%2Fa%2Fimages%2Ft_PDP_1280_v1%2Ff_auto%2Cq_auto%3Aeco%2F0d59b10d-afcf-41f9-8128-2a4ff5aa431e%2Fdri-fit-attack-womens-training-shorts-8GMzSZ.png&f=1&nofb=1&ipt=a1c5445eb22c2f5f14bfbeb354a9e70c7aafaecd65c732948ec0e0dffab4489d',
            ],
            [
                'name' => 'New Era 59FIFTY Cap',
                'description' => 'Classic fitted cap with iconic team logo.',
                'price' => 40.00,
                'stock_quantity' => 70,
                'category' => 'Caps',
                'image_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F2526%2F3006%2Fproducts%2F5_f21071af-14d2-4f95-906c-7d352d75e030_1596x1596.jpg%3Fv%3D1615978171&f=1&nofb=1&ipt=f896a371979c797e8e368eac9042d0cbe217751d7aaabbd4b526d6482d6f81db',
            ],
            [
                'name' => 'Puma Crew Socks (6 Pack)',
                'description' => 'Comfortable and durable crew socks for daily wear.',
                'price' => 18.00,
                'stock_quantity' => 200,
                'category' => 'Socks',
                'image_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi5.walmartimages.com%2Fasr%2F6e360395-b721-4627-9d4d-0fa7e9229a2f.010d748e27803acb8c7167ecde2398d8.jpeg%3FodnWidth%3D1000%26odnHeight%3D1000%26odnBg%3Dffffff&f=1&nofb=1&ipt=fbad0c05037b0be6a741ee3f5f837118e1bdf9990553cf5d9935e8799c9faae7',
            ],
        ];
        return fake()->randomElement($products);
    }  
}