<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validación del idioma
	|--------------------------------------------------------------------------
	|
        | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
        | La clase validadora. Algunas de estas reglas tienen múltiples versiones tales
        | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes aquí.
	|
	*/


	'accepted' => 'The field :attribute must be accepted.',
    'active_url' => 'The :attribute field is not a valid URL.',
    'after' => 'The :attribute field must be a date after :date.',
    'after_or_equal' => 'The :attribute field must be a date after or equal to :date.',
    'alpha' => 'The :attribute field can only contain letters.',
    'alpha_dash' => 'The :attribute field can only contain letters, numbers and hyphens.',
    'alpha_num' => 'The :attribute field can only contain letters and numbers.',
    'array' => 'The :attribute field must be an array.',
    'before' => 'The :attribute field must be a date before :date.',
    'before_or_equal' => 'The :attribute field must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute field must be between :min - :max.',
        'file' => 'The :attribute field must be between :min - :max kilobytes.',
        'string' => 'The :attribute field must be between :min - :max characters.',
        'array' => 'The :attribute field must have between :min and :max elements.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation field does not match.',
    'date' => 'The field :attribute is not a valid date.',
    'date_equals' => 'The :attribute field must be a date equal to :date.',
    'date_format' => 'The field :attribute does not correspond to the format :format.',
    'different' => 'The :attribute and :other fields must be different.',
    'digits' => 'The :attribute field must be :digits digits.',
    'digits_between' => 'The :attribute field must have between :min and :max digits.',
    'dimensions' => 'The field :attribute does not have a valid dimension.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The format of the :attribute is invalid.',
    'ends_with' => 'The :attribute field must end with one of the values: :values.',
    'exists' => 'The selected :attribute field is invalid.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'The :attribute field is required.',
    'gt' => [
        'numeric' => 'The :attribute field must be greater than :value.',
        'file' => 'The :attribute field must be greater than :value kilobytes.',
        'string' => 'The :attribute field must be greater than :value characters.',
        'array' => 'The :attribute field can have up to :value elements.',
    ],
    'gte' => [
        'numeric' => 'The :attribute field must be greater than or equal to :value.',
        'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute field must be greater than or equal to :value characters.',
        'array' => 'The :attribute field can have :value elements or more.',
    ],
    'image' => 'The :attribute field must be an image.',
    'in' => 'The selected :attribute field is invalid.',
    'in_array' => 'The field :attribute does not exist in :other.',
    'integer' => 'The :attribute field must be an integer.',
    'ip' => 'The :attribute field must be a valid IP address.',
    'ipv4' => 'The :attribute field must be a valid IPv4 address.',
    'ipv6' => 'The :attribute field must be a valid IPv6 address.',
    'json' => 'The :attribute field must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute field must be less than :max.',
        'file' => 'The :attribute field must be less than :max kilobytes.',
        'string' => 'The :attribute field must be less than :max characters.',
        'array' => 'The :attribute field can have up to :max elements.',
    ],
    'lte' => [
        'numeric' => 'The :attribute field must be less than or equal to :max.',
        'file' => 'The :attribute field must be less than or equal to :max kilobytes.',
        'string' => 'The :attribute field must be less than or equal to :max characters.',
        'array' => 'The :attribute field cannot have more than :max elements.',
    ],
    'max' => [
        'numeric' => 'The :attribute field must be less than :max.',
        'file' => 'The :attribute field must be less than :max kilobytes.',
        'string' => 'The :attribute field must be less than :max characters.',
        'array' => 'The :attribute field can have up to :max elements.',
    ],
    'mimes' => 'The :attribute field must be a file of type: :values.',
    'mimetypes' => 'The :attribute field must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute field must have at least :min.',
        'file' => 'The :attribute field must have at least :min kilobytes.',
    ],

	/*
	|--------------------------------------------------------------------------
	| Validación del idioma personalizado
	|--------------------------------------------------------------------------
	|
	|	Aquí puede especificar mensajes de validación personalizados para atributos utilizando el
	| convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
	| especifique una línea de idioma personalizada específica para una regla de atributo dada.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name'  => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Atributos de validación personalizados
	|--------------------------------------------------------------------------
	|
        | Las siguientes líneas de idioma se utilizan para intercambiar los marcadores de posición de atributo.
        | con algo más fácil de leer, como la dirección de correo electrónico.
        | de "email". Esto simplemente nos ayuda a hacer los mensajes un poco más limpios.
	|
	*/

	'attributes' => [],

];
