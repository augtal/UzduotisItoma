<?php

return [

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

    'accepted' => ':attribute turi būti priimtas.',
    'accepted_if' => 'Atributas :attribute turi būti priimtas, kai :other yra :value.',
    'active_url' => ':attribute nėra galiojantis URL.',
    'after' => ':attribute turi būti data po :date.',
    'after_or_equal' => ':attribute turi būti data po :date arba jai lygi.',
    'alpha' => ':attribute turi būti tik raidės.',
    'alpha_dash' => 'Atribute :attribute turi būti tik raidės, skaičiai, brūkšneliai ir apatiniai brūkšniai.',
    'alpha_num' => 'Atribute :attribute turi būti tik raidės ir skaičiai.',
    'array' => ':attribute turi būti masyvas.',
    'before' => ':attribute turi būti data prieš :date.',
    'before_or_equal' => ':attribute turi būti data prieš :date arba jai lygi.',
    'tarp' => [
        'numeric' => ':attribute turi būti tarp :min ir :max.',
        'file' => ':attribute turi būti nuo :min iki :max kilobaitų.',
        'string' => ':attribute turi būti tarp :min ir :max simbolių.',
        'array' => ':attribute turi būti nuo :min iki :max elementų.',
    ],
    'boolean' => 'Laukas :attribute turi būti teisingas arba klaidingas.',
    'confirmed' => ':attribute patvirtinimas nesutampa.',
    'current_password' => 'Slaptažodis neteisingas.',
    'date' => ':attribute nėra tinkama data.',
    'date_equals' => ':attribute turi būti data, lygi :date.',
    'date_format' => 'Atributas :attribute neatitinka formato :format.',
    'declined' => 'Atributas :attribute turi būti atmestas.',
    'declined_if' => 'Atributas :attribute turi būti atmestas, kai :other yra :value.',
    'different' => ':attribute ir :other turi skirtis.',
    'digits' => ':attribute turi būti :digits skaitmenys.',
    'digits_between' => ':attribute turi būti tarp :min ir :max skaitmenų.',
    'dimensions' => 'Atribute :attribute yra neteisingi vaizdo matmenys.',
    'distinct' => 'Lauko :attribute reikšmė pasikartoja.',
    'email' => ':attribute turi būti galiojantis el. pašto adresas.',
    'ends_with' => 'Atributas :attribute turi baigtis vienu iš šių: :values.',
    'exists' => 'Pasirinktas :attribute yra neteisingas.',
    'file' => ':attribute turi būti failas.',
    'filled' => 'Lauke :attribute turi būti reikšmė.',
    'gt' => [
        'numeric' => 'Atributas turi būti didesnis nei :value.',
        'file' => 'Atributas :attribute turi būti didesnis nei :value kilobaitų.',
        'string' => ':attribute turi būti didesnis nei :value simbolių.',
        'array' => ':attribute turi turėti daugiau nei :value elementus.',
    ],
    'gte' => [
        'numeric' => 'Atributas :attribute turi būti didesnis arba lygus :value.',
        'file' => 'Atributas turi būti didesnis arba lygus :value kilobaitų.',
        'string' => 'Atributas turi būti didesnis arba lygus :value simboliams.',
        'array' => 'Atribute :attribute turi būti :value elementų ar daugiau.',
    ],
    'image' => ':attribute turi būti vaizdas.',
    'in' => 'Pasirinktas :attribute yra neteisingas.',
    'in_array' => 'Lauko :attribute nėra :other.',
    'integer' => ':attribute turi būti sveikasis skaičius.',
    'ip' => ':attribute turi būti galiojantis IP adresas.',
    'ipv4' => ':attribute turi būti galiojantis IPv4 adresas.',
    'ipv6' => ':attribute turi būti galiojantis IPv6 adresas.',
    'json' => ':attribute turi būti tinkama JSON eilutė.',
    'lt' => [
        'numeric' => ':attribute turi būti mažesnis nei :value.',
        'file' => 'Atributas turi būti mažesnis nei :value kilobaitų.',
        'string' => ':attribute turi būti mažesnis nei :value simbolių.',
        'array' => ':attribute turi turėti mažiau nei :value elementus.',
    ],
    'lte' => [
        'numeric' => 'Atributas turi būti mažesnis arba lygus :value.',
        'file' => 'Atributas turi būti mažesnis arba lygus :value kilobaitų.',
        'string' => 'Atributas turi būti mažesnis arba lygus :value simboliams.',
        'array' => ':attribute negali turėti daugiau nei :value elementų.',
    ],
    'max' => [
        'numeric' => ':attribute neturi būti didesnis nei :max.',
        'file' => 'Atributas :attribute neturi būti didesnis nei :max kilobaitų.',
        'string' => ':attribute negali būti didesnis nei :max simbolių.',
        'array' => ':attribute negali turėti daugiau nei :max elementų.',
    ],
    'mimes' => ':attribute turi būti failas, kurio tipas: :values.',
    'mimetypes' => ':attribute turi būti failas, kurio tipas: :values.',
    'min' => [
        'numeric' => ':attribute turi būti bent :min.',
        'file' => ':attribute turi būti bent :min kilobaitų.',
        'string' => ':attribute turi būti bent :min simbolių.',
        'array' => 'Attribute turi būti bent :min elementų.',
    ],
    'multiple_of' => 'Atributas turi būti :value kartotinis.',
    'not_in' => 'Pasirinktas :attribute yra neteisingas.',
    'not_regex' => 'Netinkamas :attribute formatas.',
    'numeric' => ':attribute turi būti skaičius.',
    'password' => 'Slaptažodis neteisingas.',
    'present' => 'Turi būti laukas :attribute.',
    'regex' => 'Netinkamas :attribute formatas.',
    'required' => 'Laukas :attribute yra būtinas.',
    'required_if' => 'Laukas :attribute būtinas, kai :other yra :value.',
    'required_unless' => 'Laukas :attribute yra būtinas, nebent :other yra :values.',
    'required_with' => 'Laukas :attribute būtinas, kai yra :values.',
    'required_with_all' => 'Laukas :attribute būtinas, kai yra :values.',
    'required_without' => 'Laukas :attribute būtinas, kai :values ​​nėra.',
    'required_without_all' => 'Laukas :attribute būtinas, kai nėra nė vienos iš :reikšmių.',
    'prohibited' => 'Laukas :attribute draudžiamas.',
    'prohibited_if' => 'Laukas :attribute yra draudžiamas, kai :other yra :value.',
    'prohibited_unless' => 'Laukas :attribute yra draudžiamas, nebent :other yra :values.',
    'prohibits' => 'Laukas :attribute draudžia būti :other.',
    'same' => ':attribute ir :other turi sutapti.',
    'dydis' => [
        'numeric' => ':attribute turi būti :dydis.',
        'file' => 'Attribute turi būti :dydis kilobaitų.',
        'string' => ':attribute turi būti :size simbolių.',
        'array' => 'Attribute turi būti :size elementai.',
    ],
    'starts_with' => 'Atributas :attribute turi prasidėti vienu iš šių: :values.',
    'string' => ':attribute turi būti eilutė.',
    'timezone' => ':attribute turi būti tinkama laiko juosta.',
    'unique' => 'Atributas :attribute jau buvo paimtas.',
    'uploaded' => 'Nepavyko įkelti :attribute.',
    'url' => ':attribute turi būti galiojantis URL.',
    'uuid' => ':attribute turi būti galiojantis UUID.',

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
