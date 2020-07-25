<?php


use Illuminate\Database\Seeder;

class TagTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Goodechilde\GcTags\Models\TagType::class, 40)->create();
    }
}
