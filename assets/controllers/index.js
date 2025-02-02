import { startStimulusApp } from '@symfony/stimulus-bridge';

// Автоматически подгружает все контроллеры в папке controllers
const context = require.context('./', true, /\.js$/);
const application = startStimulusApp(context);

// Загружаем контроллеры
context.keys().forEach((key) => {
    if (key !== './index.js') {
        application.register(key.replace('./', '').replace('.js', ''), context(key).default);
    }
});