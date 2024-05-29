<?php
include_once '../version1.php';

//valores de los parametros
$existeId = false;
$valorId = 0;

if (count($_parametros) > 0) {
    foreach ($_parametros as $p) {
        if (strpos($p, 'id') !== false) {
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if ($_version == 'v1') {
    if ($_mantenedor == 'services') {
        switch ($_metodo) {
            case 'GET':
                if ($_header == $_token_get_evaluacion){
                    /*
                    include_once 'controller.php';
                    include_once '../conexion.php';
                    $control = new Controlador();
                    $lista = $control->getAll();
                    */
                    $lista = [
                        [
                            "id" => 1,
                            "titulo" => [
                                "esp" => "Consultoria Digital",
                                "eng" => "Title 1"
                            ],
                            "texto" => [
                                "esp" => "Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.",
                                "eng" => "description 1"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 2 ,
                            "titulo" => [
                                "esp" => "Soluciones multiexperiencia",
                                "eng" => "Title 2"
                            ],
                            "texto" => [
                                "esp" => "Deleitamos a las personas usuarias con experiencias interconectadas a través de aplicaciones web, móviles, interfaces conversacionales, digital twin, IoT y AR. Su arquitectura puede adaptarse y evolucionar para adaptarse a los cambios de tu organización.",
                                "eng" => "description"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 3 ,
                            "titulo" => [
                                "esp" => "Evolución de ecosistemas",
                                "eng" => "Title 3"
                            ],
                            "texto" => [
                                "esp" => "Ayudamos a las empresas a evolucionar y ejecutar sus aplicaciones de forma eficiente, desplegando equipos especializados en la modernización y el mantenimiento de ecosistemas técnicos. Creando soluciones robustas en tecnologías de vanguardia.",
                                "eng" => "description"
                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 4 ,
                            "titulo" => [
                                "esp" => "Soluciones Low-Code",
                                "eng" => "Title 3"
                            ],
                            "texto" => [
                                "esp" => "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.",
                                "eng" => "description"
                            ],
                            "activo" => true
                        ],
                    ];
                    http_response_code(200);
                    echo json_encode(["data" => $lista]);
                }else{
                    http_response_code(401);
                    echo json_encode(["Error" => "No tiene autorizacion GET"]);
                }
                break;
            default:
                http_response_code(405);
                echo json_encode(["Error" => "No implementado"]);
                break;
        }
    }
}