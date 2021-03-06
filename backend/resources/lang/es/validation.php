<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Custom Validation (from Rules) Language Lines
    |--------------------------------------------------------------------------
    */
    'validurl'                 => 'Algunos caracteres no son válidos',
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => ':attribute debe ser aceptado',
    'active_url'           => ':attribute no es una URL válida',
    'after'                => ':attribute debe ser una fecha posterior a :date',
    'after_or_equal'       => ':attribute debe ser una fecha posterior o igual a :date',
    'alpha'                => ':attribute sólo debe contener letras',
    'alpha_dash'           => ':attribute sólo debe contener letras, números y guiones',
    'alpha_num'            => ':attribute sólo debe contener letras y números',
    'array'                => ':attribute debe ser un conjunto',
    'before'               => ':attribute debe ser una fecha anterior a :date',
    'before_or_equal'      => ':attribute debe ser una fecha anterior o igual a :date',
    'between'              => [
        'numeric' => 'El campo :attribute tiene que estar entre :min - :max',
        'file'    => 'El campo :attribute debe pesar entre :min - :max kilobytes',
        'string'  => 'El campo :attribute tiene que tener entre :min - :max caracteres',
        'array'   => 'El campo :attribute tiene que tener entre :min - :max ítems',
    ],
    'boolean'              => 'El campo :attribute debe tener un valor verdadero o falso',
    'confirmed'            => 'La confirmación de :attribute no coincide',
    'date'                 => ':attribute no es una fecha válida',
    'date_format'          => ':attribute no corresponde al formato :format',
    'different'            => ':attribute y :other deben ser diferentes',
    'digits'               => ':attribute debe tener :digits dígitos',
    'digits_between'       => ':attribute debe tener entre :min y :max dígitos',
    'dimensions'           => 'Las dimensiones de la imagen :attribute no son válidas',
    'distinct'             => 'El campo :attribute contiene un valor duplicado',
    'email'                => 'El :attribute no es válido',
    'exists'               => 'El :attribute no es válido',
    'file'                 => 'El campo :attribute debe ser un archivo',
    'filled'               => 'El campo :attribute es obligatorio',
    'image'                => ':attribute debe ser una imagen',
    'in'                   => 'El :attribute no es válido',
    'in_array'             => 'El campo :attribute no existe en :other',
    'integer'              => 'El campo :attribute debe ser un número entero',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida',
    'ipv4'                 => 'El campo :attribute debe ser un dirección IPv4 válida',
    'ipv6'                 => 'El campo :attribute debe ser un dirección IPv6 válida',
    'json'                 => 'El campo :attribute debe tener una cadena JSON válida',
    'max'                  => [
        'numeric' => 'El campo :attribute no debe ser mayor a :max',
        'file'    => 'El campo :attribute no debe ser mayor que :max kilobytes',
        'string'  => 'El campo :attribute no debe ser mayor que :max caracteres',
        'array'   => 'El campo :attribute no debe tener más de :max elementos',
    ],
    'invalid'              => 'Algunos datos no son válidos',
    'mimes'                => ':attribute debe ser un archivo con formato: :values',
    'mimetypes'            => ':attribute debe ser un archivo con formato: :values',
    'min'                  => [
        'numeric' => 'El tamaño de :attribute debe ser de al menos :min',
        'file'    => 'El tamaño de :attribute debe ser de al menos :min kilobytes',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres',
        'array'   => 'el campo :attribute debe tener al menos :min elementos',
    ],
    'not_in'               => ':attribute no es válido',
    'numeric'              => ':attribute debe ser numérico',
    'present'              => 'El campo :attribute debe estar presente',
    'regex'                => 'El formato de :attribute no es válido',
    'required'             => 'El campo :attribute es obligatorio',
    'required_if'          => 'El campo :attribute es obligatorio cuando :other es :value',
    'required_unless'      => 'El campo :attribute es obligatorio a menos que :other esté en :values',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values está presente',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values estén presentes',
    'same'                 => ':attribute y :other deben coincidir',
    'size'                 => [
        'numeric' => 'El tamaño de :attribute debe ser :size',
        'file'    => 'El tamaño de :attribute debe ser :size kilobytes',
        'string'  => 'El campo :attribute debe contener :size caracteres',
        'array'   => 'El campo :attribute debe contener :size elementos',
    ],
    'string'               => 'El campo :attribute debe ser una cadena de caracteres',
    'timezone'             => 'El :attribute debe ser una zona válida',
    'unique'               => 'El :attribute ya ha sido registrado',
    'uploaded'             => 'Subir :attribute ha fallado',
    'url'                  => 'El formato :attribute no es válido',

    // custom invalid
    'invalid_credentials'  => 'El email o la contraseña no son válidos',
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
        'password' => [
            'min' => 'La :attribute debe contener más de :min caracteres',
            'incorrect' => 'La contraseña es incorrecta',
        ],
        'name' => [
            'unique' => 'El :attribute ya ha sido registrado',
        ],
        'email' => [
            'unique' => 'El :attribute ya ha sido registrado',
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

    'attributes'           => [
        'name'                  => 'nombre',
        'username'              => 'usuario',
        'names'                 => 'nombres',
        'surnames'              => 'apellidos',
        'email'                 => 'correo electrónico',
        'first_name'            => 'nombre',
        'last_name'             => 'apellido',
        'password'              => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'city'                  => 'ciudad',
        'country'               => 'país',
        'address'               => 'dirección',
        'phone'                 => 'teléfono',
        'mobile'                => 'móvil',
        'age'                   => 'edad',
        'sex'                   => 'sexo',
        'gender'                => 'género',
        'year'                  => 'año',
        'month'                 => 'mes',
        'day'                   => 'día',
        'hour'                  => 'hora',
        'minute'                => 'minuto',
        'second'                => 'segundo',
        'title'                 => 'título',
        'content'               => 'contenido',
        'body'                  => 'contenido',
        'description'           => 'descripción',
        'excerpt'               => 'extracto',
        'date'                  => 'fecha',
        'time'                  => 'hora',
        'subject'               => 'asunto',
        'message'               => 'mensaje',
        'store_url'             => 'dirección web',
        'doc_num'               => 'número de documento',
        'role_id'               => 'rol',
        'activated'             => 'activado',
        'new_password'             => 'nueva contraseña',
    ],

];
