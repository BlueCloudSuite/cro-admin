<?php include "./src/pages/components/widgets/script.php" ?>

<script>
  $(document).ready(function() {
    $("#client-table").DataTable({
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