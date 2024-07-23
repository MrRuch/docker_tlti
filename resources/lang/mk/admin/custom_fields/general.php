<?php

return [
    'custom_fields'		        => 'Полиња по желба',
    'manage'                    => 'Manage',
    'field'		                => 'Поле',
    'about_fieldsets_title'		=> 'За Fieldsets',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => 'Енкриптирајте ја вредноста на ова поле во базата на податоци',
    'encrypt_field_help'      => 'ПРЕДУПРЕДУВАЊЕ: Шифрирањето на поле прави полето да не може да се пребарува.',
    'encrypted'      	        => 'Енкриптирано',
    'fieldset'      	        => 'Fieldset/Група на полиња',
    'qty_fields'      	      => 'Qty Fields',
    'fieldsets'      	        => 'Fieldsets/Групи на полиња',
    'fieldset_name'           => 'Име на Fieldset',
    'field_name'              => 'Име на поле',
    'field_values'            => 'Вредности на поле',
    'field_values_help'       => 'Додајте изборни опции, по една на линија. Празните линии, освен првата линија, ќе бидат игнорирани.',
    'field_element'           => 'Форма на елемент',
    'field_element_short'     => 'Елемент',
    'field_format'            => 'Формат',
    'field_custom_format'     => 'Прилагоден формат на регесив',
    'field_custom_format_help'     => 'Ова поле ви овозможува да користите регесив ("regex") за валидација. Треба да започне со "regex:" - на пример, за потврда дека прилагодената вредност на полето содржи валиден IMEI (15 нумерички цифри), би користеле <code>regex: / ^[0-9]{15}$ /</code>.',
    'required'   		          => 'Потребно',
    'req'   		              => 'Req.',
    'used_by_models'   		    => 'Користено по модели',
    'order'   		            => 'Подредување',
    'create_fieldset'         => 'Нов Fieldset',
    'update_fieldset'         => 'Update Fieldset',
    'fieldset_does_not_exist'   => 'Fieldset :id does not exist',
    'fieldset_updated'         => 'Fieldset updated',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'Ново прилагодено поле',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => 'Вредноста на ова поле е емкриптирана во базата на податоци. Само административните корисници ќе можат да ја видат декриптираната вредност',
    'show_in_email'     => 'Вклучете ја вредноста на ова поле во е-поштата испратена до корисникот? Шифрираните полиња не можат да бидат вклучени во е-пошта.',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Reorder',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unique',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
    'auto_add_to_fieldsets' => 'Automatically add this to every new fieldset',
    'add_to_preexisting_fieldsets' => 'Add to any existing fieldsets',
    'show_in_listview' => 'Show in list views by default. Authorized users will still be able to show/hide via the column selector.',
    'show_in_listview_short' => 'Show in lists',

];
