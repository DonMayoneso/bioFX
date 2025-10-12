<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Cuenta - BioFX</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #2eb198 0%, #9bc431 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            overflow: hidden;
            text-align: center;
        }
        
        .header {
            background-color: #616160;
            padding: 20px;
            border-bottom: 5px solid #9bc431;
        }
        
        .logo {
            max-width: 180px;
            height: auto;
            filter: brightness(0) invert(1);
        }
        
        .content {
            padding: 40px;
        }
        
        h1 {
            color: #616160;
            margin-bottom: 10px;
            font-size: 28px;
        }
        
        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 16px;
        }
        
        .message {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
            border-left: 4px solid #2eb198;
        }
        
        .success {
            color: #2eb198;
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .button {
            background: linear-gradient(to right, #2eb198, #9bc431);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 14px 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            width: 100%;
            text-decoration: none;
            display: inline-block;
        }
        
        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(43, 177, 152, 0.3);
        }
        
        .footer {
            margin-top: 20px;
            color: #616160;
            font-size: 12px;
            text-align: center;
        }
        
        @media (max-width: 600px) {
            .content {
                padding: 25px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .logo {
                max-width: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Logo de la empresa - reemplaza "logo.png" con la ruta correcta -->
            <img src="logo.png" alt="BioFX Logo" class="logo">
        </div>
        
        <div class="content">
            <h1>Verificación de Cuenta</h1>
            <p class="subtitle">Confirma tu dirección de correo electrónico</p>
            
            <div class="message">
                <?php
                // Capturar parámetros de la URL
                $token = isset($_GET['token']) ? $_GET['token'] : '';
                $email = isset($_GET['email']) ? $_GET['email'] : '';
                
                // Verificar que ambos parámetros estén presentes
                if (!empty($token) && !empty($email)) {
                    // Aquí iría la lógica real de verificación con el backend
                    // Por ahora, simulamos una verificación exitosa
                    
                    // Mostrar mensaje de éxito
                    echo '<div class="success">¡Tu cuenta ha sido verificada correctamente!</div>';
                    echo '<p>Tu dirección de correo ' . htmlspecialchars($email) . ' ha sido verificada exitosamente.</p>';
                    
                    // Registrar la verificación (en un caso real, esto se haría en la base de datos)
                    // file_put_contents('verifications.log', date('Y-m-d H:i:s') . " - " . $email . " - " . $token . "\n", FILE_APPEND);
                } else {
                    // Mostrar mensaje de error si faltan parámetros
                    echo '<div style="color: #e74c3c; font-weight: 600; margin-bottom: 10px;">Error en la verificación</div>';
                    echo '<p>El enlace de verificación no es válido o está incompleto.</p>';
                }
                ?>
            </div>
            
            <a href="https://biofx.com.ec" class="button">Ir a BioFX</a>
            
            <div class="footer">
                &copy; 2023 BioFX. Todos los derechos reservados.
            </div>
        </div>
    </div>
</body>
</html>