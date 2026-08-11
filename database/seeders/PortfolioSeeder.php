<?php

namespace Database\Seeders;

use App\Models\PortfolioItem;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['title' => 'Always You', 'author' => 'Kiera Ashford', 'category' => 'romance', 'type_label' => 'Cover · Dark Romantic Fantasy', 'image' => 'portfolio/always-you.svg'],
            ['title' => 'Visión y Estrategias', 'author' => 'Maharani A.c.a', 'category' => 'self-help', 'type_label' => 'Cover · Self-Help', 'image' => 'portfolio/vision-estrategias.svg', 'is_featured' => true],
            ['title' => 'Finni the Fox', 'author' => "Children's Book", 'category' => 'children', 'type_label' => "Interior · Children's", 'image' => 'portfolio/finni-fox.svg'],
            ['title' => 'Wed to the Ice Giant', 'author' => 'Layla Fae', 'category' => 'fantasy', 'type_label' => 'Cover · Fantasy', 'image' => 'portfolio/wed-ice-giant.svg', 'is_featured' => true],
            ['title' => 'Sylvie, Little Explorer', 'author' => 'HMD Publishing Illustration Studio', 'category' => 'children', 'type_label' => "Illustration · Children's", 'image' => 'portfolio/sylvie-explorer.svg'],
            ['title' => 'Oh, Manny!', 'author' => "Children's Book", 'category' => 'children', 'type_label' => "Interior · Children's", 'image' => 'portfolio/oh-manny.svg'],
            ['title' => 'The Promise of the Wolf', 'author' => 'Endayone', 'category' => 'fantasy', 'type_label' => 'Cover · Fantasy', 'image' => 'portfolio/promise-wolf.svg', 'is_featured' => true],
            ['title' => 'The Clockwork Dragon', 'author' => 'ELIAN VALE', 'category' => 'fantasy', 'type_label' => 'Cover · Dragon Fantasy', 'image' => 'portfolio/clockwork-dragon.svg', 'is_featured' => true],
            ['title' => 'Stardust and Scales', 'author' => 'Evelyn Meridian', 'category' => 'fantasy', 'type_label' => 'Cover · Dragon Fantasy', 'image' => 'portfolio/stardust-scales.svg'],
            ['title' => 'Wild For Love Again', 'author' => 'Mia Parker', 'category' => 'romance', 'type_label' => 'Cover · Romance', 'image' => 'portfolio/wild-love-again.svg'],
            ['title' => 'Heart of Thorns', 'author' => 'Mia Bell', 'category' => 'romance', 'type_label' => 'Cover · Romance', 'image' => 'portfolio/heart-of-thorns.svg'],
            ['title' => 'Moonbound Sovereign', 'author' => 'A. Everly Hart', 'category' => 'fantasy', 'type_label' => 'Cover · Dark Romantic Fantasy', 'image' => 'portfolio/moonbound-sovereign.svg'],
        ];

        foreach ($items as $index => $item) {
            PortfolioItem::create(array_merge([
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => $index + 1,
            ], $item));
        }
    }
}
