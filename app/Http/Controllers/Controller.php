<?php namespace Demux\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Orchestra\Routing\Controller as BaseController;
use Orchestra\Routing\Traits\ControllerResponseTrait;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use ControllerResponseTrait, DispatchesCommands, ValidatesRequests;
}
