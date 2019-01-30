<script src="{{asset('plugins/layer/layer.js')}}"></script>
<script>
    function delData(obj,id) {
        //询问框
        layer.confirm('确认需要删除该数据吗？', {
            btn: ['确认','取消'] //按钮
        }, function(){
            $.post("{{$beseUrl}}/"+id,{"_method":"DELETE","_token":"{{csrf_token()}}"},function (data) {
                if(!data.err_code){
                    if("{{$jumpUrl or ''}}"){
                        location.href = "{{$jumpUrl or ''}}";
                    }else{
                        $(obj).parents('tr').eq(0).remove();
                    }

                    layer.msg(data.err_msg, {icon: 1});
                }
            },'json');
        }, function(){

        });
    }
</script>