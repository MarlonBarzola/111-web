<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'name' => 'Biela Ecuador',
            'slug' => 'biela-ecuador',
            'extract' => null,
            'body' => '<p>Junto a nuestros amigos de Agencia Paper, dimos vida a este proyecto web para Biela Ecuador.</p><figure class="image"><img src="http://cientoonce.111.com.ec/storage/images/rqdmLnbPu4zeBYJjTg0VIM2AzvnoCEj8tzttw1qc.gif"></figure><p>Nuestro equipo de programación desarrollo todo el sitio e interacciones bajo la dirección de Arte de Paper y nuestro equipo gráfico.</p><figure class="image"><img src="http://cientoonce.111.com.ec/storage/images/m7l81yGWPE869Rqduprof8wVLVVgpRIJj9vaBTKG.png"></figure>',
            'iframe' => null,
            'thumbnail' => 'jobs/KStREvIKYbw9VQs2hZbqzJerkcnMNe8RPoF4ljbO.png',
            'banner' => 'jobs/aG7En9ARDzex7rPVm1gAE3vgfjkQwUzxSuSA7aE2.png',
            'category_id' => 1,
            'status' => 1,
        ]);
        Job::create([
            'name' => 'Salisal',
            'slug' => 'salisal',
            'extract' => null,
            'body' => '<p>Proyecto de packaging para marca ecuatoriana Salisal<img src="http://cientoonce.111.com.ec/storage/images/dnMtZNWpKrkbKfmSj9ov4QHtIULOaEujaAWVfM85.png"></p><p>&nbsp;</p><p><img src="http://cientoonce.111.com.ec/storage/images/mbKfpTxLYycQk9HpzUF6eqWWLTDIzZNyHWmKTj7a.png"></p>',
            'iframe' => null,
            'thumbnail' => 'jobs/mMrNqHJ8T6QJLaU1uArPP4cxgPlMyzlOIeIRu0Yd.png',
            'banner' => 'jobs/2nEqqdV46MAJHOnOa8oZw3RuavrNYhKDRE9rrVF1.png',
            'category_id' => 9,
            'status' => 1,
        ]);
        Job::create([
            'name' => 'Vesta',
            'slug' => 'vesta',
            'extract' => null,
            'body' => '<p>Desarrollo de logotipo, imagen de marca y empaques para Vesta.</p><figure class="image"><img src="http://cientoonce.111.com.ec/storage/images/esgUKsTHUHSxvjmxLbVVb2IfqoxssBFrjeGqC3So.png"></figure><p>&nbsp;</p><p>Una marca ecuatoriana que apuesta por el cuidado ambiental en el uso de desinfectantes y productos de limpieza.</p><figure class="image"><img src="http://cientoonce.111.com.ec/storage/images/XRFocdZPDsstemdJYJfEJsDTEqoa9bchqqv8uj9A.png"></figure><figure class="image"><img src="http://cientoonce.111.com.ec/storage/images/rlZWFnGTuExrh2NYVHfFllEHd0BLbpqf1xySJPn5.png"></figure>',
            'iframe' => null,
            'thumbnail' => 'jobs/qG4Mq9vwG4rPvSog6WFs5FaMVU3hmRLy1qiqCWQZ.png',
            'banner' => 'jobs/7Zal0vFB5ykxZzf2Mq9hfYgpN2Mw4Flw3nVCGZ9J.png',
            'category_id' => 3,
            'status' => 1,
        ]);

        Job::create([
            'name' => 'La Torre',
            'slug' => 'la-torre',
            'extract' => null,
            'body' => '<p>Planificación y producción de contenido para Centro Comercial La Torre</p><p>Te invitamos a ver más de su contenido aquí <a href="https://www.instagram.com/cc_latorre/">https://www.instagram.com/cc_latorre/</a></p>',
            'iframe' => '<iframe src="https://www.instagram.com/p/CfcTFhEPCvD/embed" style="background: white none repeat scroll 0% 0%; max-width: 540px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: auto; min-width: 326px; padding: 0px;" height="470" frameborder="0"></iframe>

                <iframe src="https://www.instagram.com/p/CgsKfOnPu3c/embed" style="background: white none repeat scroll 0% 0%; max-width: 540px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: auto; min-width: 326px; padding: 0px;" height="470" frameborder="0"></iframe>
                
                <iframe src="https://www.instagram.com/p/CepLqLilKrj/embed/" style="background: white none repeat scroll 0% 0%; max-width: 540px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: auto; min-width: 326px; padding: 0px;" height="470" frameborder="0"></iframe>
                
                <iframe src="https://www.instagram.com/p/Cc9C-kEl1uL/embed/" style="background: white none repeat scroll 0% 0%; max-width: 540px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: auto; min-width: 326px; padding: 0px;" height="470" frameborder="0"></iframe>
                
                <p> Te invitamos a ver más de su contenido <a href="https://www.instagram.com/cc_latorre/"  target="_blank">aquí <a/> <p/>',
            'thumbnail' => 'jobs/drsuRrAhxAsfrhCQHvq1A0z0n3jPTHWjYMDaKQeT.jpg',
            'banner' => 'jobs/5b8CXBESYlxgT1xu0OwDgcJ5fpGOmfnCtkXkA9tk.png',
            'category_id' => 4,
            'status' => 1,
        ]);

        Job::create([
            'name' => 'Mama Tere',
            'slug' => 'mama-tere',
            'extract' => null,
            'body' => '<p>Planificación y producción de contenido para MamaTere, una de las marcas más valoradas en la comercialización de alimentos para el mercado Latino en USA</p><p>&nbsp;Te invitamos a ver más de su contenido aquí : <a href="https://www.instagram.com/mama.tere.usa/">https://www.instagram.com/mama.tere.usa/</a></p>',
            'iframe' => '<iframe class="instagram-media instagram-media-rendered" id="instagram-embed-0" src="https://www.instagram.com/p/CdMKHlQA6Z3/embed/captioned/" allowtransparency="true" allowfullscreen="true" data-instgrm-payload-id="instagram-media-payload-0" scrolling="no" style="background: white none repeat scroll 0% 0%; max-width: 540px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: auto; min-width: 326px; padding: 0px;" height="495" frameborder="0"></iframe>

                <iframe class="instagram-media instagram-media-rendered" id="instagram-embed-0" src="https://www.instagram.com/p/CgVXEMLATp0/embed/captioned/" allowtransparency="true" allowfullscreen="true" data-instgrm-payload-id="instagram-media-payload-0" scrolling="no" style="background: white none repeat scroll 0% 0%; max-width: 540px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: auto; min-width: 326px; padding: 0px;" height="495" frameborder="0"></iframe>
                
                <iframe class="instagram-media instagram-media-rendered" id="instagram-embed-0" src="https://www.instagram.com/p/Ce1e9scOrvw/embed/captioned/" allowtransparency="true" allowfullscreen="true" data-instgrm-payload-id="instagram-media-payload-0" scrolling="no" style="background: white none repeat scroll 0% 0%; max-width: 540px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: auto; min-width: 326px; padding: 0px;" height="520" frameborder="0"></iframe>
                
                <iframe class="instagram-media instagram-media-rendered" id="instagram-embed-0" src="https://www.instagram.com/p/CeXFveeLbmE/embed/captioned/" allowtransparency="true" allowfullscreen="true" data-instgrm-payload-id="instagram-media-payload-0" scrolling="no" style="background: white none repeat scroll 0% 0%; max-width: 540px; width: calc(100% - 2px); border-radius: 3px; border: 1px solid rgb(219, 219, 219); box-shadow: none; display: block; margin: auto; min-width: 326px; padding: 0px;" height="520" frameborder="0"></iframe>
                
                <p> Te invitamos a ver más de su contenido <a href="https://www.instagram.com/mama.tere.usa/"  target="_blank">aquí <a/> <p/>',
            'thumbnail' => 'jobs/iIFbTUcpVx0g2sMpKHhQUmANzE9O2i1SUYbcfcvo.png',
            'banner' => 'jobs/B9YjzhbsJpJ3IB7k3Xy4k2V5RiiRruUmCI2EB0Jv.png',
            'category_id' => 4,
            'status' => 1,
        ]);
    }
}
