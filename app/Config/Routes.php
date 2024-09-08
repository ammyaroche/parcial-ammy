<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//muestra base
$routes->get('ver_autor', 'ControladorAutor::verAutor');
$routes->get('ver_autoli', 'ControladorAutoli::verAutoli');
$routes->get('ver_editorial', 'ControladorEditorial::verEditorial');
$routes->get('ver_libro', 'ControladorLibro::verLibro');
$routes->get('ver_pais', 'ControladorPais::verPais');
//agregar
$routes->post('agregar_libro', 'ControladorAutoli::agregarLibro');
$routes->post('agregar_autor', 'ControladorAutor::agregarAutor');
//eliminar
$routes->get('eliminar_libro/(:num)', 'ControladorAutoli::eliminarLibro/$1');
$routes->get('eliminar_autor/(:num)', 'ControladorAutor::eliminarAutor/$1');
//datos
$routes->get('datos_libro/(:num)', 'ControladorAutoli::verDatosLibro/$1');
$routes->get('datos_autor/(:num)', 'ControladorAutor::verDatosAutor/$1');
//actualizar 
$routes->post('actualizar_libro', 'ControladorAutoli::actualizarLibro');
$routes->post('actualizar_autor', 'ControladorAutor::actualizarAutor');