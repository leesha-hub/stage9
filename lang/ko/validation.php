<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | 유효성 검사 기본 메시지들입니다.
    |
    */

    'accepted' => ':attribute 항목을 동의해야 합니다.',
    'accepted_if' => ':other 가 :value 일 때 :attribute 항목을 동의해야 합니다.',
    'active_url' => ':attribute 항목은 유효한 URL이어야 합니다.',
    'after' => ':attribute 항목은 :date 이후 날짜여야 합니다.',
    'after_or_equal' => ':attribute 항목은 :date 이후 또는 같은 날짜여야 합니다.',
    'alpha' => ':attribute 항목은 문자만 포함할 수 있습니다.',
    'alpha_dash' => ':attribute 항목은 문자, 숫자, 대시(-), 밑줄(_)만 포함할 수 있습니다.',
    'alpha_num' => ':attribute 항목은 문자와 숫자만 포함할 수 있습니다.',
    'array' => ':attribute 항목은 배열이어야 합니다.',
    'ascii' => ':attribute 항목은 단일 바이트 영숫자 및 기호만 포함할 수 있습니다.',
    'before' => ':attribute 항목은 :date 이전 날짜여야 합니다.',
    'before_or_equal' => ':attribute 항목은 :date 이전 또는 같은 날짜여야 합니다.',
    'between' => [
        'array' => ':attribute 항목은 :min 개에서 :max 개 사이여야 합니다.',
        'file' => ':attribute 항목은 :min KB에서 :max KB 사이여야 합니다.',
        'numeric' => ':attribute 항목은 :min 에서 :max 사이여야 합니다.',
        'string' => ':attribute 항목은 :min 글자에서 :max 글자 사이여야 합니다.',
    ],
    'boolean' => ':attribute 항목은 true 또는 false 이어야 합니다.',
    'confirmed' => ':attribute 확인 값이 일치하지 않습니다.',
    'current_password' => '비밀번호가 올바르지 않습니다.',
    'date' => ':attribute 항목은 유효한 날짜여야 합니다.',
    'date_equals' => ':attribute 항목은 :date 와 같은 날짜여야 합니다.',
    'date_format' => ':attribute 항목은 :format 형식과 일치해야 합니다.',
    'decimal' => ':attribute 항목은 소수점 :decimal 자리여야 합니다.',
    'declined' => ':attribute 항목은 거부되어야 합니다.',
    'different' => ':attribute 항목과 :other 는 달라야 합니다.',
    'digits' => ':attribute 항목은 :digits 자리 숫자여야 합니다.',
    'digits_between' => ':attribute 항목은 :min 자리에서 :max 자리 사이여야 합니다.',
    'dimensions' => ':attribute 항목은 올바른 이미지 크기가 아닙니다.',
    'distinct' => ':attribute 항목에 중복 값이 있습니다.',
    'email' => ':attribute 항목은 유효한 이메일 주소여야 합니다.',
    'ends_with' => ':attribute 항목은 다음 중 하나로 끝나야 합니다: :values',
    'exists' => '선택한 :attribute 항목은 유효하지 않습니다.',
    'file' => ':attribute 항목은 파일이어야 합니다.',
    'filled' => ':attribute 항목은 값이 있어야 합니다.',
    'gt' => [
        'array' => ':attribute 항목은 :value 개보다 많아야 합니다.',
        'file' => ':attribute 항목은 :value KB 보다 커야 합니다.',
        'numeric' => ':attribute 항목은 :value 보다 커야 합니다.',
        'string' => ':attribute 항목은 :value 글자보다 길어야 합니다.',
    ],
    'gte' => [
        'array' => ':attribute 항목은 :value 개 이상이어야 합니다.',
        'file' => ':attribute 항목은 :value KB 이상이어야 합니다.',
        'numeric' => ':attribute 항목은 :value 이상이어야 합니다.',
        'string' => ':attribute 항목은 :value 글자 이상이어야 합니다.',
    ],
    'image' => ':attribute 항목은 이미지여야 합니다.',
    'in' => '선택한 :attribute 항목은 유효하지 않습니다.',
    'integer' => ':attribute 항목은 정수여야 합니다.',
    'ip' => ':attribute 항목은 유효한 IP 주소여야 합니다.',
    'ipv4' => ':attribute 항목은 유효한 IPv4 주소여야 합니다.',
    'ipv6' => ':attribute 항목은 유효한 IPv6 주소여야 합니다.',
    'json' => ':attribute 항목은 유효한 JSON 문자열이어야 합니다.',
    'lt' => [
        'array' => ':attribute 항목은 :value 개 미만이어야 합니다.',
        'file' => ':attribute 항목은 :value KB 미만이어야 합니다.',
        'numeric' => ':attribute 항목은 :value 미만이어야 합니다.',
        'string' => ':attribute 항목은 :value 글자 미만이어야 합니다.',
    ],
    'lte' => [
        'array' => ':attribute 항목은 :value 개 이하이어야 합니다.',
        'file' => ':attribute 항목은 :value KB 이하이어야 합니다.',
        'numeric' => ':attribute 항목은 :value 이하이어야 합니다.',
        'string' => ':attribute 항목은 :value 글자 이하이어야 합니다.',
    ],
    'max' => [
        'array' => ':attribute 항목은 최대 :max 개까지 허용됩니다.',
        'file' => ':attribute 항목은 최대 :max KB까지 허용됩니다.',
        'numeric' => ':attribute 항목은 최대 :max 까지 허용됩니다.',
        'string' => ':attribute 항목은 최대 :max 글자까지 허용됩니다.',
    ],
    'mimes' => ':attribute 항목은 :values 유형의 파일이어야 합니다.',
    'min' => [
        'array' => ':attribute 항목은 최소 :min 개 이상이어야 합니다.',
        'file' => ':attribute 항목은 최소 :min KB 이상이어야 합니다.',
        'numeric' => ':attribute 항목은 최소 :min 이상이어야 합니다.',
        'string' => ':attribute 항목은 최소 :min 글자 이상이어야 합니다.',
    ],
    'not_in' => '선택한 :attribute 항목은 유효하지 않습니다.',
    'numeric' => ':attribute 항목은 숫자여야 합니다.',
    'present' => ':attribute 항목이 반드시 존재해야 합니다.',
    'regex' => ':attribute 항목 형식이 올바르지 않습니다.',
    'required' => ':attribute 항목은 필수입니다.',
    'required_if' => ':other 가 :value 일 때 :attribute 항목은 필수입니다.',
    'required_unless' => ':other 가 :values 에 없으면 :attribute 항목은 필수입니다.',
    'required_with' => ':values 가 있을 때 :attribute 항목은 필수입니다.',
    'required_with_all' => ':values 가 모두 있을 때 :attribute 항목은 필수입니다.',
    'required_without' => ':values 가 없을 때 :attribute 항목은 필수입니다.',
    'required_without_all' => ':values 가 모두 없을 때 :attribute 항목은 필수입니다.',
    'same' => ':attribute 항목과 :other 항목이 같아야 합니다.',
    'size' => [
        'array' => ':attribute 항목은 :size 개여야 합니다.',
        'file' => ':attribute 항목은 :size KB여야 합니다.',
        'numeric' => ':attribute 항목은 :size 여야 합니다.',
        'string' => ':attribute 항목은 :size 글자여야 합니다.',
    ],
    'string' => ':attribute 항목은 문자열이어야 합니다.',
    'timezone' => ':attribute 항목은 유효한 시간대여야 합니다.',
    'unique' => ':attribute 항목은 이미 사용 중입니다.',
    'uploaded' => ':attribute 항목 업로드에 실패했습니다.',
    'url' => ':attribute 항목 형식이 올바르지 않습니다.',
    'uuid' => ':attribute 항목은 유효한 UUID여야 합니다.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'email' => [
            'email' => '유효한 이메일 주소여야 합니다.',
        ],
        'password' => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    */

    'attributes' => [
        'name' => '이름',
        'email' => '이메일',
        'password' => '비밀번호',
    ],

];
