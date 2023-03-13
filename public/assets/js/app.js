var xhr = new XMLHttpRequest();
xhr.open('GET', '/charts');
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);
        var labels = [], values = [];
        response.forEach(function (data) {
            labels.push(data.name);
            values.push(data.value);
        });
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'My Chart',
                    data: values,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {}
        });
    }
};
xhr.send();



// $(document).ready(function() {
//     $('#myTable').DataTable();
//   });

//   const ctx = document.getElementById('myChart');

//   new Chart(ctx, {
//     type: 'pie',
//     data: {
//       labels: ['Red', 'Blue', 'Yellow', 'Green'],
//       datasets: [{
//         label: '# of payments',
//         data: [12, 19, 3, 5],
//         borderWidth: 1
//       }]
//     },
//     options: {
//       scales: {
//         y: {
//           beginAtZero: true
//         }
//       }
//     }

    
//   });