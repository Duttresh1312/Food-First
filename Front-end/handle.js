const signupBtn = document.getElementById("signupClass");
const loginBtn = document.getElementById("loginClass");
const logoutBtn = document.getElementById("logoutClass");
const registerBtn = document.getElementById("registerClass");

registerBtn.addEventListener('click', () =>{
    console.log("register clicked");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../Back-end/Login_Signup/signup.php', true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.responseText;
                console.log(data);
            }
        }
    };
    var formData = new FormData(document.getElementById("register-form"));
    xhr.send(formData);
});

const signupform = document.getElementById("signup-form");

signupBtn.onclick = () =>{
    console.log("signup clicked");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../Back-end/Login_Signup/signup.php', true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.responseText;
                console.log(data);
            }
        }
    };
    var formData = new FormData(signupform);
    xhr.send(formData);
};

const loginForm = document.getElementById("login-form");

loginBtn.onclick = ()=>{
    console.log("login clicked");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../Back-end/Login_Signup/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              var data = xhr.responseText;
              console.log(data);
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

