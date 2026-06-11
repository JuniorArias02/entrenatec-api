<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tema;

class JuegosYEvaluacionesSeeder extends Seeder
{
    public function run(): void
    {
        // QUIZZES
        
            $tema = Tema::where('slug', 'tecnolog-a-y-sociedad')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Tecnología y sociedad",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Tecnología y sociedad'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Análisis profundo de la simbiosis entre los avances técnicos y los cambios en la vida cotidiana de las personas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Tecnología y sociedad' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Tecnología y sociedad', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'implicaciones-ticas-sociales-y-ambientales')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Implicaciones éticas, sociales y ambientales",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Implicaciones éticas, sociales y ambientales'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El debate moral detrás de cada gran avance y nuestra responsabilidad con el planeta.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Implicaciones éticas, sociales y ambientales' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Implicaciones éticas, sociales y ambientales', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'evaluaci-n-de-procesos-productivos-y-sistemas-tecnol-gicos')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Evaluación de procesos productivos y sistemas tecnológicos",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Evaluación de procesos productivos y sistemas tecnológicos'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Auditoría de cómo se fabrican las cosas y su efecto dominó en las comunidades.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Evaluación de procesos productivos y sistemas tecnológicos' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Evaluación de procesos productivos y sistemas tecnológicos', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'microsoft-office-publisher')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Microsoft Office Publisher",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Microsoft Office Publisher'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Dominio de la herramienta de maquetación para la creación de diseños profesionales y publicidad.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Microsoft Office Publisher' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Microsoft Office Publisher', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 4",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 4 para Décimo.",
                'tema_id' => null,
                'grado_id' => 2,
                'materia_id' => 1,
                'periodo_id' => 4,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Microsoft Office Publisher'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Dominio de la herramienta de maquetación para la creación de diseños profesionales y publicidad.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Tecnología y sociedad'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Análisis profundo de la simbiosis entre los avances técnicos y los cambios en la vida cotidiana de las personas.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Implicaciones éticas, sociales y ambientales'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "El debate moral detrás de cada gran avance y nuestra responsabilidad con el planeta.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Evaluación de procesos productivos y sistemas tecnológicos'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Auditoría de cómo se fabrican las cosas y su efecto dominó en las comunidades.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'evoluci-n-de-la-tecnolog-a')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Evolución de la tecnología",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Evolución de la tecnología'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Cómo ha evolucionado la tecnología a través del tiempo, su impacto en la sociedad y en diferentes épocas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Evolución de la tecnología' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Evolución de la tecnología', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'herramientas-ofim-ticas-microsoft-word')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Herramientas ofimáticas — Microsoft Word",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Herramientas ofimáticas — Microsoft Word'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Uso avanzado del procesador de texto para la creación de documentos profesionales.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Herramientas ofimáticas — Microsoft Word' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Herramientas ofimáticas — Microsoft Word', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'transferencia-tecnol-gica')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Transferencia tecnológica",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Transferencia tecnológica'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El proceso mediante el cual las innovaciones fluyen desde los laboratorios hasta la sociedad.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Transferencia tecnológica' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Transferencia tecnológica', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'relaci-n-entre-tecnolog-a-ciencia-y-matem-ticas')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Relación entre tecnología, ciencia y matemáticas",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Relación entre tecnología, ciencia y matemáticas'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Cómo el trabajo interdisciplinario es el verdadero motor del progreso.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Relación entre tecnología, ciencia y matemáticas' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Relación entre tecnología, ciencia y matemáticas', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 1",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 1 para Décimo.",
                'tema_id' => null,
                'grado_id' => 2,
                'materia_id' => 1,
                'periodo_id' => 1,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Relación entre tecnología, ciencia y matemáticas'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Cómo el trabajo interdisciplinario es el verdadero motor del progreso.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Evolución de la tecnología'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Cómo ha evolucionado la tecnología a través del tiempo, su impacto en la sociedad y en diferentes épocas.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Herramientas ofimáticas — Microsoft Word'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Uso avanzado del procesador de texto para la creación de documentos profesionales.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Transferencia tecnológica'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "El proceso mediante el cual las innovaciones fluyen desde los laboratorios hasta la sociedad.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'soluci-n-de-problemas-tecnol-gicos')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Solución de problemas tecnológicos",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Solución de problemas tecnológicos'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Desarrollo de habilidades para identificar y resolver problemas reales usando la tecnología bajo condiciones y restricciones específicas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Solución de problemas tecnológicos' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Solución de problemas tecnológicos', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'introducci-n-al-lenguaje-html')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Introducción al lenguaje HTML",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Introducción al lenguaje HTML'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Conceptos, estructura e importancia del lenguaje base que da vida a toda la World Wide Web.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Introducción al lenguaje HTML' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Introducción al lenguaje HTML', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'uso-de-la-tecnolog-a-en-la-creaci-n-de-p-ginas-web')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Uso de la tecnología en la creación de páginas web",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Uso de la tecnología en la creación de páginas web'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Las herramientas modernas, el diseño web básico y su impacto educativo y comercial en la actualidad.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Uso de la tecnología en la creación de páginas web' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Uso de la tecnología en la creación de páginas web', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'reconocimiento-y-manejo-del-lenguaje-html')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Reconocimiento y manejo del lenguaje HTML",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Reconocimiento y manejo del lenguaje HTML'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Aplicación práctica: inserción de multimedia, listas, tablas y organización avanzada de contenidos.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Reconocimiento y manejo del lenguaje HTML' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Reconocimiento y manejo del lenguaje HTML', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'fallas-en-sistemas-tecnol-gicos')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Fallas en sistemas tecnológicos",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Fallas en sistemas tecnológicos'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Diagnóstico, formulación de hipótesis y mantenimiento preventivo ante errores técnicos y de software.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Fallas en sistemas tecnológicos' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Fallas en sistemas tecnológicos', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 3",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 3 para Décimo.",
                'tema_id' => null,
                'grado_id' => 2,
                'materia_id' => 1,
                'periodo_id' => 3,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Fallas en sistemas tecnológicos'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Diagnóstico, formulación de hipótesis y mantenimiento preventivo ante errores técnicos y de software.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Uso de la tecnología en la creación de páginas web'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Las herramientas modernas, el diseño web básico y su impacto educativo y comercial en la actualidad.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Introducción al lenguaje HTML'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Conceptos, estructura e importancia del lenguaje base que da vida a toda la World Wide Web.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Solución de problemas tecnológicos'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Desarrollo de habilidades para identificar y resolver problemas reales usando la tecnología bajo condiciones y restricciones específicas.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Reconocimiento y manejo del lenguaje HTML'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 5,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Aplicación práctica: inserción de multimedia, listas, tablas y organización avanzada de contenidos.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'competencias-y-est-ndares-de-soluci-n')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Competencias y Estándares de Solución",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Competencias y Estándares de Solución'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El marco metodológico para enfrentar problemas y fallas en sistemas tecnológicos.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Competencias y Estándares de Solución' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Competencias y Estándares de Solución', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'optimizaci-n-e-innovaci-n')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Optimización e Innovación",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Optimización e Innovación'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Cómo llevar una solución funcional al siguiente nivel de eficiencia.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Optimización e Innovación' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Optimización e Innovación', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'm-todo-de-prueba-y-descarte')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Método de Prueba y Descarte",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Método de Prueba y Descarte'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El arte del diagnóstico técnico sistemático.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Método de Prueba y Descarte' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Método de Prueba y Descarte', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'dise-o-centrado-en-lo-humano')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Diseño Centrado en lo Humano",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Diseño Centrado en lo Humano'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Antropometría, ergonomía y responsabilidad integral en el diseño.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Diseño Centrado en lo Humano' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Diseño Centrado en lo Humano', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 3",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 3 para Once.",
                'tema_id' => null,
                'grado_id' => 3,
                'materia_id' => 1,
                'periodo_id' => 3,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Diseño Centrado en lo Humano'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Antropometría, ergonomía y responsabilidad integral en el diseño.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Método de Prueba y Descarte'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "El arte del diagnóstico técnico sistemático.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Competencias y Estándares de Solución'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "El marco metodológico para enfrentar problemas y fallas en sistemas tecnológicos.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Optimización e Innovación'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Cómo llevar una solución funcional al siguiente nivel de eficiencia.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'c-mo-la-tecnolog-a-ayuda-a-resolver-problemas')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Cómo la tecnología ayuda a resolver problemas",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Cómo la tecnología ayuda a resolver problemas'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Identificar el rol fundamental de la tecnología como herramienta para facilitar la vida humana.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Cómo la tecnología ayuda a resolver problemas' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Cómo la tecnología ayuda a resolver problemas', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'programaci-n-b-sica')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Programación básica",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Programación básica'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El lenguaje que nos permite dar instrucciones a las máquinas para automatizar tareas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Programación básica' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Programación básica', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'rob-tica-y-automatizaci-n')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Robótica y automatización",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Robótica y automatización'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "La integración de la mecánica, electrónica y programación para crear máquinas autónomas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Robótica y automatización' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Robótica y automatización', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'dise-o-de-soluciones-tecnol-gicas')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Diseño de soluciones tecnológicas",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Diseño de soluciones tecnológicas'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El paso a paso para pasar de una idea a un prototipo funcional.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Diseño de soluciones tecnológicas' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Diseño de soluciones tecnológicas', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'innovaci-n-y-creatividad')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Innovación y creatividad",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Innovación y creatividad'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Por qué pensar fuera de la caja es la habilidad más importante del futuro.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Innovación y creatividad' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Innovación y creatividad', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'ejemplos-de-problemas-cotidianos-solucionados-con-tecnolog-a')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Ejemplos de problemas cotidianos solucionados con tecnología",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Ejemplos de problemas cotidianos solucionados con tecnología'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Casos de éxito reales donde la tecnología ha hecho del mundo un lugar más fácil para vivir.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Ejemplos de problemas cotidianos solucionados con tecnología' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Ejemplos de problemas cotidianos solucionados con tecnología', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 3",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 3 para Noveno.",
                'tema_id' => null,
                'grado_id' => 1,
                'materia_id' => 1,
                'periodo_id' => 3,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Innovación y creatividad'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Por qué pensar fuera de la caja es la habilidad más importante del futuro.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Diseño de soluciones tecnológicas'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "El paso a paso para pasar de una idea a un prototipo funcional.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Ejemplos de problemas cotidianos solucionados con tecnología'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Casos de éxito reales donde la tecnología ha hecho del mundo un lugar más fácil para vivir.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Robótica y automatización'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "La integración de la mecánica, electrónica y programación para crear máquinas autónomas.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Cómo la tecnología ayuda a resolver problemas'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 5,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Identificar el rol fundamental de la tecnología como herramienta para facilitar la vida humana.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'uso-responsable-de-dispositivos-tecnol-gicos')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Uso responsable de dispositivos tecnológicos",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Uso responsable de dispositivos tecnológicos'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Aprender a usar la tecnología a nuestro favor sin que ella nos controle.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Uso responsable de dispositivos tecnológicos' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Uso responsable de dispositivos tecnológicos', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'herramientas-digitales-en-la-educaci-n')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Herramientas digitales en la educación",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Herramientas digitales en la educación'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Cómo aprovechar el internet y el software para potenciar el aprendizaje.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Herramientas digitales en la educación' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Herramientas digitales en la educación', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'seguridad-en-internet')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Seguridad en internet",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Seguridad en internet'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Protege tu información y privacidad en el vasto mundo del ciberespacio.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Seguridad en internet' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Seguridad en internet', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'redes-sociales-y-su-buen-uso')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Redes sociales y su buen uso",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Redes sociales y su buen uso'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Construyendo relaciones positivas y seguras en plataformas digitales.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Redes sociales y su buen uso' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Redes sociales y su buen uso', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'ventajas-y-desventajas-de-la-tecnolog-a')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Ventajas y desventajas de la tecnología",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Ventajas y desventajas de la tecnología'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Análisis crítico para entender que la tecnología es un arma de doble filo.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Ventajas y desventajas de la tecnología' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Ventajas y desventajas de la tecnología', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'ciudadan-a-digital')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Ciudadanía digital",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Ciudadanía digital'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Nuestros derechos y deberes como habitantes del mundo virtual.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Ciudadanía digital' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Ciudadanía digital', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 2",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 2 para Noveno.",
                'tema_id' => null,
                'grado_id' => 1,
                'materia_id' => 1,
                'periodo_id' => 2,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Herramientas digitales en la educación'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Cómo aprovechar el internet y el software para potenciar el aprendizaje.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Uso responsable de dispositivos tecnológicos'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Aprender a usar la tecnología a nuestro favor sin que ella nos controle.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Seguridad en internet'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Protege tu información y privacidad en el vasto mundo del ciberespacio.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Ciudadanía digital'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Nuestros derechos y deberes como habitantes del mundo virtual.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Redes sociales y su buen uso'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 5,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Construyendo relaciones positivas y seguras en plataformas digitales.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'qu-es-la-tecnolog-a')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: ¿Qué es la tecnología?",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema '¿Qué es la tecnología?'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Conceptos básicos sobre la tecnología, su propósito y cómo resuelve problemas humanos a lo largo de la historia.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de '¿Qué es la tecnología?' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar '¿Qué es la tecnología?', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'historia-y-evoluci-n-de-la-tecnolog-a')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Historia y evolución de la tecnología",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Historia y evolución de la tecnología'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Un recorrido cronológico desde las herramientas de piedra hasta la era digital y la inteligencia artificial.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Historia y evolución de la tecnología' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Historia y evolución de la tecnología', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'inventos-que-cambiaron-el-mundo')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Inventos que cambiaron el mundo",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Inventos que cambiaron el mundo'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Exploración a fondo de los inventos clave que alteraron permanentemente el curso de la civilización.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Inventos que cambiaron el mundo' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Inventos que cambiaron el mundo', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'diferencia-entre-ciencia-t-cnica-y-tecnolog-a')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Diferencia entre ciencia, técnica y tecnología",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Diferencia entre ciencia, técnica y tecnología'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Aclarando conceptos: la ciencia estudia para saber, la técnica es el saber hacer, y la tecnología aplica ambas para crear.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Diferencia entre ciencia, técnica y tecnología' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Diferencia entre ciencia, técnica y tecnología', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'evoluci-n-de-medios-de-comunicaci-n-y-transporte')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Evolución de medios de comunicación y transporte",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Evolución de medios de comunicación y transporte'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Cómo la humanidad logró acortar las distancias físicas e informativas, conectando al mundo entero.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Evolución de medios de comunicación y transporte' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Evolución de medios de comunicación y transporte', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'impacto-de-la-tecnolog-a-en-la-vida-diaria')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Impacto de la tecnología en la vida diaria",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Impacto de la tecnología en la vida diaria'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Un análisis crítico sobre las luces y sombras de vivir en una sociedad hipertecnológica.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Impacto de la tecnología en la vida diaria' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Impacto de la tecnología en la vida diaria', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 1",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 1 para Noveno.",
                'tema_id' => null,
                'grado_id' => 1,
                'materia_id' => 1,
                'periodo_id' => 1,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Impacto de la tecnología en la vida diaria'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Un análisis crítico sobre las luces y sombras de vivir en una sociedad hipertecnológica.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Historia y evolución de la tecnología'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Un recorrido cronológico desde las herramientas de piedra hasta la era digital y la inteligencia artificial.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Evolución de medios de comunicación y transporte'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Cómo la humanidad logró acortar las distancias físicas e informativas, conectando al mundo entero.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema '¿Qué es la tecnología?'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Conceptos básicos sobre la tecnología, su propósito y cómo resuelve problemas humanos a lo largo de la historia.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Diferencia entre ciencia, técnica y tecnología'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 5,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Aclarando conceptos: la ciencia estudia para saber, la técnica es el saber hacer, y la tecnología aplica ambas para crear.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'tica-salud-y-entorno')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Ética, Salud y Entorno",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Ética, Salud y Entorno'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Reflexión profunda sobre las implicaciones sociales de la tecnología moderna.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Ética, Salud y Entorno' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Ética, Salud y Entorno', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'herramientas-ofim-ticas-para-el-mundo-laboral')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Herramientas Ofimáticas para el Mundo Laboral",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Herramientas Ofimáticas para el Mundo Laboral'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El uso avanzado de hojas de cálculo como ventaja competitiva en empresas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Herramientas Ofimáticas para el Mundo Laboral' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Herramientas Ofimáticas para el Mundo Laboral', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'auditor-a-de-datos-control-de-errores')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Auditoría de Datos: Control de Errores",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Auditoría de Datos: Control de Errores'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Interpretación y solución de códigos de error estándar en hojas de cálculo.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Auditoría de Datos: Control de Errores' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Auditoría de Datos: Control de Errores', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'proyecto-final-pr-ctica-empresarial')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Proyecto Final: Práctica Empresarial",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Proyecto Final: Práctica Empresarial'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Demostración integral de competencias ofimáticas aplicadas a un entorno real.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Proyecto Final: Práctica Empresarial' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Proyecto Final: Práctica Empresarial', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 4",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 4 para Once.",
                'tema_id' => null,
                'grado_id' => 3,
                'materia_id' => 1,
                'periodo_id' => 4,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Proyecto Final: Práctica Empresarial'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Demostración integral de competencias ofimáticas aplicadas a un entorno real.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Herramientas Ofimáticas para el Mundo Laboral'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "El uso avanzado de hojas de cálculo como ventaja competitiva en empresas.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Ética, Salud y Entorno'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Reflexión profunda sobre las implicaciones sociales de la tecnología moderna.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Auditoría de Datos: Control de Errores'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Interpretación y solución de códigos de error estándar en hojas de cálculo.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'impacto-de-la-tecnolog-a-en-la-sociedad')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Impacto de la tecnología en la sociedad",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Impacto de la tecnología en la sociedad'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Análisis de cómo las invenciones moldean la cultura, la economía y las dinámicas sociales.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Impacto de la tecnología en la sociedad' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Impacto de la tecnología en la sociedad', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'tecnolog-a-y-medio-ambiente')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Tecnología y medio ambiente",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Tecnología y medio ambiente'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "La paradoja tecnológica: destruir el ecosistema y al mismo tiempo ser nuestra única salvación.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Tecnología y medio ambiente' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Tecnología y medio ambiente', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'cambios-en-la-comunicaci-n-y-el-trabajo')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Cambios en la comunicación y el trabajo",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Cambios en la comunicación y el trabajo'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Del horario fijo a la oficina global: el teletrabajo y la economía digital.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Cambios en la comunicación y el trabajo' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Cambios en la comunicación y el trabajo', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'inteligencia-artificial-y-futuro')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Inteligencia artificial y futuro",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Inteligencia artificial y futuro'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El impacto de las máquinas que aprenden por sí mismas en nuestro día a día.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Inteligencia artificial y futuro' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Inteligencia artificial y futuro', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'dependencia-tecnol-gica')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Dependencia tecnológica",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Dependencia tecnológica'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Cuando la herramienta se vuelve una extensión obligatoria de nuestro cuerpo.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Dependencia tecnológica' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Dependencia tecnológica', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'tica-y-tecnolog-a')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Ética y tecnología",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Ética y tecnología'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Los límites morales en la era digital: desde la privacidad hasta los derechos de las máquinas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Ética y tecnología' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Ética y tecnología', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 4",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 4 para Noveno.",
                'tema_id' => null,
                'grado_id' => 1,
                'materia_id' => 1,
                'periodo_id' => 4,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Cambios en la comunicación y el trabajo'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Del horario fijo a la oficina global: el teletrabajo y la economía digital.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Dependencia tecnológica'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Cuando la herramienta se vuelve una extensión obligatoria de nuestro cuerpo.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Tecnología y medio ambiente'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "La paradoja tecnológica: destruir el ecosistema y al mismo tiempo ser nuestra única salvación.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Inteligencia artificial y futuro'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "El impacto de las máquinas que aprenden por sí mismas en nuestro día a día.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Ética y tecnología'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 5,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Los límites morales en la era digital: desde la privacidad hasta los derechos de las máquinas.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'uso-eficiente-y-seguro-de-la-tecnolog-a')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Uso eficiente y seguro de la tecnología",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Uso eficiente y seguro de la tecnología'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Cómo utilizar la tecnología de manera segura, responsable y eficiente en diferentes espacios.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Uso eficiente y seguro de la tecnología' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Uso eficiente y seguro de la tecnología', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'normas-de-seguridad-industrial')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Normas de seguridad industrial",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Normas de seguridad industrial'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Fundamentos y protocolos para prevenir accidentes en talleres y entornos tecnológicos.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Normas de seguridad industrial' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Normas de seguridad industrial', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'manejo-de-datos-en-excel')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Manejo de datos en Excel",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Manejo de datos en Excel'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Aprende a dominar las hojas de cálculo para organizar, analizar y visualizar información estadística.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Manejo de datos en Excel' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Manejo de datos en Excel', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'interpretaci-n-de-manuales-y-diagramas')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Interpretación de manuales y diagramas",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Interpretación de manuales y diagramas'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El lenguaje técnico: cómo leer planos, instrucciones y esquemas de forma profesional.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Interpretación de manuales y diagramas' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Interpretación de manuales y diagramas', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'construcci-n-de-modelos-maquetas-y-prototipos')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Construcción de modelos, maquetas y prototipos",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Construcción de modelos, maquetas y prototipos'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "El proceso creativo de llevar las ideas del papel al plano tridimensional funcional.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Construcción de modelos, maquetas y prototipos' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Construcción de modelos, maquetas y prototipos', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 2",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 2 para Décimo.",
                'tema_id' => null,
                'grado_id' => 2,
                'materia_id' => 1,
                'periodo_id' => 2,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Construcción de modelos, maquetas y prototipos'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "El proceso creativo de llevar las ideas del papel al plano tridimensional funcional.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Normas de seguridad industrial'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Fundamentos y protocolos para prevenir accidentes en talleres y entornos tecnológicos.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Uso eficiente y seguro de la tecnología'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Cómo utilizar la tecnología de manera segura, responsable y eficiente en diferentes espacios.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Manejo de datos en Excel'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Aprende a dominar las hojas de cálculo para organizar, analizar y visualizar información estadística.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Interpretación de manuales y diagramas'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 5,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "El lenguaje técnico: cómo leer planos, instrucciones y esquemas de forma profesional.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'innovaci-n-y-transferencia-tecnol-gica')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Innovación y Transferencia Tecnológica",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Innovación y Transferencia Tecnológica'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Análisis profundo de cómo la investigación y la experimentación resuelven problemas reales.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Innovación y Transferencia Tecnológica' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Innovación y Transferencia Tecnológica', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'desarrollo-web-intermedio-estructuras-y-multimedia')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Desarrollo Web Intermedio: Estructuras y Multimedia",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Desarrollo Web Intermedio: Estructuras y Multimedia'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Dominio de etiquetas para organizar contenido avanzado y visualizar datos en la web.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Desarrollo Web Intermedio: Estructuras y Multimedia' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Desarrollo Web Intermedio: Estructuras y Multimedia', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'navegaci-n-e-interactividad-enlaces-y-formularios')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Navegación e Interactividad: Enlaces y Formularios",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Navegación e Interactividad: Enlaces y Formularios'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Conectando la web y recolectando información de los usuarios.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Navegación e Interactividad: Enlaces y Formularios' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Navegación e Interactividad: Enlaces y Formularios', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'evidencias-y-proyecto-final')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Evidencias y Proyecto Final",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Evidencias y Proyecto Final'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Demostración de los aprendizajes adquiridos a lo largo del periodo.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Evidencias y Proyecto Final' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Evidencias y Proyecto Final', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 1",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 1 para Once.",
                'tema_id' => null,
                'grado_id' => 3,
                'materia_id' => 1,
                'periodo_id' => 1,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Evidencias y Proyecto Final'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Demostración de los aprendizajes adquiridos a lo largo del periodo.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Desarrollo Web Intermedio: Estructuras y Multimedia'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Dominio de etiquetas para organizar contenido avanzado y visualizar datos en la web.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Innovación y Transferencia Tecnológica'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Análisis profundo de cómo la investigación y la experimentación resuelven problemas reales.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Navegación e Interactividad: Enlaces y Formularios'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Conectando la web y recolectando información de los usuarios.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $tema = Tema::where('slug', 'apropiaci-n-y-uso-eficiente')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Apropiación y Uso Eficiente",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Apropiación y Uso Eficiente'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Principios fundamentales para la selección y utilización segura de sistemas y herramientas tecnológicas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Apropiación y Uso Eficiente' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Apropiación y Uso Eficiente', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'anatom-a-del-computador-hardware-interno')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Anatomía del Computador: Hardware Interno",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Anatomía del Computador: Hardware Interno'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Identificación y función de los componentes vitales que hacen que una computadora cobre vida.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Anatomía del Computador: Hardware Interno' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Anatomía del Computador: Hardware Interno', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'conceptos-generales-sobre-electr-nica')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Conceptos Generales sobre Electrónica",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Conceptos Generales sobre Electrónica'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Los fundamentos físicos que permiten la existencia de la tecnología digital.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Conceptos Generales sobre Electrónica' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Conceptos Generales sobre Electrónica', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $tema = Tema::where('slug', 'mantenimiento-y-resoluci-n-de-fallas')->first();
            if ($tema) {
                $quizId = DB::table('quizzes')->insertGetId([
                    'titulo' => "Evaluación: Mantenimiento y Resolución de Fallas",
                    'descripcion' => 'Evaluación para verificar los conocimientos adquiridos en el tema.',
                    'tema_id' => $tema->id,
                    'grado_id' => null,
                    'materia_id' => null,
                    'periodo_id' => null,
                    'tiempo_limite' => 15,
                    'puntaje_aprobacion' => 60,
                    'intentos_maximos' => 3,
                    'estado' => 'PUBLICADO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "¿Cuál es el enfoque principal del tema 'Mantenimiento y Resolución de Fallas'?",
                    'tipo' => 'OPCION_MULTIPLE',
                    'puntaje' => 10,
                    'orden' => 1,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Troubleshooting en la vida real: Diagnóstico y reparación de problemas comunes.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "No tiene relevancia en la actualidad.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "El concepto de 'Mantenimiento y Resolución de Fallas' ha transformado la forma en que interactuamos con nuestro entorno.",
                    'tipo' => 'VERDADERO_FALSO',
                    'puntaje' => 10,
                    'orden' => 2,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Verdadero",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Falso",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                    'quiz_id' => $quizId,
                    'pregunta' => "Al estudiar 'Mantenimiento y Resolución de Fallas', uno de los principales beneficios es:",
                    'tipo' => 'SELECCION_UNICA',
                    'puntaje' => 10,
                    'orden' => 3,
                    'created_at' => now()
                ]);
                
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Comprender su evolución y aplicaciones modernas.",
                    'es_correcta' => true,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Ignorar el avance de la tecnología.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
                DB::table('quiz_respuestas')->insert([
                    'pregunta_id' => $preguntaId,
                    'respuesta' => "Evitar el uso de herramientas digitales.",
                    'es_correcta' => false,
                    'created_at' => now()
                ]);
                    
            }
            $quizPeriodoId = DB::table('quizzes')->insertGetId([
                'titulo' => "Evaluación del Periodo 2",
                'descripcion' => "Evaluación general de todos los temas vistos en el periodo 2 para Once.",
                'tema_id' => null,
                'grado_id' => 3,
                'materia_id' => 1,
                'periodo_id' => 2,
                'tiempo_limite' => 30,
                'puntaje_aprobacion' => 70,
                'intentos_maximos' => 2,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Apropiación y Uso Eficiente'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 1,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Principios fundamentales para la selección y utilización segura de sistemas y herramientas tecnológicas.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Conceptos Generales sobre Electrónica'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 2,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Los fundamentos físicos que permiten la existencia de la tecnología digital.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Mantenimiento y Resolución de Fallas'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 3,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Troubleshooting en la vida real: Diagnóstico y reparación de problemas comunes.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            $preguntaId = DB::table('quiz_preguntas')->insertGetId([
                'quiz_id' => $quizPeriodoId,
                'pregunta' => "¿Cuál es el enfoque principal del tema 'Anatomía del Computador: Hardware Interno'?",
                'tipo' => 'OPCION_MULTIPLE',
                'puntaje' => 20,
                'orden' => 4,
                'created_at' => now()
            ]);
            
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Identificación y función de los componentes vitales que hacen que una computadora cobre vida.",
                'es_correcta' => true,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "No tiene relevancia en la actualidad.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Es un tema exclusivamente teórico sin aplicación.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
            DB::table('quiz_respuestas')->insert([
                'pregunta_id' => $preguntaId,
                'respuesta' => "Se enfoca únicamente en el uso de hardware obsoleto.",
                'es_correcta' => false,
                'created_at' => now()
            ]);
                
        
        // SOPAS DE LETRAS
        
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 4",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 4.",
                'tema_id' => null,
                'grado_id' => 2,
                'materia_id' => 1,
                'periodo_id' => 4,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "SIMBIOSIS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "AVANCE",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PERSONAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "DOMINIO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "COSAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "HERRAMIENTA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "MAQUETACIÓN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "CAMBIOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "COTIDIANA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "MORAL",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 1",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 1.",
                'tema_id' => null,
                'grado_id' => 2,
                'materia_id' => 1,
                'periodo_id' => 1,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PROCESO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "LABORATORIOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "TRABAJO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "FLUYEN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PROGRESO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "SOCIEDAD",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "EVOLUCIONADO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "MEDIANTE",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "DOCUMENTOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ÉPOCAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 3",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 3.",
                'tema_id' => null,
                'grado_id' => 2,
                'materia_id' => 1,
                'periodo_id' => 3,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "TÉCNICOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "WORLD",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ORGANIZACIÓN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "DIAGNÓSTICO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "COMERCIAL",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "RESOLVER",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "IDENTIFICAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "HABILIDADES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "EDUCATIVO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "TABLAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 3",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 3.",
                'tema_id' => null,
                'grado_id' => 3,
                'materia_id' => 1,
                'periodo_id' => 3,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "NIVEL",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ENFRENTAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "MARCO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "SOLUCIÓN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "SISTEMAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "DIAGNÓSTICO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "TECNOLÓGICOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "LLEVAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PROBLEMAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "DISEÑO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 3",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 3.",
                'tema_id' => null,
                'grado_id' => 1,
                'materia_id' => 1,
                'periodo_id' => 3,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "FUNCIONAL",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "REALES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "MÁQUINAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "FÁCIL",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PENSAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PERMITE",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "CREAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "MUNDO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "VIVIR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "IMPORTANTE",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 2",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 2.",
                'tema_id' => null,
                'grado_id' => 1,
                'materia_id' => 1,
                'periodo_id' => 2,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "POTENCIAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "HABITANTES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "DIGITALES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "CONTROLE",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PRIVACIDAD",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "INTERNET",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "SOFTWARE",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "MUNDO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PLATAFORMAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "CRÍTICO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 1",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 1.",
                'tema_id' => null,
                'grado_id' => 1,
                'materia_id' => 1,
                'periodo_id' => 1,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "HACER",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "SOBRE",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "TÉCNICA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "LOGRÓ",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PIEDRA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "INVENTOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "INFORMATIVAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "TECNOLOGÍA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "LUCES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PROBLEMAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 4",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 4.",
                'tema_id' => null,
                'grado_id' => 3,
                'materia_id' => 1,
                'periodo_id' => 4,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PROFUNDA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "VENTAJA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "TECNOLOGÍA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "HOJAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ENTORNO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "COMPETENCIAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "INTEGRAL",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "CÁLCULO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "AVANZADO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ESTÁNDAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 4",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 4.",
                'tema_id' => null,
                'grado_id' => 1,
                'materia_id' => 1,
                'periodo_id' => 4,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ÚNICA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "DIGITAL",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "EXTENSIÓN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ECONOMÍA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "OBLIGATORIA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "MISMO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "APRENDEN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PARADOJA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "VUELVE",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ANÁLISIS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 2",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 2.",
                'tema_id' => null,
                'grado_id' => 2,
                'materia_id' => 1,
                'periodo_id' => 2,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PROFESIONAL",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "IDEAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ENTORNOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "DIFERENTES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ANALIZAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PLANO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "HOJAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "CÁLCULO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ESTADÍSTICA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PROTOCOLOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 1",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 1.",
                'tema_id' => null,
                'grado_id' => 3,
                'materia_id' => 1,
                'periodo_id' => 1,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "DATOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "REALES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "VISUALIZAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "USUARIOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PERIODO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "INFORMACIÓN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "APRENDIZAJES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "LARGO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "ORGANIZAR",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PROFUNDO",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            $sopaId = DB::table('sopa_letras')->insertGetId([
                'titulo' => "Sopa de Letras - Periodo 2",
                'descripcion' => "Encuentra las palabras clave aprendidas durante el periodo 2.",
                'tema_id' => null,
                'grado_id' => 3,
                'materia_id' => 1,
                'periodo_id' => 2,
                'tiempo_limite' => 300,
                'puntaje_total' => 100,
                'estado' => 'PUBLICADO',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "FUNCIÓN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "REPARACIÓN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "FUNDAMENTOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "COBRE",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "VITALES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PRINCIPIOS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "TECNOLÓGICAS",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "EXISTENCIA",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "COMPONENTES",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            DB::table('sopa_letras_palabras')->insert([
                'sopa_letras_id' => $sopaId,
                'palabra' => "PERMITEN",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
        
        $this->command->info('✅ Quizzes, Evaluaciones de Periodo y Sopas de Letras generados exitosamente.');
    }
}
