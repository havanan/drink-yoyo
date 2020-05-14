
@if($date_type == 'date')
    <label>Xem theo khoảng ngày</label>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" placeholder="Chọn ngày bắt đầu..." onfocus="(this.type='date')" class="form-control" name="f_date" id="f_date">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" placeholder="Chọn ngày kết thúc..." onfocus="(this.type='date')" class="form-control" name="t_date" id="t_date">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {{--<button class="btn btn-primary" onclick="findDrink()"><i class="fa fa-search"></i></button>--}}
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    <input type="hidden" name="date_type" value="date">
@elseif($date_type == 'month')
    <label>Chọn tháng</label>
    <div class="row">
        <div class="col-md-6">
            <select class="form-control" name="month" id="sltTime">
                @for($i=1;$i<=12;$i++)
                    <option value="{{$i}}" @if($i == date('m')) selected @endif>Tháng {{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {{--<button class="btn btn-primary" onclick="findDrink()"><i class="fa fa-search"></i></button>--}}
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>

            </div>
        </div>
    </div>
    <input type="hidden" name="date_type" value="month">

@elseif($date_type == 'week')
    <div class="row">
        <div class="col-md-5">
            <label>Chọn tháng</label>
        </div>
        <div class="col-md-5">
            <label>Chọn tuần</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <select class="form-control" name="month"  id="sltMonth">
                @for($i=1;$i<=12;$i++)
                    <option value="{{$i}}" @if($i == date('m')) selected @endif>Tháng {{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="col-md-5">
            <select class="form-control" name="week" id="sltWeek">
                @for($i=1;$i<=4;$i++)
                    <option value="{{$i}}" @if($i == date('m')) selected @endif>Tuần {{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {{--<button class="btn btn-primary" onclick="findDrink()"><i class="fa fa-search"></i></button>--}}
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>

            </div>
        </div>
    </div>
    <input type="hidden" name="date_type" value="week">

@else
    <h4 class="text-danger">Chưa chọn loại thời gian thống kê</h4>
@endif
