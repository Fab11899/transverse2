<?php
//On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Path: api/request.php
require_once '../src/Entity/DatabaseConnection.php';
require_once '../src/Entity/Grids.php';
require_once '../src/Entity/GridAnswers.php';
require_once '../src/Entity/Api.php';
// endpoint grids
//On liste toutes les grilles
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['endpoint'] === 'grids') {
    $grid = new Api();
    $grids = $grid->readApiGrids();
    $response = ['grids' => $grids, 'status' => 'success', 'code' => 200];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}
// endpoint gridAxes
//On récupère les Axes d'une grille
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['endpoint'] === 'gridAxes') {
    $gridId = (int)$_GET['gridId'] ?? false;
    if ($gridId) {
        $grid = new Api();
        $grid->setApiGridId($gridId);
        $gridScore = $grid->readApiGridPointsByAxe();
        $response = ['gridName' => $gridScore, 'status' => 'success', 'code' => 200];
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }
}
// endpoint gridCategorysByAxes
//On récupère les Axes d'une grille
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['endpoint'] === 'gridCategorysByAxes') {
    $gridId = (int)$_GET['gridId'] ?? false;
    $axeId = (int)$_GET['axeId'] ?? false;
    if ($gridId && $axeId) {
        $grid = new Api();
        $grid->setApiGridId($gridId);
        $grid->setApiAxeId($axeId);
        $gridScore = $grid->readApiGridPointsByCategory();
        $response = ['gridName' => $gridScore, 'status' => 'success', 'code' => 200];
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }
}
// endpoint gridQuestionsByCategorys
//On récupère les questions d'une catégorie
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['endpoint'] === 'gridQuestionsByCategorys') {
    $gridId = (int)$_GET['gridId'] ?? false;
    $axeId = (int)$_GET['axeId'] ?? false;
    $categoryId = (int)$_GET['categoryId'] ?? false;
    if ($gridId && $axeId && $categoryId) {
        $grid = new Api();
        $grid->setApiGridId($gridId);
        $grid->setApiAxeId($axeId);
        $grid->setApiCategoryId($categoryId);
        $gridScore = $grid->readApiGridPointsByQuestion();
        $response = ['gridName' => $gridScore, 'status' => 'success', 'code' => 200];
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }
}
// endpoint gridAnswersByQuestions
//On récupère la réponse d'une catégorie
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['endpoint'] === 'gridAnswersByCategory') {
    $axeId = (int)$_GET['axeId'] ?? false;
    if ($axeId) {
        $grid = new Api();
        $grid->setApiAxeId($axeId);
        $gridScore = $grid->readApiGridAnswersByCategory();
        $response = ['gridName' => $gridScore, 'status' => 'success', 'code' => 200];
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }
}




