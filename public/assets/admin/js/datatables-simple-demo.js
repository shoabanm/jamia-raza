window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple, {
            columns: [
                { select: 0, width: "80% !important" , fixedWidth: false,}, // Set width of the first column to 80%
                { select: 1, width: "20% !important", searchable: false, sortable: false,fixedWidth: false, }  // Set width of the second column to 20%, and disable searching and sorting
            ]
        });
    }
});
