@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="btn-group col-12 border-bottom border-dark" role="group" style="padding-bottom:15px;padding-left:0px;">

                <a class="btn btn-outline-primary" id="all" role="btn" href="{{url('home')}}">全部</a>

                <a class="btn btn-outline-primary" id="paid" role="btn" href="{{url('home/paid')}}">已預報</a>

                <a class="btn btn-outline-primary" id="unpaid" role="btn" href="{{url('home/unpaid')}}">未預報</a>

                <a class="btn btn-outline-primary" id="signup" role="btn" href="{{url('home/sign-up')}}">已繳清</a>

            </div>

        <div class="row" style="margin-top: 15px;">
        @if ($user == '張瀚元')
            <div class="btn-group col-11" role="group">

                   <a class="btn btn-outline-primary" id="Transfer" role="btn" href="{{url('/Transfer')}}" data-toggle="tooltip" data-placement="top" title="此區不分是否繳費及是否報名">轉學考</a>
                    
                    <a class="btn btn-outline-primary" id="Engineering" role="btn" href="{{url('/Engineering')}}" data-toggle="tooltip" data-placement="top" title="此區不分是否繳費及是否報名">工研</a>
                    
                    <a class="btn btn-outline-primary" id="Business" role="btn" href="{{url('/Business')}}" data-toggle="tooltip" data-placement="top" title="此區不分是否繳費及是否報名">商研</a>
                
            </div>
        @endif
        @if ($user != '張瀚元')
            <div class="col-11"></div>
        @endif
            <div class="col-1">
                <a class="btn btn-primary" role="btn" href="{{url('create')}}">新增</a>
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal">新增</button> --}}

            </div>
            
        </div>
        <div class="col-12 text-primary " style="margin-top: 15px;padding-left: 5px;">

            <input class="" type="checkbox" id="allcheck" style="">

            <label for="allcheck">全選</label>

        </div>

        <div>
            <form action="{{url('Send')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div>
            <table class="table table-sm table-hover table-fixed" id='tables' style="width:100%">

                <thead>

                    <tr>
                        <th></th>
                        <th>學生姓名</th>
                        <th>類別</th>
                        <th>學校名稱</th>
                        <th>科系</th>
                        <th>年級</th>
                        <th>電話</th>
                        <th>加入時間</th>
                        <th></th>
                        <th></th>
                    </tr>

                </thead>
                <tbody>
                
                @foreach ($query as $value)
                    <tr>
                        <td>
                            <input class="check" type="checkbox" value="{{$value->phone}}">
                        </td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->class}}</td>
                        <td>{{$value->school}}</td>
                        <td>{{$value->department}}</td>
                        <td>{{$value->grades}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->date}}</td>
                        <td>
                            @if ($value->status =='N')
                                <a class="btn btn-link" role="btn" href="{{url('edit/paid/'.$value->id)}}" style="padding-top: 0;padding-bottom: 0;">已預報</a>
                            @endif
                            
                        </td>
                        <td>
                            @if ($value->status =='N' || $value->status =='Y')
                            <a class="btn btn-link" role="btn" href="{{url('edit/signup/'.$value->id)}}"  style="padding-top: 0;padding-bottom: 0;">已繳清</a>
                            @endif
                            
                        </td>
                    </tr>
                    
                @endforeach
                </tbody>
                <tfoot style="width: 100%">
                        <th></th>
                        <th>學生姓名</th>
                        <th>類別</th>
                        <th>學校名稱</th>
                        <th>科系</th>
                        <th>年級</th>
                        <th>電話</th>
                        <th>加入時間</th>
                        <th></th>
                        <th></th>
                </tfoot>
            </table>
            </div>
                <div >

                    <h5 class="font-weight-bold">簡訊內容</h5>

                    <textarea cols="10" rows="5" class="form-control" name="text"></textarea>

                    <input type="hidden" id="phone" name="phone" value="">
                    <input type="hidden" id="url" name="url" value="">

                    <input class="btn btn-primary" type="submit" value="送出" >
            
                </div>
            </form>
        </div>


    </div>
<script>
    
</script>


@endsection
