  //search for add applicant to owner Info
  $('body').on('click', '#FindApplicantForAddOwnerInfo', function(){
    var value = $('#GetValueForAddOwnerInfo').val();
    $('#showApplicantData tr').remove();
    $.ajax({
      url: 'find-applicant-for-add-owner-info/'+value,
      method: 'get',
      success: function(result){

          var i = 1;
          $.each(result, function (key, value) {
              
              if(value.applicant_info_status == 0){
                var tr_str = "<tr role='row' class='odd'>"+
                  "<td align='left'>" + value.applicant_id + "</td>" +
                  "<td align='left'>" + value.applicant_name + "</td>" +
                  "<td align='left'>" + value.applicant_father_name + "</td>" +
                  "<td align='left'>" + value.applicant_mother_name + "</td>" +
                  "<td align='left'>" + value.nid + "</td>" +
                  "<td align='left'>" + value.phone_number + "</td>" +
                  "<td align='left'>" + value.dob + "</td>"+
                  "<td>"+
                  "<button href='#' id='add_owner_to_form' data-id="+value.id+" class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> Add </button>"+
                  "</td>"+
                  "</tr>"
                  $("#showApplicantData").append(tr_str);
              i++;
              }else{

              }
          });
              console.log('success');
          }
      });
  });

  $('body').on('click', '#add_owner_to_form', function(){
      var data = $(this).attr('data-id');
      $('#showApplicantData tr').remove();
      $.ajax({
        url: 'find-single-applicant/'+data,
        method: 'get',
        success: function(result){
                var var1 = $('#applicant_name_1_value').val();
                var var2 = $('#applicant_name_2_value').val();
                var var3 = $('#applicant_name_3_value').val();
                var var4 = $('#applicant_name_4_value').val();
                var var5 = $('#applicant_name_5_value').val();
                var var6 = $('#applicant_name_6_value').val();
                var var7 = $('#applicant_name_7_value').val();
                var var8 = $('#applicant_name_8_value').val();
                var var9 = $('#applicant_name_9_value').val();
                var var10 = $('#applicant_name_10_value').val();
                if(var1 == ''){
                    $('.d-none1').removeClass('d-none');
                    $('#applicant_name_1_input').val(result.id);
                    $('#applicant_name_1_value').val(result.applicant_name);
                }else if(var2 == ''){
                    $('.d-none2').removeClass('d-none');
                    $('#applicant_name_2_input').val(result.id);
                    $('#applicant_name_2_value').val(result.applicant_name);
                }else if(var3 == ''){
                    $('.d-none3').removeClass('d-none');
                    $('#applicant_name_3_input').val(result.id);
                    $('#applicant_name_3_value').val(result.applicant_name);
                }else if(var4 == '')
                {
                    $('.d-none4').removeClass('d-none');
                    $('#applicant_name_4_input').val(result.id);
                    $('#applicant_name_4_value').val(result.applicant_name);
                }else if(var5 == ''){
                    $('.d-none5').removeClass('d-none');
                    $('#applicant_name_5_input').val(result.id);
                    $('#applicant_name_5_value').val(result.applicant_name);
                }else if(var6 == ''){
                    $('.d-none6').removeClass('d-none');
                    $('#applicant_name_6_input').val(result.id);
                    $('#applicant_name_6_value').val(result.applicant_name);
                }else if(var7 == ''){
                    $('.d-none7').removeClass('d-none');
                    $('#applicant_name_7_input').val(result.id);
                    $('#applicant_name_7_value').val(result.applicant_name);
                }else if(var8 == ''){
                    $('.d-none8').removeClass('d-none');
                    $('#applicant_name_8_input').val(result.id);
                    $('#applicant_name_8_value').val(result.applicant_name);
                }else if(var9 == ''){
                    $('.d-none9').removeClass('d-none');
                    $('#applicant_name_9_input').val(result.id);
                    $('#applicant_name_9_value').val(result.applicant_name);
                }else if(var10 == ''){
                    $('.d-none10').removeClass('d-none');
                    $('#applicant_name_10_input').val(result.id);
                    $('#applicant_name_10_value').val(result.applicant_name);
                }
            }
        });
  });