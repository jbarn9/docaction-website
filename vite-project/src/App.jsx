import { useMemo, useState, useRef } from "react";
import {useForm} from "react-hook-form";
import axios from "axios";

import "./App.css";
import Input from "./components/forms/Input";


function App() {
  const form = useRef(null)
  const {
    register,
    handleSubmit,
    formState: { errors }
  } = useForm();
 
  const onSubmit = () =>{
    const data = new FormData(form.current);
    console.log(data)
    return false;
  }
  
  // const security = useMemo(() => {
  //   return passwordSecurity(password)
  // }, [password])

  return (
    <form ref={form} onSubmit={handleSubmit(onSubmit)}>
      <h2 class="title">S'inscrire</h2>
      <Input type="email" name="email" placeholder="Email" {...register("email", { 
        required: true,
        pattern: {
          value: /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i
        }
        })} />
      {errors.email && <p>Email is required and must be valid</p>}
      <Input type="password" name="password" placeholder="Mot de passe" {...register("password", { required: true })} />
      {errors.password && <p>Password is required</p>}
      <input type="submit" value="S'inscrire" class="btn solid" />
    </form>
  );
}

function passwordSecurity(password){
  let startTime = performance.now();
  while(performance.now() - startTime < 200){

  }
  if(password.length < 3){
    return 'Faible'
  }else if(password.length < 6){
    return 'Moyen'
  }
  return 'Fort'
}
export default App;
