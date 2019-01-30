<?php
namespace App\Repository;

use App\Models\CommonOptionModel;

class CommonOption extends BaseRepository
{
    public static function getAll()
    {
        $options = CommonOptionModel::orderBy('order','ASC')->get();
        foreach ($options as &$option){
            $param = json_decode($option->param,true);
            $html = '';
            switch ($param['field_type']){
                case 'input':
                    $html = "<input type='text' class='form-control' name='option[{$option->id}]' value='{$option->value}'>";
                    break;
                case 'textarea':
                    $html = "<textarea class='form-control' name='option[{$option->id}]'>{$option->value}</textarea>";
                    break;
                case 'radio':
                    $value_arr = explode('|',$param['field_value']);
                    foreach ($value_arr as $value){
                        $radio = explode(':',$value);
                        $checked = $option->value==$radio[0] ? 'checked':'';
                        $html .= "<label class='checkbox-inline'><input type='radio' name='option[{$option->id}]' value='{$radio[0]}' {$checked}> {$radio[1]}</label>";
                    }
                    break;
            }
            $option->html = $html;
        }
        return $options;
    }


    public static function createOption($data)
    {
        CommonOptionModel::create([
            "type"   => CommonOptionModel::baseOption,
            "title"  => $data->title,
            "name"   => $data->name,
            "param"  => json_encode([
                "field_type"  => $data->field_type,
                "field_value" => $data->field_value,
            ]),
            "order"  => $data->order,
            "remark" => $data->remark ?: '',
        ]);
    }

    public static function getOptionBy($id)
    {
        $option = CommonOptionModel::findOrFail($id);
        $param_arr = json_decode($option->param,true);
        $option->field_type = $param_arr['field_type'];
        $option->field_value = $param_arr['field_value'];
        return $option;
    }

    public static function updateOption($data,$id)
    {
        CommonOptionModel::where('id',$id)->update([
            "title"  => $data->title,
            "name"   => $data->name,
            "param"  => json_encode([
                "field_type"  => $data->field_type,
                "field_value" => $data->field_value,
            ]),
            "order"  => $data->order,
            "remark" => $data->remark ?: '',
        ]);
    }

    public static function updateValue($data)
    {
        foreach ($data->option as $k=>$v){
            CommonOptionModel::where('id',$k)->update(['value'=>$v]);
        }
        return true;
    }

}