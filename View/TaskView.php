<?php
    class TaskView{

        function __construct()
        {
            
        }


        function showTasks($tasks){
            $html = '<!DOCTYPE html>
                <html lang="en">
                
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Lista de tareas</title>
                    <base href="' . BASE_URL . '" />
                </head>
                
                <body>
        
                    <h1>Tareas 2021</h1>
                
                    <ul>';





        foreach ($tasks as $tarea) {
            if ($tarea->finalizada == 1) {
                $html .= '<li> <strike>' . $tarea->titulo . ': ' . $tarea->descripcion . ' - ' . '<a href="deleteTask/' . $tarea->id_tarea . '">Borrar</a>' . ' - ' . '<a href="updateTask/' . $tarea->id_tarea . '">Done</a>' . '</strike></li>';
            } else {

                $html .= '<li><a href="viewTask/' . $tarea->id_tarea . '">' . $tarea->titulo . '</a>: ' . $tarea->descripcion . ' - ' . '<a href="deleteTask/' . $tarea->id_tarea . '">Borrar</a>' . ' - ' . '<a href="updateTask/' . $tarea->id_tarea . '">Done</a>' . '</li>';
            }

            //1:58 
        }


        $html .=    '
                    </ul>
                
                
                    <form action="createTask" method="post">
                        <input type="text" name="title" id="title">
                        <input type="text" name="description" id="description">
                        <input type="number" name="priority" id="priority">
                        <input type="checkbox" name="done" id="done">
                        <input type="submit" value="Guardar">
                
                
                
                
                    </form>
                </body>
                
                </html>';

        echo $html;
        }

        function showHomeLocation(){
            header("Location: ".BASE_URL."home");   
        }

        function showTask($tarea){
            echo '<!DOCTYPE html>
         <html lang="en">
         
         <head>
             <meta charset="UTF-8">
             <meta http-equiv="X-UA-Compatible" content="IE=edge">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <title>Lista de tareas</title>
             <base href="'.BASE_URL.'" />
         </head>
         
         <body>
 
             <h1>'.$tarea->titulo.'</h1>
             <h2>'.$tarea->descripcion.'</h2>
             <h2>'.$tarea->prioridad.'</h2>
             <h2>'.$tarea->finalizada .'</h2>
             </body>
             </html>';


        }
    }