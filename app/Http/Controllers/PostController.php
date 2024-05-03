<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Barryvdh\DomPDF\Facade\PDF;

class PostController extends Controller
{
    //
    public function downloadPDF(){
        $posts=Post::all();
        $data=[
            'title'=>"All Post Data",
            'date'=>date('d/m/y'),
            'posts'=>$posts
        ];
        
        $pdf=PDF::loadView('post',$data);
        return $pdf->download('download.pdf');
    }
}
