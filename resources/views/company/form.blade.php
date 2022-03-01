<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" value="{{ $company->name??old('name') }}" id="name"
                   class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{ $company->email??old('email') }}" id="email"
                   class="form-control @error('email') is-invalid @enderror">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" name="logo" value="{{ $company->logo??old('logo') }}" id="logo"
                   class="form-control @error('logo') is-invalid @enderror">
            @error('logo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="website" class="form-label">Website</label>
            <input type="text" name="website" value="{{ $company->website??old('website') }}" id="website"
                   class="form-control @error('website') is-invalid @enderror">
            @error('website')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-success float-end mt-2">Submit</button>
    </div>
</div>
