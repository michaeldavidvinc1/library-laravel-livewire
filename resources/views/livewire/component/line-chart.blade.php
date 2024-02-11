<div>
    <canvas id="myChart"></canvas>
    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
        var chartData = JSON.parse(`<?php echo $chartData  ?>`);
        var borrowsData = JSON.parse(`<?php echo $borrowsData  ?>`);

        new Chart(ctx, {
        type: 'line',
        data: {
            labels: chartData.label,
            datasets: [
            {
                label: 'User Registration',
                data: chartData.data,
                borderWidth: 1
            },
            {
                label: 'Borrow Book',
                data: borrowsData.data,
                borderWidth: 1
            }
        ]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
    </script>
    @endpush
</div>