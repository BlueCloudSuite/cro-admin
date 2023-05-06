<script>
  $(document).ready(function() {
    $("#quick-view-table").DataTable({
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search"
      },
      responsive: true,
      columnDefs: [{
          responsivePriority: 1,
          targets: 0
        },
        {
          responsivePriority: 2,
          targets: -1
        }
      ]
    });
  });
</script>