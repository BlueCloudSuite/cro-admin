<script>
  $( document ).ready(function() {
    $("#credit-table").DataTable({
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search"
        },
        responsive: true,
        columnDefs: [
          { responsivePriority: 1, targets: 0 },
          { responsivePriority: 2, targets: -1 }
        ]
      });
  });
</script>