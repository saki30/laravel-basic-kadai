<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'title' => 'プログラミング学習6日目',
            'content' => '	自分が作ったWebサイトをようやくインターネット上に公開できた！感動のあまり友達に自慢してしまった。'
        ]);
    }
}
