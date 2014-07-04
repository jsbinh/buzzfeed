function deleteContacts(id)
{
    var r = confirm(" Bạn có chắc chắn xóa không ? ");

    if (r == true)
    {
        var data = "id=" + id;

        $.ajax({
            type: "Contact",
            data: data, // Form variables
            dataType: "json", // Expected response type
            // $.post(baseurl+"admin/"+module+"/delete/", params, function(data) {
            url: "admin/contacts/delete/" + id, // URL to request
            success: function(response) {
                window.location = "contacts";
            },
            error: function() {
                window.location = "contacts";
            }
        });


        return false;
    }
}

/*
 * deleteallContacts(page)
 */
function deleteallContacts(page)
{
    var count = 0;
    $.each($("input[name='cbID']:checked"), function() {
        count++;
    });
    if (count == 0)
    {
        alert('Bạn chưa chọn tin để xóa');
        return;
    }
    var r = confirm(" Bạn có chắc chắn xóa không ? ");
    if (r == true)
    {
        $.each($("input[name='cbID']:checked"), function() {

            id = $(this).attr('value');

            var data = "id=" + id;
            $.ajax({
                type: "Contact",
                async: false,
                data: data, // Form variables
                dataType: "json", // Expected response type
                url: "contacts/delete/" + id, // URL to request
                success: function(response) {

                },
                error: function() {

                }
            });

        });

        window.location = "contacts/index/page:" + page;
    }
}


function deleteCandidates(id)
{
    var r = confirm(" Bạn có chắc chắn xóa không ? ");
    if (r == true)
    {
        var data = "id=" + id;
        $.ajax({
            type: "Candidates",
            data: data, // Form variables
            dataType: "json", // Expected response type
            url: "candidates/delete/" + id, // URL to request
            success: function(response) {
                window.location = "candidates";
            },
            error: function() {
                window.location = "candidates";
            }
        });
        return false;
    }
}


function deleteallCandidates(page)
{
    var count = 0;
    $.each($("input[name='cbID']:checked"), function() {
        count++;
    });
    if (count == 0)
    {
        alert('Bạn chưa chọn tin để xóa');
        return;
    }

    var r = confirm(" Bạn có chắc chắn xóa không ? ");
    if (r == true)
    {
       
        $.each($("input[name='cbID']:checked"), function() {

            // deletecontact($(this).attr('value'));
            id = $(this).attr('value');

            var data = "id=" + id;
            $.ajax({
                type: "Candidates",
                async: false,
                data: data, // Form variables
                dataType: "json", // Expected response type
                url: "candidates/delete/" + id, // URL to request
                success: function(response) {
                },
                error: function() {
                }
            });
        });
        //window.location ="candidates/index/page:" + page;
    }
}


function deleteAllNews(page)
{
    var count = 0;
    $.each($("input[name='cbID']:checked"), function() {
        count++;
    });
    if (count == 0)
    {
        alert('Bạn chưa chọn tin để xóa');
        return;
    }

    var r = confirm(" Bạn có chắc chắn xóa không ? ");
    if (r == true)
    {
        $.each($("input[name='cbID']:checked"), function() {

            // deletecontact($(this).attr('value'));
            id = $(this).attr('value');

            var data = "id=" + id;
            $.ajax({
                type: "News",
                async: false,
                data: data, // Form variables
                dataType: "json", // Expected response type
                url: "news/delete/" + id, // URL to request
                success: function(response) {
                },
                error: function() {
                }
            });
        });
        //window.location ="candidates/index/page:" + page;
    }
}



$(function() {

    $("#selectall").click(function() {
        $('.case').attr('checked', this.checked);
    });

    $(".case").click(function() {

        if ($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }

    });
});