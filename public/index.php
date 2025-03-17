<?php

require "../vendor/autoload.php";

use eftec\bladeone\BladeOne;

$vistas = __DIR__ . '\..\vistas'; // it uses the folder /views to read the templates
$cache = __DIR__ . '\..\cache'; // it uses the folder /cache to compile the result. 

$blade = new BladeOne($vistas, $cache);
$blade->setBaseURL("http://{$_SERVER['SERVER_NAME']}:{$_SERVER['SERVER_PORT']}/");
$blade->pipeEnable = true;

$blade->addAssetDict('js/bootstrap.bundle.min.js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');

$persona = new stdClass();
$persona->nombre = "Luis Rodríguez García";
$persona->codigo = 32323;
// $persona->codigo = null;
$persona->edad = 42;

$cursoFin1 = new stdClass();
$cursoFin1->nombre = "Economía aplicada";
$cursoFin1->area = "Finanzas";
$cursoFin1->horas = 120;
$cursoCon1 = new stdClass();
$cursoCon1->nombre = "Normativa contable";
$cursoCon1->area = "Contabilidad";
$cursoCon1->horas = 140;
$cursoCon2 = new stdClass();
$cursoCon2->nombre = "SAP Contable";
$cursoCon2->area = "Contabilidad";
$cursoCon2->horas = 180;
$cursos = [$cursoFin1, $cursoCon1, $cursoCon2];

// $cursos = [];
//
// echo $blade->run('view');
// echo $blade->run('view-parameters', ['persona' => $persona, 'cursos' => $cursos]);
// echo $blade->run('view-parameters', compact('persona', 'cursos'));
// echo $blade->run('view-parameters-2', compact('persona', 'cursos'));
 $error = false;
 echo $blade->run('view-parameters-3', compact('persona', 'cursos', 'error'));
// echo $blade->run('view-parameters-4', compact('persona', 'cursos'));