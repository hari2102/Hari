@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/buku_ads') }}">Buku ad</a> :
@endsection
@section("contentheader_description", $buku_ad->$view_col)
@section("section", "Buku ads")
@section("section_url", url(config('laraadmin.adminRoute') . '/buku_ads'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Buku ads Edit : ".$buku_ad->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($buku_ad, ['route' => [config('laraadmin.adminRoute') . '.buku_ads.update', $buku_ad->id ], 'method'=>'PUT', 'id' => 'buku_ad-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nama')
					@la_input($module, 'email')
					@la_input($module, 'pesan')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/buku_ads') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#buku_ad-edit-form").validate({
		
	});
});
</script>
@endpush
