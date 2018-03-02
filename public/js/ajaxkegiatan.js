
    var url = "http://localhost:8080/blog/public/productajaxCRUD";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var kegiatan_id_kegiatan = $(this).val();
       
        $.get(url + '/' + kegiatan_id_kegiatan, function (data) {
            //success data
            console.log(data);
            $('#kegiatan_id_kegiatan').val(data.id_kegiatan);
            $('#nama_kegiatan').val(data.nama_kegiatan);
            $('#tahun_kegiatan').val(data.tahun_kegiatan);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmJumlahs').trigger("reset");
        $('#myModal').modal('show');
    });
    //delete product and remove it from list
    $(document).on('click','.delete-jumlah',function(){
        var kegiatan_id_kegiatan = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + kegiatan_id_kegiatan,
            success: function (data) {
                console.log(data);
                $("#kegiatan" + kegiatan_id_kegiatan).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    //create new product / update existing product
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
            nama_kegiatan: $('#nama_kegiatan').val(),
            tahun_kegiatan: $('#tahun_kegiatan').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var kegiatan_id_kegiatan = $('#kegiatan_id_kegiatan').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + kegiatan_id_kegiatan;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var product = '<tr id_kegiatan="kegiatan' + data.id_kegiatan + '"><td>' + data.id_kegiatan + '</td><td>' + data.nama_kegiatan + '</td><td>' + data.tahun_kegiatan + '</td>';
                kegiatan += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id_kegiatan + '">Edit</button>';
                kegiatan += ' <button class="btn btn-danger btn-delete delete-product" value="' + data.id_kegiatan + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#kegiatan-list').append(kegiatan);
                }else{ //if user updated an existing record
                    $("#kegiatan" + kegiatan_id_kegiatan).replaceWith( kegiatan );
                }
                $('#frmKegiatan').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });