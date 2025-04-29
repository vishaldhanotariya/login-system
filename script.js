// import {showLoginAndRegister} from "./templates/register_login"

const register = document.querySelector(".register");
const login = document.querySelector(".login")

const lg_btn = document.querySelector(".show_register_btn")
// console.log(lg_btn)
const rg_btn = document.querySelector(".show_login_btn")
  lg_btn.addEventListener("click",()=>{
    register.classList.remove("active");
    login.classList.add("active");
  })
  rg_btn.addEventListener("click",()=>{
    register.classList.add("active");
    login.classList.remove("active");
  })
console.log("Kartik")