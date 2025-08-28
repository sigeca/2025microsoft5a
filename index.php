<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historias de usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            font-size: 1.2em;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }

        .card-body p {
            margin: 5px 0;
            line-height: 1.5;
        }
        
        .card-body .keyword {
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<body>

    <h1>Historias de usuario</h1>

    <div class="container">
        <div class="card" style="background-color: lightblue;" >
            <div class="card-header">Alex Franco</div>
            <div class="card-body">
                <p><span class="keyword">Como</span> estudiante xxxxx,</p>
                <p><span class="keyword">Quiero</span> poder ver mi historial de compras,</p>
                <p><span class="keyword">Para</span> llevar un registro de mis gastos.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">María García</div>
            <div class="card-body">
                <p><span class="keyword">Como</span> usuario registrado,</p>
                <p><span class="keyword">Quiero</span> restablecer mi contraseña,</p>
                <p><span class="keyword">Para</span> recuperar el acceso a mi cuenta.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Carlos López</div>
            <div class="card-body">
                <p><span class="keyword">Como</span> administrador,</p>
                <p><span class="keyword">Quiero</span> agregar nuevos productos al inventario,</p>
                <p><span class="keyword">Para</span> mantener la tienda actualizada.</p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">Ana Torres</div>
            <div class="card-body">
                <p><span class="keyword">Como</span> visitante del sitio,</p>
                <p><span class="keyword">Quiero</span> buscar productos por categoría,</p>
                <p><span class="keyword">Para</span> encontrar lo que necesito más rápido.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Pedro Gómez</div>
            <div class="card-body">
                <p><span class="keyword">Como</span> cliente,</p>
                <p><span class="keyword">Quiero</span> dejar una reseña en un producto,</p>
                <p><span class="keyword">Para</span> compartir mi opinión con otros usuarios.</p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">Laura Díaz</div>
            <div class="card-body">
                <p><span class="keyword">Como</span> desarrollador,</p>
                <p><span class="keyword">Quiero</span> una API de pagos segura,</p>
                <p><span class="keyword">Para</span> procesar transacciones de manera confiable.</p>
            </div>
        </div>

    </div>

</body>
</html>   
