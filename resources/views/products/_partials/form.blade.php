<form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="row match-height">
		<!-- Start General Form -->
		<div class="col-lg-8 col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">General</h4>
				</div>
				<div class="card-block">
					<div class="card-body">
						<div class="field-group">
							<h5 class="mt-2">{{ __('Name') }}</h5>
							<fieldset class="form-group">
								<input type="text"
										class="form-control @error('name') is-invalid @enderror"
										id="name"
										name="name"
										value="{{ old('name') }}"
										required
										autocomplete="name">
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</fieldset>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="field-group">
									<h5 class="mt-2">{{ __('Price') }}</h5>
									<fieldset class="form-group">
										<div class="input-group mb-2 mr-sm-2">
											<div class="input-group-prepend">
												<div class="input-group-text">VND</div>
											</div>
											<input type="number" 
													class="form-control @error('price') is-invalid @enderror"
													id="price"
													name="price"
													placeholder="100.000"
													value="{{ old('price') ?? 0 }}"
													required
													pattern="\d[0-9]{1,5}">
													
											@error('price')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</fieldset>
								</div>
							</div>
							<div class="col-md-4">
								<div class="field-group">
									<h5 class="mt-2">{{ __('Sale Price') }}</h5>
									<fieldset class="form-group @error('sale_price') is-invalid @enderror">
										<div class="input-group mb-2 mr-sm-2">
											<div class="input-group-prepend">
												<div class="input-group-text">VND</div>
											</div>
											<input type="number"
													class="form-control"
													id="sale_price"
													name="sale_price"
													value="{{ old('sale_price') ?? 0 }}"
													placeholder="100.000"
													pattern="\d[0-9]{0,5}">

											@error('sale_price')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</fieldset>
								</div>
							</div>
							<div class="col-md-4">
								<div class="field-group">
									<h5 class="mt-2">{{ __('Share Price') }}</h5>
									<fieldset class="form-group">
										<div class="input-group mb-2 mr-sm-2">
											<div class="input-group-prepend">
												<div class="input-group-text">VND</div>
											</div>
											<input type="number"
													class="form-control @error('share_price') is-invalid @enderror"
													id="share_price"
													name="share_price"
													value="{{ old('share_price') ?? 0 }}"
													placeholder="100.000"
													pattern="\d[0-9]{0,5}">

											@error('share_price')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</fieldset>
								</div>
							</div>
						</div>
						<div class="field-group">
							<h5 class="mt-2">{{ __('Content') }}</h5>
							<fieldset class="form-group @error('content') is-invalid @enderror">
								<textarea class="form-control editor"
											id="content"
											name="content"
											required
											rows="3">{{ old('share_price') ?? null }}</textarea>

								@error('content')
									<span class="invalid-feedback d-block" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</fieldset>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Images</h4>
				</div>
				<div class="card-block">
					<div class="card-body">
						<div class="input-field">
							<div class="input-images"></div>
						</div>

						@error('images')
							<span class="invalid-feedback d-block" role="alert">
								<strong>{{ $images }}</strong>
							</span>
						@enderror
					</div>
				</div>
			</div>
		</div>
		{{-- End General Form --}}

		{{-- Start Setting Form --}}
		<div class="col-lg-4 col-md-12">
			<div class="sticky-top">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Setting</h4>
					</div>
					<div class="card-block">
						<div class="card-body">
							{{-- Body --}}
							<div class="field-group">
								<h5 class="mt-2">{{ __('#HashTags') }}</h5>
								<fieldset class="form-group">
									<select name="tags[]" id="select-hashtag" multiple="multiple" placeholder="shoe,box...">
										@if(old('tags'))
											@foreach(old('tags') as $tag)
											<option value="{{ $tag }}" selected>{{ $tag }}</option>
											@endforeach
										@endif
									</select>
								</fieldset>
							</div>

							<div class="field-group">
								<h5 class="mt-2">{{ __('Status') }}</h5>
								<fieldset class="form-group">
									<select class="form-control" id="Status" name="status">
										<option value="available" {{ old('status') && old('status') === "available" ? 'selected' : null }}>{{ __('Available') }}</option>
										<option value="unavailable" {{ old('status') && old('status') === "unavailable" ? 'selected' : null }}>{{ __('Unavailable') }}</option>
									</select>
								</fieldset>
							</div>

							<div class="text-right">
								<button class="btn btn-primary">Save & close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- End Setting Form --}}
	</div>
</form>


@prepend('variables')
<script>
	var hashtags = @json($tags, JSON_PRETTY_PRINT);
	var tagsLink = "{{ route('admin.tags.store') }}";
</script>
@endpush