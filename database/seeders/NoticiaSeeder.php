<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('noticias')->insert([
            [
                'noticia_id' => 1,
                'escuderia_fk' => 1,
                'titulo' => 'Red Bull quiere más de Checo',
                'descripcion' => 'Horner espera que el piloto mexicano vuelva a los puestos de cabeza tras dos carreras, las de Canadá y Barcelona, con resultados discretos.
                La renovación de Checo Pérez con Red Bull por dos temporadas no ha venido acompañada por los resultados esperados por parte del piloto mexicano. Desde que se hiciera oficial la ampliación, el pasado 4 de junio, se han disputado dos grandes premios, el de Canadá y el de España, con logros discretos del monoplaza ‘11′. Fue incapaz de pasar la Q1 en el Gilles Villeneuve, con posterior abandono en carrera y un discreto octavo el sábado en Montmeló que replicó el domingo tras sobreponerse a una sanción de tres puestos en parrilla consecuencia de aquel accidente en Montreal.

                Y en Red Bull esperan más de su segundo piloto, como explicó Chris Horner tras la carrera de Barcelona: “Necesitamos a Checo en la partida, él y el equipo lo saben”, expone el director de la escudería energética. De momento, la exigencia pasa por devolver al mexicano al grupo cabecero y más teniendo en cuenta que McLaren está en alza y ya es una amenaza real para Red Bull. Contar con Pérez luchando por el podio o incluso las victorias, abriría el abanico de posibilidades para los de Milton Keynes. “Creo que ha tenido un par de carreras difíciles y las cosas no le han salido como él quería.

                En las primeras cuatro o cinco citas de este año estuvo fantástico. Solo necesitamos devolverlo a ese espacio mental. Si está al final de los ocho primeros, pierdes opciones estratégicas”, dice el británico.

                En cualquier caso, el desempeño en Barcelona parece que deja satisfecho a Horner, quien explica que las predicciones de carrera realizadas por los ordenadores no daban más de un octavo puesto para Pérez después de partir undécimo en parrilla: “Nuestras simulaciones decían que el octavo puesto era el óptimo desde el puesto 11 en la parrilla, así que lo logró, lo hizo con una estrategia de tres paradas. Creo, y espero que así sea, que obtendrá un poco de confianza y espero que la lleve a los próximos fines de semana, que son grandes fines de semana para él”, finaliza el mandamás de Red Bull.

                El piloto, por su parte, también es consciente de que se esperan mejores resultados de él. Terminó la carrera de Barcelona como un aprendizaje para volver a mejores puestos en próximos fines de semana que, como expresó Horner, son “grandes” para él. El próximo, en Austria, la casa de Red Bull…',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 2,
                'escuderia_fk' => 2,
                'titulo' => 'Sainz deshoja la margarita: Audi, Williams, Alpine…',
                'descripcion' => 'El piloto habla con las tres escuderías desde febrero, con proyectos muy diferentes. Sauber le quiere como eje de su desembarco y atado hasta 2027.

                Algunos esperaban un anuncio antes, durante o justo después del GP de España. Pues no. Carlos Sainz se toma con calma el periodo para definir su futuro casi cinco meses después de que Ferrari anunciara el fichaje de Hamilton. Siempre se habló de Audi, incluso como alternativa a la escudería de Maranello antes de que no le renovaran. En Mónaco apareció Williams como firme posibilidad, y desde el GP de España suena más fuerte Alpine, también por unas fotografías de Sainz padre y Flavio Briatore en el paddock de Montmeló. La realidad, como ya ha expuesto este medio, es que siempre han sido alternativas y los contactos entre todas las partes y con todos los equipos han sido constantes. Los Sainz han hablado con Red Bull, Mercedes y el resto de escuderías que tienen un asiento libre.

                Una vez Red Bull renovó a Pérez y Mercedes apostó por Antonelli, la elección de Sainz se centra en uno de los equipos del siguiente escalón. Audi le quiere en el centro de su ambicioso proyecto con un contrato largo (al menos dos temporadas fijas, hasta 2026 incluido) y bien remunerado. Los pros están claros: equipo oficial, motor propio, proyección enorme. Los contras, también: llevará tiempo consolidar una unidad de potencia nueva y el actual Sauber, que sería su coche en 2025, todavía no ha sumado puntos esta temporada. Es cierto que Zhou y Bottas, que vivió momentos mejores en la F1, no ayudarán a extraer el máximo potencial de ese monoplaza. Pero el cambio del Ferrari al Sauber en unos pocos meses es difícil de digerir. No hay más. Quienes conocen el entorno dudan más de la capacidad de Sauber a corto plazo (hasta hace un par de meses, Audi no se decidió del todo con el proyecto) que de la unidad de potencia. Pero necesitan al piloto.

                Williams, con motor Mercedes para el 2026 y ciertos progresos desde la llegada de James Vowles como ‘team principal’, igualan la oferta económica y dan más libertad al español en caso llame a la puerta un equipo top. No se puede descartar un movimiento de Verstappen a medio plazo, ya ha habido tensión desde marzo y se puede reproducir en el futuro. Además, hoy Red Bull ya no es mucho más fuerte que Mercedes en cuanto a prestaciones puras. La sombra de que Milton Keynes no sepa hacer un buen motor ante el cambio reglamentario es permanente. Y cada cierto tiempo, los satélites de Verstappen repiten que su futuro está en Red Bull… o no.

                En cuanto a Alpine, siempre estuvo ahí. No todas las reuniones de los Sainz han sido secretas y los movimientos por el ‘paddock’ son fáciles de seguir. Al mismo tiempo, no todas las reuniones son sinónimo de oferta. El equipo de Enstone es un fijo del top-10 incluso en las peores circunstancias. Han cambiado a buena parte del equipo técnico tras el fiasco inicial del A524 pero ahora Gasly y Ocon están en los puntos, aunque sea temporal. Para Sainz, puede ser interesante su cercanía constante a la Q3. El proyecto a largo plazo es más dudoso, se entiende que podrían descartar hacer su propio motor en 2026. No se sabe si eso es bueno (por recibir un motor mejor) o malo (por la falta de decisión a estas alturas). Pero es un fabricante oficial y su compromiso con la F1 está fuera de dudas. Quizás la llegada de Briatore como asesor ejecutivo, una especie de Helmut Marko para Luca de Meo, también desatasque alguna negociación. Carlos dijo en Barcelona que espera decidir pronto. Después de un ajetreado gran premio de casa, puede ser un buen momento para reflexionar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 3,
                'escuderia_fk' => 8,
                'titulo' => 'El futuro de Ricciardo en la F1 pende de un hilo',
                'descripcion' => 'OPINIÓN: Daniel Ricciardo llega al Gran Premio de Austria de este fin de semana como el único piloto de Red Bull sin contrato para la próxima temporada. ¿Es el comienzo de un largo adiós de la Fórmula 1?

                Hace cinco meses parecía el asiento más seguro en el establo de Red Bull en la F1, además del de Max Verstappen. Un piloto ganador de ocho grandes premios ubicado en RB, al tiempo que ofrecía a su equipo A una póliza de seguro.

                Después de todo, Daniel Ricciardo era un piloto conocido para Red Bull y, de hecho, el director del equipo, Christian Horner, lo había catalogado como su piloto favorito en la historia de la escudería.

                Horner fue decisivo para traerlo a mediados de la temporada pasada como sustituto de Nyck de Vries, , poniendo fin a la corta etapa del neerlandés en AlphaTauri. Horner presumía de poder reavivar el fuego que una vez vio en el australiano.

                Durante unos meses explosivos para Red Bull a principios de año, tras la investigación a Horner después de una denuncia interna, la posición de Ricciardo siguió pareciendo fuerte.

                El padre de Max Verstappen, Jos, había dejado claro que su hijo podría verse obligado a abandonar el equipo, con Mercedes cayendo en busca de firmar al campeón del mundo. Ricciardo, por lo tanto, ofrecía a Red Bull un respaldo si Verstappen efectivamente abandonaba la escuadra, o al menos podría esperar algún tiempo mientras buscaba un sustituto a largo plazo.

                Sin embargo, la situación de Verstappen se ha calmado desde entonces y ahora es probable que permanezca en el equipo al menos una temporada más.

                Luego está Sergio Pérez. Si el trabajo de Ricciardo era poner un poco de presión sobre el mexicano para que rindiera, entonces hay algo de éxito variable.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 4,
                'escuderia_fk' => 2,
                'titulo' => 'Las mejoras de Ferrari fueron ecplipsadas por sus problemas de rebote',
                'descripcion' => 'Ferrari sufrió con los rebotes a alta velocidad en España, que enturbiaron el progreso de las nuevas actualizaciones que trajo a su coche 2024 de Fórmula 1.

                Ferrari aceleró una nueva actualización para el Gran Premio de España en un intento de seguir el ritmo de los claros pasos adelante que sus rivales en la Fórmula 1 han dado en las últimas semanas.

                Y aunque el resultado en Barcelona fue bastante decepcionante, el mensaje que salió de la escudería de Maranello fue que no se debía a que las nuevas piezas no funcionaran, sino al hecho de que se vio frenada por sus históricos problemas de rebote a alta velocidad.

                Estos problemas se pagaron caros en el rápido sector final de la vuelta y, con los márgenes tan estrechos al frente de la parrilla, la caída de posiciones del equipo fue exagerada.

                Los cambios realizados por Ferrari para España son una extensión del concepto ya aplicado al SF-24 en Imola, con un conjunto de optimizaciones para extraer mejor el rendimiento del paso del flujo de aire alrededor de la sección media del coche y su viaje hacia la parte trasera.

                El equipo aplicó estos cambios teniendo en cuenta que debían aumentar el rendimiento, pero no a costa de que volviera a ser un coche difícil de pilotar, como explicó el ingeniero de rendimiento Jock Clear.

                En cuanto a las actualizaciones, hay una nueva carrocería en la parte delantera del sidepod con el fin de aprovechar mejor la nueva disposición de entrada en forma de P.

                El equipo también ha redefinido el corte inferior, que a su vez retroalimenta la cintura y la línea de cintura, que se han elevado más desde el suelo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        \DB::table('noticias_have_categorias')->insert([
            [
                'noticia_fk' => 1,
                'categoria_fk' => 1,
            ],
            [
                'noticia_fk' => 2,
                'categoria_fk' => 1,
            ],
            [
                'noticia_fk' => 3,
                'categoria_fk' => 4,
            ],
            [
                'noticia_fk' => 4,
                'categoria_fk' => 2,
            ]
        ]);
    }
}
