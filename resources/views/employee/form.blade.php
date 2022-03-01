<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="company_id" class="form-label">Select Company</label>
            <select name="company_id" id="company_id" class="form-control @error('company_id') is-invalid @enderror">
                @foreach($companies as $id=> $company_name)
                    <option value="{{ $id }}" {{ isset($employee)&& $employee->company_id == $id?'selected':'' }}>
                        {{ $company_name }}
                    </option>
                @endforeach
            </select>
            @error('company_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" value="{{ $employee->first_name??old('first_name') }}" id="first_name"
                   class="form-control @error('first_name') is-invalid @enderror">
            @error('first_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" value="{{ $employee->last_name??old('last_name') }}" id="last_name"
                   class="form-control @error('last_name') is-invalid @enderror">
            @error('last_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{ $employee->email??old('email') }}" id="email"
                   class="form-control @error('email') is-invalid @enderror">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" name="phone" value="{{ $employee->phone??old('phone') }}" id="phone"
                   class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-success float-end mt-2">Submit</button>
    </div>
</div>
