<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => 'Bu sahə qəbul edilməlidir.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Bu etibarsız URL edir.',
    'after'                => ':date-dan sonra tarix olmalıdır.',
    'after_or_equal'       => ':date-dan sonra və ya bərabər bir tarix olmalıdır.',
    'alpha'                => 'Bu sahədə yalnız məktublar ola bilər.',
    'alpha_dash'           => 'Bu sahədə yalnız məktublar, nömrələri, tire və vurğulayır ola bilər.',
    'alpha_num'            => 'Bu sahədə yalnız məktublar və nömrələr ola bilər.',
    'array'                => 'Bu sahə bir sıra olmalıdır.',
    'attached'             => 'Bu sahə artıq əlavə olunur.',
    'before'               => 'Bu :date qədər tarix olmalıdır.',
    'before_or_equal'      => 'Bu :date-cu il əvvəlki və ya bərabər tarixi olmalıdır.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'Bu sahə doğru və ya yalan olmalıdır.',
    'confirmed'            => 'Təsdiq üst-üstə düşmür.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Bu etibarlı tarix deyil.',
    'date_equals'          => 'Bu, :date-cü ilə bərabər tarix olmalıdır.',
    'date_format'          => 'Bu format :format uyğun deyil.',
    'different'            => 'Bu dəyər :other-dan fərqli olmalıdır.',
    'digits'               => 'Bu :digits rəqəm olmalıdır.',
    'digits_between'       => 'Bu :min və :max rəqəmlər arasında olmalıdır.',
    'dimensions'           => 'Bu şəkil etibarsız ölçülərə malikdir.',
    'distinct'             => 'Bu sahədə bir təkrarlanan dəyəri var.',
    'email'                => 'Bu etibarlı e-mail olmalıdır.',
    'ends_with'            => 'Bu, aşağıdakı nöqtələrdən biri ilə başa çatmalıdır: :values.',
    'exists'               => 'Seçilmiş dəyər yolverilməzdir.',
    'file'                 => 'Məzmun bir fayl olmalıdır.',
    'filled'               => 'Bu sahədə bir fərq olmalıdır.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'Bu şəkil olmalıdır edir.',
    'in'                   => 'Seçilmiş dəyər yolverilməzdir.',
    'in_array'             => 'Bu dəyər :other-da mövcud deyil.',
    'integer'              => 'Bu bir tam olmalıdır.',
    'ip'                   => 'Bu etibarlı IP ünvanı olmalıdır.',
    'ipv4'                 => 'Bu etibarlı IPv4 ünvanı olmalıdır.',
    'ipv6'                 => 'Bu etibarlı IPv6 ünvanı olmalıdır.',
    'json'                 => 'Bu caiz string JSON olmalıdır edir.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'max'                  => [
        'array'   => 'The content may not have more than :max items.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'numeric' => 'The value may not be greater than :max.',
        'string'  => 'The string may not be greater than :max characters.',
    ],
    'mimes'                => 'Bu fayl növü olmalıdır: :values.',
    'mimetypes'            => 'Bu fayl növü olmalıdır: :values.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Bu dəyər çox olmalıdır :value',
    'not_in'               => 'Seçilmiş dəyər yolverilməzdir.',
    'not_regex'            => 'Bu format yolverilməzdir.',
    'numeric'              => 'Bu sayı olmalıdır.',
    'password'             => 'Şifrə səhvdir.',
    'present'              => 'Bu sahə olmalıdır.',
    'prohibited'           => 'Bu sahə qadağandır.',
    'prohibited_if'        => ':other :value-ə bərabər olduqda bu sahə qadağandır.',
    'prohibited_unless'    => ':other yalnız :values-da olmadıqda bu sahə qadağandır.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Bu format yolverilməzdir.',
    'relatable'            => 'Bu sahədə bu resurs ilə bağlı ola bilər.',
    'required'             => 'Bu sahədə məcburidir.',
    'required_if'          => ':other :value olduğu təqdirdə bu sahə məcburidir.',
    'required_unless'      => 'Yalnız :other :values deyil, bu sahədə bir olmalıdır edir.',
    'required_with'        => 'Bu sahə :values mövcud olduqda tələb olunur.',
    'required_with_all'    => ':values olduqda bu sahə məcburidir.',
    'required_without'     => ':values itkin əgər bu sahədə bir olmalıdır edir.',
    'required_without_all' => 'Heç biri :values mövcud olduqda bu sahə məcburidir.',
    'same'                 => 'Bu sahənin dəyəri :other dəyəri ilə üst-üstə düşməlidir.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'Bu, aşağıdakı nöqtələrdən biri ilə başlamalıdır: :values.',
    'string'               => 'Bu, yəqin ki, bir simli var.',
    'timezone'             => 'Bu, imkan verilən zona olmalıdır.',
    'unique'               => 'Bu, artıq görülüb.',
    'uploaded'             => 'Bu yük bilmədi.',
    'url'                  => 'Bu format yolverilməzdir.',
    'uuid'                 => 'Bu etibarlı UUID olmalıdır.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
