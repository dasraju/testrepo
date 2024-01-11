<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .title {
      text-align: center;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .text-red {
      color: red !important;
    }

    .row-data {
      border: 1px solid #000000D9;
      padding: 8px;
    }

    .text-white {
      color: white;
    }

    .bg-orangered-900 {
      background-color: #c65911;
    }

    .bg-orangered-500 {
      background-color: #E78E53;
    }

    .border-white {
      border: 1px solid white !important;
    }
  </style>
</head>

<body>
    <div id="pop_div"></div>
    {!! $lava->render('AreaChart', 'Population', 'pop_div') !!}
    {{-- @areachart('Population', 'pop_div') --}}

  <h3 class="title">National Summary of last day order vs delivery:</h3>

    <div class="card-body">

        {{-- <h1>{{ $chart1->options['chart_title'] }}</h1>
        {!! $chart1->renderHtml() !!} --}}

    </div>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr>
      <th class="row-data">Date</th>
      <th class="row-data">Total Allocated SO</th>
      <th class="row-data">Active SO</th>
      <th class="row-data">Present SO</th>
      <th class="row-data">Absent %</th>
      <th class="row-data">TD Delivery Value</th>
      <th class="row-data">Total Return</th>
      <th class="row-data">Return %</th>
      <th class="row-data">TD Order Value</th>
      <th class="row-data">SO Average Sales</th>
      <th class="row-data">Outlet visit per SO</th>


      <th class="row-data">Memo Per SO</th>

      <th class="row-data">SR</th>

      <th class="row-data">LPC</th>
      <th class="row-data">AIV (Based On Order)</th>
    </tr>

    <tr>
      <td class="row-data">2024-01-10</td>
      <td class="row-data"> 38</td>
      <td class="row-data"> 27</td>
      <td class="row-data"> 25</td>
      <td class="row-data"> 7.41%</td>
      <td class="row-data"> 1,12,114</td>
      <td class="row-data"> 15,613</td>
      <td class="row-data text-red">12.22%</td>
      <td class="row-data">1,28,384</td>
      <td class="row-data">4485</td>
      <td class="row-data">67</td>
      <td class="row-data">20</td>
      <td class="row-data">31%</td>
      <td class="row-data">1.23</td>
      <td class="row-data">217</td>
    </tr>
    <tr>
      <td class="row-data">2024-01-10</td>
      <td class="row-data"> 38</td>
      <td class="row-data"> 27</td>
      <td class="row-data"> 25</td>
      <td class="row-data"> 7.41%</td>
      <td class="row-data"> 1,12,114</td>
      <td class="row-data"> 15,613</td>
      <td class="row-data text-red">12.22%</td>
      <td class="row-data">1,28,384</td>
      <td class="row-data">4485</td>
      <td class="row-data">67</td>
      <td class="row-data">20</td>
      <td class="row-data">31%</td>
      <td class="row-data">1.23</td>
      <td class="row-data">217</td>
    </tr>

  </table>


  <h3 class="title">Highlights</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">


    <tr style="border: 1px solid #000000D9;">
      <td style=" padding: 8px;">10% Sales Growth from LWSD Sales</td>
      <td style=" padding: 8px;"> Total Target
      </td>
      <td style=" padding: 8px;"> 43,65,600</td>
      <td style=" padding: 8px;"> MTD Target
      </td>
      <td style=" padding: 8px;"> 12,93,511</td>
    </tr>

    <tr style="border: 1px solid #000000D9;">
      <td style=" padding: 8px;">12% Order Growth from LWSD Order (Based on TD order)</td>
      <td style=" padding: 8px;"> MTD Sales
      </td>
      <td style=" padding: 8px;"> 7,79,738</td>
      <td style=" padding: 8px;"> MTD Ach%
      </td>
      <td style=" padding: 8px;"> 60.28 %</td>
    </tr>
    <tr style="border: 1px solid #000000D9;">
      <td class="text-red" style=" padding: 8px; ">8% AIV Degrowth from LWSD AIV</td>
      <td style=" padding: 8px;"> Ach%
      </td>
      <td style=" padding: 8px;"> 17.86 %</td>
      <td style=" padding: 8px;"> Projected Month end sales
      </td>
      <td style=" padding: 8px;"> 26,31,616</td>
    </tr>


  </table>


  <h3 class="title">Region wise Today vs Last week same day</h3>

  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr>
      <th rowspan="2" class="row-data">Region</th>
      <th colspan="3" class="row-data">Last week same day (2024-01-02, Tuesday) </th>
      <th colspan="3" class="row-data">Today (2024-01-09, Tuesday)</th>
      <th colspan="3" class="row-data">Growth/Degrowth</th>
    </tr>

    <tr>
      <th class="row-data">Sales</th>
      <th class="row-data">Bounce %</th>
      <th class="row-data">Per SO Sales</th>
      <th class="row-data">Sales</th>
      <th class="row-data">Bounce %</th>
      <th class="row-data">Per SO Sales</th>
      <th class="row-data">Sales</th>
      <th class="row-data">Bounce %</th>
      <th class="row-data">Per SO Sales</th>
    </tr>

    <tr>

      <td class="row-data"> Chattogram</td>
      <td class="row-data"> 13,630</td>
      <td class="row-data"> 45.02%</td>
      <td class="row-data"> 2,726</td>
      <td class="row-data"> 13,630</td>
      <td class="row-data"> 45.02%</td>
      <td class="row-data"> 2,726</td>
      <td class="row-data"> 13,630</td>
      <td class="row-data"> 45.02%</td>
      <td class="row-data"> 2,726</td>
    </tr>

    <tr>
      <td class="row-data">North</td>
      <td class="row-data"> 13,630</td>
      <td class="row-data"> 45.02%</td>
      <td class="row-data"> 2,726</td>
      <td class="row-data"> 13,630</td>
      <td class="row-data"> 45.02%</td>
      <td class="row-data"> 2,726</td>
      <td class="row-data"> 13,630</td>
      <td class="row-data"> 45.02%</td>
      <td class="row-data"> 2,726</td>
    </tr>


  </table>

  <h3 class="title">Date Wise Memo, Visit, SR, LPC, AIV, SO Productivity Data:</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr>
      <th class="row-data">Date</th>
      <th class="row-data">No of Present SO</th>
      <th class="row-data">LWSD Sales</th>
      <th class="row-data">Sales Value</th>
      <th class="row-data">Bounce %</th>
      <th class="row-data">Per SO Sales</th>
      <th class="row-data">TWSD vs LWSD Sales Growth</th>
      <th class="row-data">Average Visit Per SO</th>
      <th class="row-data">Average Memo Per SO</th>
      <th class="row-data">SR</th>
      <th class="row-data">LPC</th>
      <th class="row-data">AIV</th>
    </tr>

    <tr>
      <td class="row-data">2024-01-10</td>
      <td class="row-data"> 25</td>
      <td class="row-data"> 1,12,114</td>
      <td class="row-data"> 15,613</td>
      <td class="row-data text-red">12.22%</td>
      <td class="row-data">3,384</td>
      <td class="row-data">0%</td>
      <td class="row-data">67</td>
      <td class="row-data">20</td>
      <td class="row-data">31%</td>
      <td class="row-data">1.23</td>
      <td class="row-data">212</td>
    </tr>
    <tr>
      <td class="row-data">2024-01-10</td>
      <td class="row-data"> 25</td>
      <td class="row-data"> 1,12,114</td>
      <td class="row-data"> 15,613</td>
      <td class="row-data text-red">12.22%</td>
      <td class="row-data">3,384</td>
      <td class="row-data">0%</td>
      <td class="row-data">67</td>
      <td class="row-data">20</td>
      <td class="row-data">31%</td>
      <td class="row-data">1.23</td>
      <td class="row-data">212</td>
    </tr>


  </table>


  <h3 class="title">National Date wise Bounce report:</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: orangered;">
      <th class="row-data">Date</th>
      <th class="row-data">Order </th>
      <th class="row-data">Sales</th>
      <th class="row-data">Total Return</th>
      <th class="row-data">Bounce %</th>
    </tr>

    <tr>
      <td class="row-data">2024-01-10</td>
      <td class="row-data"> 1,12,114</td>
      <td class="row-data"> 15,613</td>
      <td class="row-data">33,384</td>
      <td class="row-data">11.23%</td>
    </tr>
    <tr>
      <td class="row-data">2024-01-10</td>
      <td class="row-data"> 1,12,114</td>
      <td class="row-data"> 15,613</td>
      <td class="row-data">33,384</td>
      <td class="row-data">11.23%</td>
    </tr>



  </table>

  <h3 class="title">ASM & TO KPI Update till_09, January'24</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">Region</th>
      <th class="row-data">TO Name </th>
      <th class="row-data">SO Allocation</th>
      <th class="row-data">Delivery</th>
      <th class="row-data">Per SO Delivery</th>
      <th class="row-data">Bounce</th>
      <th class="row-data">AIV</th>
      <th class="row-data">Per Day/Per SO Memo</th>
      <th class="row-data">LPC</th>
      <th class="row-data">Per Day/Per SO Visit</th>
      <th class="row-data">Primary Against Secondary</th>
    </tr>

    <tr>
      <td rowspan="2" class="row-data">Chattogram</td>
      <td class="row-data"> Chattogram North Vacant</td>
      <td class="row-data"> 5 </td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data text-red">0.00</td>
      <td class="row-data ">0</td>
      <td class="row-data ">0</td>
    </tr>
    <tr>
      <td class="row-data"> Chattogram North Vacant</td>
      <td class="row-data"> 5</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data text-red">0.00</td>
      <td class="row-data ">0</td>
      <td class="row-data ">0</td>
    </tr>



  </table>


  <h3 class="title">SO Wise KPI Update till_09, January'24 </h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th rowspan="2" class="row-data">TO/ASE Name</th>
      <th rowspan="2" class="row-data">SO Name </th>
      <th rowspan="2" class="row-data">SO ID</th>
      <th colspan="3" class="row-data">Secondary</th>
      <th rowspan="2" class="row-data">Bounce %</th>
      <th rowspan="2" class="row-data">On Time Attendance (Within 9:00 AM on App)</th>
      <th rowspan="2" class="row-data">Per Day Visit</th>
      <th rowspan="2" class="row-data">LPC</th>
      <th rowspan="2" class="row-data">Per Day Memo</th>
      <th rowspan="2" class="row-data">Tiffin+ Chocolate Target (Ctn)</th>
      <th rowspan="2" class="row-data">Tiffin+ Chocolate Sales (Ctn)</th>
      <th rowspan="2" class="row-data">Tiffin+ Chocolate Ach%</th>
    </tr>

    <tr>
      <th class="row-data"> Target </th>
      <th class="row-data">Actual Secondary</th>
      <th class="row-data">Ach%</th>
    </tr>
    <tr>
      <td class="row-data"> Goutam Biswas </td>
      <td class="row-data"> Abdul Aziz Khan </td>
      <td class="row-data"> 3794 </td>
      <td class="row-data"> 1,28,400 </td>
      <td class="row-data"> 27,996 </td>
      <td class="row-data"> 21.8% </td>
      <td class="row-data"> 17.26% </td>
      <td class="row-data"> 6 </td>
      <td class="row-data"> 69 </td>
      <td class="row-data"> 1.22 </td>
      <td class="row-data"> 23 </td>
      <td class="row-data"> 3 </td>
      <td class="row-data"> 14.3 </td>
      <td class="row-data"> 0 </td>
    </tr>




  </table>


  <h3 class="title">SO Wise KPI Update On_10, January'24 </h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">TO/ASE Name</th>
      <th class="row-data">SO Name </th>
      <th class="row-data">SO ID</th>
      <th class="row-data">Sales</th>
      <th class="row-data">Bounce %</th>
      <th class="row-data">Total Visit</th>
      <th class="row-data">Visit Within 0.1km</th>
      <th class="row-data">Memo</th>
      <th class="row-data">LPC</th>
      <th class="row-data">TD Order</th>
    </tr>

    <tr>
      <td class="row-data"> Goutam Biswas </td>
      <td class="row-data"> Abdul Aziz Khan </td>
      <td class="row-data"> 3794 </td>
      <td class="row-data"> 1,28,400 </td>
      <td class="row-data"> 27,996 </td>
      <td class="row-data"> 21.8% </td>
      <td class="row-data"> 17.26% </td>
      <td class="row-data"> 6 </td>
      <td class="row-data"> 69 </td>
      <td class="row-data"> 23 </td>
    </tr>

  </table>



  <h3 class="title">SOs Order Time Stamping Information On_10, January'24</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">Region Name</th>
      <th class="row-data">Terrritory Name </th>
      <th class="row-data">SO Name</th>
      <th class="row-data">Below 9AM</th>
      <th class="row-data">%</th>
      <th class="row-data">9AM to 12PM</th>
      <th class="row-data">%</th>
      <th class="row-data">12PM to 3PM</th>
      <th class="row-data">%</th>
      <th class="row-data">3PM to 6PM</th>
      <th class="row-data">%</th>
      <th class="row-data">3PM to 6PM</th>
      <th class="row-data">%</th>
      <th class="row-data">6PM to 9PM</th>
      <th class="row-data">%</th>
      <th class="row-data">9PM to 12PM</th>
      <th class="row-data">%</th>
      <th class="row-data">Total Order Memo</th>
    </tr>

    <tr>
      <td class="row-data"> Chattogram </td>
      <td class="row-data"> </td>
      <td class="row-data"> Sarwer alam </td>
      <td class="row-data"> 0 </td>
      <td class="row-data"> 0.00% </td>
      <td class="row-data">13 </td>
      <td class="row-data"> 0.00% </td>
      <td class="row-data"> 8 </td>
      <td class="row-data"> 38.10% </td>
      <td class="row-data"> 0 </td>
      <td class="row-data"> 0.00% </td>
      <td class="row-data"> 0 </td>
      <td class="row-data"> 0.00% </td>
      <td class="row-data"> 0 </td>
      <td class="row-data"> 0.00% </td>
      <td class="row-data"> 0 </td>
      <td class="row-data"> 0.00% </td>
      <td class="row-data"> 21 </td>
    </tr>

  </table>


  <h3 class="title">Till Date Category Wise National Sales Report </h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">Label</th>
      <th class="row-data">Bread Spread</th>
      <th class="row-data">Chocolate</th>
      <th class="row-data">LB</th>
      <th class="row-data">SDP</th>
      <th class="row-data">Tasty Saline</th>
      <th class="row-data">Total</th>
    </tr>

    <tr>

      <td class="row-data">Value</td>
      <td class="row-data">1,47,267</td>
      <td class="row-data">5,09,960</td>
      <td class="row-data">2,44,532</td>
      <td class="row-data">1,634</td>
      <td class="row-data">1,487</td>
      <td class="row-data">9,04,880</td>
    </tr>
    <tr>

      <td class="row-data">Cartoon</td>
      <td class="row-data">1,47,267</td>
      <td class="row-data">5,09,960</td>
      <td class="row-data">2,44,532</td>
      <td class="row-data">1,634</td>
      <td class="row-data">1,487</td>
      <td class="row-data">9,04,880</td>
    </tr>

  </table>


  <h3 class="title">SKU Wise Region Wise Sales On </h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr>
      <th rowspan="2" class="row-data border-white bg-orangered-900 text-white">Category</th>
      <th rowspan="2" class="row-data border-white bg-orangered-900 text-white">SKU</th>
      <th colspan="2" class="row-data border-white bg-orangered-900 text-white">Chattogram</th>
      <th colspan="2" class="row-data border-white bg-orangered-900 text-white">Dhaka</th>
      <th colspan="2" class="row-data border-white bg-orangered-900 text-white">North</th>
      <th colspan="2" class="row-data border-white bg-orangered-900 text-white">South</th>
      <th rowspan="2" class="row-data border-white bg-orangered-900 text-white">Total Value</th>
      <th rowspan="2" class="row-data border-white bg-orangered-900 text-white">Total Ctn</th>
    </tr>
    <tr>
      <th class="row-data border-white bg-orangered-900 text-white">Value</th>
      <th class="row-data border-white bg-orangered-900 text-white">Ctn</th>
      <th class="row-data border-white bg-orangered-900 text-white">Value</th>
      <th class="row-data border-white bg-orangered-900 text-white">Ctn</th>
      <th class="row-data border-white bg-orangered-900 text-white">Value</th>
      <th class="row-data border-white bg-orangered-900 text-white">Ctn</th>
      <th class="row-data border-white bg-orangered-900 text-white">Value</th>
      <th class="row-data border-white bg-orangered-900 text-white">Ctn</th>
    </tr>

    <tr>

      <td rowspan="3" class="row-data bg-orangered-500 border-white">Bread Spread</td>


      <td class="row-data">NC+230-Q</td>
      <td class="row-data">4,135</td>
      <td class="row-data">1</td>
      <td class="row-data">16,800</td>
      <td class="row-data">5</td>
      <td class="row-data">3,102</td>
      <td class="row-data">1</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">24,037</td>
      <td class="row-data">24,037</td>
    </tr>
    <tr>

      <td class="row-data">NC+230-Q</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">16,800</td>
      <td class="row-data">5</td>
      <td class="row-data">3,102</td>
      <td class="row-data">1</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">24,037</td>
      <td class="row-data">24,037</td>
    </tr>
    <tr>

      <td class="row-data">NC+230-Q</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">16,800</td>
      <td class="row-data">5</td>
      <td class="row-data">3,102</td>
      <td class="row-data">1</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">24,037</td>
      <td class="row-data">24,037</td>
    </tr>
    <tr>

      <td colspan="2" class="row-data bg-orangered-500 border-white">Bread Spread_Total</td>
      <td class="row-data">4135</td>
      <td class="row-data">1</td>
      <td class="row-data">16,800</td>
      <td class="row-data">5</td>
      <td class="row-data">3,102</td>
      <td class="row-data">1</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">24,037</td>
      <td class="row-data">24,037</td>
    </tr>

  </table>

  <h3 class="title">SKU Wise Region Wise Sales Till </h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr>
      <th rowspan="2" class="row-data border-white bg-orangered-900 text-white">Category</th>
      <th rowspan="2" class="row-data border-white bg-orangered-900 text-white">SKU</th>
      <th colspan="2" class="row-data border-white bg-orangered-900 text-white">Chattogram</th>
      <th colspan="2" class="row-data border-white bg-orangered-900 text-white">Dhaka</th>
      <th colspan="2" class="row-data border-white bg-orangered-900 text-white">North</th>
      <th colspan="2" class="row-data border-white bg-orangered-900 text-white">South</th>
      <th rowspan="2" class="row-data border-white bg-orangered-900 text-white">Total Value</th>
      <th rowspan="2" class="row-data border-white bg-orangered-900 text-white">Total Ctn</th>
    </tr>
    <tr>
      <th class="row-data border-white bg-orangered-900 text-white">Value</th>
      <th class="row-data border-white bg-orangered-900 text-white">Ctn</th>
      <th class="row-data border-white bg-orangered-900 text-white">Value</th>
      <th class="row-data border-white bg-orangered-900 text-white">Ctn</th>
      <th class="row-data border-white bg-orangered-900 text-white">Value</th>
      <th class="row-data border-white bg-orangered-900 text-white">Ctn</th>
      <th class="row-data border-white bg-orangered-900 text-white">Value</th>
      <th class="row-data border-white bg-orangered-900 text-white">Ctn</th>
    </tr>

    <tr>

      <td rowspan="3" class="row-data bg-orangered-500 border-white">Bread Spread</td>


      <td class="row-data">NC+230-Q</td>
      <td class="row-data">4,135</td>
      <td class="row-data">1</td>
      <td class="row-data">16,800</td>
      <td class="row-data">5</td>
      <td class="row-data">3,102</td>
      <td class="row-data">1</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">24,037</td>
      <td class="row-data">24,037</td>
    </tr>
    <tr>

      <td class="row-data">NC+230-Q</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">16,800</td>
      <td class="row-data">5</td>
      <td class="row-data">3,102</td>
      <td class="row-data">1</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">24,037</td>
      <td class="row-data">24,037</td>
    </tr>
    <tr>

      <td class="row-data">NC+230-Q</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">16,800</td>
      <td class="row-data">5</td>
      <td class="row-data">3,102</td>
      <td class="row-data">1</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">24,037</td>
      <td class="row-data">24,037</td>
    </tr>
    <tr>

      <td colspan="2" class="row-data bg-orangered-500 border-white">Bread Spread_Total</td>
      <td class="row-data">4135</td>
      <td class="row-data">1</td>
      <td class="row-data">16,800</td>
      <td class="row-data">5</td>
      <td class="row-data">3,102</td>
      <td class="row-data">1</td>
      <td class="row-data"></td>
      <td class="row-data"></td>
      <td class="row-data">24,037</td>
      <td class="row-data">24,037</td>
    </tr>

  </table>


  <h3 class="title">National Till Date Cash Collection Top Line Update Table</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">Items</th>
      <th class="row-data">Deposit Amount</th>
      <th class="row-data">Contribution</th>
      <th class="row-data">Party Average</th>
    </tr>
    <tr>
      <th class="row-data"> Total Primary</th>
      <th class="row-data">5,37,705</th>
      <th class="row-data">19</th>
      <th class="row-data">28,300</th>
    </tr>
    <tr>
      <td class="row-data"> Existing Regular DB</td>
      <td class="row-data">5,37,705</td>
      <td class="row-data">19</td>
      <td class="row-data">28,300</td>
    </tr>


  </table>


  <h3 class="title">National Date Wise Category Wise Cash Collection</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">Date</th>
      <th class="row-data">Alternative</th>
      <th class="row-data">Regular</th>
      <th class="row-data">Total</th>
    </tr>

    <tr>
      <td class="row-data">2024-01-01 13:48:25</td>
      <td class="row-data">25,460</td>
      <td class="row-data">0</td>
      <td class="row-data">25,460</td>
    </tr>
    <tr>
      <td class="row-data">2024-01-01 13:48:25</td>
      <td class="row-data">25,460</td>
      <td class="row-data">0</td>
      <td class="row-data">25,460</td>
    </tr>
    <tr>
      <td class="row-data">2024-01-01 13:48:25</td>
      <td class="row-data">25,460</td>
      <td class="row-data">0</td>
      <td class="row-data">25,460</td>
    </tr>
    <tr>
      <td class="row-data">2024-01-01 13:48:25</td>
      <td class="row-data">25,460</td>
      <td class="row-data">0</td>
      <td class="row-data">25,460</td>
    </tr>
    <tr>
      <td class="row-data">2024-01-01 13:48:25</td>
      <td class="row-data">25,460</td>
      <td class="row-data">0</td>
      <td class="row-data">25,460</td>
    </tr>
    <tr>
      <td class="row-data">2024-01-01 13:48:25</td>
      <td class="row-data">25,460</td>
      <td class="row-data">0</td>
      <td class="row-data">25,460</td>
    </tr>

  </table>



  <h3 class="title">Region/Alternative Wise Till Date Primary Achievement Status</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">

      <th rowspan="2" class="row-data">Region Name</th>
      <th rowspan="2" class="row-data">A SM/DM</th>
      <th colspan="3" class="row-data">Regular</th>
      <th colspan="3" class="row-data">Alternative</th>
      <th colspan="3" class="row-data">Total</th>
    </tr>
    <tr style="background-color: #FAFAFA;">

      <th class="row-data">Target Deposit </th>
      <th class="row-data">Amount</th>
      <th class="row-data">Ach%</th>
      <th class="row-data">Target Deposit </th>
      <th class="row-data">Amount</th>
      <th class="row-data">Ach%</th>
      <th class="row-data">Target Deposit </th>
      <th class="row-data">Amount</th>
      <th class="row-data">Ach%</th>
    </tr>

    <tr>
      <td class="row-data">Chattogram</td>
      <td class="row-data">CTG Vacant</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
    </tr>
    <tr>
      <td class="row-data">Chattogram</td>
      <td class="row-data">CTG Vacant</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
    </tr>
  </table>


  <h3 class="title">TO Wise Till Date Primary Achievement Status</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">

      <th rowspan="2" class="row-data">Region Name</th>
      <th rowspan="2" class="row-data">TO Name</th>
      <th colspan="5" class="row-data">Regular Distributor</th>
      <th colspan="3" class="row-data">Alternative Distributor</th>
      <th colspan="3" class="row-data">Total Distributor</th>
    </tr>
    <tr style="background-color: #FAFAFA;">

      <th class="row-data">Target </th>
      <th class="row-data">Deposit Amount </th>
      <th class="row-data">Ach%</th>
      <th class="row-data">Target </th>
      <th class="row-data">Secondary </th>
      <th class="row-data">Primary vs Secondary </th>
      <th class="row-data">Deposit Amount </th>
      <th class="row-data">Ach%</th>
      <th class="row-data">Target </th>
      <th class="row-data">Deposit Amount </th>
      <th class="row-data">Ach%</th>
    </tr>

    <tr>
      <td class="row-data">Dhaka</td>
      <td class="row-data">Asif Beg</td>
      <td class="row-data">7,50,000</td>
      <td class="row-data">60,000</td>
      <td class="row-data">8%</td>
      <td class="row-data">1,89,934</td>
      <td class="row-data">32</td>
      <td class="row-data">50,000</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">8,00,000</td>
      <td class="row-data">60,000</td>
      <td class="row-data">7.5%</td>
    </tr>

  </table>


  <h3 class="title">DB Wise Till Date Secondary Primary And Stock Update Status</h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th class="row-data"> DB Name </th>
      <th class="row-data">Primary Target</th>
      <th class="row-data">Primary</th>
      <th class="row-data">Ach%</th>
      <th class="row-data">Secondary Target</th>
      <th class="row-data">Secondary</th>
      <th class="row-data">Ach%</th>
      <th class="row-data">Primary vs Seconday</th>
      <th class="row-data">ADS</th>
      <th class="row-data">Bounce Rate</th>
      <th class="row-data">Current APPs Stock</th>
      <th class="row-data">SCD</th>
    </tr>


    <tr>

      <td class="row-data">Mayar Doya Enterprise</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">5,907</td>
      <td class="row-data">0%</td>
    </tr>
    <tr>

      <td class="row-data">Mayar Doya Enterprise</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">5,907</td>
      <td class="row-data">0%</td>
    </tr>

  </table>

  <h3 class="title">Region Wise Sales Performance Update on_10, January'24
  </h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th colspan="2" class="row-data"> Region Wise </th>
      <th colspan="10" class="row-data">Total</th>
    </tr>
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">Region</th>
      <th class="row-data">No of Present SO</th>
      <th class="row-data">Monthly Target</th>
      <th class="row-data">Target (Daily)</th>
      <th class="row-data">Sales</th>
      <th class="row-data">Bounce %</th>
      <th class="row-data">Per SO Sales</th>
      <th class="row-data">Total Ach %</th>
      <th class="row-data">Daily Ach%</th>
      <th class="row-data">Per Day/Per SO Memo</th>
      <th class="row-data">AIV on sales</th>
      <th class="row-data">LPC</th>
    </tr>


    <tr>
      <td class="row-data">Dhaka</td>
      <td class="row-data">15</td>
      <td class="row-data">26,10,800</td>
      <td class="row-data">96,696</td>
      <td class="row-data">68,550</td>
      <td class="row-data">10.55%</td>
      <td class="row-data">4,570</td>
      <td class="row-data">2.63%</td>
      <td class="row-data">70.89%</td>
      <td class="row-data">20</td>
      <td class="row-data">227</td>
      <td class="row-data">1.20</td>
    </tr>
    <tr>

      <td class="row-data">Mayar Doya Enterprise</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">5,907</td>
      <td class="row-data">0%</td>
    </tr>

  </table>

  <h3 class="title">Region Wise Sales Performance Update till_10, January'24
  </h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th colspan="2" class="row-data"> Region Wise </th>
      <th colspan="10" class="row-data">Total</th>
    </tr>
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">Region</th>
      <td class="row-data">No of SO Allocation</td>
      <td class="row-data">Monthly Target</td>
      <td class="row-data">Target (MTD)</td>
      <td class="row-data">Sales</td>
      <td class="row-data">Bounce %</td>
      <td class="row-data">Per SO Sales</td>
      <td class="row-data">Total Ach %</td>
      <td class="row-data">MTD Ach%</td>
      <td class="row-data">Per Day/Per SO Memo</td>
      <td class="row-data">AIV on sales</td>
      <td class="row-data">LPC</td>
    </tr>


    <tr>
      <td class="row-data">Dhaka</td>
      <td class="row-data">15</td>
      <td class="row-data">26,10,800</td>
      <td class="row-data">96,696</td>
      <td class="row-data">68,550</td>
      <td class="row-data">10.55%</td>
      <td class="row-data">4,570</td>
      <td class="row-data">2.63%</td>
      <td class="row-data">70.89%</td>
      <td class="row-data">20</td>
      <td class="row-data">227</td>
      <td class="row-data">1.20</td>
    </tr>
    <tr>

      <td class="row-data">Mayar Doya Enterprise</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">0%</td>
      <td class="row-data">0</td>
      <td class="row-data">0%</td>
      <td class="row-data">5,907</td>
      <td class="row-data">0%</td>
    </tr>

  </table>


  <h3 class="title">Region Wise Sales Performance Update till_10, January'24
  </h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th colspan="4" class="row-data"> Territory Wise </th>
      <th colspan="10" class="row-data">Total</th>
    </tr>
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">Region</th>
      <th class="row-data">Territory</th>
      <th class="row-data">No of Present SO</th>
      <th class="row-data">NO Of SO/DB Allocation</th>
      <th class="row-data">Monthly Target</th>
      <th class="row-data">Target (Daily)</th>
      <th class="row-data">Sales</th>
      <th class="row-data">Bounce %</th>
      <th class="row-data">Per SO Sales</th>
      <th class="row-data">Total Ach %</th>
      <th class="row-data">Daily Ach%</th>
      <th class="row-data">Per Day/Per SO Memo</th>
      <th class="row-data">AIV on sales</th>
      <th class="row-data">LPC</th>
    </tr>


    <tr>
      <td class="row-data">Dhaka</td>
      <td class="row-data">Mirpur</td>
      <td class="row-data">Asif Beg</td>
      <td class="row-data">5</td>
      <td class="row-data">8,02,500</td>
      <td class="row-data">29,722</td>
      <td class="row-data">23,786</td>
      <td class="row-data">7.16%</td>
      <td class="row-data">4,757</td>
      <td class="row-data">2.96%</td>
      <td class="row-data">80.03%</td>
      <td class="row-data">19</td>
      <td class="row-data">245</td>
      <td class="row-data">1.20</td>
    </tr>

    <tr>
      <td class="row-data">Dhaka</td>
      <td class="row-data">Mirpur</td>
      <td class="row-data">Asif Beg</td>
      <td class="row-data">5</td>
      <td class="row-data">8,02,500</td>
      <td class="row-data">29,722</td>
      <td class="row-data">23,786</td>
      <td class="row-data">7.16%</td>
      <td class="row-data">4,757</td>
      <td class="row-data">2.96%</td>
      <td class="row-data">80.03%</td>
      <td class="row-data">19</td>
      <td class="row-data">245</td>
      <td class="row-data">1.20</td>
    </tr>


  </table>


  <h3 class="title">Territory wise Sales and Order Update till_10, January'24
  </h3>
  <table style="border-collapse: collapse; width: 100%;color: #000000D9;text-align: center;">
    <tr style="background-color: #FAFAFA;">
      <th colspan="4" class="row-data"> Territory Wise </th>
      <th colspan="10" class="row-data">Total</th>
    </tr>
    <tr style="background-color: #FAFAFA;">
      <th class="row-data">Region</th>
      <th class="row-data">Territory</th>
      <th class="row-data">Name Of ASC/TO/FSL</th>
      <th class="row-data">NO Of SO/DB Allocation</th>
      <th class="row-data">Monthly Target</th>
      <th class="row-data">Target (MTD)</th>
      <th class="row-data">Sales</th>
      <th class="row-data">Bounce %</th>
      <th class="row-data">Per SO Sales</th>
      <th class="row-data">Total Ach %</th>
      <th class="row-data">MTD Ach%</th>
      <th class="row-data">Per Day/Per SO Memo</th>
      <th class="row-data">AIV on sales</th>
      <th class="row-data">LPC</th>
    </tr>


    <tr>
      <td class="row-data">Dhaka</td>
      <td class="row-data">Mirpur</td>
      <td class="row-data">Asif Beg</td>
      <td class="row-data">6</td>
      <td class="row-data">8,02,500</td>
      <td class="row-data">2,67,500</td>
      <td class="row-data">1,89,934</td>
      <td class="row-data">9.27%</td>
      <td class="row-data">31,656</td>
      <td class="row-data">23.67%</td>
      <td class="row-data">71%</td>
      <td class="row-data">138</td>
      <td class="row-data">230</td>
      <td class="row-data">1.19</td>
    </tr>

    <tr>
      <td class="row-data">Dhaka</td>
      <td class="row-data">Mirpur</td>
      <td class="row-data">Asif Beg</td>
      <td class="row-data">5</td>
      <td class="row-data">8,02,500</td>
      <td class="row-data">29,722</td>
      <td class="row-data">23,786</td>
      <td class="row-data">7.16%</td>
      <td class="row-data">4,757</td>
      <td class="row-data">2.96%</td>
      <td class="row-data">80.03%</td>
      <td class="row-data">19</td>
      <td class="row-data">245</td>
      <td class="row-data">1.20</td>
    </tr>


  </table>

</body>

</html>
