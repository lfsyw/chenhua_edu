<?php

namespace App\Http\Controllers;


class BaseController extends Controller
{
    protected $data = [];
    protected $title = '';
    protected $tpl = '';

    public function title($title = '')
    {
        $this->title = $title;
        return $this;
    }

    public function tpl($tpl = '')
    {
        $this->tpl = $tpl;
        return $this;
    }

    public function render()
    {
        $this->data['title'] = $this->title;
        return view($this->tpl,$this->data);
    }

    public function returnMsg()
    {
        return ['err_code'=>0,'err_msg'=>'操作成功'];
    }

    public function returnJson($err_code,$err_msg,$data=[])
    {
        return ['err_code'=>$err_code,'err_msg'=>$err_msg,'data'=>$data];
    }
}