@extends('layouts.kanji')
@section('title', 'သင်တန်းဝင်ခွင့်လျှောက်လွှာ')
@section('content')

    <section id="about">
        <div class="container pb-90 pb-sm-90">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8 col-md-offset-2">

                        <div class="bg-lightest border-1px p-30 mb-0">
                            <h3 class="text-theme-colored mt-0 pt-5">
                                <span>သင်တန်းဝင်ခွင့်လျှောက်လွှာ</span>
                            </h3>
                            <span>
                                CV Form ဖြည့်ရာတွင် ဂရုပြုရမည့် အချက်များ
                            </span>
                            <hr>
                            <p>
                                ၁။ မိမိ၏ ကိုယ်ရေးအချက်အလက်ကို မှန်ကန်စွာ ဖြည့်ရန်။ <br><br>
                                ၂။ ဖုန်းနံပါတ်ကို မိမိ၏လက်ကိုင်ဖုန်းနံပါတ်အပြင် မိမိ၏မိသားစုဝင်တစ်ဦး၏ ဖုန်းနံပါတ် အပါအဝင်
                                စုစုပေါင်း၂လုံးဖြည့်ရန်။ ဖုန်းနံပါတ်တစ်ခုသို့ ဆက်သွယ်၍မရသောအခါ ဆက်သွယ်ရန် ဖြစ်သည်။ <br><br>
                                ၃။ ဖုန်းနံပါတ် အပြောင်းအလဲရှိပါက အကြောင်းကြားရန်။ <br><br>
                                ၄။ အလုပ်အတွေ့အကြုံနှင့် ပတ်သက်၍ လုပ်ကိုင်ခဲ့သည့်အလုပ် စသည့်အကြောင်းအရာများကို
                                ပြည့်စုံတိကျစွာ ရေးဖြည့်ရမည်။ <br><br>
                                ၅။ SAINT ARKAR CO.,LTD တွင် CV Form တင်ထားသော်လည်း အခြားတစ်နေရာတွင် အလုပ်ရရှိသွားခြင်း
                                (သို့) ဂျပန်သို့သွားရောက်အလုပ်မလုပ်တော့ဟု ပြောင်းလဲဆုံးဖြတ်ပါက ကျွန်ုပ်တို့ထံသို့ မပျက်မကွက်
                                အကြောင်းကြားရန်။ <br><br>
                                CV Form တွင် ဖြည့်ထားသော အချက်အလက်များသည် မှန်ကန်မှုရှိကြောင်းနှင့် အထက်ပါအချက်များအားလုံး
                                သဘောပေါက်နားလည်သိရှိကြောင်း ဝန်ခံကတိပြုပါသည်။
                            </p>

                            <br><br>
                            @include(
                                'layouts.shared.kanji_enrollment_request_form'
                            )

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
@endsection
