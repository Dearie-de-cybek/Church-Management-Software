<div 
 class="mt-4"
 x-data="{
    init(){
            $(document).ready(function() {
                $('#myTable').DataTable();
              });
            
              const ctx = this.$refs.canvas;
            
              new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ['Tithe', 'Prophetic seed', 'Offering', 'Church Projects'],
                  datasets: [{
                    label: 'Worship Arcade Yearly Payments',
                    data: '{{ json_encode($thisYearPayments) }}',
                    borderWidth: 4
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
                
              });
        
    }
 }"
>

    <span>Year: </span>
    <select name="selectedYear" id="selectedYear" class="border" wire:model="selectedYear">
        @foreach($availableYears as $year)
        <option value="{{ $year }}">{{ $year }}</option>
        @endforeach
    </select>
    <div class="my-5">
        <div>This Year: {{ array_sum($thisYearPayments) }}</div>
    </div>
    <canvas id="myChart" x-ref="canvas"></canvas>
</div>
