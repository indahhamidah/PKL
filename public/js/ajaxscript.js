
    var url = "http://localhost:8080/blog/public/productajaxCRUD";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var jumlah_id = $(this).val();
       
        $.get(url + '/' + jumlah_id, function (data) {
            //success data
            console.log(data);
            $('#jumlah_id').val(data.id);
            $('#tipe').val(data.tipe);
            $('#jenis_mahasiswa').val(data.jenis_mahasiswa);
            $('#jumlah_mahasiswa').val(data.jumlah_mahasiswa);
            $('#tahun').val(data.tahun);
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
        var jumlah_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + jumlah_id,
            success: function (data) {
                console.log(data);
                $("#jumlah" + jumlah_id).remove();
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
            tipe: $('#tipe').val(),
            jenis_mahasiswa: $('#jenis_mahasiswa').val(),
            jumlah_mahasiswa: $('#jumlah_mahasiswa').val(),
            tahun: $('#tahun').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var jumlah_id = $('#jumlah_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + jumlah_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var product = '<tr id="jumlah' + data.id + '"><td>' + data.id + '</td><td>' + data.tipe + '</td><td>' + data.jenis_mahasiswa + '</td><td>' + data.jumlah_mahasiswa + '</td><td>' + data.tahun + '</td>';
                jumlah += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                jumlah += ' <button class="btn btn-danger btn-delete delete-product" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#jumlahs-list').append(jumlah);
                }else{ //if user updated an existing record
                    $("#jumlah" + jumlah_id).replaceWith( jumlah );
                }
                $('#frmJumlahs').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });