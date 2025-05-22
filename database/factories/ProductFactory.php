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
            $products = [
                // Footwear (Baskets)
                [
                    'name' => 'Nike Air Force 1',
                    'description' => 'La basket iconique Nike Air Force 1, style classique et confort toute la journée.',
                    'price' => 115.00,
                    'stock_quantity' => 100,
                    'category' => 'Footwear',
                    'image_url' => 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,q_auto:eco/1c6b2e2e-2e2e-4e2e-8e2e-2e2e2e2e2e/air-force-1-07-shoe.png',
                ],
                [
                    'name' => 'Adidas Stan Smith',
                    'description' => 'La basket blanche intemporelle, parfaite pour tous les styles.',
                    'price' => 99.99,
                    'stock_quantity' => 80,
                    'category' => 'Footwear',
                    'image_url' => 'https://assets.adidas.com/images/w_600,f_auto,q_auto/stan-smith.jpg',
                ],
                // Casquette
                [
                    'name' => 'Casquette New Era NY',
                    'description' => 'Casquette classique New Era aux couleurs des Yankees de New York.',
                    'price' => 34.99,
                    'stock_quantity' => 60,
                    'category' => 'Casquette',
                    'image_url' => 'https://www.neweracap.eu/globalassets/products/12380590/12380590_main.png',
                ],
                [
                    'name' => 'Casquette Nike Heritage86',
                    'description' => 'Casquette Nike Heritage86, style décontracté et ajustable.',
                    'price' => 19.99,
                    'stock_quantity' => 70,
                    'category' => 'Casquette',
                    'image_url' => 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,q_auto:eco/heritage86-cap.png',
                ],
                // Clothing (Classique)
                [
                    'name' => 'T-shirt Uniqlo Supima',
                    'description' => 'T-shirt basique en coton Supima, doux et résistant.',
                    'price' => 19.99,
                    'stock_quantity' => 150,
                    'category' => 'Clothing',
                    'image_url' => 'https://www.uniqlo.com/images/t-shirt.jpg',
                ],
                [
                    'name' => 'Jean Levi’s 501 Original',
                    'description' => 'Le jean classique Levi’s 501, coupe droite et indémodable.',
                    'price' => 89.99,
                    'stock_quantity' => 90,
                    'category' => 'Clothing',
                    'image_url' => 'https://lsco.scene7.com/is/image/lsco/005010114-front-pdp.jpg',
                ],
                [
                    'name' => 'Sweatshirt Champion',
                    'description' => 'Sweatshirt classique Champion, confortable et stylé.',
                    'price' => 49.99,
                    'stock_quantity' => 60,
                    'category' => 'Clothing',
                    'image_url' => 'https://images.champion.com/is/image/Champion/sweatshirt.jpg',
                ],
                [
                    'name' => 'Veste en jean Zara',
                    'description' => 'Veste en jean classique Zara, idéale pour la mi-saison.',
                    'price' => 59.99,
                    'stock_quantity' => 40,
                    'category' => 'Clothing',
                    'image_url' => 'https://static.zara.net/photos//2023/I/0/1/p/3042/400/400/2/w/600/3042400400_6_1_1.jpg',
                ],
                // Chemise
                [
                    'name' => 'Chemise Celio Slim Fit',
                    'description' => 'Chemise blanche Celio coupe slim, élégante et confortable.',
                    'price' => 39.99,
                    'stock_quantity' => 70,
                    'category' => 'Chemise',
                    'image_url' => 'https://www.celio.com/dw/image/v2/BDCB_PRD/on/demandware.static/-/Sites-celio-master-catalog/default/dw7e7e7e7e/images/chemise-blanche-homme-celio.jpg',
                ],
                // Jean
                [
                    'name' => 'Jean Diesel Skinny',
                    'description' => 'Jean Diesel coupe skinny, style moderne et urbain.',
                    'price' => 99.99,
                    'stock_quantity' => 50,
                    'category' => 'Jean',
                    'image_url' => 'https://www.diesel.com/on/demandware.static/-/Sites-diesel-master-catalog/default/dw7e7e7e7e/images/jean-skinny-diesel.jpg',
                ],
                // Chaussure
                [
                    'name' => 'Chaussure Derby Cuir',
                    'description' => 'Chaussure Derby en cuir véritable, idéale pour les occasions habillées.',
                    'price' => 120.00,
                    'stock_quantity' => 30,
                    'category' => 'Chaussure',
                    'image_url' => 'https://www.bexley.fr/medias/sys_master/images/hc7/hc7/chaussure-derby-cuir.jpg',
                ],
            ];
            return fake()->randomElement($products);
        }  
    }