<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Site extends Controller
{
        //ROUTING WITH CONTROLLER
    // function Home (){
    //     return "I am from site Home controller";
    // }
    // function About (){
    //     return "I am from site About controller";
    // }
    // function Contact (){
    //     return "I am from site Home controller";
    // }

        //ROUTING WITH CONTROLLER AND VIEW also hyperlink
    // function Home (){
    //     return view('home');
    // }
    // function About (){
    //     return view('about');
    // }
    // function Contact (){
    //     return view('contact');
    // }

        //ROUTING PARAMETER WITH CONTROLLER
    // function name($Name){
    //     return "You name is $Name";
    // }


    // function name_1($Name_1,$Name_2){
    //     return "You entered $Name_1/$Name_2 thats is a wrong url";
    // }

        //ROUTING PARAMETER WITH CONTROLLER AND VIEW
    function name(){
        return View('error');
    }


    // function name_1($Name_1,$Name_2){
    //     return View();"You entered $Name_1/$Name_2 thats is a wrong url";
    // }
}
