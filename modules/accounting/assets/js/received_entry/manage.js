var fnServerParams;

(function($) {
		"use strict";

		fnServerParams = {
      "from_date": '[name="from_date"]',
      "to_date": '[name="to_date"]',
    };
    init_received_entry_table();
    $('input[name="from_date"]').on('change', function() {
      init_received_entry_table();
    });

    $('input[name="to_date"]').on('change', function() {
      init_received_entry_table();
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

function init_received_entry_table() {
  "use strict";

  if ($.fn.DataTable.isDataTable('.table-received-entry')) {
    $('.table-received-entry').DataTable().destroy();
  }
  initDataTable('.table-received-entry', admin_url + 'accounting/received_entry_table', [0], [0], fnServerParams, [1, 'desc']);
}


// received entry bulk actions action
function bulk_action(event) {
  "use strict";
    if (confirm_delete()) {
        var ids = [],
            data = {};
            data.mass_delete = $('#mass_delete').prop('checked');

        var rows = $($('#received_entry_bulk_actions').attr('data-table')).find('tbody tr');

        $.each(rows, function() {
            var checkbox = $($(this).find('td').eq(0)).find('input');
            if (checkbox.prop('checked') === true) {
                ids.push(checkbox.val());
            }
        });
        data.ids = ids;
        $(event).addClass('disabled');
        setTimeout(function() {
            $.post(admin_url + 'accounting/received_entry_bulk_action', data).done(function() {
                window.location.reload();
            });
        }, 200);
    }
}