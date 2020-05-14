function getDateType() {
    var date_type = getSelectVal('slt-date-type');
    console.log(date_type)
    showLoading();
    $.ajax({
        type:'get',
        url:urlDateType,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            date_type:date_type,

        },
        success:function(data) {
            hideLoading()
            if (data != null){
                $('#ipt-date-type').html(data);
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
function findDrink() {
    var f_date = getInputVal('f_date');
    var t_date = getInputVal('t_date');
    checkFTDate(f_date, t_date);
    showLoading();
    $.ajax({
        type:'Post',
        url:urlList,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            f_date:f_date,
            t_date:t_date,
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
            time:time,
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
function daysDiff(f_date, t_date)
{
    var dt1 = moment(f_date,'YYYY-MM-DD HH:mm:ss');
    var dt2 = moment(t_date,'YYYY-MM-DD HH:mm:ss');
    var diff = dt2.diff(dt1,'days');
    return diff;
}
function checkFTDate(f_date, t_date) {
    if (f_date === ''){
        swal("Lỗi", "Vui lòng chọn ngày bắt đầu", "error");
        return false
    }
    if (t_date === ''){
        swal("Lỗi", "Vui lòng chọn ngày kết thúc", "error");
        return false
    }
    if (daysDiff(f_date,t_date) < 0){
        swal("Lỗi", "Ngày kết thúc phải lớn hơn ngày bắt đầu", "error");
        return false
    }
}
function getByDate() {
    var f_date = getInputVal('f_date');
    var t_date = getInputVal('t_date');
    checkFTDate(f_date, t_date);
    showLoading();
    $.ajax({
        type:'Post',
        url:urlDate,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            f_date:f_date,
            t_date:t_date,
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
function getInputVal(id) {
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
function getTextInputVal(id) {
    return $('#'+id).val();
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
function setNewData(id,data) {
    $('#'+id).html(data);
}
function hideItem(id) {
    setTimeout(function(){

        $('#'+id).addClass('hidden');

    }, 3000);

}
function activeMenu(url) {
    var loc = '#remove-scroll ul li a[href="' + url + '"]';
    $('#remove-scroll ul li a[href="' + url + '"]').parent().parent().parent().addClass('active');
    $('#remove-scroll ul li a[href="' + url + '"]').parent().parent().parent().addClass('active');
    $('#remove-scroll ul li a[href="' + url + '"]').parent('li').addClass('active');
}
function changePass(id) {
    var old_pass = getTextInputVal('oldPass');
    var new_pass = getTextInputVal('newPass');

    $.ajax({
        type:'Post',
        url:chagePassUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            old_pass:old_pass,
            new_pass:new_pass,
            user_id:id
        },
        success:function(data) {
            if (data != null){
                if (data.code == '1' || data.code == '2') {
                    var idTex = 'id-'+data.code;
                    setNewData(idTex,data.message);
                    hideItem(idTex)
                }
                if (data.code == '0' || data.code == '3' || data.code == '4'){
                    var idTex = 'bigMessage';
                    setNewData(idTex,data.message);
                    hideItem(idTex)
                }
            }else {
                swal("Lỗi", "Vui lòng ấn F5 trên bàn phím", "error");

            }
        },
        error:function () {
            swal("Lỗi", "Vui lòng ấn F5 trên bàn phím", "error");
        },
    });

}
