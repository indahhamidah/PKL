
    var url = "http://localhost:8080/blog/public/productajaxCRUD";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var lulusan_id_lulusan = $(this).val();
       
        $.get(url + '/' + lulusan_id_lulusan, function (data) {
            //success data
            console.log(data);
            $('#lulusan_id_lulusan').val(data.id_lulusan);
            $('#nama').val(data.nama);
            $('#nim').val(data.nim);
            $('#tahun_masuk').val(data.tahun_masuk);
            $('#tahun_lulus').val(data.tahun_lulus);
            $('#total_bulan').val(data.total_bulan);
            $('#total_tahun').val(data.total_tahun);
            $('#ipk').val(data.ipk);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmLulusans').trigger("reset");
        $('#myModal').modal('show');
    });
    //delete product and remove it from list
    $(document).on('click','.delete-lulusan',function(){
        var lulusan_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + lulusan_id_lulusan,
            success: function (data) {
                console.log(data);
                $("#lulusan" + lulusan_id_lulusan).remove();
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
            nama: $('#nama').val(),
            nim: $('#nim').val(),
            tahun_masuk: $('#tahun_masuk').val(),
            tahun_lulus: $('#tahun_lulus').val(),
            total_bulan: $('#total_bulan').val(),
            total_tahun: $('#total_tahun').val(),
            ipk: $('#ipk').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var lulusan_id_lulusan = $('#lulusan_id_lulusan').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + lulusan_id_lulusan;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var lulusan = '<tr id="lulusan' + data.id_lulusan + '"><td>' + data.id_lulusan + '</td><td>' + data.nama + '</td><td>' + data.nim + '</td><td>' + data.tahun_masuk + '</td><td>' + data.tahun_lulus + '</td><td>' data.total_bulan + '</td><td>' + data.total_tahun + '</td><td>' + data.ipk + '</td>';
                lulusan += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id_lulusan + '">Edit</button>';
                lulusan += ' <button class="btn btn-danger btn-delete delete-product" value="' + data.id_lulusan + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#lulusans-list').append(lulusan);
                }else{ //if user updated an existing record
                    $("#lulusan" + lulusan_id_lulusan).replaceWith( lulusan );
                }
                $('#frmLulusans').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });