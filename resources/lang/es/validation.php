<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Líneas de idiomas de validación
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas contienen los mensajes de error por defecto usados
    | por la clase de validación. Algunas de estas reglas tienen varias versiones
    | como las reglas de tamaño. Siéntese libre de retocar cada una de los
    | mensajes que aparecen aquí.
    |
    */
    
    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute solo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute solo puede contener letras, números y guiones.',
    'alpha_num'            => 'El campo :attribute solo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'file'    => 'El campo :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe estar entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe estar entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo :attribute confirmación no coincide.',
    'date'                 => 'El campo :attribute no es una fecha válida.',
    'date_format'          => 'El campo :attribute no coincide con el formato :format.',
    'different'            => 'Los campos :attribute y :other deben ser diferentes.',
    'digits'               => 'El campo :attribute debe tener una longitud de :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe tener una longitud entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute tiene unas dimensiones no válidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'exists'               => 'El campo :attribute seleccionado no es válido.',
    'file'                 => 'El campo :attribute debe ser un fichero.',
    'filled'               => 'El campo :attribute debe tener un valor.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute seleccionado no es válido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El campo :attribute debe ser una cadena de caracteres JSON válida.',
    'max'                  => [
        'numeric' => 'El campo :attribute debe ser menor de :max.',
        'file'    => 'El campo :attribute debe ser menor de :max kilobytes.',
        'string'  => 'El campo :attribute debe ser menor de :max caracteres.',
        'array'   => 'El campo :attribute debe ser menor de :max elementos.',
    ],
    'mimes'                => 'El campo :attribute debe ser un fichero de los tipos: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un fichero de los tipos: :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'file'    => 'El campo :attribute debe ser al menos :min kilobyes.',
        'string'  => 'El campo :attribute debe ser al menos :min caracteres.',
        'array'   => 'El campo :attribute debe ser al menos :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado no es válido.',
    'numeric'              => 'El campo :attribute debe ser un número.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El campo :attribute no tiene un formato válido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other esté en :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values está presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ningún :values está presente.',
    'same'                 => 'El campo :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El campo :attribute debe ser :size kilobytes.',
        'string'  => 'El campo :attribute debe ser :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'string'               => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El campo :attribute debe ser una zona válida.',
    'unique'               => 'El campo :attribute ya ha sido establecido.',
    'uploaded'             => 'El campo :attribute no ha podido ser cargado.',
    'url'                  => 'El campo :attribute no tiene un formato válido.',

    /*
    |--------------------------------------------------------------------------
    | Líneas de idiomas de validación personalizadas
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar mensajes de validación personalizadas para los
    | atributos usando la convención "atributo.regla" para nombrar las líneas.
    | Esto hace que sea rápido especificar líneas de idiomas personalizadas
    | para una regla de atributo dada.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Mensaje personalizado',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Atributos de validación personalizados
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idiomas usadas para intercambiar atributos para
    | facilitar más la lectura, como la dirección de correo electrónico en
    | lugar de email. Esto nos ayuda a hacer los mensajes más claros.
    |
    */
    'attributes' => [],
];
