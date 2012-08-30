<?php 

return array(

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

	"accepted"       => ":attribute ������ �� ���������.",
	"active_url"     => ":attribute ��� ����� ������ URL.",
	"after"          => ":attribute ������ �� ����� ���������� ���� ��� :date.",
	"alpha"          => ":attribute ������ �� �������� ���� ����������.",
	"alpha_dash"     => ":attribute ������ �� �������� ���� ����������, ��������, and ������.",
	"alpha_num"      => ":attribute ������ �� �������� ���� �������������  ��������.",
	"array"          => ":attribute ������ �� ���� �������.",
	"before"         => ":attribute ������ �� ����� ���������� ���� ��� :date :date.",
	"between"        => array(
		"numeric" => ":attribute ������ �� ����� :min - :max.",
		"file"    => ":attribute ������ �� ����� :min - :max kilobytes.",
		"string"  => ":attribute ������ �� ����� :min - :max ����������.",
	),
	"confirmed"      => ":attribute: � ����������� ��� ���������.",
	"count"          => ":attribute ������ �� ���� ������� :count ���������� ��������.",
	"countbetween"   => ":attribute ������ �� ���� :min - :max ���������� ��������.",
	"countmax"       => ":attribute ������ �� ���� �������� ��� :max ���������� ��������.",
	"countmin"       => ":attribute ������ �� ���� �� �������� :min ���������� ��������.",
	"different"      => ":attribute ��� :other ������ �� ����� �����������.",
	"email"          => ":attribute: � ����� ��� ����� �����.",
	"exists"         => ":attribute ��� ����� ������.",
	"image"          => ":attribute ������ �� ����� ������.",
	"in"             => "selected ��� ����� ������.",
	"integer"        => ":attribute ������ �� ����� �������.",
	"ip"             => ":attribute ������ �� ����� ������ ��������� IP.",
	"match"          => ":attribute: � ����� ��� ����� �����.",
	"max"            => array(
		"numeric" => ":attribute ������ �� ����� ��������� ��� :max.",
		"file"    => ":attribute ������ �� ����� ��������� ��� :max kilobytes.",
		"string"  => ":attribute ������ �� ����� ��������� ��� :max ����������.",
	),
	"mimes"          => ":attribute: ������ �� ����� ������ �����: :values.",
	"min"            => array(
		"numeric" => ":attribute: �� �������� �����: :min.",
		"file"    => ":attribute ������ �� ���� �� �������� :min kilobytes.",
		"string"  => ":attribute ������ �� ���� �� �������� :min ����������.",
	),
	"not_in"         => "�� ���������� :attribute ��� ����� ������.",
	"numeric"        => ":attribute ������ �� ����� �������.",
	"required"       => ":attribute ������ �� �����������.",
	"same"           => ":attribute ��� :other ������ �� ����� ����.",
	"size"           => array(
		"numeric" => ":attribute ������ �� ����� :size.",
		"file"    => ":attribute ������ �� ����� :size kilobyte.",
		"string"  => ":attribute ������ �� ����� :size ����������.",
	),
	"unique"         => ":attribute ��������������� ���.",
	"url"            => ":attribute: � ����� ��� ����� �����.",

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