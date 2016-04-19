$(function() {
  $(".navbar-expand-toggle").click(function() {
    $(".app-container").toggleClass("expanded");
    return $(".navbar-expand-toggle").toggleClass("fa-rotate-90");
  });
  return $(".navbar-right-expand-toggle").click(function() {
    $(".navbar-right").toggleClass("expanded");
    return $(".navbar-right-expand-toggle").toggleClass("fa-rotate-90");
  });
});

$(function() {
  return $('select').select2();
});

$(function() {
  return $('.toggle-checkbox').bootstrapSwitch({
    size: "small"
  });
});

$(function() {
  return $('.match-height').matchHeight();
});

$(function() {
  return $('.datatable').DataTable({
    "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>'
  });
});

$(function() {
  return $(".side-menu .nav .dropdown").on('show.bs.collapse', function() {
    return $(".side-menu .nav .dropdown .collapse").collapse('hide');
  });
});



// Reordena os ítens do SLIDER
$(function() {

  var $sortable = $('#sortable');

    $sortable.sortable({
      placeholder: "portlet-placeholder",

        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
            // alert(list_sortable);

            // change order in the database using Ajax
            $.ajax({
                url: '/painel/sliders/order',
                type: 'POST',
                data: {list_order:list_sortable, _token: $sortable.data('token')},
                success: function(data) {
                   //console.log(data);

                  // var opts = {
                  // "closeButton": true,
                  // "debug": false,
                  // "positionClass": "toast-top-right",
                  // "onclick": null,
                  // "showDuration": "300",
                  // "hideDuration": "1000",
                  // "timeOut": "5000",
                  // "extendedTimeOut": "1000",
                  // "showEasing": "swing",
                  // "hideEasing": "linear",
                  // "showMethod": "fadeIn",
                  // "hideMethod": "fadeOut"
                  // };
                  // toastr.success("A ordenação foi atualizada com sucesso!", "Olá!", opts);                   

                }
            });
        }
    }); 
});