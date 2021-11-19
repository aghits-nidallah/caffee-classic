<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'product_photo_path' => 'template/img_01.png',
                'name' => 'AMERICANO SUPER HOT COFFEE',
                'description' => 'Est anim consectetur Lorem ad et do fugiat fugiat magna minim cupidatat. In est incididunt ex consequat anim laborum incididunt ex duis consectetur aute occaecat incididunt. Consequat deserunt ullamco fugiat labore sint anim reprehenderit ipsum in labore ad voluptate do. Sunt Lorem dolore aliquip ex id consectetur exercitation. Laborum et magna Lorem duis excepteur duis ea. Id sit duis dolor Lorem adipisicing magna aliquip nisi ipsum ullamco Lorem duis ut magna. Fugiat non esse culpa adipisicing amet incididunt deserunt nulla proident aute.',
                'stock' => 100,
                'price' => 20000,
            ],
            [
                'product_photo_path' => 'template/img_02.png',
                'name' => 'SPECIAL RAW COFFEE',
                'description' => 'Do excepteur ullamco anim velit sit ex anim in. Est fugiat minim nostrud deserunt voluptate commodo pariatur in aute adipisicing culpa cillum. Deserunt nisi enim enim incididunt et mollit id aliqua sint ex. Nulla et nostrud eiusmod nisi eu anim ipsum irure dolor. Aute consequat sunt sint eiusmod anim tempor laboris.',
                'stock' => 100,
                'price' => 20000,
            ],
            [
                'product_photo_path' => 'template/img_03.png',
                'name' => 'INDIAN PURE TEA',
                'description' => 'Sunt nostrud duis eu velit officia. Adipisicing nulla officia ea ad ea tempor cillum qui eu. Ex est irure et minim nulla duis esse dolore do nisi ea magna cupidatat dolore. Reprehenderit consequat ullamco nulla Lorem excepteur cupidatat laboris dolor ut eiusmod sint aliquip.',
                'stock' => 100,
                'price' => 20000,
            ],
            [
                'product_photo_path' => 'template/img_04.png',
                'name' => 'BANGLADESH GREEN TEA',
                'description' => 'Adipisicing excepteur dolor incididunt nulla. Qui ipsum culpa sit in mollit. Cillum ex id ex non aliquip anim minim consectetur ex eiusmod incididunt.',
                'stock' => 100,
                'price' => 20000,
            ],
            [
                'product_photo_path' => 'template/img_05.png',
                'name' => 'ROLATINA SWEETS CAFFEE CLASSIC',
                'description' => 'Laborum tempor do magna exercitation irure proident velit in cupidatat sit cillum qui id dolor. Ut sunt velit aute aute id. Anim Lorem nisi labore pariatur excepteur amet id eu pariatur pariatur. Consectetur adipisicing culpa voluptate proident eiusmod exercitation. Enim consectetur enim incididunt mollit exercitation adipisicing est duis deserunt exercitation cupidatat laboris. Laboris adipisicing reprehenderit do enim veniam culpa aliquip aute mollit.',
                'stock' => 100,
                'price' => 20000,
            ],
            [
                'product_photo_path' => 'template/img_06.jpg',
                'name' => 'SPECIAL RAW COFFEE',
                'description' => 'Exercitation minim sit incididunt ex voluptate elit magna aliqua. Id eu esse incididunt velit eu laborum sit quis elit eu ea. Cillum sunt cillum consectetur aliquip reprehenderit mollit quis nulla laborum consectetur laboris. Occaecat velit irure ea mollit. Amet consectetur Lorem nostrud nisi nostrud excepteur dolore est labore. Ipsum laboris aute minim excepteur ullamco magna.',
                'stock' => 100,
                'price' => 20000,
            ],
        ];

        $this
            ->db
            ->table('products')
            ->insertBatch($data);
    }
}
