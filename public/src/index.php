<?php

require "../../vendor/autoload.php";

use eftec\bladeone\BladeOne;

$views = __DIR__ . '\..\..\views'; // it uses the folder /views to read the templates
$cache = __DIR__ . '\..\..\cache'; // it uses the folder /cache to compile the result. 

$blade = new BladeOne($views, $cache);
$blade->setBaseURL("http://{$_SERVER['SERVER_NAME']}:{$_SERVER['SERVER_PORT']}/");
$blade->pipeEnable = true;

$blade->addAssetDict('js/bootstrap.bundle.min.js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

//echo $blade->run('view');

$persona = new stdClass();
$persona->nombre = "Luis Rodríguez García";
$persona->codigo = 33232;
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
// echo $blade->run('view-parameters', compact('persona', 'cursos'));
// echo $blade->run('view-parameters-2', compact('persona', 'cursos'));
$error = false;
echo $blade->run('view-parameters-3', compact('persona', 'cursos', 'error'));

// echo $blade->setView('view-parameters-3')->shared(['persona' => $persona])->run();


