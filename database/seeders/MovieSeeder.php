<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::firstOrCreate([
            "gender_id"=> 6,
            "classification_id"=> 4,
            "name"=> "Avatar",
            "synopsis"=> "Avatar es una franquicia de medios estadounidense creada por James Cameron, que consiste en una serie planificada de películas épicas de ciencia ficción producidas por Lightstorm Entertainment y distribuidas por 20th Century Studios, así como productos relacionados, videojuegos y atracciones de parques temáticos.",
            "poster_name"=> "avatar",
            "release_date"=> "2009-12-18",
            "coming_soon"=> 0
        ]);

        Movie::firstOrCreate([
            "gender_id" => 1,
            "classification_id" => 4,
            "name"=> "Avengers Infinity War",
            "synopsis"=> "Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. Si Thanos logra reunir las seis gemas del infinito=> poder, tiempo, alma, realidad, mente y espacio, nadie podrá detenerlo.",
            "poster_name"=> "avengers_infinity_war",
            "release_date"=> "2018-04-27",
            "coming_soon" => 0
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 1,
            "classification_id"=> 4,
            "name"=> "Black Adam",
            "synopsis"=> "Unos arqueólogos liberan de su tumba a Black Adam, quien llevaba 5000 años preso tras haber recibido los poderes de los dioses. De nuevo entre los humanos, Black Adam se dispone a imponer su justicia, muy diferente a la del mundo en el que despertó.",
            "poster_name"=> "Black Adam",
            "release_date"=> "2022-10-01",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 7,
            "classification_id"=> 5,
            "name"=> "El conjuro",
            "synopsis"=> "A principios de los años 70, Ed y Lorrain Warren, reputados investigadores de fenómenos paranormales, se enfrentan a una entidad demoníaca al intentar ayudar a una familia que está siendo aterrorizada por una presencia oscura en su aislada granja.",
            "poster_name"=> "conjuro",
            "release_date"=> "2013-08-01",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 2,
            "classification_id"=> 1,
            "name"=> "El Encanto",
            "synopsis"=> "Una joven colombiana puede ser la última esperanza para su familia, cuando descubre que la magia que rodea a Encanto, un lugar encantado que bendice a los niños con dones únicos, se encuentra en serio peligro.",
            "poster_name"=> "encanto",
            "release_date"=> "2021-11-24",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 2,
            "classification_id"=> 1,
            "name"=> "Gato con botas",
            "synopsis"=> "El famoso gato tiene la aventura de su vida cuando une fuerzas con Humpty Dumpty y la gata Kitty para robarse al ganso de los huevos de oro.",
            "poster_name"=> "Gato_con_botas",
            "release_date"=> "2011-10-28",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 7,
            "classification_id"=> 6,
            "name"=> "Megan",
            "synopsis"=> "Gemma, diseñadora de una muñeca de inteligencia artificial extraordinaria, se convierte en la tutora legal de una niña. Abrumada por la responsabilidad, cede su educación y protección a la muñeca, sin saber que las consecuencias serán terribles.",
            "poster_name"=> "Megan",
            "release_date"=> "2023-01-06",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 1,
            "classification_id"=> 2,
            "name"=> "Narnia",
            "synopsis"=> "Las Crónicas de Narnia es una heptalogía de libros juveniles escrita por el escritor y profesor anglo-irlandés C. S. Lewis entre 1950 y 1956, e ilustrado, en su versión original, por Pauline Baynes.",
            "poster_name"=> "Narnia",
            "release_date"=> "2005-01-01",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 1,
            "classification_id"=> 1,
            "name"=> "Pinocchio",
            "synopsis"=> "En Italia, el deseo de un hombre le da vida mágicamente a un muñeco de madera. Sin embargo, padre e hijo tendrán que sobrevivir al auge del fascismo.",
            "poster_name"=> "pinocchio",
            "release_date"=> "2022-11-24",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 2,
            "classification_id"=> 1,
            "name"=> "Shrek",
            "synopsis"=> "Un ogro llamado Shrek vive en su pantano, pero su preciada soledad se ve súbitamente interrumpida por la invasión de los ruidosos personajes de los cuentos de hadas. Todos fueron expulsados de sus reinos por el malvado Lord Farquaad. Decidido a salvar su hogar, Shrek hace un trato con Farquaad y se prepara para rescatar a la princesa Fiona, quien será la esposa de Farquaad.",
            "poster_name"=> "shrek",
            "release_date"=> "2001-04-22",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 3,
            "classification_id"=> 1,
            "name"=> "Sing 2",
            "synopsis"=> "Buster Moon y su elenco de animales artistas se preparan para lanzar un deslumbrante espectáculo escénico en la capital mundial del entretenimiento. Solo hay un problema=> debe convencer a la estrella de rock más solitaria del mundo de unirse a ellos.",
            "poster_name"=> "sing_2",
            "release_date"=> "2021-12-22",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 1,
            "classification_id"=> 1,
            "name"=> "Spiderman no way home",
            "synopsis"=> "Tras descubrirse la identidad secreta de Peter Parker como Spider-Man, la vida del joven se vuelve una locura. Peter le pide ayuda al Doctor Strange para recuperar su vida, pero algo sale mal y provoca una fractura en el multiverso.",
            "poster_name"=> "Spiderman_no_way_home",
            "release_date"=> "2021-12-17",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 1,
            "classification_id"=> 4,
            "name"=> "The batman",
            "synopsis"=> "Batman explora la corrupción existente en la ciudad de Gotham y el vínculo de esta con su propia familia. Además, entra en conflicto con un asesino en serie conocido como el Acertijo.",
            "poster_name"=> "the_batman",
            "release_date"=> "2022-03-04",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 1,
            "classification_id"=> 1,
            "name"=> "Thor love and thunder",
            "synopsis"=> "Thor está buscando la paz interior, pero la irrupción de Gorr, el asesino de dioses, le obliga a volver al combate. Thor recluta a la Reina Valkiria, Korg y su exnovia, Jane Foster, para que lo ayuden a evitar la extinción de los dioses.",
            "poster_name"=> "thor_love_and_thunder",
            "release_date"=> "2022-06-06",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 1,
            "classification_id"=> 4,
            "name"=> "Top Gun",
            "synopsis"=> "Maverick, quien lleva 30 años de servicio, es ahora instructor de pilotos militares. Una última misión, un sacrificio final, obliga a este maestro de los cielos a enfrentar las heridas abiertas del pasado y sus temores más profundos.",
            "poster_name"=> "Top_gun",
            "release_date"=> "2022-05-27",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 2,
            "classification_id"=> 4,
            "name"=> "Uncharted",
            "synopsis"=> "El cazador de tesoros Victor Sullivan recluta a Nathan Drake para que lo ayude a recuperar una fortuna de 500 años de antigüedad. Lo que comienza como un atraco se convierte en una competencia contra el despiadado Santiago Moncada.",
            "poster_name"=> "uncharted",
            "release_date"=> "2022-02-18",
            "coming_soon"=> 0,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 1,
            "classification_id"=> 4,
            "name"=> "Ant-Man and the Wasp: Quantumania",
            "synopsis"=> "Ant-Man and the Wasp: Quantumania es una próxima película de superhéroes estadounidense basada en los personajes de Marvel Comics, Scott Lang / Ant-Man y Hope van Dyne / Wasp.",
            "poster_name"=> "ant-man",
            "release_date"=> "2023-02-17",
            "coming_soon"=> 1,
        ]);

        Movie::firstOrCreate([
            "gender_id"=> 1,
            "classification_id"=> 4,
            "name"=> "Guardians of the Galaxy Vol. 3",
            "synopsis"=> "A Los Guardianes de la Galaxia se están adaptando a la vida en Knowhere, pero cuando partes del pasado de Rocket resurgen, Peter Quill debe liderar a los Guardianes en una peligrosa misión para protegerlo que podría llevar a la disolución del equipo.",
            "poster_name"=> "guardians-of-the-galaxy",
            "release_date"=> "2023-05-05",
            "coming_soon"=> 1,
        ]);
    }
}
