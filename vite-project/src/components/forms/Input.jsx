import React from "react";

const Input = React.forwardRef(
  ({placeholder, type, name, ...rest }, ref) => {
    return <div class="input-field">
            <i class="fas fa-lock"></i>
            <input 
                name={name}
                type={type}
                placeholder={placeholder} 
                ref={ref}
                {...rest}
                />
        </div>
})

export default Input;