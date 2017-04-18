<?php

use Isinlor\Form\Form\Attributes;
use Isinlor\Form\Form\Form;
use Isinlor\Form\Form\Input;
use Isinlor\Form\Form\Inputs;
use Isinlor\Form\Model\Task;

require __DIR__ . '/../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');

$twig = new Twig_Environment($loader, [
    'debug' => true
]);

$twig->addExtension(new Twig_Extension_Debug());

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $task = new Task($_POST['label']);

    var_dump($task);

}

$form = new Form(new Attributes(['method' => 'post']), new Inputs([

    new Input(new Attributes(['type' => 'text', 'name' => 'label'])),
    new Input(new Attributes(['type' => 'submit', 'value' => 'save']))

]));

echo $twig->render('example.html.twig', ['form' => $form]);