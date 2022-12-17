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

    'accepted' => 'Pole :attribute musi być zaakceptowane.',
    'accepted_if' => 'Pole :attribute musi być zaakceptowane gdy :other jest :value.',
    'active_url' => 'Pole :attribute nie jest poprawnym adresem URL.',
    'after' => 'Pole :attribute musi być datą późniejszą niż :date.',
    'after_or_equal' => 'Pole :attribute musi być datą późniejszą lub równą :date.',
    'alpha' => 'Pole :attribute musi zawierać tylko litery.',
    'alpha_dash' => 'Pole :attribute musi zawierać tylko litery, liczby, myśliniki and podkreślenia.',
    'alpha_num' => 'Pole :attribute musi zawierać tylko litery i liczby.',
    'array' => 'Pole :attribute musi być tablicą.',
    'before' => 'Pole :attribute musi być datą wcześniejszą niż :date.',
    'before_or_equal' => 'Pole :attribute musi być datą wcześniejszą lub równą :date.',
    'between' => [
        'array' => 'Pole :attribute musi zawierać pomiędzy :min i :max elementów.',
        'file' => 'Pole :attribute musi zawierać pomiędzy :min and :max kilobajtów.',
        'numeric' => 'Pole :attribute musi zawierać pomiędzy liczby :min and :max.',
        'string' => 'Pole :attribute musi zawierać pomiędzy :min and :max znaków.',
    ],
    'boolean' => 'Pole :attribute musi być prawdą lub fałszem.',
    'confirmed' => 'Pole :attribute potwierdzenie nie pasuje.',
    'current_password' => 'Pole password jest niepoprawne.',
    'date' => 'Pole :attribute nie jest poprawną date.',
    'date_equals' => 'Pole :attribute musi być datą równą do :date.',
    'date_format' => 'Pole :attribute nie pasuje do formatu :format.',
    'declined' => 'Pole :attribute musi być odrzucone.',
    'declined_if' => 'Pole :attribute musi być odrzucone gdy :other równa się :value.',
    'different' => 'Pola :attribute i :other muszą być równe.',
    'digits' => 'Pole :attribute musi być :digits cyframi.',
    'digits_between' => 'Pole :attribute musi być cyframi pomiędzy :min i :max.',
    'dimensions' => 'Pole :attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
    'doesnt_end_with' => 'Pole :attribute nie może kończyć się jednym z poniższych: :values.',
    'doesnt_start_with' => 'Pole :attribute nie może zaczynać się od jednego z poniższych: :values.',
    'email' => 'Pole :attribute musi być poprawnym adresem email.',
    'ends_with' => 'Pole :attribute musi kończyć się jednym z poniższych: :values.',
    'enum' => 'Wybrane pole :attribute jest niepoprawne.',
    'exists' => 'Wybrane pole :attribute jest niepoprawne.',
    'file' => 'Pole :attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi mieć jakąś wartość.',
    'gt' => [
        'array' => 'Pole :attribute musi zawierać więcej niż :value elementów.',
        'file' => 'Pole :attribute musi być więszke niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być więszke niż :value.',
        'string' => 'Pole :attribute musi być więszke niż :value znaków.',
    ],
    'gte' => [
        'array' => 'Pole :attribute musi zawierać :value i więcej elementów.',
        'file' => 'Pole :attribute musi być więszke niż or equal to :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być więszke niż or equal to :value.',
        'string' => 'Pole :attribute musi być więszke niż or equal to :value znaków.',
    ],
    'image' => 'Pole :attribute musi być obrazem.',
    'in' => 'Wybrane pole :attribute jest nieprawidłowe.',
    'in_array' => 'Pole :attribute nie istnieje w :other.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'ip' => 'Pole :attribute musi być poprawnym adresem IP.',
    'ipv4' => 'Pole :attribute musi być poprawnym adresem IPv4.',
    'ipv6' => 'Pole :attribute musi być poprawnym adresem IPv6.',
    'json' => 'Pole :attribute musi być poprawnym formatem JSON.',
    'lowercase' => 'Pole :attribute musi być napisane małymi literami.',
    'lt' => [
        'array' => 'Pole :attribute musi zawierać mniej niż :value elementów.',
        'file' => 'Pole :attribute musi być mniejsze niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
        'string' => 'Pole :attribute musi mieć mniej niż :value znaków.',
    ],
    'lte' => [
        'array' => 'Pole :attribute nie może mieć mniej niż :value elementów.',
        'file' => 'Pole :attribute musi być mniejsze lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
        'string' => 'Pole :attribute musi mieć mniej lub tyle samo znaków: :value.',
    ],
    'mac_address' => 'Pole :attribute musi być poprawnym adresem MAC.',
    'max' => [
        'array' => 'Pole :attribute nie może mieć więcej niż :max elementów.',
        'file' => 'Pole :attribute nie może być większe niż :max kilobajtów.',
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'string' => 'Pole :attribute nie może być większe niż :max znaków.',
    ],
    'max_digits' => 'Pole :attribute nie może zawierać więcej niż :max cyfr.',
    'mimes' => 'Pole :attribute musi być plikiem typu: :values.',
    'mimetypes' => 'Pole :attribute musi być plikiem typu: :values.',
    'min' => [
        'array' => 'Pole :attribute musi mieć przynajmniej :min elementów.',
        'file' => 'Pole :attribute musi zawierać przynajmniej :min kilobajtów.',
        'numeric' => 'Pole :attribute musi zawierać przynajmniej :min.',
        'string' => 'Pole :attribute musi zawierać przynajmniej :min znaków.',
    ],
    'min_digits' => 'Pole :attribute musi mieć przynajmniej :min cyfr.',
    'multiple_of' => 'Pole :attribute musi być wielokrotnością :value.',
    'not_in' => 'Wybrane pole :attribute jest nieprawidłowe.',
    'not_regex' => 'Pole :attribute ma nieprawidłowy format.',
    'numeric' => 'Pole :attribute musi być numeryczne.',
    'password' => [
        'letters' => 'Pole :attribute musi zawieać przynajmniej jedną literę.',
        'mixed' => 'Pole :attribute musi zawieać przynajmniej jedną dużą i jedną małą literę.',
        'numbers' => 'Pole :attribute musi zawieać przynajmniej jedną liczbe.',
        'symbols' => 'Pole :attribute musi zawieać przynajmniej jeden symbol.',
        'uncompromised' => 'Wskazane pole :attribute pojawiło się w wycieku danych. Proszę wybrać inne :attribute.',
    ],
    'present' => 'Pole :attribute musi być obecne.',
    'prohibited' => 'Pole :attribute jest zabronione.',
    'prohibited_if' => 'Pole :attribute jest zabronione gdy :other wynosi :value.',
    'prohibited_unless' => 'Pole :attribute jest zabronione, chyba, że :other jest w :values.',
    'prohibits' => 'Pole :attribute zabrania :other być obecnym.',
    'regex' => 'Pole :attribute ma nieprawidłowy format.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_array_keys' => 'Pole :attribute musi zawierać wpisy dla: :values.',
    'required_if' => 'Pole :attribute jest wymagane gdy :other jest :value.',
    'required_if_accepted' => 'Pole :attribute jest wymagane gdy :other jest zaakceptowane.',
    'required_unless' => 'Pole :attribute jest wymagane, chyba, że :other jest w :values.',
    'required_with' => 'Pole :attribute jest wymagane gdy :values jest obecne.',
    'required_with_all' => 'Pole :attribute jest wymagane gdy :values są obecne.',
    'required_without' => 'Pole :attribute jest wymagane gdy :values nie jest obecne.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy :values jest obecne.',
    'same' => 'Pola :attribute i :other muszą do siebie pasować.',
    'size' => [
        'array' => 'Pole :attribute musi zawierać :size elementów.',
        'file' => 'Pole :attribute musi mieć :size kilobajtów.',
        'numeric' => 'Pole :attribute musi być :size.',
        'string' => 'Pole :attribute musi mieć :size znaków.',
    ],
    'starts_with' => 'Pole :attribute musi zaczynać się od jednego z poniższych: :values.',
    'string' => 'Pole :attribute musi być tekstem.',
    'timezone' => 'Pole :attribute musi mieć poprawą strefę czasową.',
    'unique' => 'Pole :attribute został już podjęte.',
    'uploaded' => 'Pole :attribute problem z załadowaniem.',
    'uppercase' => 'Pole :attribute musi zawirać duże litery.',
    'url' => 'Pole :attribute musi być poprawnym adresem URL.',
    'uuid' => 'Pole :attribute musi być poprawnym UUID.',

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
