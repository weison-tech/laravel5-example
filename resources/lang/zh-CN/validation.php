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

	"accepted"             => " :attribute 必须被接受。",
	"active_url"           => " :attribute 是一个无效的URL。",
	"after"                => " :attribute 必须是 :date 之后的日期",
	"alpha"                => " :attribute 只能包含字母。",
	"alpha_dash"           => " :attribute 只能包含字母数字或下划线。",
	"alpha_num"            => " :attribute 只能包含字母或数字。",
	"array"                => " :attribute 必须是数组。",
	"before"               => " :attribute 必须是 :date 之前的日期。",
	"between"              => [
		"numeric" => " :attribute 必须介于 :min 到 :max 之间。",
		"file"    => " :attribute 必须介于 :min kb 到 :max kb 之间。",
		"string"  => " :attribute 必须介于 :min 字符到 :max 字符之间。",
		"array"   => " :attribute 必须有 :min 到 :max 个选项。",
	],
	"boolean"              => " :attribute 必须是bool值(true,false)",
	"confirmed"            => " :attribute 不正确。",
	"date"                 => " :attribute 不是有效的日期。",
	"date_format"          => " :attribute 和格式 :format 不匹配。",
	"different"            => " :attribute 和 :other 必须不相同。",
	"digits"               => " :attribute 必须是 :digits 数字。",
	"digits_between"       => " :attribute 必须介于 :min 和 :max 数字之间。",
	"email"                => " :attribute 必须为可用的邮件地址。",
	"filled"               => " :attribute 域为必填。",
	"exists"               => "选择的 :attribute 无效。",
	"image"                => " :attribute 必须为图片。",
	"in"                   => "选择的 :attribute 无效。",
	"integer"              => " :attribute 必须为整数。",
	"ip"                   => " :attribute 必须为有效的IP地址。",
	"max"                  => [
		"numeric" => " :attribute 不能超过最大值 :max 。",
		"file"    => " :attribute 不能超过 :max kb。",
		"string"  => " :attribute 不能超过 :max 个字符。",
		"array"   => " :attribute 不能超过 :max 个项。",
	],
	"mimes"                => " :attribute 必须为: :values 的文件类型。",
	"min"                  => [
		"numeric" => " :attribute 不能小于 :min 。",
		"file"    => " :attribute 不能小于 :min kb。",
		"string"  => " :attribute 不能小于 :min 个字符。",
		"array"   => " :attribute 至少 :min 个项。",
	],
	"not_in"               => "选择的 :attribute 无效。",
	"numeric"              => " :attribute 必须为数字。",
	"regex"                => " :attribute 格式无效。",
	"required"             => ":attribute 是必填字段",
	"required_if"          => "当 :other 的值为 :value 时， :attribute 是必填字段。 ",
	"required_with"        => "当值 :values 为当前时， :attribute 域必填。",
	"required_with_all"    => "当值 :values 为当前时， :attribute 域必填。",
	"required_without"     => "当值 :values 为非当前时， :attribute 域必填。",
	"required_without_all" => "当值 :values 没有一个为当前时， :attribute 域必填。",
	"same"                 => " :attribute 和 :other 必须匹配。",
	"size"                 => [
		"numeric" => " :attribute 必须为 :size 。",
		"file"    => " :attribute 必须为 :size kb。",
		"string"  => " :attribute 必须为 :size 个字符。",
		"array"   => " :attribute 必须包含 :size 个项。",
	],
	"unique"               => " :attribute 已经被使用了。",
	"url"                  => " :attribute 格式无效。",
    "tags"                 => "标签，用逗号隔开（没有空格），应该有50个字符。",
	"timezone"             => " :attribute 必须为一个有效的时区。",

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

	'attributes' => [
		"log" => "用户名或邮箱",
		"password" => "密码",
		"email" => "邮箱",
		"username" => "用户名",
		"name" => "姓名",
		"message" => "消息内容",
	],

];
