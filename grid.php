<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>tablas en html</title>
</head>
    <style type="text/css">
        table, th, td{
           border: 1px solid block;
           border-collapse: collapse;

        }
        th, td{
            padding: 10px;
        }
        th{text-align: left;}

    </style>
    <script type="text/javascript">
        //funcion para crear la tabla
        function fnCreaTabla(renglones,columnas)
        var tblBody = document.getElementByid("MiTabla").getElemenTagName("tbody")[0];
        var renglon = document.createElement("tr");
        for (var col=0; col < columnas; col++)
        {
            var celda = document.createElement("th");
            celda.innerHTML = "Cantidad";
            renglon.appendChild(celda);
            tblBody.appendChild(renglon);
            var id=0;
            //ciclo para agregar renglones
            for (var ren = 0; ren < renglones; ren++)
            {
            //crea un renglon
            var renglon =document.createElement("tr");
            //ciclo para agregar columnas
            for (var col = 0; col < columnas; col++)
            {
            //crea la celda
            var celda = document.createElement("td");
            //incrementamos el id
            id++;
            //variable para crear los input
            var oInput;
            //creo un Input
            oInput = document.createElement("input");
            //generando atributos del input;text
            oInput.type = "text";
            //atributo name
            oInput.name ="campo";
            //atributo id
            oInput.id = "campo_"+id;
            //atributo value
            oInput.value = "campo "+id;
            //agregamos el valor a la celda el input
            celda.appendChild(oInput);
            //celda.innerHTML = "valoe "+id;
            // meto la celda (que ya tiene el input dentro) dentro del remglon
            renglon.appendChild(celda);
            }
            //agregamos el renglon a l tabla
            tblBody.appendChild(renglon);
        }
    }
</script>
</head>
//ejecuta la creacion de la tabla al cargar el documento

    <body onload="fnCreaTabla(4,7)">
     <table id = "MiTabla" class "table table-striped">
     <tbody>

     </tbody>  

</html>