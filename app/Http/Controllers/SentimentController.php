<?php namespace App\Http\Controllers;

use Alexa;
use Illuminate\Http\Request;

class SentimentController extends Controller
{
    public function getBillSentiment()
    {
        $bill_type = Alexa::slot('BillType');
        $bill_number = Alexa::slot('BillType');
        return Alexa::say('38 percent of people oppose this bill and 62 percent of people support this bill');
    }
}
