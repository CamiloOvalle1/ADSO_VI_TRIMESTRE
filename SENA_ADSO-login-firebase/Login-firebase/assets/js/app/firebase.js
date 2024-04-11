// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-auth.js";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyC9STL_TOA9eDz5UWfbtzHPXgR2L6qXEsg",
  authDomain: "login-firebase-4c33f.firebaseapp.com",
  projectId: "login-firebase-4c33f",
  storageBucket: "login-firebase-4c33f.appspot.com",
  messagingSenderId: "507848319557",
  appId: "1:507848319557:web:8f9c2786c800a4f1beb92c",
  measurementId: "G-KFMGMZ00S4"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app);


