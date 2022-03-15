import React from 'react'
import Input from './Input'

const Form = () => {
  return (
    <div className='form'>
        <div class="form__container">
            <h2>Cadastro com React.JS</h2>
            <div class="form__containerBox">
                <div class="form__containerBoxInput">
                    <form>
                      <Input />
                    </form>
                </div>
            </div>
        </div>
    </div>
  )
}

export default Form