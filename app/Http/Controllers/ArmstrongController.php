<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArmstrongController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function check(Request $request)
    {
        $number = $request->input('number');
        $isArmstrong = $this->isArmstrongNumber($number);
        
        return redirect()->route('result', ['number' => $number, 'isArmstrong' => $isArmstrong]);
    }

    public function result(Request $request)
    {
        $number = $request->query('number');
        $isArmstrong = $request->query('isArmstrong');
        
        return view('result', ['number' => $number, 'isArmstrong' => $isArmstrong]);
    }

    private function isArmstrongNumber($number)
    {
        $digits = str_split($number);
        $sum = 0;
        $power = count($digits);

        foreach ($digits as $digit) {
            $sum += pow($digit, $power);
        }

        return $sum == $number;
    }
}
