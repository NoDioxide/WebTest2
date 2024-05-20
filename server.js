const express = require('express');
const { exec } = require('child_process');
const path = require('path');
const app = express();
const port = 3000;

app.post('/launch-exe', (req, res) => {
    const scriptPath = path.join(__dirname, 'launchApp.ps1');
    exec(`powershell.exe -ExecutionPolicy Bypass -File "${scriptPath}"`, (error, stdout, stderr) => {
        if (error) {
            console.error(`Ошибка: ${error.message}`);
            return res.status(500).send(`Ошибка: ${error.message}`);
        }
        if (stderr) {
            console.error(`stderr: ${stderr}`);
            return res.status(500).send(`stderr: ${stderr}`);
        }
        console.log(`stdout: ${stdout}`);
        res.send('Приложение запущено!');
    });
});

// Запуск сервера
app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
});
