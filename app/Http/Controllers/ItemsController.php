<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    function items($name) {
        switch($name) {
            case 'drinks':
                return '{coke:"coke", juice:"juice"}';
                break;
            case 'foods':
                return "[rice, chicken]";
                break;
            default:
                return "[]";
        }
    }
}
