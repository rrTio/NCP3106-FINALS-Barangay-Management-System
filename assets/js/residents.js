function registerResident() { 
    window.location.href = './registration.php';
}

function searchElement() { 
    var input, filter, tr, td, i, textValue, a;
    input = document.getElementById("searchResident");
    filter = input.value.toUpperCase();
    table = document.getElementById("residentsTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) { 
        td = tr[i].getElementsByTagName("td")[0];
        if (td) { 
            textValue = td.textContent || td.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1)
            { tr[i].style.display = ""; }
            else {tr[i].style.display = "none";}
        }
    }
}
