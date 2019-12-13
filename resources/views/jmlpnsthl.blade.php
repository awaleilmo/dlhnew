@extends('layouts.tampilan')

@section('content')
    <div class="hero-box bg-white hero-box-smaller ">
        <div class="container">
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">JUMLAH PNS DAN THL</h2>
            <table border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="opacity:1;visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s; ">
                <br>
                <br>
                <tr>
                    <td valign="top">
                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>

                        <div id="container" style="height: 100%; max-width: 100%; margin: 0 auto"></div>
                        <script>
                            Highcharts.chart('container', {
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: null,
                                    plotShadow: false,
                                    type: 'pie'
                                },
                                title: {
                                    text: ''
                                },
                                tooltip: {
                                    formatter: function () {
                                        return '<b>' + this.point.name + '</b><br/>' +
                                            this.series.name + ': ' + this.y;
                                    }
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                            enabled: true,
                                            format: '<b>{point.name}</b>: {point.y}'
                                        }
                                    }
                                },
                                series: [{
                                    name: 'Jumlah',
                                    colorByPoint: true,
                                    data: [{
                                        name: 'PNS',
                                        y: 45
                                    }, {
                                        name: 'THL',
                                        y: 12
                                    }]
                                }]
                            });
                        </script>
                    </td>
                </tr>
            </table>

        </div>
    </div>
@endsection
