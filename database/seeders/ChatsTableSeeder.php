<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chatRecords = [
            [   'id'=>1,
                'message'=>'Hello i am a user ',
                'from'=>2,
                'to'=>1,
            ],
            [   'id'=>2,
                'message'=>'Hello i am a admin ',
                'from'=>2,
                'to'=>1,
            ],
            [   'id'=>3,
                'message'=>'how are you ',
                'from'=>2,
                'to'=>1,
            ],
            [   'id'=>4,
                'message'=>'fine and you',
                'from'=>2,
                'to'=>1,
            ],
            [   'id'=>5,
                'message'=>'Hello i am a user ',
                'from'=>3,
                'to'=>1,
            ],
            [   'id'=>6,
                'message'=>'Hello i am a admin ',
                'from'=>3,
                'to'=>1,
            ],
            [   'id'=>7,
                'message'=>'how are you ',
                'from'=>3,
                'to'=>1,
            ],
            [   'id'=>8,
                'message'=>'fine and you',
                'from'=>3,
                'to'=>1,
            ],
            ];
        Chat::insert($chatRecords);
    }
}
