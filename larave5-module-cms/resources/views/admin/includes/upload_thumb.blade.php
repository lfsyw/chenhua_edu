<button type="button" class="btn btn-danger" onclick="f_file.click()">
    <i class="fa fa-cloud-upload"></i> 上传文件
</button>
<input type="file" id="f_file" name="thumb-file" onchange="uploadFile()" class="hidden"/>
<button type="button" class="btn btn-primary @empty($url) hidden @endisset" id="thumbBtn"
        data-toggle="modal" data-target=".bs-thumb-modal-sm">预览</button>
<div class="modal fade bs-thumb-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title">图片预览</h5>
        </div>
        <div class="modal-content">
            <img src="{{$url or ''}}" id="thumbImg" style="max-width: 100%">
        </div>
    </div>
</div>

<script src="{{asset('plugins/ajaxfileupload/ajaxFileUpload.js')}}"></script>
<script type="text/javascript">
    function uploadFile() {
        ajaxFileUpload();
    }
    function ajaxFileUpload() {
        $.ajaxFileUpload
        ({
            url: "{{asset('component/upload/thumb')}}", //用于文件上传的服务器端请求地址
            secureuri: false, //是否需要安全协议，一w般设置为false
            fileElementId: 'f_file', //文件上传域的ID
            dataType: 'json', //返回值类型 一般设置为json
            data:{"_token":"{{csrf_token()}}"},
            success: function (response, status)  //服务器成功响应处理函数
            {
                console.log(response);
                if (typeof (response.err_code) != 'undefined') {
                    if ( response.err_code != 0) {
                        layer.alert(response.err_msg,{icon:5});
                    }else{
                        $("#thumbBtn").removeClass('hidden');
                        $("#thumbImg").attr("src", response.data.url);
                        $("#thumbInp").val(response.data.url);
                    }
                }else{
                    layer.alert("未知错误.",{icon:5});
                }
            },
            error: function (data, status, e)//服务器响应失败处理函数
            {
                layer.alert(e,{icon:5});
            }
        });
        return false;
    }
</script>