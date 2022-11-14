@extends('user.layout.main')
@section('content')
    <section id="home" class="home-section">
        <div class="container">
            {{-- <div class="col-lg-9 offset-1 row position-relative ">
                <div class="col-lg-7 d-flex flex-column justify-content-center ">
                    <div class="my-lg-3 mx-lg-5">
                        <h1 class="text-5xl font-mono mb-4 mx-sm-4">Home page</h1>
                        <p class="fs-6 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia harum impedit, accusamus soluta et at quos maiores architecto iusto nulla beatae, modi error reiciendis! Corrupti sapiente a consequatur officiis deleniti.</p>
                    </div>
                </div>
                <div class="col-lg-5 content1_img ">
                    <img src="{{asset('image/su_logo_rounded.png')}}" class="ml-5 home-logo">
                </div>
            </div> --}}
            <div class="row py-lg-5 offset-lg-0 offset-1 col-lg-12">
                <div class="col-lg-6  mt-lg-5 my-3 mb-lg-0 px-lg-0 ps-lg-5">

                        <h1 class="text-lg-5xl text-3xl font-mono "><strong>Student Union UCS(MGY)</strong></h1>
                        <p class="fs-lg-6 my-3 text-justify">
                            ကျွန်ုပ်တို့ ကွန်ပျူတာတက္ကသိုလ် ( မကွေး) ကျောင်းသားသမဂ္ဂသည် ၂၀၂၂ခုနှစ် ဖေဖော်ဝါရီလ ( ၁)  ရက်နေ့ စစ်ဏာသိမ်းသည့် အချိန်မှစ ယခုထိတိုင် ကျောင်းသား ပြည်သူများနဲ့ အတူ လက်တွဲကာ ကျရာ အခန်း ကဏ္ဍ မှပါဝင်တော်လှန်လျက်ရှိပါသည်။
                        </p>
                        <strong class="">နိုင်ငံတစ်ဝန်းမှ CDM ဝန်းထမ်းများ ၊ ​ကျောင်းသား​ကျောင်းသူများ နှင့်​ ​တော်လှန်​ရေးအတွက် အဖက်ဖက်မှ တိုက်ပွဲဝင်သူများကို UCS(MGY)မှ ​လေးစားဂုဏ်ပြုပါသည်။</strong>

                </div>
                <div class="col-lg-6 justify-content-center d-lg-flex d-sm-none">
                    <img src="{{asset('image/su_logo_rounded.png')}}" class="ml-5 home-logo " style="width:50%">
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about-section bg-dark">
        <div class=" row py-5">
            <div class="col-10 offset-1 row">
                <div class="col-lg-6 col-sm-12">
                    <img src="{{asset('image/activities 1.png')}}" alt="ActivitiesImage" >
                </div>
                <div class="col-lg-6 col-sm-12 d-flex flex-column">
                <h1 class="text-4xl font-mono text-slate-100 mt-4">UCS(MGY)<span class="text-slate-100 fs-4">၏​ဆောင်ရွက်မှုများ</span> </h1>
                <p class="fs-lg-6 my-3 mt-3">
                    ကျွန်ုပ်တို့ ကွန်ပျူတာတက္ကသိုလ် ( မကွေး) ကျောင်းသားသမဂ္ဂသည် စစ်​ဘေး​ရှောင်များကို ကူညီ​ထောက်ပံ့​ပေးခြင်း ၊ CDM များကို ကူညီ​ပေးခြင်း ၊ ပညာ​ရေးဆိုင်ရာသင်တန်းများပို့ချခြင်း ၊ ပြည်သူများအား ​တော်လှန်​ရေးတွင် ပါဝင်လာ​စေရန် လှုံ​ဆော်​ပေးခြင်း ၊ CDM ​ကျောင်းသူ​ကျောင်းသားများအတွက်လည်း သငန်တန်းများစီစဥ်​ပေးခြင်း ၊ knowledge sharing အစီအစဥ်များ ပြုလုပ်​ပေးခြင်း နှင့် ​နောင်အနာဂတ်တွင်လည်း မိမိတို့​ကျောင်သူ​ကျောင်းသားများ လိုလား​သော ​ခေတ်မှီစနစ်ကျ​သော ပညာ​ရေးစနစ်များ​ ဖြစ်​ပေါ်လာ​​စေ​ရေးအတွက် ကြိုးစား​​ဆောင်ရွက်လျက်ရှိပါသည်

                </p>
                </div>
            </div>

        </div>

    </section>
    <section id="news" class="bg-teal py-4 new-section">
        <div class="container my-4">
            <div class="row">
                <div class="">
                    <h1 class="text-center fs-1 font-mono">Latest News</h1>
                    <div class="">
                        <livewire:pagination />
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
