const signupBtn = document.getElementById("signupClass");
const loginBtn = document.getElementById("loginClass");
const logoutBtn = document.getElementById("logoutClass");
const registerBtn = document.getElementById("registerClass");

if (registerBtn) {
    registerBtn.onclick = () => {
        console.log("register clicked");
        let xhr = new XMLHttpRequest();
        xhr.open("POST", '../Back-end/Login_Signup/signup.php', true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.responseText;
                    console.log(data);
                }
            }
        };
        var formData = new FormData(document.getElementById("register-form"));
        xhr.send(formData);
    };
}

const signupform = document.getElementById("signup-form");

if (signupBtn) {
    signupBtn.onclick = () => {
        console.log("signup clicked");
        let xhr = new XMLHttpRequest();
        xhr.open("POST", '../Back-end/Login_Signup/signup.php', true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.responseText;
                    console.log(data);
                }
            }
        };
        var formData = new FormData(signupform);
        xhr.send(formData);
    };
}

const loginForm = document.getElementById("login-form");
if (loginBtn) {
    loginBtn.onclick = () => {
        console.log("login clicked");
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../Back-end/Login_Signup/login.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = xhr.responseText;
                    console.log(data);
                }
            }
        }
        let formData = new FormData(loginForm);
        xhr.send(formData);
    }
}

if (logoutBtn) {
    logoutBtn.addEventListener('click', () => {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", '../Back-end/Login_Signup/logout.php', true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    window.location = "index.php";
                }
            }
        };
        var formData = new FormData(document.getElementById("signup-form"));
        xhr.send(formData);
    });
}

const selectMultiple = document.getElementById('select-multiple');
const addCategoryInput = document.getElementById('add-category');
const addCategoryBtn = document.getElementById('add-category-btn');

addCategoryBtn.onclick = () => {
  console.log("in button event");
  const newOptionValue = addCategoryInput.value.trim();
  if (newOptionValue != '' && !selectMultiple.options.namedItem(newOptionValue)) {
    // Create a new option element and append it to the select dropdown
    const newOption = document.createElement('option');
    newOption.value = newOptionValue;
    newOption.textContent = newOptionValue;
    selectMultiple.appendChild(newOption);

    // Reset the input field
    addCategoryInput.value = '';
  }
};