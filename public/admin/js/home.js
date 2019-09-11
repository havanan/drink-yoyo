function getByTime(id) {
   var time = getSelectVal(id);
   showLoading();
    $.ajax({
        type:'Post',
        url:urlList,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            time:time
        },
        success:function(data) {
            hideLoading()
            if (data != null){

                $('#dashboard-data').html(data);
            }else {
                swal("Lỗi", "Vui lòng ấn F5 trên bàn phím", "error");

            }
        },
        error:function () {
            hideLoading()
            swal("Lỗi", "Vui lòng ấn F5 trên bàn phím", "error");
        },
        done:function () {
            hideLoading()
        }
    });
}
function getSelectVal(id) {
    return $('#'+id).val();
}
function showLoading() {
    $('#p2').removeClass('hidden');
}
function hideLoading() {
    $('#p2').addClass('hidden');
}
function repeatDrink() {
    console.log('refresh');
    makeDonutChart();
}
function makeDonutChart(name) {
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    if (name == null){
        name = '';
    }
    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: name
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    var ctx = document.getElementById("chartjs_doughnut").getContext("2d");
    window.myDoughnut = new Chart(ctx, config);
}
function makeLineChart(name,data) {
    if (name == null){
        name = '';
    }
    var config= {
            type:'line', data: {
                labels:data.labels,
                datasets:[ {
                    label: "Doanh thu từng ngày",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.blue,
                    data: data.data,
                    fill: false,
                    }
                ]
            }
            , options: {
                responsive:true, title: {
                    display: true, text: name
                }
                , tooltips: {
                    mode: 'index', intersect: false,
                }
                , hover: {
                    mode: 'nearest', intersect: true
                }
                , scales: {
                    xAxes:[ {
                        display:true, scaleLabel: {
                            display: true, labelString: 'Ngày'
                        }
                    }
                    ], yAxes:[ {
                        display:true, scaleLabel: {
                            display: true, labelString: 'Doanh thu'
                        }
                    }
                    ]
                }
            }
        }
    ;
    var ctx=document.getElementById("chartjs_line").getContext("2d");
    window.myLine=new Chart(ctx, config);
}