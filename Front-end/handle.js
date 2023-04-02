const signupBtn = document.getElementById("signupClass");
const loginBtn = document.getElementById("loginClass");
const logoutBtn = document.getElementById("logoutClass");
const registerBtn = document.getElementById("registerClass");

registerBtn.addEventListener('click', () =>{
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

const signupform = document.querySelector(".signup-form");

signupBtn.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../Back-end/Login_Signup/signup.php', true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                window.location = "index.php";
            }
        }
    };
    var formData = new FormData(signupform);
    xhr.send(formData);
};

const loginForm = document.querySelector(".login-form");

loginBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../Back-end/Login_Signup/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              console.log(data);
              windows.location = "index.php";
          }
      }
    }
    let formData = new FormData(loginForm);
    xhr.send(formData);
}

logoutBtn.addEventListener('click', () =>{
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

