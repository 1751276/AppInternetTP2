function getPlaces() {
    $.ajax({
        type: 'GET',
        url: urlToRestApi,
        dataType: "json",
        success:
                function (places) {
                    var placeTable = $('#placeData');
                    placeTable.empty();
                    var count = 1;
                    $.each(places.data, function (key, value)
                    {
                        var editDeleteButtons = '</td><td>' +
                                '<a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editPlace(' + value.id + ')"></a>' +
                                '<a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm(\'Are you sure to delete data?\') ? placeAction(\'delete\', ' + value.id + ') : false;"></a>' +
                                '</td></tr>';
                        placeTable.append('<tr><td>' + count + '</td><td>' + value.name + '</td><td>' + editDeleteButtons);
                        count++;
                    });

                }
    });
}

/* Function takes a jquery form
 and converts it to a JSON dictionary */
function convertFormToJSON(form) {
    var array = $(form).serializeArray();
    var json = {};

    $.each(array, function () {
        json[this.name] = this.value || '';
    });

    return json;
}

/*
 $('#placeAddForm').submit(function (e) {
 e.preventDefault();
 var data = convertFormToJSON($(this));
 alert(data);
 console.log(data);
 });
 */

function placeAction(type, id) {
    id = (typeof id == "undefined") ? '' : id;
    var statusArr = {add: "added", edit: "updated", delete: "deleted"};
    var requestType = '';
    var placeData = '';
    var ajaxUrl = urlToRestApi;
    if (type == 'add') {
        requestType = 'POST';
        placeData = convertFormToJSON($("#addForm").find('.form'));
    } else if (type == 'edit') {
        requestType = 'PUT';
        placeData = convertFormToJSON($("#editForm").find('.form'));
    } else {
        requestType = 'DELETE';
        ajaxUrl = ajaxUrl + "/" + id;
    }
    
    $.ajax({
        type: requestType,
        url: ajaxUrl,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(placeData),
        success: function (msg) {
            if (msg) {
                alert('Place data has been ' + statusArr[type] + ' successfully.');
                getPlace();
                $('.form')[0].reset();
                $('.formData').slideUp();
            } else {
                alert('Some problem occurred, please try again.');
            }
        }
    });
}
