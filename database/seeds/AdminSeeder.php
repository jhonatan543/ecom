<?php

use Illuminate\Database\Seeder;
use  App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Jhonatan',
            'email' => 'jhonatan@gmail.com',
            'status' => '1',
            'password' => Hash::make('12345'),
        ]);

        DB::table('admins')->insert([
            'name' => 'Renzo',
            'email' => 'renzo@gmail.com',
            'status' => '1',
            'password' => Hash::make('12345'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jhonatan',
            'email' => 'jhonatan20092009@gmail.com',
            'dni' => '70845064',
            'telefono' => '974271651',
            'status' => '2',
            'password' => Hash::make('jvila12345'),
        ]);

        DB::table('users')->insert([
            'name' => 'Renzo',
            'email' => 'renzocri123@gmail.com',
            'dni' => '75886691',
            'telefono' => '905206767',
            'status' => '2',
            'password' => Hash::make('rcri12345'),
        ]);


        DB::table('users')->insert([
            'name' => 'Sulca',
            'email' => 'sulca@gmail.com',
            'dni' => '75828713',
            'telefono' => '911494578',
            'password' => Hash::make('12345'),
        ]);

        DB::table('users')->insert([
            'name' => 'Piter',
            'email' => 'piter123@gmail.com',
            'dni' => '75730278',
            'telefono' => '915159039',
            'password' => Hash::make('nolasco12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Calixto',
            'email' => 'calixto@gmail.com',
            'dni' => '74666811',
            'telefono' => '952402456',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Luis',
            'email' => 'Luis@gmail.com',
            'dni' => '72901878',
            'telefono' => '956626116',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Sofia',
            'email' => 'sofia@gmail.com',
            'dni' => '72023346',
            'telefono' => '956697376',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Medina',
            'email' => 'medina@gmail.com',
            'dni' => '44546272',
            'telefono' => '957215034',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Cristian',
            'email' => 'cristian@gmail.com',
            'dni' => '44168633',
            'telefono' => '965631694',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Dayana',
            'email' => 'Dayana@gmail.com',
            'dni' => '42666691',
            'telefono' => '970856275',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Andree',
            'email' => 'Andree@gmail.com',
            'dni' => '42641460',
            'telefono' => '993120555',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'jose@gmail.com',
            'dni' => '42466803',
            'telefono' => '993800074',
            'password' => Hash::make('12345'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ana',
            'email' => 'Ana@gmail.com',
            'dni' => '41892630',
            'telefono' => '940433974',
            'status' => '2',
            'password' => Hash::make('12345'),
        ]);


//categorias
        DB::table('categories')->insert([
            'category_name' => 'Mujer',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Hombre',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Niño',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Zapatillas',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Ropa Interior',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Chompas',
            'status' => '0',
        ]);
//marcas

        DB::table('brands')->insert([
            'brand_name' => 'Adidas',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Gucci',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'John Holden',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'I-run',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Walon',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Nike',
            'status' => '0',
        ]);

  //CUPONES
        DB::table('coupons')->insert([
            'coupon_name' => 'RopasVYO',
            'discount' => '10',
        ]);
        DB::table('coupons')->insert([
            'coupon_name' => 'ZapatillasVYD',
            'discount' => '15',
        ]);
        DB::table('coupons')->insert([
            'coupon_name' => 'InteriorAYN',
            'discount' => '20',
        ]);

        DB::table('coupons')->insert([
            'coupon_name' => 'CasacasVe',
            'discount' => '25',
            'status' => '0',
        ]);

//PRODUCTOS

//ADIDAS

DB::table('products')->insert([
    'category_id' => '2',
    'brand_id' => '1',
    'product_name' => 'Polo Blanco 3 Tiras Adidas',
    'product_slug' => 'Polo Blanco 3 Tiras Adidas',
    'product_code' => '6554',
    'product_quantity' => '50',
    'short_description' => 'Corte clásico que se adapta al cuerpo cómodamente, Cuello redondo,
            Manga corta',
    'long_description' => 'Diseño deportivo clásico. Esta camiseta con manga corta lineas en el cuello.
                           Las 3 bandas en las mangas y el trébol en el pecho le confieren el estilo
                           más genuino de adidas.',
    'price' => '38',
    'image_one' => 'fontend/img/product/upload/polotirah1.jpg',
    'image_two' => 'fontend/img/product/upload/polotirah2.jpg',
    'image_three' => 'fontend/img/product/upload/polotirah3.jpg',
]);

DB::table('products')->insert([
    'category_id' => '2',
    'brand_id' => '1',
    'product_name' => 'Polo Azul Adidas',
    'product_slug' => 'Polo Azul Adidas',
    'product_code' => '6838',
    'product_quantity' => '50',
    'short_description' => 'Manga corta, Cuello redondo, material de algodón',
    'long_description' => 'Este polo luce un estilo técnico inspirado en un modelo adidas clásico
           de los 70. Presenta un corte holgado que le confiere una silueta más
           actual y un gran logo del Trifolio que interrumpe las 3 Tiras en una de
           las mangas.',
    'price' => '38',
    'image_one' => 'fontend/img/product/upload/polotirahaz1.png',
    'image_two' => 'fontend/img/product/upload/polotirahaz2.png',
    'image_three' => 'fontend/img/product/upload/polotirahaz3.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '1',
    'product_name' => 'Polera Negra Adidas',
    'product_slug' => 'Polera Negra Adidas',
    'product_code' => '7661',
    'product_quantity' => '50',
    'short_description' => 'Polera con Capucha para Mujer',
    'long_description' => 'Esta polera con capucha luce un logo de adidas en el pecho que le
           confiere un estilo genuino. Está confeccionada en felpa francesa de
           poliéster reciclado y algodón',
    'price' => '45',
    'image_one' => 'fontend/img/product/upload/poleram1.png',
    'image_two' => 'fontend/img/product/upload/poleram2.png',
    'image_three' => 'fontend/img/product/upload/poleram3.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '1',
    'product_name' => 'Chaqueta Rosada Adidas',
    'product_slug' => 'Chaqueta Rosada Adidas',
    'product_code' => '2809',
    'product_quantity' => '50',
    'short_description' => 'Chaqueta con capucha para Mujeres - Rosa',
    'long_description' => 'capucha alta (en cuello alzado), bolsillos laterales con cremallera, Cordones de apriete exteriores',
    'price' => '50',
    'image_one' => 'fontend/img/product/upload/chaquetam1.png',
    'image_two' => 'fontend/img/product/upload/chaquetam2.png',
    'image_three' => 'fontend/img/product/upload/chaquetam3.png',
]);

DB::table('products')->insert([
    'category_id' => '3',
    'brand_id' => '1',
    'product_name' => 'Casaca',
    'product_slug' => 'Casaca',
    'product_code' => '1473',
    'product_quantity' => '50',
    'short_description' => 'TRACKTOP Light Purple',
    'long_description' => 'El producto es de buena calidad y comodo, color púrpura que se adapta a las necesidades del usuario',
    'price' => '69',
    'image_one' => 'fontend/img/product/upload/casacanina1.png',
    'image_two' => 'fontend/img/product/upload/casacanina2.png',
    'image_three' => 'fontend/img/product/upload/casacanina1.png',
]);

//GUCCI

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '2',
    'product_name' => 'Jean M Gucci',
    'product_slug' => 'Jean M Gucci',
    'product_code' => '4528',
    'product_quantity' => '50',
    'short_description' => 'Pantalón Azúl Gucci de Mujer',
    'long_description' => 'Diseño que brinda al portador una gran comodidad al ofrecer una buena calidad en la tela.',
    'price' => '60',
    'image_one' => 'fontend/img/product/upload/jeanm1.png',
    'image_two' => 'fontend/img/product/upload/jeanm2.png',
    'image_three' => 'fontend/img/product/upload/jeanm3.png',
]);

DB::table('products')->insert([
    'category_id' => '2',
    'brand_id' => '2',
    'product_name' => 'Jean H Gucci',
    'product_slug' => 'Jean H Gucci',
    'product_code' => '1218',
    'product_quantity' => '50',
    'short_description' => 'Jean buena calidad y de estilo moderno',
    'long_description' => 'Jeans para hombres Moda Casual Europeo y americano Pantalones largos para hombre de primavera y otoño',
    'price' => '65',
    'image_one' => 'fontend/img/product/upload/jeanh1.png',
    'image_two' => 'fontend/img/product/upload/jeanh2.png',
    'image_three' => 'fontend/img/product/upload/jeanh3.png',
]);

DB::table('products')->insert([
    'category_id' => '2',
    'brand_id' => '2',
    'product_name' => 'Playera Negra H Gucci',
    'product_slug' => 'Playera Negra H Gucci',
    'product_code' => '7361',
    'product_quantity' => '50',
    'short_description' => 'Playera negra cómoda',
    'long_description' => 'Esta playera Gucci negra para hombre, es muy cómoda y la tela es de muy buena calidad',
    'price' => '50',
    'image_one' => 'fontend/img/product/upload/polerah1.jpg',
    'image_two' => 'fontend/img/product/upload/playerah2.png',
    'image_three' => 'fontend/img/product/upload/playerah3.png',
]);



// I RUN

DB::table('products')->insert([
    'category_id' => '4',
    'brand_id' => '4',
    'product_name' => 'Zapatilla H Urbana',
    'product_slug' => 'Zapatilla H Urbana',
    'product_code' => '1901',
    'product_quantity' => '30',
    'short_description' => 'Zapatilla Negra Gris',
    'long_description' => 'Estas zapatillas son rápidas y ligeras, y ofrecen transpirabilidad y
           seguridad cuando corres por terrenos rocosos. Los tacos de tracción
           renovados te dan estabilidad en los descensos.',
    'price' => '60',
    'image_one' => 'fontend/img/product/upload/zapaurbanoh1.png',
    'image_two' => 'fontend/img/product/upload/zapaurbanoh2.png',
    'image_three' => 'fontend/img/product/upload/zapaurbanoh3.png',
]);

DB::table('products')->insert([
    'category_id' => '4',
    'brand_id' => '4',
    'product_name' => 'Zapatillas M 5480',
    'product_slug' => 'Zapatillas M 5480',
    'product_code' => '7719',
    'product_quantity' => '30',
    'short_description' => 'Zapatilla I Run',
    'long_description' => 'zapatillas son rápidas y ligeras, y ofrecen transpirabilidad y seguridad',
    'price' => '65',
    'image_one' => 'fontend/img/product/upload/zapatm1.png',
    'image_two' => 'fontend/img/product/upload/zapatm2.png',
    'image_three' => 'fontend/img/product/upload/zapatm3.png',
]);

DB::table('products')->insert([
    'category_id' => '4',
    'brand_id' => '4',
    'product_name' => 'Zapatillas 4230FR',
    'product_slug' => 'Zapatillas 4230FR',
    'product_code' => '7864',
    'product_quantity' => '30',
    'short_description' => 'Zapatillas con un buen diseño para el usuario',
    'long_description' => 'No hay nada tan ligero, tan cómodo y tan demostrado
           como las IRUN',
    'price' => '63',
    'image_one' => 'fontend/img/product/upload/zapm1.png',
    'image_two' => 'fontend/img/product/upload/zapm2.png',
    'image_three' => 'fontend/img/product/upload/zapm3.png',
]);

DB::table('products')->insert([
    'category_id' => '4',
    'brand_id' => '4',
    'product_name' => 'Zapatillas TREKKING 5480M5',
    'product_slug' => 'Zapatillas TREKKING 5480M5',
    'product_code' => '6640',
    'product_quantity' => '30',
    'short_description' => 'Zapatilla de la mejor calidad',
    'long_description' => 'Zapatilla I-Run 100% original, con tecnología que te proporciona
           calidad y comodidad, ventas al por mayor y menor.',
    'price' => '59',
    'image_one' => 'fontend/img/product/upload/zaph1.png',
    'image_two' => 'fontend/img/product/upload/zaph2.png',
    'image_three' => 'fontend/img/product/upload/zaph3.png',
]);



// JOHN HOLDEN
DB::table('products')->insert([
    'category_id' => '5',
    'brand_id' => '3',
    'product_name' => 'Boxer',
    'product_slug' => 'Boxer',
    'product_code' => '3658',
    'product_quantity' => '50',
    'short_description' => 'BOXER TRIPACK MARTINO AZUL MARINO/ACERO/AZUL HEATHER',
    'long_description' => 'Tripack Martino, elaborado con materiales de alta calidad. Fresco y cómodo.
           Ajuste estrecho en mezcla suave de algodón, para asegurar un fit superior
           con textura y costuras sutiles',
    'price' => '15',
    'image_one' => 'fontend/img/product/upload/ropinth1.png',
    'image_two' => 'fontend/img/product/upload/ropinth1.png',
    'image_three' => 'fontend/img/product/upload/ropinth1.png',
]);

DB::table('products')->insert([
    'category_id' => '5',
    'brand_id' => '3',
    'product_name' => 'Medias',
    'product_slug' => 'Medias',
    'product_code' => '8116',
    'product_quantity' => '50',
    'short_description' => 'MEDIA CASUAL RODRIGO CHARCOAL',
    'long_description' => 'Medias para hombre Casual Rodrigo, Infaltable en el closet, Perfecto para usar
           durante las largas jornadas laborales, muy cómodas para sus pies ya que han
           sido fabricadas en algodón, a la vez que absorben la humedad y son
           resistentes al desgaste',
    'price' => '5',
    'image_one' => 'fontend/img/product/upload/medih1.png',
    'image_two' => 'fontend/img/product/upload/medih1.png',
    'image_three' => 'fontend/img/product/upload/medih1.png',
]);

DB::table('products')->insert([
    'category_id' => '2',
    'brand_id' => '3',
    'product_name' => 'Camiseta',
    'product_slug' => 'Camiseta',
    'product_code' => '4181',
    'product_quantity' => '50',
    'short_description' => 'CAMISETA JAGGER CUELLO V GRIS MEDIO',
    'long_description' => 'Perfecto para usar con camisas formales y durante las largas jornadas
           laborales, te mantendrá fresco y cómodo ya que está fabricada de algodón,
           material que ofrece mayor suavidad y transpirabilidad',
    'price' => '25',
    'image_one' => 'fontend/img/product/upload/camisetah1.png',
    'image_two' => 'fontend/img/product/upload/camisetah1.png',
    'image_three' => 'fontend/img/product/upload/camisetah1.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '3',
    'product_name' => 'Blusa',
    'product_slug' => 'Blusa',
    'product_code' => '7090',
    'product_quantity' => '50',
    'short_description' => 'BLUSA TANA MOSTAZA',
    'long_description' => 'Blusas para damas Tana. En diferentes tonos y colores para que puedas
           resaltar en todos los lugares a los que vayas. Tonos vivos y únicos como
           tú. Podrás gozar de esta y otras promociones más en nuestra tienda online.',
    'price' => '29',
    'image_one' => 'fontend/img/product/upload/blusam1.png',
    'image_two' => 'fontend/img/product/upload/blusam1.png',
    'image_three' => 'fontend/img/product/upload/blusam1.png',
]);

// WALON

DB::table('products')->insert([
    'category_id' => '3',
    'brand_id' => '5',
    'product_name' => 'Zapatilla deportiva Niño Wallon',
    'product_slug' => 'Zapatilla deportiva Niño Wallon',
    'product_code' => '210',
    'product_quantity' => '30',
    'short_description' => 'ZAPATILLA FULBITO ZKILLER 9R4C',
    'long_description' => 'Zapatilla azul con franjas naranjas, muy cómodas para los niños,
           adaptable al pie y así realizar actividades deportivas',
    'price' => '35',
    'image_one' => 'fontend/img/product/upload/zapatnino1.png',
    'image_two' => 'fontend/img/product/upload/zapatnino2.png',
    'image_three' => 'fontend/img/product/upload/zapatnino3.png',
]);

DB::table('products')->insert([
    'category_id' => '3',
    'brand_id' => '4',
    'product_name' => 'Zapatilla Niña Wallon',
    'product_slug' => 'Zapatilla Niña Wallon',
    'product_code' => '9953',
    'product_quantity' => '30',
    'short_description' => 'ZAPATILLA CASUAL ZACHKID1216 NIÑAL',
    'long_description' => 'Zapatilla negra con franja fucia pra niñas, de excelente calidad y de
           gran comodidad',
    'price' => '35',
    'image_one' => 'fontend/img/product/upload/zapatnina1.png',
    'image_two' => 'fontend/img/product/upload/zapatnina2.png',
    'image_three' => 'fontend/img/product/upload/zapatnina1.png',
]);

DB::table('products')->insert([
    'category_id' => '2',
    'brand_id' => '5',
    'product_name' => 'Buzo Hombre Wallon',
    'product_slug' => 'Buzo',
    'product_code' => '8336',
    'product_quantity' => '50',
    'short_description' => 'BUZO RUNNING',
    'long_description' => 'Buzo completamente cómodo para el uso deportivo asegurando con su alta
           calidad de tela, confortable para cda estación del año',
    'price' => '40',
    'image_one' => 'fontend/img/product/upload/buzh1.png',
    'image_two' => 'fontend/img/product/upload/buzh1.png',
    'image_three' => 'fontend/img/product/upload/buzh1.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '5',
    'product_name' => 'Short',
    'product_slug' => 'Short',
    'product_code' => '6998',
    'product_quantity' => '50',
    'short_description' => 'SHORT RUNNING TRAINING CON BOLSILLO',
    'long_description' => 'Short deportivo para damas, se acomoda al cuerpo, resistente y de una
           muy buena calidad ',
    'price' => '35',
    'image_one' => 'fontend/img/product/upload/shortm1.png',
    'image_two' => 'fontend/img/product/upload/shortm2.png',
    'image_three' => 'fontend/img/product/upload/shortm1.png',
]);

DB::table('products')->insert([
    'category_id' => '3',
    'brand_id' => '5',
    'product_name' => 'Bividi',
    'product_slug' => 'Bividi',
    'product_code' => '7546',
    'product_quantity' => '20',
    'short_description' => 'BIVIDI DEPORTIVO SAINT IW 20B',
    'long_description' => 'Bividi color amarillo con rayas azules para niño, de buena tela y excelente
			   calidad, asegurando siempre la comodidad.',
    'price' => '37',
    'image_one' => 'fontend/img/product/upload/bividinino1.png',
    'image_two' => 'fontend/img/product/upload/bividinino2.png',
    'image_three' => 'fontend/img/product/upload/bividinino1.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '3',
    'product_name' => 'Polo Amarillo recortado para Mujer',
    'product_slug' => 'Polo Amarillo recortado para Mujer',
    'product_code' => '6250',
    'product_quantity' => '50',
    'short_description' => 'POLO DISEÑO 7 SURTIDO COLOR',
    'long_description' => 'Polo con diseño , confortable, con tela de buena calidad, que no puedes dejar de tener',
    'price' => '50',
    'image_one' => 'fontend/img/product/upload/polom1.png',
    'image_two' => 'fontend/img/product/upload/polom2.png',
    'image_three' => 'fontend/img/product/upload/polom3.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '3',
    'product_name' => 'Blusa Amarilla M',
    'product_slug' => 'Blusa',
    'product_code' => '4080',
    'product_quantity' => '50',
    'short_description' => 'BLUSA DAMA MARTINA MT1 JHW MARSALA',
    'long_description' => 'Blusa de gasa color sólido, de buena calidad, de lo último que sale en el mercado para el uso en
			   tu día a día',
    'price' => '47',
    'image_one' => 'fontend/img/product/upload/blsm1.png',
    'image_two' => 'fontend/img/product/upload/blsm2.png',
    'image_three' => 'fontend/img/product/upload/blsm3.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '3',
    'product_name' => 'Blusa Azul M',
    'product_slug' => 'Blusa',
    'product_code' => '7020',
    'product_quantity' => '50',
    'short_description' => 'BLUSA DAMA MAYTE MT2 JHW AZUL',
    'long_description' => 'Blusa estampada, de color adecuado, buena tela, comodidad y de alta calidad garantizada
			   para cualquier momento del día',
    'price' => '48',
    'image_one' => 'fontend/img/product/upload/blusdama1.png',
    'image_two' => 'fontend/img/product/upload/blusdama2.png',
    'image_three' => 'fontend/img/product/upload/blusdama3.png',
]);


//MAS PRODUCTOS 1007
//adidas

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '1',
    'product_name' => 'Polo Adicolor Classics',
    'product_slug' => 'Polo Adicolor Classics',
    'product_code' => '82737',
    'product_quantity' => '50',
    'short_description' => 'Un Polo De Uso Diario Con Estilo Autentico',
    'long_description' => 'Este polo adidas rinde homenaje a la energía del deporte clásico con un gran logo del Trifolio en el pecho',
    'price' => '55',
    'image_one' => 'fontend/img/product/upload/potrefoil.png',
    'image_two' => 'fontend/img/product/upload/potrefoil1.png',
    'image_three' => 'fontend/img/product/upload/potrefoil2.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '1',
    'product_name' => 'Polera Capucha Adidas Z.N.E.',
    'product_slug' => 'Polera Capucha Adidas Z.N.E.',
    'product_code' => '94045',
    'product_quantity' => '50',
    'short_description' => 'Una Polera Holgada Para Moverte Con Confianza Y Comodidad',
    'long_description' => 'El diseño con mangas de murcielago de esta polera adidas te permiten moverte con fluidez Sin límites',
    'price' => '58',
    'image_one' => 'fontend/img/product/upload/polerazne.png',
    'image_two' => 'fontend/img/product/upload/polerazne1.png',
    'image_three' => 'fontend/img/product/upload/polerazne2.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '1',
    'product_name' => 'Polo Corto De Manga Larga',
    'product_slug' => 'Polo Corto De Manga Larga',
    'product_code' => '58293',
    'product_quantity' => '50',
    'short_description' => 'Un Polo Corto Para Tu Entrenamiento Diario',
    'long_description' => 'Incorpora tecnología de absorción AEROREADY y tiene paneles de malla en la espalda. Úsalo para tu clase de barre, baile o de fitness en grupo en el parque.',
    'price' => '45',
    'image_one' => 'fontend/img/product/upload/pololargo.png',
    'image_two' => 'fontend/img/product/upload/pololargo1.png',
    'image_three' => 'fontend/img/product/upload/pololargo2.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '1',
    'product_name' => 'Licras Adidas Sportswear',
    'product_slug' => 'Licras Adidas Sportswear',
    'product_code' => '69472',
    'product_quantity' => '50',
    'short_description' => 'Licras De Algodón Suave Que Combinan Comodidad Y Estilo',
    'long_description' => 'Estas Licras Adidas Son Perfectas Para Ambos Escenarios. Su Tejido Jersey De AlgodóN Suave Y EláStico Te Envuelve Con Comodidad Para Que Te Puedas Sentir Bien Sin Importar La Actividad.',
    'price' => '40',
    'image_one' => 'fontend/img/product/upload/licraspre.png',
    'image_two' => 'fontend/img/product/upload/licraspre1.png',
    'image_three' => 'fontend/img/product/upload/licraspre2.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '1',
    'product_name' => 'Pantalón Essentials',
    'product_slug' => 'Pantalón Essentials',
    'product_code' => '99254',
    'product_quantity' => '50',
    'short_description' => 'Un Pantalón Ajustado Con Piernas Cónicas Que Ofrece Comodidad En Todo Momento',
    'long_description' => 'Este pantalón ofrece total comodidad fuera de la cancha gracias a su tejido tricot deportivo. Tiene un diseño ligero y ajustado con piernas cónicas. Las 3 Tiras en contraste saltan a la vista en los costados.',
    'price' => '52',
    'image_one' => 'fontend/img/product/upload/pantaese.png',
    'image_two' => 'fontend/img/product/upload/pantaese1.png',
    'image_three' => 'fontend/img/product/upload/pantaese2.png',
]);


DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '1',
    'product_name' => 'Top Deportivo Floral Ligero',
    'product_slug' => 'Top Deportivo Floral Ligero',
    'product_code' => '77240',
    'product_quantity' => '50',
    'short_description' => 'Un Top Deportivo De Soporte Ligero Para Movimientos Sin Restricciones',
    'long_description' => 'Este top deportivo adidas ofrece soporte ligero para que puedas moverte con fluidez en todo momento. La tecnología de absorción AEROREADY mantiene tu cuerpo seco en los momentos más intensos del entrenamiento.',
    'price' => '35',
    'image_one' => 'fontend/img/product/upload/topfloral.png',
    'image_two' => 'fontend/img/product/upload/topfloral1.png',
    'image_three' => 'fontend/img/product/upload/topfloral2.png',
]);


DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '1',
    'product_name' => 'Top Deportivo Ultimate',
    'product_slug' => 'Top Deportivo Ultimate',
    'product_code' => '64132',
    'product_quantity' => '50',
    'short_description' => 'Sujeción Muy Alta Para Los Entrenamientos De Alto Impacto',
    'long_description' => 'Este top deportivo se diseño para que te puedas enfrentar a cada entrenamiento con confianza y comodidad. Tiene un forro interno de malla para una mayor cobertura y una tira ajustable para que la puedas acomodar a la medida de tu cuerpo.',
    'price' => '36',
    'image_one' => 'fontend/img/product/upload/topultima.png',
    'image_two' => 'fontend/img/product/upload/topultima1.png',
    'image_three' => 'fontend/img/product/upload/topultima2.png',
]);

DB::table('products')->insert([
    'category_id' => '3',
    'brand_id' => '1',
    'product_name' => 'Polo Pokémon',
    'product_slug' => 'Polo Pokémon',
    'product_code' => '76935',
    'product_quantity' => '50',
    'short_description' => 'Polo Deportivo Con El Estilo De Pokémon',
    'long_description' => 'Luce detalles de diseño clásico y rinde tributo al país que inventó Pokémon',
    'price' => '44',
    'image_one' => 'fontend/img/product/upload/polopokem.png',
    'image_two' => 'fontend/img/product/upload/polopokem1.png',
    'image_three' => 'fontend/img/product/upload/polopokem2.png',
]);

//JOHNHOLDEN

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '3',
    'product_name' => 'Pantalón Dama Enzo Vino',
    'product_slug' => 'Pantalón Dama Enzo Vino',
    'product_code' => '62723',
    'product_quantity' => '50',
    'short_description' => 'Pantalón que no debe faltarte en tu armario',
    'long_description' => 'Pantalón que no debe faltarte en tu armario, muy elegante combina con prendas negras y de rayas',
    'price' => '54',
    'image_one' => 'fontend/img/product/upload/pantaenzo.png',
    'image_two' => 'fontend/img/product/upload/pantaenzo1.png',
    'image_three' => 'fontend/img/product/upload/pantaenzo1.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '3',
    'product_name' => 'Casaca Kanye Camel',
    'product_slug' => 'Casaca Kanye Camel',
    'product_code' => '74072',
    'product_quantity' => '50',
    'short_description' => 'Casaca para lucir comoda',
    'long_description' => 'En este frío invierno podrás sentirte abrigada gracias a los materiales únicos y suaves de nuestra casaca para dama Kanye. Podrás tener lo mejor en esta temporada, al mismo tiempo poder lucir comoda y tener la practicidad de sacarte la casaca en caso cambie el clima',
    'price' => '55',
    'image_one' => 'fontend/img/product/upload/casakane.png',
    'image_two' => 'fontend/img/product/upload/casakane1.png',
    'image_three' => 'fontend/img/product/upload/casakane1.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '3',
    'product_name' => 'Blusa Dama Martina Mt1',
    'product_slug' => 'Blusa Dama Martina Mt1',
    'product_code' => '64531',
    'product_quantity' => '50',
    'short_description' => 'Blusa de gasa color sólido para tu día a día',
    'long_description' => 'Blusa de gasa color sólido para tu día a día, elegante infaltable para empezar tu dia con frescura',
    'price' => '35',
    'image_one' => 'fontend/img/product/upload/blusamarti.png',
    'image_two' => 'fontend/img/product/upload/blusamarti1.png',
    'image_three' => 'fontend/img/product/upload/blusamarti1.png',
]);

DB::table('products')->insert([
    'category_id' => '1',
    'brand_id' => '3',
    'product_name' => 'Polo Dama Milan Azulino',
    'product_slug' => 'Polo Dama Milan Azulino',
    'product_code' => '68563',
    'product_quantity' => '50',
    'short_description' => 'Polo color sólido que no puedes dejar de tener',
    'long_description' => 'Polo color sólido que no puedes dejar de tener , infaltable en reuniones con los amigos y familiares',
    'price' => '40',
    'image_one' => 'fontend/img/product/upload/polodami.png',
    'image_two' => 'fontend/img/product/upload/polodami1.png',
    'image_three' => 'fontend/img/product/upload/polodami1.png',
]);

DB::table('products')->insert([
    'category_id' => '5',
    'brand_id' => '3',
    'product_name' => 'Pijama Guido Celeste/Azul',
    'product_slug' => 'Pijama Guido Celeste/Azul',
    'product_code' => '60251',
    'product_quantity' => '50',
    'short_description' => 'La pijama que necesitas para dormir',
    'long_description' => 'La nueva colección de pijamas de temporada para hombre. Sentirás la máxima comodidad en cada puesta ya que cada prenda ha sido confeccionada con materiales de calidad.',
    'price' => '65',
    'image_one' => 'fontend/img/product/upload/pijamapro.png',
    'image_two' => 'fontend/img/product/upload/pijamapro1.png',
    'image_three' => 'fontend/img/product/upload/pijamapro2.png',
]);

DB::table('products')->insert([
    'category_id' => '5',
    'brand_id' => '3',
    'product_name' => 'Pijama Edie Vino Melange',
    'product_slug' => 'Pijama Edie Vino Melange',
    'product_code' => '61736',
    'product_quantity' => '50',
    'short_description' => 'La pijama edie que necesitas para dormir comodamente',
    'long_description' => 'Es por esto que te traemos la pijama Inv. Edie, para que puedas descansar tranquilamente y guardar el estilo único que caracteriza al caballero de esta época.',
    'price' => '65',
    'image_one' => 'fontend/img/product/upload/pijamaedie.png',
    'image_two' => 'fontend/img/product/upload/pijamaedie1.png',
    'image_three' => 'fontend/img/product/upload/pijamaedie2.png',
]);

DB::table('products')->insert([
    'category_id' => '5',
    'brand_id' => '3',
    'product_name' => 'Boxer Johnny Negro',
    'product_slug' => 'Boxer Johnny Negro',
    'product_code' => '74111',
    'product_quantity' => '50',
    'short_description' => 'El boxer que no debe faltar en tu vida',
    'long_description' => 'En este Boxer se emplearon materiales que aseguran su calidad, en ese sentido, el Algodón se incorporó en su fabricación para preservar la suavidad y confortabilidad.',
    'price' => '15',
    'image_one' => 'fontend/img/product/upload/boxerjohn.png',
    'image_two' => 'fontend/img/product/upload/boxerjohn1.png',
    'image_three' => 'fontend/img/product/upload/boxerjohn2.png',
]);

DB::table('products')->insert([
    'category_id' => '5',
    'brand_id' => '3',
    'product_name' => 'Camiseta Tripack Blanco',
    'product_slug' => 'Camiseta Tripack Blanco',
    'product_code' => '97593',
    'product_quantity' => '50',
    'short_description' => 'Camiseta para hombre Tripack Infaltable en el closet',
    'long_description' => 'Perfecto para usar con camisas formales y durante las largas jornadas laborales, te mantendrá fresco y cómodo ya que está fabricada de algodón, material que ofrece mayor suavidad y transpirabilidad.',
    'price' => '30',
    'image_one' => 'fontend/img/product/upload/camitripack.png',
    'image_two' => 'fontend/img/product/upload/camitripack1.png',
    'image_three' => 'fontend/img/product/upload/camitripack2.png',
]);


// PEDIDOS

//PEDIDO POR ITEM

        DB::table('order_items')->insert([
            'order_id' => '1',
            'product_id' => '1',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '1',
            'product_id' => '2',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '2',
            'product_id' => '3',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '2',
            'product_id' => '4',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '3',
            'product_id' => '5',
            'product_qty' => '2',
        ]);


        DB::table('order_items')->insert([
            'order_id' => '4',
            'product_id' => '6',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '5',
            'product_id' => '7',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '5',
            'product_id' => '8',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '6',
            'product_id' => '9',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '6',
            'product_id' => '10',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '7',
            'product_id' => '11',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '8',
            'product_id' => '12',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '9',
            'product_id' => '13',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '9',
            'product_id' => '14',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '10',
            'product_id' => '15',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '10',
            'product_id' => '16',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '11',
            'product_id' => '17',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '12',
            'product_id' => '18',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '13',
            'product_id' => '19',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '13',
            'product_id' => '1',
            'product_qty' => '1',
        ]);


        DB::table('order_items')->insert([
            'order_id' => '14',
            'product_id' => '2',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '14',
            'product_id' => '3',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '15',
            'product_id' => '4',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '16',
            'product_id' => '5',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '17',
            'product_id' => '6',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '17',
            'product_id' => '7',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '18',
            'product_id' => '8',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '18',
            'product_id' => '9',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '19',
            'product_id' => '10',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '20',
            'product_id' => '11',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '21',
            'product_id' => '12',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '21',
            'product_id' => '13',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '22',
            'product_id' => '14',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '22',
            'product_id' => '15',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '23',
            'product_id' => '16',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '24',
            'product_id' => '17',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '25',
            'product_id' => '18',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '25',
            'product_id' => '19',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '26',
            'product_id' => '1',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '26',
            'product_id' => '2',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '27',
            'product_id' => '3',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '28',
            'product_id' => '4',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '29',
            'product_id' => '5',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '29',
            'product_id' => '6',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '30',
            'product_id' => '7',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '30',
            'product_id' => '8',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '31',
            'product_id' => '9',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '32',
            'product_id' => '10',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '33',
            'product_id' => '11',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '33',
            'product_id' => '12',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '34',
            'product_id' => '13',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '34',
            'product_id' => '14',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '35',
            'product_id' => '15',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '36',
            'product_id' => '16',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '37',
            'product_id' => '17',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '37',
            'product_id' => '18',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '38',
            'product_id' => '19',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '38',
            'product_id' => '1',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '39',
            'product_id' => '2',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '40',
            'product_id' => '3',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '41',
            'product_id' => '4',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '41',
            'product_id' => '5',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '42',
            'product_id' => '6',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '42',
            'product_id' => '7',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '43',
            'product_id' => '8',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '44',
            'product_id' => '9',
            'product_qty' => '2',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '45',
            'product_id' => '10',
            'product_qty' => '1',
        ]);

        DB::table('order_items')->insert([
            'order_id' => '45',
            'product_id' => '11',
            'product_qty' => '1',
        ]);


        //INFORMACION DEL ENVIO (SHIPPINGS)

        DB::table('shippings')->insert([
            'order_id' => '1',
            'shipping_first_name' => 'Jhonatan Andree',
            'shipping_last_name' => 'Vila Buleje',
            'shipping_email' => 'jhonatan@gmail.com',
            'shipping_phone' => '987654321',
            'shipping_dni' => '70845064',
            'address' => 'Santa Isabel de Villa comite uno manzana A',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '2',
            'shipping_first_name' => 'Renzo ',
            'shipping_last_name' => 'Crisostomo Castro',
            'shipping_email' => 'renzo@gmail.com',
            'shipping_phone' => '876543219',
            'shipping_dni' => '75886691',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '3',
            'shipping_first_name' => 'Sulca ',
            'shipping_last_name' => 'Hinostroza Dominguez',
            'shipping_email' => 'sulca@gmail.com',
            'shipping_phone' => '954871265',
            'shipping_dni' => '75828713',
            'address' => 'Delicias de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '4',
            'shipping_first_name' => 'Piter ',
            'shipping_last_name' => 'Camargo Nolasco',
            'shipping_email' => 'piter@gmail.com',
            'shipping_phone' => '963214785',
            'shipping_dni' => '75730278',
            'address' => 'Tres de Octubre',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '5',
            'shipping_first_name' => 'Calixto',
            'shipping_last_name' => 'Gutierrez Pérez',
            'shipping_email' => 'calixto@gmail.com',
            'shipping_phone' => '921458730',
            'shipping_dni' => '74666811',
            'address' => 'Santa Isabel de Villa comite cinco',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '6',
            'shipping_first_name' => 'Luis',
            'shipping_last_name' => 'Herrera Canales',
            'shipping_email' => 'Luis@gmail.com',
            'shipping_phone' => '918457116',
            'shipping_dni' => '72901878',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '7',
            'shipping_first_name' => 'Sofia',
            'shipping_last_name' => 'Bravo Chumpitaz',
            'shipping_email' => 'sofia@gmail.com',
            'shipping_phone' => '948520163',
            'shipping_dni' => '72023346',
            'address' => 'Terrazas de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '8',
            'shipping_first_name' => 'Medina',
            'shipping_last_name' => 'Sandoval Perez',
            'shipping_email' => 'medina@gmail.com',
            'shipping_phone' => '927846002',
            'shipping_dni' => '44546272',
            'address' => 'Santa Isabel de Villa Los Pinos',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '9',
            'shipping_first_name' => 'Cristian',
            'shipping_last_name' => 'Vila Buleje',
            'shipping_email' => 'cristian@gmail.com',
            'shipping_phone' => '985216027',
            'shipping_dni' => '44168633',
            'address' => 'Av. Avelino Cáceres',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '10',
            'shipping_first_name' => 'Dayana',
            'shipping_last_name' => 'Medina Padín',
            'shipping_email' => 'Dayana@gmail.com',
            'shipping_phone' => '928467230',
            'shipping_dni' => '42666691',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '11',
            'shipping_first_name' => 'Andree Pedro',
            'shipping_last_name' => 'Hernandez Monterroza',
            'shipping_email' => 'Andree@gmail.com',
            'shipping_phone' => '914356723',
            'shipping_dni' => '42641460',
            'address' => 'avenida vista alegre',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);


        DB::table('shippings')->insert([
            'order_id' => '12',
            'shipping_first_name' => 'Jose',
            'shipping_last_name' => 'Rey Sanchez',
            'shipping_email' => 'jose@gmail.com',
            'shipping_phone' => '932451282',
            'shipping_dni' => '42466803',
            'address' => 'Avenida Independencia lote 13',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '13',
            'shipping_first_name' => 'Jhonatan Andree',
            'shipping_last_name' => 'Vila Buleje',
            'shipping_email' => 'jhonatan@gmail.com',
            'shipping_phone' => '987654321',
            'shipping_dni' => '70845064',
            'address' => 'Santa Isabel de Villa comite uno manzana A',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '14',
            'shipping_first_name' => 'Renzo ',
            'shipping_last_name' => 'Crisostomo Castro',
            'shipping_email' => 'renzo@gmail.com',
            'shipping_phone' => '876543219',
            'shipping_dni' => '75886691',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '15',
            'shipping_first_name' => 'Sulca ',
            'shipping_last_name' => 'Hinostroza Dominguez',
            'shipping_email' => 'sulca@gmail.com',
            'shipping_phone' => '954871265',
            'shipping_dni' => '75828713',
            'address' => 'Delicias de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '16',
            'shipping_first_name' => 'Piter ',
            'shipping_last_name' => 'Camargo Nolasco',
            'shipping_email' => 'piter@gmail.com',
            'shipping_phone' => '963214785',
            'shipping_dni' => '75730278',
            'address' => 'Tres de Octubre',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '17',
            'shipping_first_name' => 'Calixto',
            'shipping_last_name' => 'Gutierrez Pérez',
            'shipping_email' => 'calixto@gmail.com',
            'shipping_phone' => '921458730',
            'shipping_dni' => '74666811',
            'address' => 'Santa Isabel de Villa comite cinco',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '18',
            'shipping_first_name' => 'Luis',
            'shipping_last_name' => 'Herrera Canales',
            'shipping_email' => 'Luis@gmail.com',
            'shipping_phone' => '918457116',
            'shipping_dni' => '72901878',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '19',
            'shipping_first_name' => 'Sofia',
            'shipping_last_name' => 'Bravo Chumpitaz',
            'shipping_email' => 'sofia@gmail.com',
            'shipping_phone' => '948520163',
            'shipping_dni' => '72023346',
            'address' => 'Terrazas de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '20',
            'shipping_first_name' => 'Medina',
            'shipping_last_name' => 'Sandoval Perez',
            'shipping_email' => 'medina@gmail.com',
            'shipping_phone' => '927846002',
            'shipping_dni' => '44546272',
            'address' => 'Santa Isabel de Villa Los Pinos',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '21',
            'shipping_first_name' => 'Cristian',
            'shipping_last_name' => 'Vila Buleje',
            'shipping_email' => 'cristian@gmail.com',
            'shipping_phone' => '985216027',
            'shipping_dni' => '44168633',
            'address' => 'Av. Avelino Cáceres',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '22',
            'shipping_first_name' => 'Dayana',
            'shipping_last_name' => 'Medina Padín',
            'shipping_email' => 'Dayana@gmail.com',
            'shipping_phone' => '928467230',
            'shipping_dni' => '42666691',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '23',
            'shipping_first_name' => 'Andree Pedro',
            'shipping_last_name' => 'Hernandez Monterroza',
            'shipping_email' => 'Andree@gmail.com',
            'shipping_phone' => '914356723',
            'shipping_dni' => '42641460',
            'address' => 'avenida vista alegre',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);


        DB::table('shippings')->insert([
            'order_id' => '24',
            'shipping_first_name' => 'Jose',
            'shipping_last_name' => 'Rey Sanchez',
            'shipping_email' => 'jose@gmail.com',
            'shipping_phone' => '932451282',
            'shipping_dni' => '42466803',
            'address' => 'Avenida Independencia lote 13',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '25',
            'shipping_first_name' => 'Jhonatan Andree',
            'shipping_last_name' => 'Vila Buleje',
            'shipping_email' => 'jhonatan@gmail.com',
            'shipping_phone' => '987654321',
            'shipping_dni' => '70845064',
            'address' => 'Santa Isabel de Villa comite uno manzana A',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '26',
            'shipping_first_name' => 'Renzo ',
            'shipping_last_name' => 'Crisostomo Castro',
            'shipping_email' => 'renzo@gmail.com',
            'shipping_phone' => '876543219',
            'shipping_dni' => '75886691',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '27',
            'shipping_first_name' => 'Sulca ',
            'shipping_last_name' => 'Hinostroza Dominguez',
            'shipping_email' => 'sulca@gmail.com',
            'shipping_phone' => '954871265',
            'shipping_dni' => '75828713',
            'address' => 'Delicias de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '28',
            'shipping_first_name' => 'Piter ',
            'shipping_last_name' => 'Camargo Nolasco',
            'shipping_email' => 'piter@gmail.com',
            'shipping_phone' => '963214785',
            'shipping_dni' => '75730278',
            'address' => 'Tres de Octubre',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '29',
            'shipping_first_name' => 'Calixto',
            'shipping_last_name' => 'Gutierrez Pérez',
            'shipping_email' => 'calixto@gmail.com',
            'shipping_phone' => '921458730',
            'shipping_dni' => '74666811',
            'address' => 'Santa Isabel de Villa comite cinco',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '30',
            'shipping_first_name' => 'Luis',
            'shipping_last_name' => 'Herrera Canales',
            'shipping_email' => 'Luis@gmail.com',
            'shipping_phone' => '918457116',
            'shipping_dni' => '72901878',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '31',
            'shipping_first_name' => 'Sofia',
            'shipping_last_name' => 'Bravo Chumpitaz',
            'shipping_email' => 'sofia@gmail.com',
            'shipping_phone' => '948520163',
            'shipping_dni' => '72023346',
            'address' => 'Terrazas de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '32',
            'shipping_first_name' => 'Medina',
            'shipping_last_name' => 'Sandoval Perez',
            'shipping_email' => 'medina@gmail.com',
            'shipping_phone' => '927846002',
            'shipping_dni' => '44546272',
            'address' => 'Santa Isabel de Villa Los Pinos',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '33',
            'shipping_first_name' => 'Cristian',
            'shipping_last_name' => 'Vila Buleje',
            'shipping_email' => 'cristian@gmail.com',
            'shipping_phone' => '985216027',
            'shipping_dni' => '44168633',
            'address' => 'Av. Avelino Cáceres',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '34',
            'shipping_first_name' => 'Dayana',
            'shipping_last_name' => 'Medina Padín',
            'shipping_email' => 'Dayana@gmail.com',
            'shipping_phone' => '928467230',
            'shipping_dni' => '42666691',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '35',
            'shipping_first_name' => 'Andree Pedro',
            'shipping_last_name' => 'Hernandez Monterroza',
            'shipping_email' => 'Andree@gmail.com',
            'shipping_phone' => '914356723',
            'shipping_dni' => '42641460',
            'address' => 'avenida vista alegre',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);


        DB::table('shippings')->insert([
            'order_id' => '36',
            'shipping_first_name' => 'Jose',
            'shipping_last_name' => 'Rey Sanchez',
            'shipping_email' => 'jose@gmail.com',
            'shipping_phone' => '932451282',
            'shipping_dni' => '42466803',
            'address' => 'Avenida Independencia lote 13',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '37',
            'shipping_first_name' => 'Jhonatan Andree',
            'shipping_last_name' => 'Vila Buleje',
            'shipping_email' => 'jhonatan@gmail.com',
            'shipping_phone' => '987654321',
            'shipping_dni' => '70845064',
            'address' => 'Santa Isabel de Villa comite uno manzana A',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '38',
            'shipping_first_name' => 'Renzo ',
            'shipping_last_name' => 'Crisostomo Castro',
            'shipping_email' => 'renzo@gmail.com',
            'shipping_phone' => '876543219',
            'shipping_dni' => '75886691',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '39',
            'shipping_first_name' => 'Sulca ',
            'shipping_last_name' => 'Hinostroza Dominguez',
            'shipping_email' => 'sulca@gmail.com',
            'shipping_phone' => '954871265',
            'shipping_dni' => '75828713',
            'address' => 'Delicias de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '40',
            'shipping_first_name' => 'Piter ',
            'shipping_last_name' => 'Camargo Nolasco',
            'shipping_email' => 'piter@gmail.com',
            'shipping_phone' => '963214785',
            'shipping_dni' => '75730278',
            'address' => 'Tres de Octubre',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '41',
            'shipping_first_name' => 'Calixto',
            'shipping_last_name' => 'Gutierrez Pérez',
            'shipping_email' => 'calixto@gmail.com',
            'shipping_phone' => '921458730',
            'shipping_dni' => '74666811',
            'address' => 'Santa Isabel de Villa comite cinco',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '42',
            'shipping_first_name' => 'Luis',
            'shipping_last_name' => 'Herrera Canales',
            'shipping_email' => 'Luis@gmail.com',
            'shipping_phone' => '918457116',
            'shipping_dni' => '72901878',
            'address' => 'Tupac Amaru de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '43',
            'shipping_first_name' => 'Sofia',
            'shipping_last_name' => 'Bravo Chumpitaz',
            'shipping_email' => 'sofia@gmail.com',
            'shipping_phone' => '948520163',
            'shipping_dni' => '72023346',
            'address' => 'Terrazas de Villa',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '44',
            'shipping_first_name' => 'Medina',
            'shipping_last_name' => 'Sandoval Perez',
            'shipping_email' => 'medina@gmail.com',
            'shipping_phone' => '927846002',
            'shipping_dni' => '44546272',
            'address' => 'Santa Isabel de Villa Los Pinos',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);

        DB::table('shippings')->insert([
            'order_id' => '45',
            'shipping_first_name' => 'Cristian',
            'shipping_last_name' => 'Vila Buleje',
            'shipping_email' => 'cristian@gmail.com',
            'shipping_phone' => '985216027',
            'shipping_dni' => '44168633',
            'address' => 'Av. Avelino Cáceres',
            'state' => 'Chorrillos',
            'post_code' => '15054',
        ]);







      //DETALLE DE PEDIDO

    DB::table('orders')->insert([
        'user_id' => '1',
        'invoice_no' => '49873',
        'payment_type' => 'contraentrega',
        'total' => '68.4',
        'coupon_discount' => '10',
        'subtotal' => '76',
    ]);


    DB::table('orders')->insert([
        'user_id' => '2',
        'invoice_no' => '65511',
        'payment_type' => 'contraentrega',
        'total' => '80.75',
        'coupon_discount' => '15',
        'subtotal' => '95',
    ]);

    DB::table('orders')->insert([
        'user_id' => '3',
        'invoice_no' => '99685',
        'payment_type' => 'contraentrega',
        'total' => '110.4',
        'coupon_discount' => '20',
        'subtotal' => '138',
    ]);

    DB::table('orders')->insert([
        'user_id' => '4',
        'invoice_no' => '26528',
        'payment_type' => 'contraentrega',
        'total' => '120',
        'subtotal' => '120',
    ]);

    DB::table('orders')->insert([
        'user_id' => '5',
        'invoice_no' => '50365',
        'payment_type' => 'contraentrega',
        'total' => '115',
        'subtotal' => '115',
    ]);

    DB::table('orders')->insert([
        'user_id' => '6',
        'invoice_no' => '42594',
        'payment_type' => 'contraentrega',
        'total' => '125',
        'subtotal' => '125',
    ]);

    DB::table('orders')->insert([
        'user_id' => '7',
        'invoice_no' => '13776',
        'payment_type' => 'contraentrega',
        'total' => '126',
        'subtotal' => '126',
    ]);

    DB::table('orders')->insert([
        'user_id' => '8',
        'invoice_no' => '55826',
        'payment_type' => 'contraentrega',
        'total' => '118',
        'subtotal' => '118',
    ]);

    DB::table('orders')->insert([
        'user_id' => '9',
        'invoice_no' => '50940',
        'payment_type' => 'contraentrega',
        'total' => '20',
        'subtotal' => '20',
    ]);

    DB::table('orders')->insert([
        'user_id' => '10',
        'invoice_no' => '15459',
        'payment_type' => 'contraentrega',
        'total' => '54',
        'subtotal' => '54',
    ]);

    DB::table('orders')->insert([
        'user_id' => '11',
        'invoice_no' => '43079',
        'payment_type' => 'contraentrega',
        'total' => '70',
        'subtotal' => '70',
    ]);

    DB::table('orders')->insert([
        'user_id' => '12',
        'invoice_no' => '51941',
        'payment_type' => 'contraentrega',
        'total' => '70',
        'subtotal' => '70',
    ]);

    DB::table('orders')->insert([
        'user_id' => '1',
        'invoice_no' => '79039',
        'payment_type' => 'contraentrega',
        'total' => '78',
        'subtotal' => '78',
    ]);

    DB::table('orders')->insert([
        'user_id' => '2',
        'invoice_no' => '54856',
        'payment_type' => 'contraentrega',
        'total' => '83',
        'subtotal' => '83',
    ]);

    DB::table('orders')->insert([
        'user_id' => '3',
        'invoice_no' => '26747',
        'payment_type' => 'contraentrega',
        'total' => '100',
        'subtotal' => '100',
    ]);

    DB::table('orders')->insert([
        'user_id' => '4',
        'invoice_no' => '74272',
        'payment_type' => 'contraentrega',
        'total' => '138',
        'subtotal' => '138',
    ]);

    DB::table('orders')->insert([
        'user_id' => '5',
        'invoice_no' => '38655',
        'payment_type' => 'contraentrega',
        'total' => '125',
        'subtotal' => '125',
    ]);

    DB::table('orders')->insert([
        'user_id' => '6',
        'invoice_no' => '65892',
        'payment_type' => 'contraentrega',
        'total' => '110',
        'subtotal' => '110',
    ]);

    DB::table('orders')->insert([
        'user_id' => '7',
        'invoice_no' => '86146',
        'payment_type' => 'contraentrega',
        'total' => '130',
        'subtotal' => '130',
    ]);

    DB::table('orders')->insert([
        'user_id' => '8',
        'invoice_no' => '37945',
        'payment_type' => 'contraentrega',
        'total' => '126',
        'subtotal' => '126',
    ]);

    DB::table('orders')->insert([
        'user_id' => '9',
        'invoice_no' => '18444',
        'payment_type' => 'contraentrega',
        'total' => '74',
        'subtotal' => '74',
    ]);

    DB::table('orders')->insert([
        'user_id' => '10',
        'invoice_no' => '82794',
        'payment_type' => 'contraentrega',
        'total' => '30',
        'subtotal' => '30',
    ]);

    DB::table('orders')->insert([
        'user_id' => '11',
        'invoice_no' => '57300',
        'payment_type' => 'contraentrega',
        'total' => '30',
        'subtotal' => '30',
    ]);

    DB::table('orders')->insert([
        'user_id' => '12',
        'invoice_no' => '39985',
        'payment_type' => 'contraentrega',
        'total' => '30',
        'subtotal' => '30',
    ]);

    DB::table('orders')->insert([
        'user_id' => '1',
        'invoice_no' => '85355',
        'payment_type' => 'contraentrega',
        'total' => '75',
        'subtotal' => '75',
    ]);

    DB::table('orders')->insert([
        'user_id' => '2',
        'invoice_no' => '25916',
        'payment_type' => 'contraentrega',
        'total' => '76',
        'subtotal' => '76',
    ]);

    DB::table('orders')->insert([
        'user_id' => '3',
        'invoice_no' => '78502',
        'payment_type' => 'contraentrega',
        'total' => '90',
        'subtotal' => '90',
    ]);

    DB::table('orders')->insert([
        'user_id' => '4',
        'invoice_no' => '14391',
        'payment_type' => 'contraentrega',
        'total' => '100',
        'subtotal' => '100',
    ]);

    DB::table('orders')->insert([
        'user_id' => '5',
        'invoice_no' => '48224',
        'payment_type' => 'contraentrega',
        'total' => '129',
        'subtotal' => '129',
    ]);

    DB::table('orders')->insert([
        'user_id' => '6',
        'invoice_no' => '6324',
        'payment_type' => 'contraentrega',
        'total' => '115',
        'subtotal' => '115',
    ]);

    DB::table('orders')->insert([
        'user_id' => '7',
        'invoice_no' => '69206',
        'payment_type' => 'contraentrega',
        'total' => '120',
        'subtotal' => '120',
    ]);

    DB::table('orders')->insert([
        'user_id' => '8',
        'invoice_no' => '73483',
        'payment_type' => 'contraentrega',
        'total' => '130',
        'subtotal' => '130',
    ]);

    DB::table('orders')->insert([
        'user_id' => '9',
        'invoice_no' => '91147',
        'payment_type' => 'contraentrega',
        'total' => '122',
        'subtotal' => '122',
    ]);

    DB::table('orders')->insert([
        'user_id' => '10',
        'invoice_no' => '86351',
        'payment_type' => 'contraentrega',
        'total' => '20',
        'subtotal' => '20',
    ]);

    DB::table('orders')->insert([
        'user_id' => '11',
        'invoice_no' => '59160',
        'payment_type' => 'contraentrega',
        'total' => '50',
        'subtotal' => '50',
    ]);

    DB::table('orders')->insert([
        'user_id' => '12',
        'invoice_no' => '41197',
        'payment_type' => 'contraentrega',
        'total' => '58',
        'subtotal' => '58',
    ]);

    DB::table('orders')->insert([
        'user_id' => '1',
        'invoice_no' => '20843',
        'payment_type' => 'contraentrega',
        'total' => '70',
        'subtotal' => '70',
    ]);


    DB::table('orders')->insert([
        'user_id' => '2',
        'invoice_no' => '27699',
        'payment_type' => 'contraentrega',
        'total' => '78',
        'subtotal' => '78',
    ]);

    DB::table('orders')->insert([
        'user_id' => '3',
        'invoice_no' => '18157',
        'payment_type' => 'contraentrega',
        'total' => '76',
        'subtotal' => '76',
    ]);

    DB::table('orders')->insert([
        'user_id' => '4',
        'invoice_no' => '31369',
        'payment_type' => 'contraentrega',
        'total' => '90',
        'subtotal' => '90',
    ]);

    DB::table('orders')->insert([
        'user_id' => '5',
        'invoice_no' => '33206',
        'payment_type' => 'contraentrega',
        'total' => '119',
        'subtotal' => '119',
    ]);

    DB::table('orders')->insert([
        'user_id' => '6',
        'invoice_no' => '31957',
        'payment_type' => 'contraentrega',
        'total' => '125',
        'subtotal' => '125',
    ]);

    DB::table('orders')->insert([
        'user_id' => '7',
        'invoice_no' => '8613',
        'payment_type' => 'contraentrega',
        'total' => '100',
        'subtotal' => '100',
    ]);

    DB::table('orders')->insert([
        'user_id' => '8',
        'invoice_no' => '62833',
        'payment_type' => 'contraentrega',
        'total' => '120',
        'subtotal' => '120',
    ]);


    DB::table('orders')->insert([
        'user_id' => '9',
        'invoice_no' => '8607',
        'payment_type' => 'contraentrega',
        'total' => '128',
        'subtotal' => '128',
    ]);

  /*       factory(\App\User::class, 100)->create(); */
    }
}
