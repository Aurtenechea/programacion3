window.onload = function(){

    console.log("loaded");
        var btnDelete = document.getElementsByClassName('eliminar');

    for (var i=0; i < btnDelete.length; i++) {
            btnDelete[i].onclick = function(){
            console.log(this);
            window.location.assign("router.php"+"?action=delete&id="+this.value)
        };
    };

    var btnInsert = document.getElementById('insert');
    // console.log(btnInsert);
    btnInsert.onclick = function(){
        window.location.assign("router.php"+"?action=insert");
    };

}
