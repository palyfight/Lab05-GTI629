<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Logger;

class LoggerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public static function log($type, $username)
    {   
        $logger = new Logger();
        $logger->type = $type;

        switch ($type) {
            case 'succeed':
                    $logger->event = $username . " successfully logged in";
                break;

            case 'failed':
                    $logger->event = $username . " attempted to login";
                break;
            
            case 'changed':
                    $logger->event = $username . " changed password";
                break;

            default:
                # code...
                break;
        }

        $logger->save();
    }
}
