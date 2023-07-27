<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DetallesVTAController;

//INICIO DE RUTAS DE HOME Y USUARIO (LOG IN Y SING IN)
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/conocenos', [IndexController::class, 'conocenos'])->name('conocenos');
Route::get('/',[UsuarioController::class, 'login'])->name('login');
Route::get('/acceso',[UsuarioController::class, 'acceso'])->name('acceso');
Route::get('/singin',[UsuarioController::class, 'singinView'])->name('singinView');
Route::get('/pdf',[DetallesVTAController::class, 'pdf'])->name('pdf');

// INICIO DE RUTAS DE CLIENTES
Route::get('/cliente',[ClienteController::class, 'index'])->name('index');
Route::post('/cliente',[ClienteController::class, 'create'])->name('create');
Route::get('/leerC',[ClienteController::class, 'consultaClientes'])->name('consultaClientes');
Route::get('/buscarC',[ClienteController::class, 'busquedaCliente'])->name('busquedaCliente');



Route::get('/edit/{id}',[ClienteController::class, 'edita'])->name('edita');
Route::put('/edit/{id}',[ClienteController::class, 'update'])->name('update');
Route::get('/delete/{id}',[ClienteController::class, 'destroy'])->name('destroy');
//FIN DE LAS RUTAS DE CLIENTES

//INICIO DE RUTAS DE CATEGORIAS
Route::get('/categoria',[CategoriaController::class, 'inicioCategoria'])->name('inicioCategoria'); 
Route::post('/categoria',[CategoriaController::class, 'crearCategoria'])->name('crearCategoria');
Route::get('/leerCat',[CategoriaController::class, 'consultaCategoria'])->name('consultaCategoria');
Route::get('/buscarCat',[CategoriaController::class, 'busquedaCategoria'])->name('busquedaCategoria');

Route::get('/editC/{idcat}',[CategoriaController::class, 'edicionCategoria'])->name('edicionCategoria');
Route::put('/editC/{idcat}',[CategoriaController::class, 'actualizaCategoria'])->name('actualizaCategoria');
Route::get('/deleteC/{idcat}',[CategoriaController::class, 'eliminaCategoria'])->name('eliminaCategoria');
//FIN DE LAS RUTAS DE CATEGORIAS

//INICIO DE RUTAS DE PRODUCTOS
Route::get('/producto', [ProductoController::class, 'inicioProducto'])->name('inicioProducto');
Route::post('/producto', [ProductoController::class, 'crearProducto'])->name('crearProducto');
Route::get('/leerP',[ProductoController::class, 'consultaProducto'])->name('consultaProducto');
Route::get('/buscarP',[ProductoController::class, 'busquedaProducto'])->name('busquedaProducto');


Route::get('/editP/{idprod}', [ProductoController::class, 'editarProducto'])->name('editarProducto');
Route::put('/editP/{idprod}', [ProductoController::class, 'actualizaProducto'])->name('actualizaProducto');
Route::get('/deleteP/{idprod}', [ProductoController::class, 'eliminaProducto'])->name('eliminaProducto');
//FIN DE LAS RUTAS DE PRODUCTOS

//INICIO DE LAS RUTAS DE VENTAS
Route::get('/venta', [VentasController::class, 'inicioVenta'])->name('inicioVenta');
Route::post('/venta', [VentasController::class, 'crearVenta'])->name('crearVenta');
Route::get('/leerV',[VentasController::class, 'consultaVentas'])->name('consultaVentas');


Route::get('/editV/{idvta}', [VentasController::class, 'editarVenta'])->name('editarVenta');
Route::put('/editV/{idvta}', [VentasController::class, 'actualizaVenta'])->name('actualizaVenta');
Route::get('/deleteV/{idvta}', [VentasController::class, 'eliminaVenta'])->name('eliminaVenta');
//FIN DE LAS RUTAS DE VENTAS

