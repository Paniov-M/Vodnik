<?php

// Права доступа
const GOOGLE_SCOPES = [
    'https://www.googleapis.com/auth/userinfo.email', // доступ до адреси електронної пошти
    'https://www.googleapis.com/auth/userinfo.profile' // доступ до інформації профілю
];

// Посилання на аутентифікацію
const GOOGLE_AUTH_URI = 'https://accounts.google.com/o/oauth2/auth';

// Посилання на отримання токена
const GOOGLE_TOKEN_URI = 'https://accounts.google.com/o/oauth2/token';

// Посилання на отримання інформації про користувача
const GOOGLE_USER_INFO_URI = 'https://www.googleapis.com/oauth2/v1/userinfo';

// Client ID 
const GOOGLE_CLIENT_ID = '908582655922-2jjk9c6iphskirpm1muadn31thlaegfm.apps.googleusercontent.com';

// Client Secret  
const GOOGLE_CLIENT_SECRET = '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';

// Посилання з секції "Authorized redirect URIs" 
const GOOGLE_REDIRECT_URI = 'http://localhost:3000/index.html';

?>