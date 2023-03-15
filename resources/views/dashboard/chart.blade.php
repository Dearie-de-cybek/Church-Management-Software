@extends('layouts.dashboard')

@section('content')
<h1>{{$offerings}}</h1><br>
<h1>{{$tithes}}</h1><br>
<h1>{{$churchProjects}}</h1><br>
<h1>{{$propheticSeeds}}</h1><br>


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
          label: '',
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