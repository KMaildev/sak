<form autocomplete="off" method="POST" action="{{ route('job_enquiry.store') }}" id="create-form"
    enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                    name="name" value="">
                @error('name')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number"
                    name="phone" value="">
                @error('phone')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="form-label">NRC No</label>
                <input type="text" class="form-control @error('nrc') is-invalid @enderror" placeholder="NRC No"
                    name="nrc" value="">
                @error('nrc')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email Address" name="email" value="">
                @error('email')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="form-label">Date Of Birth</label>
                <input type="text" class="form-control @error('date_of_birth') is-invalid @enderror"
                    placeholder="Date Of Birth" name="date_of_birth" value="">
                @error('date_of_birth')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-xl-6 col-md-6 col-sm-6 col-lg-6">
            <div class="form-group">
                <label class="form-label">Age</label>
                <input type="text" class="form-control @error('age') is-invalid @enderror" placeholder="Age" name="age"
                    value="">
                @error('age')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-xl-6 col-md-6 col-sm-6 col-lg-6">
            <div class="form-group">
                <label class="form-label">Gender</label>
                <ul class="row">
                    <div class="col-md-4">
                        <input type="radio" name="gender" value="Male" checked> Male
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="gender" value="Female"> Female
                    </div>
                </ul>
            </div>
        </div>


        <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
            <div class="form-group">
                <label class="form-label">Passport</label>
                <input type="text" class="form-control @error('passport') is-invalid @enderror" placeholder="Passport"
                    name="passport" value="">
                @error('passport')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
            <div class="form-group">
                <label class="form-label">Date Of Expiry
                    (Passport)</label>
                <input type="text" class="form-control @error('expire_date') is-invalid @enderror"
                    placeholder="Date Of Expiry (Passport)" name="expire_date" value="">
                @error('expire_date')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
            <div class="form-group">
                <label class="form-label">Education</label>
                <input type="text" class="form-control @error('education') is-invalid @enderror" placeholder="Education"
                    name="education" value="">
                @error('education')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
            <div class="form-group">
                <label class="form-label">Language</label>
                <input type="text" class="form-control @error('language') is-invalid @enderror"
                    placeholder="English 4 skills, N5 Japanese" name="language" value="">
                @error('language')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
            <div class="form-group">
                <label class="form-label">Current Address</label>
                <input type="text" class="form-control @error('current_address') is-invalid @enderror"
                    placeholder="Current Address" name="current_address" value="">
                @error('current_address')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
            <div class="form-group">
                <label>C/V Upload</label>
                <input name="attachment_file" class="file" type="file">
                @error('attachment_file')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10">
                    Apply Now
                </button>
            </div>
        </div>

    </div>
</form>

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreJobEnquiry', '#create-form') !!}
@endsection
