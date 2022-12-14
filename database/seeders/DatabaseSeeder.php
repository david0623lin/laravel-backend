<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
                $this->call(TaskGroupsSeed::class);
                $this->call(TaskItemsSeed::class);
                $this->call(PrePaysSeed::class);
                $this->call(MembersSeed::class);
        }
}
