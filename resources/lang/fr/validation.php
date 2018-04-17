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
    
    'accepted'             => ':attribute doit être accepté(e).',
    'active_url'           => ':attribute n\'est pas un URL valide.',
    'after'                => ':attribute doit être une date postérieure à :date.',
    'alpha'                => ':attribute ne doit contenir que des lettres.',
    'alpha_dash'           => ':attribute ne doit contenir que des lettres, des chiffres et tirets.',
    'alpha_num'            => ':attribute ne doit contenir que des lettres et des chiffres.',
    'array'                => ':attribute doit être un tableau.',
    'before'               => ':attribute doit être une date antérieure à :date.',
    'between'              => [
        'numeric' => ':attribute doit être située entre :min et :max.',
        'file'    => ':attribute doit avoir une taille entre :min et :max kilooctets.',
        'string'  => ':attribute doit avoir une longueur entre :min et :max caractères.',
        'array'   => ':attribute doit contenir entre :min et :max éléments.',
    ],
    'boolean'              => 'Le champ :attribute doit avoir une valeur Vrai ou Faux.',
    'confirmed'            => ':attribute et sa confirmation ne correspondent pas.',
    'date'                 => ':attribute n\'est pas une date valide.',
    'date_format'          => ':attribute ne correspond pas au :format.',
    'different'            => ':attribute et :other doivent être différents.',
    'digits'               => ':attribute doit contenir :digits chiffres.',
    'digits_between'       => ':attribute doit contenir entre :min et :max chiffres.',
    'dimensions'           => ':attribute a une dimension invalide.',
    'distinct'             => 'Le champ :attribute a un doublon.',
    'email'                => ':attribute doit être un email valide.',
    'exists'               => 'La sélection :attribute n\'est pas valide.',
    'file'                 => ':attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute est obligatoire.',
    'image'                => ':attribute doit être une image.',
    'in'                   => 'La sélection :attribute est invalide.',
    'in_array'             => 'Le champ :attribute n\existe pas dans :other.',
    'integer'              => ':attribute doit être un entier.',
    'ip'                   => ':attribute doit être une adresse IP valide.',
    'json'                 => ':attribute doit être un JSON valide.',
    'max'                  => [
        'numeric' => ':attribute n\'est peut être pas supérieur à :max.',
        'file'    => ':attribute n\'a peut être une taille de plus de :max kilooctets.',
        'string'  => ':attribute n\'a peut être pas plus de :max caractères.',
        'array'   => ':attribute ne contient peut-être pas plus de :max éléments.',
    ],
    'mimes'                => ':attribute doit être un fichier de l\'un des types suivants: :values.',
    'mimetypes'            => ':attribute doit être un fichier de l\'un des types suivants: :values.',
    'min'                  => [
		'numeric' => ':attribute doit avoir une valeur d\'au moins :min.',
		'file'    => ':attribute doit avoir une taille d\au moins :min kilooctets.',
		'string'  => ':attribute doit contenir au moins :min caractères.',
		'array'   => ':attribute doit contenir au moins :min éléments.',
    ],
    'not_in'               => 'La sélection :attribute est invalide.',
    'numeric'              => ':attribute doit être un nombre.',
    'present'              => 'Le champ :attribute est présent.',
    'regex'                => ':attribute a un format invalide.',
    'required'             => 'Le champ :attribute est obligatoire.',
    'required_if'          => 'Le champ :attribute est obligatoire quand :other est :value.',
    'required_unless'      => 'Le champ :attribute est obligatoire sauf si :other est inclus dans :values.',
    'required_with'        => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all'    => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_without'     => 'Le champ :attribute est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est obligatoire quand aucun :values n\'est présent.',
    'same'                 => ':attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit être :size.',
        'file'    => ':attribute doit être :size kilooctets.',
        'string'  => ':attribute doit être :size characters.',
        'array'   => ':attribute coit contenir :size élément.',
    ],
    'string'               => ':attribute doit être une chaîne de caractères.',
    'timezone'             => ':attribute doit être un fuseau horaire valide.',
    'unique'               => ':attribute est déjà utilisé.',
    'uploaded'             => 'Le chargement de :attribute a échoué.',
    'url'                  => ':attribute a un format invalide.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
