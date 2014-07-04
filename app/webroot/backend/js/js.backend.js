$(function() {
    $('.cb_item, #cb_all').prop('checked', false);
});

function deleteItem(module) {
    var params = [];

    var count = 0;
    $('.cb_item:checked').each(function(i, e) {
        count++;
        console.log(e.value);
        params.push(e.value);

    })
    if (count == 0) {
        alert("Bạn chưa chọn mục để xóa.");
        return false;
    }
    var r = confirm("Bạn có đồng ý xóa không?");


    if (r) {

        $.post(BASE + module + "/delete/", {
            delete_id: params

        }, function(data) {
            if (data == '0') {
                alert('Khong the xoa id');
            }
            window.location.reload();

        });
        return false;
    }
}

$(document).ready(function() {
    $("#cb_all").click(function() {
        var checked_status = this.checked;
        $(".cb_item").each(function() {
            this.checked = checked_status;
        })
    });

    $(".cb_item").click(function() {
        var checked_status = this.checked;
        if (!checked_status) {
            $("#cb_all").attr('checked', checked_status);
        }
        else {
            var total = $(".cb_item").length;
            var current = $(".cb_item:checked").length;
            if (total == current)
                $("#cb_all").attr('checked', true);
        }
    })

});