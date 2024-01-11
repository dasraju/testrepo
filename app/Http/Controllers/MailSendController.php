<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use PDF;
// use Lava;
use Khill\Lavacharts\Lavacharts;

class MailSendController extends Controller
{
    public function sendMail(){

        {
            type: 'bar',
            data: {
             labels: [2012, 2013, 2014, 2015, 2016],
             datasets: [{
                label: 'Raisins', data: [12, 6, 5, 18, 12]}, {
                label: 'Bananas', data: [4, 8, 16, 5, 5]
             }]
            }
        }
        
        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);


            $lava = new Lavacharts; // See note below for Laravel

            $population = $lava->DataTable();

            $population->addDateColumn('Year')
                    ->addNumberColumn('Number of People')
                    ->addRow(['2006', 623452])
                    ->addRow(['2007', 685034])
                    ->addRow(['2008', 716845])
                    ->addRow(['2009', 757254])
                    ->addRow(['2010', 778034])
                    ->addRow(['2011', 792353])
                    ->addRow(['2012', 839657])
                    ->addRow(['2013', 842367])
                    ->addRow(['2014', 873490]);

            $lava->AreaChart('Population', $population, [
                'title' => 'Population Growth',
                'legend' => [
                    'position' => 'in'
                ]
            ]);



        //  $pdf = PDF::loadView('mail.testmail',compact('lava'));
        //  return $pdf->stream('document.pdf');
        // return view('mail.testmail',compact('chart1','lava'));

        Mail::to('xyz@gmail.com')->send(new TestMail($lava));

    }
}
