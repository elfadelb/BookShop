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

        $booksRecords = [
            [
                'id' => 1,
                'title' => 'Financial freedom',
                'author' => 'Vicki Robin',
                'publication_date' => '2000-02-04',
                'description' =>$description ,
                'price' => 99.99,
                'cover_image' => 'https://th.bing.com/th/id/OIP.hq7iUrzUik1ejHH2IptlvQHaLH?pid=ImgDet&rs=1'
            ],
            [
                'id' => 2,
                'title' => 'The Total Money Make Over',
                'author' => 'Dave Ramsey',
                'publication_date' => '2000-02-04',
                'description' =>$description ,
                'price' => 99.99,
                'cover_image' => 'https://th.bing.com/th/id/R.ef98d83535bc11e2c34ae7de26f0b92f?rik=HrY4k1jFv3Lvvg&riu=http%3a%2f%2fprodimage.images-bn.com%2fpimages%2f9781491522226_p0_v2_s1200x630.jpg&ehk=erJTn7BEudOO9yPUJr0UJICo2gkjjv0UUaa2K35nopc%3d&risl=&pid=ImgRaw&r=0'
            ],
            [
                'id' => 3,
                'title' => 'Atomic habit',
                'author' => 'James Clear',
                'publication_date' => '2000-02-04',
                'description' =>$description ,
                'price' => 109.99,
                'cover_image' => 'https://th.bing.com/th/id/OIP.40YdU1lR2EQdFRfSxnTERQHaHa?pid=ImgDet&rs=1'
            ],
            [
            'id' => 4,
            'title' => 'The Alchemist',
            'author' => 'Paulo Coelho',
            'publication_date' => '1988-01-01',
            'description' =>$description ,
            'price' => 49.99,
            'cover_image' => 'https://th.bing.com/th/id/OIP.8JA93Vx9Q0edjQjopBAWSwHaLL?pid=ImgDet&rs=1'
            ],
            [
            'id' => 5,
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'publication_date' => '1980-07-11',
            'description' =>$description ,
            'price' => 49.99,
            'cover_image' => 'https://th.bing.com/th/id/OIP.jvYLjJvwkKBnI2svjjyKigHaLI?pid=ImgDet&rs=1'
            ],
            [
            'id' => 6,
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'publication_date' => '1988-04-10',
            'description' =>$description ,
            'price' => 49.99,
            'cover_image' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781471173936/the-great-gatsby-9781471173936_hr.jpg'
            ],
            [
            'id' => 7,
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'publication_date' => '1990-01-28',
            'description' =>$description ,
            'price' => 49.99,
            'cover_image' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781471134746/pride-and-prejudice-9781471134746_hr.jpg'
            ],
            [
            'id' => 8,
            'title' => '1984',
            'author' => 'George Orwell',
            'publication_date' => '1985-06-08',
            'description' =>$description ,
            'price' => 49.99,
            'cover_image' => 'https://th.bing.com/th/id/OIP.Z5KLQbybGAxlM5JdjOWeWwHaKe?pid=ImgDet&rs=1'
            ],
            [
            'id' => 9,
            'title' => 'The Catcher in the Rye',
            'author' => 'J.D. Salinger',
            'publication_date' => '1989-07-16',
            'description' =>$description ,
            'price' => 49.99,
            'cover_image' => 'https://th.bing.com/th/id/OIP.h0iJZbuWxSjYiIZrHxt1-wHaLZ?pid=ImgDet&rs=1'
            ],
            [
            'id' => 10,
            'title' => 'To Kill a Kingdom',
            'author' => 'Alexandra Christo',
            'publication_date' => '2018-03-06',
            'description' =>$description ,
            'price' => 49.99,
            'cover_image' => 'https://th.bing.com/th/id/OIP.bRbEYrocg1EEZbZfH645BwHaLM?pid=ImgDet&rs=1'
            ],
            [
            'id' => 11,
            'title' => 'The Hobbit',
            'author' => 'J.R.R. Tolkien',
            'publication_date' => '1992-09-21',
            'description' =>$description ,
            'price' => 49.99,
            'cover_image' => 'https://th.bing.com/th/id/OIP.u1jvgQh_S5zIR3e4uX5oNwHaLH?pid=ImgDet&rs=1'
            ],
            [
            'id' => 12,
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'author' => 'J.K. Rowling',
            'publication_date' => '1997-06-26',
            'description' =>$description,
            'price' => 49.99,
            'cover_image' => 'https://images.thenile.io/r1000/9780747554561.jpg'
            ],
        ];

        Book::insert($booksRecords);
    }
}
