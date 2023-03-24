const signupBtn = document.getElementById("signupClass");
const loginBtn = document.getElementById("loginClass");
const logoutBtn = document.getElementById("logoutClass");
const registerBtn = document.getElementById("registerClass");

registerBtn.addEventListener('click', () =>{
    console.log("hello");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../Back-end/Login_Signup/signup.php', true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                window.location = "index.php";
            }
        }
    };
    var formData = new FormData(document.getElementById("register-form"));
    xhr.send(formData);
});

signupBtn.addEventListener('click', () =>{
    console.log("hello");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../Back-end/Login_Signup/signup.php', true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                window.location = "index.php";
            }
        }
    };
    var formData = new FormData(document.getElementById("signup-form"));
    xhr.send(formData);
});

loginBtn.addEventListener('click', () =>{
    console.log("hello");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../Back-end/Login_Signup/login.php', true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                window.location = "index.php";
            }
        }
    };
    var formData = new FormData(document.getElementById("signup-form"));
    xhr.send(formData);
});

logoutBtn.addEventListener('click', () =>{
    console.log("hello");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../Back-end/Login_Signup/logout.php', true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                window.location = "index.php";
            }
        }
    };
    var formData = new FormData(document.getElementById("signup-form"));
    xhr.send(formData);
});

