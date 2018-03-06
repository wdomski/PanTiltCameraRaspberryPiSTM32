$(function () {
        $('#formSendPosition').bind('click', function (event) {

            event.preventDefault();// stops page refresh
            event.stopPropagation();// stops page refresh, some additional
            
            var dataString = $("#formHorizontal, #formVertical, #formHiddenPassword").serialize();
          $.ajax({
            type: 'POST',
            url: 'controller.php',
            data: dataString,
            success: function (data) {
                //alert(data);
            },
            error: function (data) {

            }
          });
          
          return false; // stops page refresh, just a precaution

        });
    
        $('#formSendSweep').bind('click', function (event) {

            event.preventDefault();// stops page refresh
            event.stopPropagation();// stops page refresh, some additional
            
            var dataString = $("#formMinMax, #formSpeed, #formAxis, #formHiddenPassword").serialize();
          $.ajax({
            type: 'POST',
            url: 'controller.php',
            data: dataString,
            success: function (data) {
                //alert(data);
            },
            error: function (data) {

            }
          });
          
          return false; // stops page refresh, just a precaution

        });
      });
