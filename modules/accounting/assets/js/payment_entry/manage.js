var fnServerParams;

(function($) {
		"use strict";

		fnServerParams = {
      "from_date": '[name="from_date"]',
      "to_date": '[name="to_date"]',
    };
    init_payment_entry_table();
    $('input[name="from_date"]').on('change', function() {
      init_payment_entry_table();
    });

    $('input[name="to_date"]').on('change', function() {
      init_payment_entry_table();
    });

	$("input[data-type='currency']").on({
      keyup: function() {
        formatCurrency($(this));
      },
      blur: function() {
        formatCurrency($(this), "blur");
      }
    });
})(jQuery);

function init_payment_entry_table() {
  "use strict";

  if ($.fn.DataTable.isDataTable('.table-payment-entry')) {
    $('.table-payment-entry').DataTable().destroy();
  }
  initDataTable('.table-payment-entry', admin_url + 'accounting/payment_entry_table', [0], [0], fnServerParams, [1, 'desc']);
}


// payment entry bulk actions action
function bulk_action(event) {
  "use strict";
    if (confirm_delete()) {
        var ids = [],
            data = {};
            data.mass_delete = $('#mass_delete').prop('checked');

        var rows = $($('#payment_entry_bulk_actions').attr('data-table')).find('tbody tr');

        $.each(rows, function() {
            var checkbox = $($(this).find('td').eq(0)).find('input');
            if (checkbox.prop('checked') === true) {
                ids.push(checkbox.val());
            }
        });
        data.ids = ids;
        $(event).addClass('disabled');
        setTimeout(function() {
            $.post(admin_url + 'accounting/payment_entry_bulk_action', data).done(function() {
                window.location.reload();
            });
        }, 200);
    }
}