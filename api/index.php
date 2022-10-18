<?php
require './vendor/autoload.php';
 


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Factory\AppFactory;
 
// กำหนด slim instance app
$app = AppFactory::create();
// กำหนด BasePath
// $app->setBasePath('/slim-api/api/index.php'); // กรณีไม่ใช้ .htaccess
$app->setBasePath('/mockup-api/api'); // กรณีมีใช้ .htaccess
/*
 กำหนดไว้ก่อนการกำหนด routing ตัวค่า boolean ทั้ง 3 เป็น parameter ของค่า displayErrorDetails
logErrors และ logErrorDetails โดยตัวแรกเป็นการกำหนดให้แสดงรายละเอียดของ error หรือไม่
อีกสองอัน จะเป็นการกำหนดในส่วนของ log ไฟล์ที่จะให้บันทึก หรือไม่
*/
$app->addErrorMiddleware(true, true, true);


// กำหนด Routing
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});
$app->get('/getCategory', function (Request $request, Response $response, $args) {
        
    // call prototype file
    require 'Prototype.php';
    $obj = new Prototype(); // create object
    $data = $obj->getCategory(); // call func name
    $response->getBody()->write($data);
    return $response;

});
// 
$app->get('/getBannerSlider', function (Request $request, Response $response, $args) {
    // call prototype file
    require 'Prototype.php';
    $obj = new Prototype(); // create object
    $data = $obj->getBannerSlider(); // call func name
    $response->getBody()->write($data);
    return $response;

});
$app->get('/getReviews', function (Request $request, Response $response, $args) {
    // call prototype file
    require 'Prototype.php';
    $obj = new Prototype(); // create object
    
    $data = $obj->getReviews(); // call func name
    $response->getBody()->write($data);
    return $response;
    
});
// Recommended articles
$app->get('/getArticlesRecommended', function (Request $request, Response $response, $args) {
    // call prototype file
    require 'Prototype.php';
    $obj = new Prototype(); // create object
    
    $data = $obj->getArticlesRecommended(); // call func name
    $response->getBody()->write($data);
    return $response;
    
});
// 
$app->get('/getPromotionRecommended', function (Request $request, Response $response, $args) {
    // call prototype file
    require 'Prototype.php';
    $obj = new Prototype(); // create object
    
    $data = $obj->getPromotionRecommended(); // call func name
    $response->getBody()->write($data);
    return $response;
    
});
$app->get('/foo', function (Request $request, Response $response, array $args) {
    $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json');
});
$app->run();