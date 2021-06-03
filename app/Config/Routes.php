<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/registro', 'RegistroController::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/contactenos', 'ContactenosController::index');
$routes->get('/perfiles', 'PerfilesController::index');
$routes->post('/registro', 'RegistroController::addUsuario');
$routes->get('/delete-perfiles', 'PerfilesController::deleteUsuario');	
$routes->get('/update_registro', 'RegistroController::updateUsuario');
$routes->post('/update_registro', 'RegistroController::updateRegistroUsuario');
$routes->post('/login', 'LoginController::login');
$routes->get('/salir', 'AnfitrionController::salir');
$routes->get('/anfitrion', 'AnfitrionController::index');
$routes->post('/anfit-Apartamento', 'AnfitrionController::crearApartamento');
$routes->get('/eliminar-Apartamento', 'AnfitrionController::eliminarApartamento');
$routes->get('/update_Apartamento', 'AnfitrionController::ActualizarApartamento');
$routes->post('/update_Apartamentos', 'AnfitrionController::ActualizarformApartamento');
$routes->post('/filtro_fecha', 'Home::filtarFecha');
$routes->get('/invitado', 'InvitadoController::index');
$routes->get('/salir', 'InvitadoController::salir');
$routes->get('/reserva', 'ReservaController::index');
$routes->post('/reserva_apart', 'ReservaController::addReservas');
$routes->get('/cancelarReserva', 'ReservaController::cancelarReserva');
$routes->get('/historial', 'ReservaController::historial');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
