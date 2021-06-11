$(document).ready(function () {
$('#VisitorDt').DataTable();
$('.dataTables_length').addClass('bs-select');
});






function getServicesData(){
 axios.get('/getServicesData')
    .then(function(response){

        if(response.status==200){

            $('#mainDiv').removeClass('d-none');
            $('#loaderDiv').addClass('d-none');

            var  jsonData = response.data;
            $.each(jsonData, function(i,item){
                 $('<tr>').html(
                      " <td> <img class='table-img' src="+jsonData[i].service_img + "> </td>"+
                    " <td> " +jsonData[i].services_name +"  </td>"+
                    " <td> " +jsonData[i].service_des +" </td>"+
                    " <td> <a href=''><i class='fas fa-edit'></i></a>  </td>"+

                    " <td> <a data-mdb-toggle='modal' data-id="+jsonData[i].id +" data-mdb-target='#deleteModal' ><i class='fas fa-trash-alt'></i></a>   </td>"


               ).appendTo('#service_table');
                 });

        }else{


            $('#loaderDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');
        }

    }).catch(function(error){
        $('#loaderDiv').addClass('d-none');
            $('#wrongDiv').removeClass('d-none');

    });

};
