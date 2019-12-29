<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages
    | in Myanmar Language in Unicode format used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute ကို သဘောတူပေးပါ။',
    'active_url' => ':attribute သည် မှားနေပါသည်။',
    'after' => ':attribute သည် :date နောက်ပိုင်းရက်စွဲဖြစ်ရပါမည်။',
    'after_or_equal' => ':attribute သည် :date (သို့) :date နောက်ပိုင်းရက်စွဲဖြစ်ရပါမည်။',
    'alpha' => ':attribute တွင် စာသားအက္ခရာသာပါရပါမည်။',
    'alpha_dash' => ':attribute တွင် အက္ခရာ၊ နံပါတ်၊ (-) နှင့် (_) သာပါရပါမည်။',
    'alpha_num' => ':attribute တွင် အက္ခရာ နှင့် နံပါတ်သာ ပါရပါမည်။',
    'array' => 'The :attribute must be an array.',
    'before' => ':attribute သည် :date မတိုင်ခင်ရက်စွဲ ဖြစ်ရပါမည်။',
    'before_or_equal' => ':attribute သည် :date (သို့) :date မတိုင်ခင်ရက်စွဲ ဖြစ်ရပါမည်။',
    'between' => [
        'numeric' => ':attribute သည် :min နှင့် :max ကြားဖြစ်ရပါမည်။',
        'file' => ':attribute သည် :min နှင့် :max kilobytes ကြားဖြစ်ရပါမည်။',
        'string' => ':attribute သည် စာလုံးအရေအတွက် :min နှင့် :max ကြားဖြစ်ရပါမည်။',
        'array' => ':attribute သည် :min နှင့် :max ကြားဖြစ်ရပါမည်။',
    ],
    'boolean' => ':attribute သည် true (သို့) false သာဖြစ်ရပါမည်။',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => ':attribute သည် လက်ခံနိုင်သော ရက်စွဲပုံစံမဟုတ်ပါ။',
    'date_equals' => ':attribute သည် :date နှင့်တူညီရပါမည်။',
    'date_format' => ':attribute သည် :format ပုံစံဖြစ်ရပါမည်။',
    'different' => ':attribute နှင့် :other သည် မတူညီရပါ။',
    'digits' => ':attribute သည် ဂဏာန်း :digits လုံးဖြစ်ရပါမည်။',
    'digits_between' => ':attribute သည် ဂဏာန်း :min လုံး နှင့် :max လုံးကြား ဖြစ်ရပါမည်။',
    'dimensions' => ':attribute တွင် မမှန်ကန်သော ဓါတ်ပုံအတိုင်းအတာ ရှိနေပါသည်။',
    'distinct' => ':attribute တွင် တူနေသော တန်ဖိုးတစ်ခုရှိနေပါသည်။',
    'email' => ':attribute သည် မှန်ကန်သော email ပုံစံမဟုတ်ပါ။',
    'ends_with' => ':attribute သည် အောက်ပါ :values တစ်ခုခုနှင့် အဆုံးသတ်ရပါမည်။',
    'exists' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'file' => ':attribute သည် ဖိုင်တစ်ခုဖြစ်ရမည်။',
    'filled' => ':attribute တွင် တန်ဖိုးတစ်ခုရှိရမည်။',
    'gt' => [
        'numeric' => ':attribute သည် :value ထက်ကြီးရပါမည်။',
        'file' => ':attribute သည် :value kilobytes ထက်ကြီးရပါမည်။',
        'string' => ':attribute သည် စာလုံး :value လုံးထက် များရပါမည်။',
        'array' => ':attribute တွင် :value မျိုးထက်ပို များရပါမည်။',
    ],
    'gte' => [
        'numeric' => ':attribute သည် :value ထက်ကြီး (သို့) တူညီ ရပါမည်။',
        'file' => ':attribute သည် :value kilobytes ထက်ကြီး (သို့) တူညီ ရပါမည်။',
        'string' => ':attribute သည် စာလုံး :value လုံးထက် များ (သို့) တူညီ ရပါမည်။',
        'array' => ':attribute တွင် :value မျိုးထက်ပို များ (သို့) တူညီ ရပါမည်။',
    ],
    'image' => ':attribute သည် ဓါတ်ပုံဖြစ်ရပါမည်။',
    'in' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'in_array' => ':attribute သည် :other ထဲတွင် ရှိရပါမည်။',
    'integer' => ':attribute သည် ကိန်းပြည့် ဖြစ်ရပါမည်။',
    'ip' => ':attribute သည် မှန်ကန်သော IP address ဖြစ်ရပါမည်။',
    'ipv4' => ':attribute သည် မှန်ကန်သော IPv4 address ဖြစ်ရပါမည်။',
    'ipv6' => ':attribute သည် မှန်ကန်သော IPv6 address ဖြစ်ရပါမည်။',
    'json' => ':attribute သည် မှန်ကန်သော JSON စာကြောင်း ဖြစ်ရပါမည်။',
    'lt' => [
        'numeric' => ':attribute သည် :value ထက်ငယ်ရပါမည်။',
        'file' => ':attribute သည် :value kilobytes ထက်ငယ်ရပါမည်။',
        'string' => ':attribute သည် စာလုံး :value လုံးထက် နည်းရပါမည်။',
        'array' => ':attribute တွင် :value မျိုးထက်ပို နည်းရပါမည်။',
    ],
    'lte' => [
        'numeric' => ':attribute သည် :value ထက်ငယ် (သို့) တူညီ ရပါမည်။',
        'file' => ':attribute သည် :value kilobytes ထက်ငယ် (သို့) တူညီ ရပါမည်။',
        'string' => ':attribute သည် စာလုံး :value လုံးထက် နည်း (သို့) တူညီ ရပါမည်။',
        'array' => ':attribute တွင် :value မျိုးထက်ပို နည်း (သို့) တူညီ ရပါမည်။',
    ],
    'max' => [
        'numeric' => ':attribute သည် အများဆုံး :max သာဖြစ်ရပါမည်။',
        'file' => ':attribute သည် အများဆုံး :max kilobytes သာဖြစ်ရပါမည်။',
        'string' => ':attribute သည် စာလုံး အများဆုံး :max လုံးသာဖြစ်ရပါမည်။',
        'array' => ':attribute သည် အများဆုံး :max မျိုးသာဖြစ်ရပါမည်။',
    ],
    'mimes' => ':attribute သည် :values ဖိုင် အမျိုးအစားဖြစ်ရပါမည်။',
    'mimetypes' => ':attribute သည် :values ဖိုင် အမျိုးအစားဖြစ်ရပါမည်။',
    'min' => [
        'numeric' => ':attribute သည် အနည်းဆုံး :min သာဖြစ်ရပါမည်။',
        'file' => ':attribute သည် အနည်းဆုံး :min kilobytes သာဖြစ်ရပါမည်။',
        'string' => ':attribute သည် စာလုံး အနည်းဆုံး :min လုံးသာဖြစ်ရပါမည်။',
        'array' => ':attribute သည် အနည်းဆုံး :min မျိုးသာဖြစ်ရပါမည်။',
    ],
    'not_in' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'not_regex' => ':attribute သည် မှန်ကန်သော ပုံစံမဟုတ်ပါ။',
    'numeric' => ':attribute သည် ဂဏာန်းသာဖြစ်ရပါမည်။',
    'present' => ':attribute ပါရပါမည်။',
    'regex' => ':attribute သည် မှန်ကန်သော ပုံစံမဟုတ်ပါ။',
    'required' => ':attribute ကို မဖြစ်မနေ ဖြည့်ပေးပါ။',
    'required_if' => ':other သည် :value ဖြစ်လျှင် :attribute ကို မဖြစ်မနေ ဖြည့်ပေးပါ။',
    'required_unless' => ':other သည် :value မဖြစ်လျှင် :attribute ကို မဖြစ်မနေ ဖြည့်ပေးပါ။',
    'required_with' => ':values ကိုဖြည့်ထားလျှင် :attribute ကိုလည်း မဖြစ်မနေ ဖြည့်ပေးပါ။',
    'required_with_all' => ':values များကို ဖြည့်ထားလျှင် :attribute ကိုလည်း မဖြစ်မနေ ဖြည့်ပေးပါ။',
    'required_without' => ':values ကို မဖြည့်ထားလျှင် :attribute ကိုလည်း မဖြစ်မနေ ဖြည့်ပေးပါ။',
    'required_without_all' => ':values များကို မဖြည့်ထားလျှင် :attribute ကိုလည်း မဖြစ်မနေ ဖြည့်ပေးပါ။',
    'same' => ':attribute နှင့် :other တူညီရပါမည်။',
    'size' => [
        'numeric' => ':attribute သည် :size ဖြစ်ရမည်။',
        'file' => ':attribute သည် :size kilobytes ဖြစ်ရမည်။',
        'string' => ':attribute သည် စာလုံး :size လုံး ဖြစ်ရမည်။',
        'array' => ':attribute must သည် :size မျိုး ဖြစ်ရမည်။',
    ],
    'starts_with' => ':attribute သည် အောက်ပါ :values တစ်ခုခုနှင့် စရပါမည်။',
    'string' => ':attribute သည် စာသားတစ်ခုဖြစ်ရပါမည်။',
    'timezone' => ':attribute သည် မှန်ကန်သော timezone ဖြစ်ရပါမည်။',
    'unique' => ':attribute ကို အခြားတစ်ယောက်သုံးပြီးသား ဖြစ်နေပါသည်။',
    'uploaded' => ':attribute ကို upload တင်မရပါ။',
    'url' => ':attribute သည် မှန်ကန်သော ပုံစံမဟုတ်ပါ။',
    'uuid' => ':attribute သည် မှန်ကန်သော UUID ပုံစံမဟုတ်ပါ။',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
