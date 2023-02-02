<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
    // function Home (){
    //     return "I am from site Home controller";
    // }
    // function About (){
    //     return "I am from site About controller";
    // }
    // function Contact (){
    //     return "I am from site Home controller";
    // }


    // function Home (){
    //     return view('home');
    // }
    // function About (){
    //     return view('about');
    // }
    // function Contact (){
    //     return view('contact');
    // }


        // function name($NameValue){
        //     return "You name is $NameValue";
        // }


        function name($FirstName,$LastName){
            return "You First name is $FirstName<br> Your last name is $LastName";
        }
}
