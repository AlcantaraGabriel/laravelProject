<?php 

return array(
    // Tradu��o portugu�s do Brasil

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"       => ":attribute deve ser aceito.",
	"active_url"     => ":attribute n�o � uma URL v�lida.",
	"after"          => ":attribute deve ser uma data ap�s :date.",
	"alpha"          => ":attribute s� pode conter letras.",
	"alpha_dash"     => ":attribute s� pode conter letras, n�meros e travess�es.",
	"alpha_num"      => ":attribute s� pode conter letras e n�meros.",
	"before"         => ":attribute deve ser uma data anterior a :date.",
	"between"        => array(
		"numeric" => ":attributedeve estar entre :min - :max.",
		"file"    => ":attribute deve ser entre :min - :max kilobytes.",
		"string"  => ":attribute deve ter entre :min - :max caracteres.",
	),
	"confirmed"      => "A :attribute confirma��o n�o coincide.",
	"different"      => ":attribute e :other devem ser diferentes.",
	"email"          => ":attribute formato inv�lido.",
	"exists"         => "O item selecionado :attribute � inv�lido.",
	"image"          => ":attribute deve ser uma imagem.",
	"in"             => "O item selecionado :attribute � inv�lido.",
	"integer"        => ":attribute deve ser um n�mero inteiro.",
	"ip"             => ":attribute deve ser um endere�o IP v�lido.",
	"match"          => ":attribute formato inv�lido.",
	"max"            => array(
		"numeric" => ":attribute deve ser menor que :max.",
		"file"    => ":attribute deve ser menor que :max kilobytes.",
		"string"  => ":attribute deve ter menos que :max caracteres.",
	),
	"mimes"          => ":attribute deve ser um arquivo do tipo :values.",
	"min"            => array(
		"numeric" => ":attribute deve ser pelo menos :min.",
		"file"    => ":attribute deve ter pelo menos :min kilobytes.",
		"string"  => ":attribute deve ter pelo menos :min caracteres.",
	),
	"not_in"         => "O item selecionado :attribute � inv�lido.",
	"numeric"        => ":attribute deve ser um n�mero.",
	"required"       => ":attribute campo � requerido.",
	"same"           => ":attribute e :other devem ser iguais.",
	"size"           => array(
		"numeric" => ":attribute deve ser :size.",
		"file"    => ":attribute deve ter :size kilobyte.",
		"string"  => ":attribute deve ter :size caracteres.",
	),
	"unique"         => ":attribute j� est� em uso e n�o pode ser atribu�do (unique).",
	"url"            => ":attribute formato inv�lido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(),

);