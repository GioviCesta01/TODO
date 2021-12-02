<?php

use App\Http\Controllers\todocontrolloer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::get("/todos", [todocontrolloer::class,"list"]);
route::get("/todos}{id}", [todocontrolloer::class,"view"]);
route::get("/todos", [todocontrolloer::class,"create"]);
route::get("/todos/tick/{id}", [todocontrolloer::class,"tick"]);