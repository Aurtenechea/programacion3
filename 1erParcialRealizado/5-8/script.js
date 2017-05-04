window.onload = function(){

    console.log("loaded");
        var btnDelete = document.getElementsByClassName('eliminar');

    for (var i=0; i < btnDelete.length; i++) {
        btnDelete[i].onclick = function(){
            console.log(this);
            window.location.assign("eliminar.php"+"?numero="+this.value)
        };
    };

}
