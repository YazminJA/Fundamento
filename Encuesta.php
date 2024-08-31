<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .question {
            margin-bottom: 20px;
        }
        .question label {
            display: block;
            margin-bottom: 10px;
        }
        .options {
            margin-top: 10px;
        }
    </style>
</head>
<body bgcolor="lightblue">
    <center>
    <h1>Encuesta</h1>
    </center>
    <form id="surveyForm">
        <div class="question">
            <label for="q1">1. ¿Qué es la coherencia?</label>
            <input type="text" id="q1" name="q1">
        </div>
        <div class="question">
            <label for="q2">2. ¿Qué es la concordancia?</label>
            <input type="text" id="q2" name="q2">
        </div>
        <div class="question">
            <label>3. Cuàntos tipos de concordancia existen?</label>
            <div class="options">
                <label><input type="radio" name="q3" value="1"> 1</label><br>
                <label><input type="radio" name="q3" value="2"> 2</label><br>
                <label><input type="radio" name="q3" value="4"> 4</label>
            </div>
        </div>
        <div class="question">
            <label>4. ¿Qué tipo de concordancia es coincidencia de género y número?</label>
            <div class="options">
                <label><input type="radio" name="q4" value="coherencia"> Nominal</label><br>
                <label><input type="radio" name="q4" value="concordancia"> Verbal</label>
            </div>
        </div>
        <div class="question">
            <label>5. “Este tipo de oraciones producen un mensaje claro y conciso que puede ser considerado como la unidad mínima de un texto”, ¿Qué técnica de redacción es?</label>
            <div class="options">
                <label><input type="radio" name="q5" value="coherencia"> Coherencia</label><br>
                <label><input type="radio" name="q5" value="concordancia"> Concordancia</label>
            </div>
        </div>
        <button type="button" onclick="submitForm()">Enviar</button>
    </form>

    <script>
        function submitForm() {
            const form = document.getElementById('surveyForm');
            const formData = new FormData(form);
            const responses = {};
            formData.forEach((value, key) => {
                responses[key] = value;
            });
            console.log('Respuestas:', responses);
            alert('Respuestas enviadas. Revisa la consola para ver los resultados.');
        }
    </script>
    <center>
    <form method="post" action="Index.php">
        <input type="submit" value="Menu" name="btnMenu" class="button">
                <style>
                    .button {
                        display: inline-block;
                        margin-top: 5px;
                        background-color: rgb(239, 6, 134);
                        padding: 10px;
                    }
                </style>
                </form>
                </center>
</body>
</html>