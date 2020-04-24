function selectAll() {
    let items = document.getElementsByClassName('delete');
    for (let i = 0; i < items.length; i++) {
        if (items[i].type == 'checkbox')
            items[i].checked = true;
    }
    document.getElementById('massCheck').style.display = 'none';
    document.getElementById('massUnCheck').style.display = 'inline-block';
}

function UnSelectAll() {
    let items = document.getElementsByClassName('delete');
    for (let i = 0; i < items.length; i++) {
        if (items[i].type == 'checkbox')
            items[i].checked = false;
    }
    document.getElementById('massCheck').style.display = 'inline-block';
    document.getElementById('massUnCheck').style.display = 'none';
}
