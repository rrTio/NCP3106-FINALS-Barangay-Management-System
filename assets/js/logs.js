function searchTransaction() { 
    var input, filter, tr, td, i, textValue, a;
    input = document.getElementById("searchLog");
    filter = input.value.toUpperCase();
    table = document.getElementById("logsTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) { 
        td = tr[i].getElementsByTagName("td")[0];
        if (td) { 
            textValue = td.textContent || td.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
        }
    }
}