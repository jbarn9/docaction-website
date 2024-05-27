import { useReducer, useState } from "react";
import { useForm } from "react-hook-form";
import "./App.css";

function App() {
  // On créé un champ contrôlé
  const {
    handleSubmit,
    register,
    formState: { errors },
  } = useForm();
  const onSubmit = (data) =>{
    console.log(data);
  }
  // const reducer = (prev, next) =>({...prev, ...next})
  // const[data, updateData ] = useReducer(reducer, {
  //   username : "",
  //   email : "",
  //   password : ""
  // })
  return (
    <form onSubmit={handleSubmit(onSubmit)} action="../signin.php" method="POST">
      <h2 class="title">Se connecter</h2>
      <div class="input-field">
        <i class="fas fa-user"></i>
        {errors.username && <p>Le pseudo est requis</p>}
        {errors.password && <p>Un mot de passe est requis</p>}
        <input  onChange={(e) => updateData({ name: e.target.value})} type="text" placeholder="Nom d'utilisateur" {...register("username", {required: true})} />
      </div>
      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input  type="email" placeholder="Email" {...register("email", {required: true})}/>
      </div>
      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input  type="password" placeholder="Mot de passe" {...register("password", {required: true})}/>
      </div>
      
      <input type="submit" value="Se connecter" class="btn solid" />

      <p class="social-text">Ou se connecter avec les réseaux sociaux</p>
      <div class="social-media">
        <a href="#" class="social-icon">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </form>
  );
}

export default App;
