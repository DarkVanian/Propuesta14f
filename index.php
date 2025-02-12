<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quieres ser mi novia?</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffe6e6;
            overflow: hidden;
        }
        h1 {
            font-size: 2rem;
            transition: transform 0.5s ease-in-out;
        }
        .buttons {
            position: relative;
            margin-top: 20px;
        }
        button {
            font-size: 1.2rem;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        #yes {
            background-color: #ff4d4d;
            color: white;
            border-radius: 5px;
            transition: transform 0.3s ease, font-size 0.3s ease;
        }
        #no {
            background-color: #666;
            color: white;
            border-radius: 5px;
            position: absolute;
            transition: top 0.3s ease, left 0.3s ease;
        }
        .hearts {
            position: absolute;
            width: 100px;
            height: 100px;
            opacity: 0;
            animation: floatUp 2s linear forwards;
        }
        @keyframes floatUp {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(-200px); opacity: 0; }
        }
    </style>
</head>
<body>
    <h1 id="question">¿Quieres ser mi novia?</h1>
    <img id="heartImage" src="tu-imagen-aqui.jpg" alt="Corazones" style="width: 150px; height: auto; margin-bottom: 20px; display: none;">
    <div class="buttons">
        <button id="yes" onclick="accept()">Sí</button>
        <button id="no" onmouseover="moveNo()">No</button>
    </div>

    <script>
        let question = document.getElementById("question");
        let noButton = document.getElementById("no");
        let yesButton = document.getElementById("yes");
        let heartImage = document.getElementById("heartImage");
        let questions = [
            "¿Estás segura?", "¿De verdad quieres decir que no?", "¿No te arrepentirás?", 
            "Piénsalo bien...", "Tómate tu tiempo...", "¿No prefieres decir que sí?", 
            "Última oportunidad...", "Mira qué bonito botón rojo..."
        ];

        function moveNo() {
            let x = Math.random() * (window.innerWidth - 100);
            let y = Math.random() * (window.innerHeight - 100);
            noButton.style.left = `${x}px`;
            noButton.style.top = `${y}px`;
            
            let newQuestion = questions[Math.floor(Math.random() * questions.length)];
            question.innerText = newQuestion;
            
            let currentSize = parseFloat(window.getComputedStyle(yesButton).fontSize);
            yesButton.style.fontSize = `${currentSize + 5}px`;
        }

        function accept() {
            question.innerText = "¡Sabía que dirías que sí! 💖";
            yesButton.style.transform = "scale(1.5) rotate(360deg)";
            noButton.style.display = "none";
            heartImage.style.display = "block";
            
            for (let i = 0; i < 10; i++) {
                createHeart();
            }
        }

        function createHeart() {
            let heart = document.createElement("img");
            heart.src = "Cora.png";
            heart.classList.add("hearts");
            heart.style.left = `${Math.random() * window.innerWidth}px`;
            heart.style.top = `${window.innerHeight}px`;
            document.body.appendChild(heart);
            
            setTimeout(() => {
                heart.remove();
            }, 2000);
        }
    </script>
</body>
</html>
