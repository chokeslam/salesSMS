@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('新增學生資料') }}</div>
				<div class="card-body">
					<form method="POST" action="{{url('create/new')}}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group row">
							<label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('學生姓名:') }}</label>

							<div class="col-md-6">
								<input id="name" class="form-control" name="name" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="class" class="col-sm-4 col-form-label text-md-right">{{ __('類別:') }}</label>

							<div class="col-md-6">
								<select id="class" class="form-control" name="class" required>

									<option value="">請選擇…</option>
									<option value="轉學考">轉學考</option>
									<option value="工研">工研</option>
									<option value="商研">商研</option>

								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="school" class="col-sm-4 col-form-label text-md-right">{{ __('學校:') }}</label>

							<div class="col-md-6">
								<input id="school" class="form-control" name="school" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="department" class="col-sm-4 col-form-label text-md-right">{{ __('科系:') }}</label>

							<div class="col-md-6">
								<input id="department" class="form-control" name="department" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="grade" class="col-sm-4 col-form-label text-md-right">{{ __('年級:') }}</label>

							<div class="col-md-6">
								<input id="grade" class="form-control" name="grade" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="phone" class="col-sm-4 col-form-label text-md-right">{{ __('電話:') }}</label>

							<div class="col-md-6">
								<input id="phone" class="form-control" name="phone" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="status" class="col-sm-4 col-form-label text-md-right">{{ __('狀態:') }}</label>

							<div class="col-md-6">
								<select id="status" class="form-control" name="status" required>

									<option value="">請選擇…</option>
									<option value="N">未繳費</option>
									<option value="Y">已繳費</option>
									<option value="S">已報名</option>

								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="admin" class="col-sm-4 col-form-label text-md-right">{{ __('負責業務:') }}</label>

							<div class="col-md-6">
								<input id="admin" class="form-control" name="admin" value="{{ Auth::user()->name }}" readonly>
							</div>
						</div>

						<div class="form-group row">
							<label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('日期:') }}</label>

							<div class="col-md-6">
								<input id="date" class="form-control" name="date" value="{{$date}}" readonly>
							</div>
						</div>

                        <div class="form-group row">
                            <div class="col-md-5 offset-md-7">
                                <button type="submit" id="continue" class="btn btn-primary">
                                    {{ __('繼續新增') }}
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('新增') }}
                                </button>
                            </div>
                        </div>
					</form>
				</div>
			</div>
			<div class="col-md-12" style="text-align: center;">
				<a class="btn btn-link" role="btn" href="{{url('home')}}">回首頁</a>
			</div>
		</div>
	</div>
</div>
@endsection