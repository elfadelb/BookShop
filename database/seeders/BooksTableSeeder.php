<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $description="Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.
     Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere
      bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler
       olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek
       değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren
       Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum
       sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.";

    $booksRecords=[
        [   'id'=>1,
            'title'=>'Financial freedom',
            'author'=>'Vicki Robin',
            'publication_date'=>'2000-02-04',
            'description'=>$description,
            'price'=>99.99,
            'cover_image'=>'https://th.bing.com/th/id/OIP.hq7iUrzUik1ejHH2IptlvQHaLH?pid=ImgDet&rs=1'
        ],
        [   'id'=>2,
            'title'=>'The Total Money Make Over',
            'author'=>'Dave Ramsey',
            'publication_date'=>'2000-02-04',
            'description'=>$description,
            'price'=>99.99,
            'cover_image'=>'https://th.bing.com/th/id/R.ef98d83535bc11e2c34ae7de26f0b92f?rik=HrY4k1jFv3Lvvg&riu=http%3a%2f%2fprodimage.images-bn.com%2fpimages%2f9781491522226_p0_v2_s1200x630.jpg&ehk=erJTn7BEudOO9yPUJr0UJICo2gkjjv0UUaa2K35nopc%3d&risl=&pid=ImgRaw&r=0'
        ],
        [   'id'=>3,
            'title'=>'Atomic habit',
            'author'=>'James Clear',
            'publication_date'=>'2000-02-04',
            'description'=>$description,
            'price'=>109.99,
            'cover_image'=>'https://th.bing.com/th/id/OIP.40YdU1lR2EQdFRfSxnTERQHaHa?pid=ImgDet&rs=1'
        ],
        [   'id'=>4,
            'title'=>'Financial freedom',
            'author'=>'Vicki Robin',
            'publication_date'=>'2000-02-04',
            'description'=>$description,
            'price'=>99.99,
            'cover_image'=>'https://th.bing.com/th/id/OIP.hq7iUrzUik1ejHH2IptlvQHaLH?pid=ImgDet&rs=1'
        ],
        [   'id'=>5,
            'title'=>'The Total Money Make Over',
            'author'=>'Dave Ramsey',
            'publication_date'=>'2000-02-04',
            'description'=>$description,
            'price'=>99.99,
            'cover_image'=>'https://th.bing.com/th/id/R.ef98d83535bc11e2c34ae7de26f0b92f?rik=HrY4k1jFv3Lvvg&riu=http%3a%2f%2fprodimage.images-bn.com%2fpimages%2f9781491522226_p0_v2_s1200x630.jpg&ehk=erJTn7BEudOO9yPUJr0UJICo2gkjjv0UUaa2K35nopc%3d&risl=&pid=ImgRaw&r=0'
        ],
        [   'id'=>6,
            'title'=>'Atomic habit',
            'author'=>'James Clear',
            'publication_date'=>'2000-02-04',
            'description'=>$description,
            'price'=>109.99,
            'cover_image'=>'https://th.bing.com/th/id/OIP.40YdU1lR2EQdFRfSxnTERQHaHa?pid=ImgDet&rs=1'
        ],
    ];
        Book::insert($booksRecords);
    }
}
