<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $welcomeStrings = [
            "sprintf(\"%s %s!\", 'HELLO', 'WORLD')",
            "alert('HELLO WORLD!')",
            "<h2>HELLO WORLD!</h2>",
            "print \"{} {}!\".format('HELLO', 'WORLD')",
            "++++++++[>++++[>++>+++>+++>+<<<<-]>+>+>->>+[<]<-]>>.>---.+++++++..+++.>>.<-.<.+++.------.--------.>>+.>++." // Brainfuck? Why not?
        ];

        return view('welcome', [
            'welcome' => htmlentities($welcomeStrings[array_rand($welcomeStrings)])
        ]);
    }
}
