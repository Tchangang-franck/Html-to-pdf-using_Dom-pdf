<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\User;

class PdfGeneratorController extends Controller
{
    //
    public  function pdfMaker(){
        $users=User::all();

        $data=[
            'title'=>'Welcome To coding with Franck',
            'date'=>date(format:'m/d/y'),
            'users'=>$users
        ];

        $pdf=PDF::loadview('user',$data);
        return  $pdf->download('generate.pdf');
    }
}
