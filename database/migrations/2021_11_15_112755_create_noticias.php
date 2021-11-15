<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->integer('noticia_categoria_id');
            $table->string('titulo');
            $table->string('manchete');
            $table->text('noticia');
            $table->foreign('noticia_categoria_id')->references('id')->on('noticias_categorias');
            $table->timestamps();
            $table->softdeletes();
        });

        DB::table('noticias')->insert(
            array(
                [
                    'noticia_categoria_id' => 1,
                    'titulo' => 'Notícia Teste 001',
                    'manchete' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'noticia' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Risus ultricies tristique nulla aliquet enim tortor at. Maecenas pharetra convallis posuere morbi leo. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Interdum consectetur libero id faucibus nisl tincidunt eget. Volutpat maecenas volutpat blandit aliquam etiam. A condimentum vitae sapien pellentesque habitant morbi tristique senectus. Ornare quam viverra orci sagittis. Ante in nibh mauris cursus mattis molestie a. Habitant morbi tristique senectus et netus et malesuada fames. Euismod elementum nisi quis eleifend. Sed enim ut sem viverra. Sed adipiscing diam donec adipiscing tristique risus nec feugiat in. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Risus feugiat in ante metus dictum at tempor. Ac odio tempor orci dapibus ultrices in iaculis.

                    Mauris nunc congue nisi vitae. Eget aliquet nibh praesent tristique magna. Nam libero justo laoreet sit amet. Porttitor lacus luctus accumsan tortor posuere ac ut consequat. Sed velit dignissim sodales ut eu sem. Non diam phasellus vestibulum lorem sed risus. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Duis at tellus at urna condimentum mattis pellentesque. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Elementum tempus egestas sed sed risus pretium. Ac tortor dignissim convallis aenean et tortor. Amet commodo nulla facilisi nullam vehicula ipsum. Quis viverra nibh cras pulvinar mattis nunc sed blandit. Purus sit amet volutpat consequat mauris nunc.'
                ],
                [
                    'noticia_categoria_id' => 2,
                    'titulo' => 'Notícia Teste 002',
                    'manchete' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'noticia' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Risus ultricies tristique nulla aliquet enim tortor at. Maecenas pharetra convallis posuere morbi leo. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Interdum consectetur libero id faucibus nisl tincidunt eget. Volutpat maecenas volutpat blandit aliquam etiam. A condimentum vitae sapien pellentesque habitant morbi tristique senectus. Ornare quam viverra orci sagittis. Ante in nibh mauris cursus mattis molestie a. Habitant morbi tristique senectus et netus et malesuada fames. Euismod elementum nisi quis eleifend. Sed enim ut sem viverra. Sed adipiscing diam donec adipiscing tristique risus nec feugiat in. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Risus feugiat in ante metus dictum at tempor. Ac odio tempor orci dapibus ultrices in iaculis.

                    Mauris nunc congue nisi vitae. Eget aliquet nibh praesent tristique magna. Nam libero justo laoreet sit amet. Porttitor lacus luctus accumsan tortor posuere ac ut consequat. Sed velit dignissim sodales ut eu sem. Non diam phasellus vestibulum lorem sed risus. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Duis at tellus at urna condimentum mattis pellentesque. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Elementum tempus egestas sed sed risus pretium. Ac tortor dignissim convallis aenean et tortor. Amet commodo nulla facilisi nullam vehicula ipsum. Quis viverra nibh cras pulvinar mattis nunc sed blandit. Purus sit amet volutpat consequat mauris nunc.'
                ],
                [
                    'noticia_categoria_id' => 3,
                    'titulo' => 'Notícia Teste 003',
                    'manchete' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'noticia' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Risus ultricies tristique nulla aliquet enim tortor at. Maecenas pharetra convallis posuere morbi leo. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Interdum consectetur libero id faucibus nisl tincidunt eget. Volutpat maecenas volutpat blandit aliquam etiam. A condimentum vitae sapien pellentesque habitant morbi tristique senectus. Ornare quam viverra orci sagittis. Ante in nibh mauris cursus mattis molestie a. Habitant morbi tristique senectus et netus et malesuada fames. Euismod elementum nisi quis eleifend. Sed enim ut sem viverra. Sed adipiscing diam donec adipiscing tristique risus nec feugiat in. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Risus feugiat in ante metus dictum at tempor. Ac odio tempor orci dapibus ultrices in iaculis.

                    Mauris nunc congue nisi vitae. Eget aliquet nibh praesent tristique magna. Nam libero justo laoreet sit amet. Porttitor lacus luctus accumsan tortor posuere ac ut consequat. Sed velit dignissim sodales ut eu sem. Non diam phasellus vestibulum lorem sed risus. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Duis at tellus at urna condimentum mattis pellentesque. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Elementum tempus egestas sed sed risus pretium. Ac tortor dignissim convallis aenean et tortor. Amet commodo nulla facilisi nullam vehicula ipsum. Quis viverra nibh cras pulvinar mattis nunc sed blandit. Purus sit amet volutpat consequat mauris nunc.'
                ],
                [
                    'noticia_categoria_id' => 1,
                    'titulo' => 'Notícia Teste 004',
                    'manchete' => 'Et molestie ac feugiat sed lectus. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi.',
                    'noticia' => 'Et molestie ac feugiat sed lectus. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Urna id volutpat lacus laoreet. Et odio pellentesque diam volutpat commodo sed. Dui faucibus in ornare quam viverra orci sagittis eu volutpat. Facilisi morbi tempus iaculis urna id. Amet venenatis urna cursus eget nunc. A cras semper auctor neque. Dui sapien eget mi proin sed libero enim sed faucibus. Aenean vel elit scelerisque mauris. Sed tempus urna et pharetra pharetra massa. Nunc faucibus a pellentesque sit amet porttitor. Quisque id diam vel quam elementum pulvinar etiam non. Integer quis auctor elit sed. Ac auctor augue mauris augue neque.

                    Metus vulputate eu scelerisque felis imperdiet proin fermentum. Nunc congue nisi vitae suscipit tellus. Feugiat nisl pretium fusce id velit ut tortor. Ultricies integer quis auctor elit. Sed enim ut sem viverra aliquet eget. Varius sit amet mattis vulputate enim nulla aliquet porttitor lacus. Nibh tellus molestie nunc non blandit massa enim nec. Odio tempor orci dapibus ultrices. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Libero volutpat sed cras ornare arcu dui vivamus arcu. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Purus in massa tempor nec feugiat nisl pretium fusce id. Sed egestas egestas fringilla phasellus faucibus.'
                ],
                [
                    'noticia_categoria_id' => 2,
                    'titulo' => 'Notícia Teste 005',
                    'manchete' => 'Non odio euismod lacinia at quis. Eu feugiat pretium nibh ipsum consequat nisl vel.',
                    'noticia' => 'Non odio euismod lacinia at quis. Eu feugiat pretium nibh ipsum consequat nisl vel. Hendrerit gravida rutrum quisque non tellus orci ac auctor. Varius duis at consectetur lorem donec. Urna cursus eget nunc scelerisque viverra mauris. Pharetra et ultrices neque ornare aenean. At ultrices mi tempus imperdiet nulla. Posuere lorem ipsum dolor sit amet consectetur. Vitae auctor eu augue ut. Purus gravida quis blandit turpis cursus in. Pellentesque nec nam aliquam sem. Nisl rhoncus mattis rhoncus urna neque viverra justo. Sodales neque sodales ut etiam sit amet nisl purus in.'
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
