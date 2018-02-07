export function getRemote(url,postData,okFun,errFun) {
    $.ajax({
        type:"POST",
        url:url,
        cache:false,
        dataType:'JSON',
        data:postData,
        success:function (data) {
            if(data && data.ret ==1){
                okFun(data);
            }
        },
        error:function () {
            errFun();
        }
    });
}