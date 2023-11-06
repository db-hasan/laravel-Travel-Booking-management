@extends('backend/layouts/layout')

@section('content')
<div class='row'>
            <div class='col-md-3 p-2'>
                <div class='card p-3 text-light bg-info bg-gradient'>
                    <p><strong>Sales Order</strong></p>
                    <p><i class='fa-solid fa-cart-shopping fa-2xl'></i> 1011001</p>
                    <span>Sales Price</span>
                </div>
            </div>
            <div class='col-md-3 p-2'>
                <div class='card p-3 text-light bg-success bg-opacity-75'>
                    <p><strong>Profit</strong></p>
                    <p><i class='fa-solid fa-money-check-dollar fa-2xl'></i> 1011001</p>
                    <span>Profit Amount</span>
                </div>
            </div>
            <div class='col-md-3 p-2'>
                <div class='card p-3 text-light bg-warning bg-opacity-75'>
                    <p><strong>Expenses</strong></p>
                    <p><i class='fa-solid fa-cart-flatbed-suitcase fa-2xl'></i> 1011001</p>
                    <span>Expenses Cost</span>
                </div>
            </div>
            <div class='col-md-3 p-2'>
                <div class='card p-3 text-light bg-danger bg-opacity-75'>
                    <p><strong>Gross Profit</strong></p>
                    <p><i class='fa-solid fa-industry fa-2xl'></i> 1011001</p>
                    <span>Profit Balance</span>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="row">
                <div class="col-md-8">
                    <canvas id="myBarChart"></canvas>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

    <script>
        // Sample data for the bar chart
        const data = {
            labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4' , 'Label 5' , 'Label 6' , 'Label 7'],
            datasets: [{
                label: 'Sample Data',
                data: [10, 40, 30, 70, 50, 80, 90],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Create the bar chart
        const ctx = document.getElementById('myBarChart').getContext('2d');
        const myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection