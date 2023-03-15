@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3 col-sm-3 col-xs-3">
           <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                <p class="card-text"><strong>Tithe</strong></p>
                <h3 class="card-text">&#x20A6;{{$tithes}}</h3>
                </div>
            </div>
        </div>
        <div class="col-3 col-sm-3 col-xs-3">
           <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                <p class="card-text"><strong>Offering</strong></p>
                <h3 class="card-text">&#x20A6;{{$offerings}}</h3>
                </div>
            </div>
        </div>
        <div class="col-3 col-sm-3 col-xs-3">
           <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                <p class="card-text"><strong>Church Project</strong></p>
                <h3 class="card-text">&#x20A6;{{$churchProjects}}</h3>
                </div>
            </div>
        </div>
        <div class="col-3 col-sm-3 col-xs-3">
           <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                <p class="card-text"><strong>Prophetic Seeds</strong></p>
                <h3 class="card-text">&#x20A6;{{$propheticSeeds}}</h3>
                </div>
            </div>
        </div>
        <div class="col-3 col-sm-3 col-xs-3">
           <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                <p class="card-text"><strong>Totals Revenue</strong></p>
                <h3 class="card-text">&#x20A6;{{$propheticSeeds + $churchProjects + $offerings + $tithes}}</h3>
                </div>
            </div>
        </div>
    <div>
</div>



<canvas id="pieChart" style="max-height: 400px;"></canvas>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    new Chart(document.querySelector('#pieChart'), {
      type: 'pie',
      data: {
        labels: [
          'Tithe',
          'Offering',
          'Church Project',
          'Prophetic Seed'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [
            @php
                $totals = [$tithes, $offerings, $churchProjects, $propheticSeeds];


                foreach ($totals as $total) {
                    echo $total . ",";
                }
            @endphp

          ],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(0,255,255)'
          ],
          hoverOffset: 4
        }]
      }
    });
  });
</script>

@endsection

{{-- var data = [
        @php
            $items = DB::table('items')->get();
            foreach ($items as $item) {
                echo $item->value . ",";
            }
        @endphp
    ]; --}}
