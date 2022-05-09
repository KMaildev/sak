<form autocomplete="off" method="POST" action="{{ route('kanji_enrollment_request.store') }}" id="create-form"
    enctype="multipart/form-data" class="form-horizontal">
    @csrf
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            အမည် (မြန်မာ/အင်္ဂလိပ်)
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
            @error('name')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            ပညာအရည်အချင်း/ဘွဲ့
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('education') is-invalid @enderror" name="education">
            @error('education')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            မွေးသက္ကရာဇ်
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth">
            @error('date_of_birth')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            အဖအမည်/အလုပ်အကိုင်
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('father') is-invalid @enderror" name="father">
            @error('father')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            အမိအမည်/အလုပ်အကိုင်
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('mother') is-invalid @enderror" name="mother">
            @error('mother')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            ကျား/မ
        </label>
        <div class="col-sm-8">
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio4" value="Male" checked>
                Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio5" value="Female">
                Female
            </label>
            @error('gender')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            လူမျိုး/ဘာသာ
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality">
            @error('nationality')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            မှတ်ပုံတင်အမှတ်
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('nrc_no') is-invalid @enderror" name="nrc_no">
            @error('nrc_no')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            ပတ်စပို့စ် အမှတ်/ ရက်စွဲ
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('passport') is-invalid @enderror" name="passport">
            @error('passport')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            ကိုယ်အလေးအချိန်/အရပ်အမြင့်
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight">
            @error('weight')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            ဆက်သွယ်ရန် လိပ်စာ
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('contact_address') is-invalid @enderror"
                name="contact_address">
            @error('contact_address')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            အမြဲတမ်းလိပ်စာ
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror"
                name="permanent_address">
            @error('permanent_address')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            ဖုန်းနံပါတ်
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no">
            @error('phone_no')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            အီးမေးလ်
        </label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
            @error('email')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
            <label for="exampleInputEmail2">
                တက်ရောက်မည့် သင်တန်းအမည်နှင့် အမှတ်စဉ်
                တက်ရောက်ဖူးသော ဂျပန်စာသင်တန်းများရှိပါကဖော်ပြရန်
            </label>
            <input type="text" class="form-control" name="entry_number">
            @error('entry_number')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">
            ဓာတ်ပုံ
        </label>
        <div class="col-sm-8">
            <input name="photo" class="file form-control" type="file">
            @error('photo')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-10">
            <button type="submit" class="btn btn-default">
                Apply Now
            </button>
        </div>
    </div>
</form>

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEnrollmentRequests', '#create-form') !!}
@endsection
