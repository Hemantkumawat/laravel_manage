@if ($message = session()->get('success'))
    <div class="alert alert-success alert-block mt-2">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = session()->get('error'))
    <div class="alert alert-danger alert-block mt-2">
        @if ($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = session()->get('warning'))
    <div class="alert alert-warning alert-block mt-2">
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = session()->get('info'))
    <div class="alert alert-info alert-block mt-2">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = session()->get('flash_message'))
    <div class="alert alert-success alert-block mt-2">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger mt-2">
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    </div>
@endif
